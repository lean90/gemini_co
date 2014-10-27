<?php
use models\ModelUser;
use repository\RepositoryUser;
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
require_once APPPATH.'controllers/ControllerBase.php';
/**
 * MY_Controller
 * Base Controller
 *
 * @author anlt
 */
class MY_Controller extends CI_Controller {
    protected $authorizationRequired = false;
    
    /**
     * User model
     * @var models\ModelUser
     */
    protected $user;
    
    /**
     * Current controller
     */
    protected $_controller;
    
    /**
     * 
     * @var CI_Session
     */
    public $session;
    
    /**
     * __construct
     *
     * @return string
     */
    public function __construct() {
        parent::__construct ();
        $this->_controller = get_class ( $this );
        $this->load->helper('cookie');
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    /**
     * _remap
     *
     * @return void
     */
    // see http://codeigniter.jp/user_guide_ja/general/controllers.html; _remap() wrapper method
    // see http://www.asahi-net.or.jp/~ax2s-kmtn/ref/status.html; HTTP response code
    public function _remap($method, $ar_arg = array()) {
        try {
            $this->config->load ( 'maintenance' );
            if ($this->config->item ( 'under_maintenance' )) throw new Gemini_MaintenanceException ( 'BẢO TRÌ HỆ THỐNG' );
            $this->init ();
            call_user_func_array ( array ($this,$method ), $ar_arg );
            
        } catch ( Gemini_ViewException $e ) {
            log_message ( 'infor', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->load->view ( 'errors/maintenance', array ('e' => $e ));
        } catch ( Gemini_RoutingException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->load->view ( 'errors/error_404', array ('e' => $e ));
        } catch ( Gemini_MaintenanceException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->load->view ( 'errors/maintenance', array ('e' => $e ));
        } catch ( Gemini_AuthenticationException $e ) {
            log_message ( 'info', $e );
            $login_url = $this->platformLoginUrlWithParams();
            redirect($login_url);
            exit ();
        } catch ( Gemini_BusinessLogicException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->load->view ( 'errors/common', array ('e' => $e ));
        } catch ( Gemini_ErrorException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->load->view ( 'errors/common', array ('e' => $e ));
        } catch ( Gemini_ModelMiscException $e ) {
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            $this->load->view ( 'errors/common', array ('e' => $e ) );
        } catch ( Exception $e ) {
            log_message ( 'error', $e );
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            $this->load->view ( 'errors/common', array ('e' => $e ));
        }
        return;
    }
    
    /**
     * init
     *
     * @return void
     */
    protected function init() {
        $this->load->helper ( 'form' );
        $authorizationRequired = $this->authorizationRequired;
        $this->setUserToMe();
        $this->setDatetimesToMe();
        if ($authorizationRequired) {
            if (!$this->user->isAuthen) {
                throw new Gemini_AuthenticationException ( "You haven't permission" );
            }
        }
    }
    
    /**
     * is_ajax_request
     * XHR
     *
     * @return boolean
     */
    static function isAjaxRequest() {
        if (isset ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) && strtolower ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest') {
            return true;
        }
        return false;
    }
    
    /**
     * platform_login_url_with_params
     *
     * @return boolean
     */
    public function platformLoginUrlWithParams() {
        $url = urlencode($this->myUrl());
        return "/login?page={$url}";
    }
    
    /**
     * my_url
     *
     * @return URL
     */
    static function myUrl() {
        if (isset ( $_SERVER ['HTTPS'] ) and $_SERVER ['HTTPS'] == 'on') {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }
        return $protocol . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
    }
    
    /**
     * @return void
     */
    protected function setUserToMe() {
        $userId = $this->session->userdata(constants::SESSION_USER_KEY);
        if($userId === false){
            $this->user = new ModelUser();
        }else{
            $repositoryUser = new RepositoryUser($this->doctrine);
            $this->user = new ModelUser();
            $this->user = $repositoryUser->getModelUserByUserId($userId);
            $this->user->isAuthen = true;
        }
    }
    
    /**
     * set_today_to_me
     * datetime
     *
     * @return void
     */
    const Gemini_date_difference = - 4;
    protected function setDatetimesToMe() {
        $this->now = time ();
        $Gemini_now = $this->now + (60 * 60 * self::Gemini_date_difference);
        
        $Gemini_today = $this->session->userdata ( 'Gemini_today' );
        $Gemini_today = ! empty ( $Gemini_today ) ? $Gemini_today : date ( 'Y-m-d', $Gemini_now );
        $this->Gemini_today = $Gemini_today;
        $this->Gemini_today_dow = date ( 'w', strtotime ( $Gemini_today ) );
        
        $this->today = date ( 'Y-m-d', $this->now );
        $this->today_dow = date ( 'w', $this->now );
        $this->tomorrow = date ( 'Y-m-d', $this->now + 86400 + 10 );
        $this->tomorrow_dow = ($this->today_dow % 6) + 1;
        $this->Gemini_tomorrow = date ( 'Y-m-d', strtotime ( $Gemini_today ) + 86400 + 10 );
        $this->Gemini_tomorrow_dow = date ( 'w', strtotime ( $Gemini_today ) + 86400 + 10 );
        
        return;
    }
}
