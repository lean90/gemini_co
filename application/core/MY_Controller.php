<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

require_once 'Gemini_exceptions.php';
require_once 'Gemini_masters.php';

/**
 * MY_Controller
 * Base Controller
 *
 * @author anlt
 */
class MY_Controller extends CI_Controller {
    static $not_authorized_error = array (
            'error' => true,
            'status_code' => 'not_authorized',
            'status_message' => 'LỖI XÁC MINH' 
    );
    /**
     * Ten controller hien tai
     */
    protected $_controller;
    
    /**
     * __construct
     *
     * @return string
     */
    public function __construct() {
        parent::__construct ();
        $this->_controller = get_class ( $this );
        $this->load->helper ( 'cookie' );
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
        $_xhr = $this->input->get ( '_xhr' ); // backdoor to simulate XHR.
        if ($_xhr) {
            $is_ajax_request = true;
        }
        try {
            $this->config->load ( 'mailler' );
            $this->config->load ( 'maintenance' );
            if ($this->config->item ( 'under_maintenance' ))
                throw new Gemini_MaintenanceException ( 'BẢO TRÌ HỆ THỐNG' );
            $this->init ();
            if (preg_match ( '/_xhr$/', $method ) && ! $is_ajax_request) {
                throw new Gemini_RoutingException ();
            }
            call_user_func_array ( array (
                    $this,
                    $method 
            ), $ar_arg );
        } catch ( Gemini_ViewException $e ) {
            log_message ( 'infor', $e );
            $this->output->set_status_header ( $e->status_code );
            if ($is_ajax_request) {
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->load->view ( 'errors/maintenance', array (
                        'e' => $e 
                ) );
            }
        } catch ( Gemini_RoutingException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            if ($is_ajax_request) {
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->load->view ( 'errors/error_404', array (
                        'e' => $e 
                ) );
            }
        } catch ( Gemini_MaintenanceException $e ) {
            log_message ( 'info', $e );
            $this->output->set_status_header ( $e->status_code );
            if ($is_ajax_request) {
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->load->view ( 'errors/maintenance', array (
                        'e' => $e 
                ) );
            }
        } catch ( Gemini_AuthenticationException $e ) {
            log_message ( 'info', $e );
            if ($is_ajax_request) {
                $this->output->set_status_header ( $e->status_code );
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $login_url = $this->platform_login_url_with_params ();
                redirect ( $login_url );
                exit ();
            }
        } catch ( Gemini_BusinessLogicException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            if ($is_ajax_request) {
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->load->view ( 'errors/common', array (
                        'e' => $e 
                ) );
            }
        } catch ( Gemini_ErrorException $e ) {
            log_message ( 'error', $e );
            $this->output->set_status_header ( $e->status_code );
            if ($is_ajax_request) {
                $this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->load->view ( 'errors/common', array (
                        'e' => $e 
                ) );
            }
        } catch ( Gemini_ModelMiscException $e ) {
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            if ($is_ajax_request) {
                $this->output->set_status_header ( $status_code )->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->output->set_status_header ( $status_code );
                $this->load->view ( 'errors/common', array (
                        'e' => $e 
                ) );
            }
        } catch ( Exception $e ) {
            log_message ( 'error', $e );
            $status_code = isset ( $e->status_code ) ? $e->status_code : '500';
            if ($is_ajax_request) {
                $this->output->set_status_header ( $status_code )->set_content_type ( 'application/json' )->set_output ( json_encode ( $e->to_hash () ) );
            } else {
                $this->output->set_status_header ( $status_code );
                $this->load->view ( 'errors/common', array (
                        'e' => $e 
                ) );
            }
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
        // TODO: Check quyền truy cập
        $this->authorization_required = $this->authorization_required;
        
        // Set setting hệ thống
        $this->set_obj_user_to_me ();
        $this->set_datetimes_to_me ();
        
        if ($this->authorization_required) {
            if (! $this->obj_user->is_authorized) {
                throw new Gemini_AuthenticationException ( 'Không có quyền truy cập' );
            }
        }
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
    
    /**
     * platform_login_url_with_params
     *
     * @return boolean
     */
    public function platform_login_url_with_params() {
        $queryString = $this->input->get ();
        $dst = uri_string ();
        if ($queryString) {
            foreach ( array_keys ( $queryString ) as $key ) {
                $dst .= '?';
            }
            $dst .= implode ( "&", $queryString );
        }
        return str_replace ( '{cp}', urlencode ( base_url ( $dst ) ), $this->config->item ( 'portal_login_url' ) );
    }
    
    /**
     * my_url
     *
     * @return URL
     */
    static function my_url() {
        if (isset ( $_SERVER ['HTTPS'] ) and $_SERVER ['HTTPS'] == 'on') {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }
        return $protocol . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
    }
    public function show($template_key) {
        $this->load->view ( strtolower ( get_class ( $this ) ) . '/' . $template_key, array (
                'obj_user' => $this->obj_user,
                'obj_setting' => $this->obj_setting 
        ) );
    }
    
    /**
     * set_obj_user_to_me
     * $this->obj_user
     *
     * @return void
     */
    protected function set_obj_user_to_me($userModel = null, $save = FALSE) {
    }
    
    /**
     * set_today_to_me
     * datetime
     *
     * @return void
     */
    const Gemini_date_difference = - 4;
    protected function set_datetimes_to_me() {
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
