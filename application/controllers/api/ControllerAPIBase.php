<?php
use models\ModelUser;
use services\SecurityService;
use repository\RepositoryUser;
use services\ServiceSecurity;
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ControllerAPIBase extends CI_Controller{
    
    /**
     * @var ModelUser
     */
    protected $user;
    
    /**
     * current controller name
     */
    protected $_controller;
    
    /**
     * __construct
     *
     * @return string
     */
    public function __construct() {
        parent::__construct ();
        $this->_controller = get_class ($this);
        $this->load->helper ('cookie');
    }
    
    /**
     * _remap
     *
     * @return void
     */
    // see http://codeigniter.jp/user_guide_ja/general/controllers.html; _remap() wrapper method
    // see http://www.asahi-net.or.jp/~ax2s-kmtn/ref/status.html; HTTP response code
    public function _remap($method, $ar_arg = array()) {
        $is_ajax_request = self::is_ajax_request ();
        try {
            $this->config->load ( 'maintenance' );
            if ($this->config->item ( 'under_maintenance' )) throw new Gemini_MaintenanceException ( 'Under Maintance' );
            $this->init();
//             if (!$is_ajax_request) {
//                 throw new Gemini_RoutingException ();
//             }
            call_user_func_array ( array ($this,$method), $ar_arg );
        } catch ( Gemini_ViewException $e ) {
            log_message ( 'infor', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_RoutingException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_MaintenanceException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_AuthenticationException $e ) {
            log_message ( 'info', $e );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_BusinessLogicException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_ErrorException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch ( Gemini_ModelMiscException $e ) {
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            $this->output->set_content_type ( 'application/json' )->set_output ( $this->exceptionToHash($e) );
        } catch (Exception $e) {
            log_message ( 'error', $e );
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            $this->output->set_content_type ( 'application/json' )->set_output ($this->exceptionToHash($e));
        }
        return;
    }
    static function exceptionToHash($e){
        if(method_exists ( $e , "to_hash" )){
            return json_encode($e->to_hash());
        }
        $class = get_class ( $e );
        $ha = array (
            'error' => true,
            'class' => $class,
            'message' => $e->getMessage()
        );
        return json_encode($ha);
    }
    
    function write($data){
        $ha = array (
            'error' => false,
            'data' => $data
        );
        $this->output->set_content_type ( 'application/json' )->set_output (json_encode($ha));
    }
    
    /**
     * is_ajax_request
     * XHR
     *
     * @return boolean
     */
    static function is_ajax_request() {
        if (isset ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) && strtolower ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest') {
            return true;
        }
        return false;
    }
    
    function init(){
      $tokenKey = $this->input->get("token");
      if(!isset($tokenKey)){
          throw new Gemini_AuthenticationException("TokenKey not exist");
          return;
      }
      $securityService = new ServiceSecurity();
      $userId = $securityService->decryptTokenKey($tokenKey);
      $userRepository = new RepositoryUser($this->doctrine);
      $this->user = $userRepository->getModelUserByUserId($userId);
      $id = $this->user->entityUser->getId();
      
      if(!isset($id)){
        throw new Gemini_AuthenticationException("TokenKey not correct");
      }
    }
}