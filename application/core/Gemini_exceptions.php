<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
/**
 * @author ANLT <lethanhan.bkaptech@gmail.com>
 */
class Gemini_Exception extends Exception {
    public function __construct($message, $code = '9999') {
        parent::__construct ( $message, $code );
    }
    public function to_hash() {
        $class = get_class ( $this );
        $title = isset ( $this->title ) ? $this->title : '-';
        $ha = array (
                'error' => true,
                'class' => $class,
                'title' => $title,
                'message' => $this->getMessage () 
        );
        if (ENVIRONMENT == 'development') {
            $ha ['debug'] = array (
                    'code' => $this->getCode (),
                    'file' => $this->getFile (),
                    'line' => $this->getLine () 
            );
        }
        return $ha;
    }
}

// DB ERROR
class Gemini_DatabaseConnectionException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'DB CONECTION ERROR';
}
class Gemini_DatabaseQueryException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'DB QUERY ERRO';
}
class Gemini_MySqlConnectionException extends Gemini_DatabaseConnectionException {
    public $title = 'MySQL CONNECTION ERROR';
}
class Gemini_MySqlQueryException extends Gemini_DatabaseQueryException {
    public $title = 'MySQL QUERY ERROR';
}

// Routing
class Gemini_RoutingException extends Gemini_Exception {
    public $status_code = '404';
    public $title = 'PAGE NOT FOUND';
    public function __construct($message = 'KHÔNG TÌM THẤY TRANG') {
        parent::__construct ( $message );
    }
}

// BusinessLogicEROR
class Gemini_BusinessLogicException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'BusinessLogicError';
}

// ModelError
class Gemini_ModelMiscException extends Gemini_BusinessLogicException {
    public $status_code = '500';
    public $title = 'LỖI MODEL';
}
// Controller
class Gemini_ControllerMiscException extends Gemini_BusinessLogicException {
    public $status_code = '500';
    public $title = 'LỖI CONTROLLER';
}

// ACCESS CONTROL EXCEPTION
class Gemini_AccessControlException extends Gemini_Exception {
    public $status_code = '403';
    public $title = 'LỖI TRUY CẬP';
}
class Gemini_AuthenticationException extends Gemini_AccessControlException {
    public $title = 'LỖI XÁC MINH';
}

// LỖI TRUY CẬP ĐƯỜNG DẪN
class Gemini_RequestException extends Gemini_Exception {
    public $status_code = '400';
    public $title = 'LỖI TRUY CẬP ĐƯỜNG DẪN';
}

// MAINTAINCE
class Gemini_MaintenanceException extends Gemini_Exception {
    public $status_code = '200';
    public $title = 'BẢO TRÌ HỆ THỐNG';
}

// View exception
class Gemini_ViewException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'Lỗi view';
    public function __construct($message = 'Khởi tạo view sảy ra lỗi.') {
        parent::__construct ( $message );
    }
}

// Lỗi khi gửi mail
class Gemini_EmailException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'Lỗi EMAIL';
    public function __construct($message = 'KHông thực hiện được việc gửi mai.') {
        parent::__construct ( $message );
    }
}
class Gemini_IOException extends Gemini_Exception {
    public $status_code = '500';
    public $title = 'Lỗi view';
    public function __construct($message = 'Lỗi tương tác với files.') {
        parent::__construct ( $message );
    }
}
class Gemini_EmptyDataSetException extends Gemini_Exception {
    public $title = 'Lỗi không tìm thấy bản ghi bắt buộc';
    public function __construct($message = 'Không tìm thấy bản ghi bắt buộc có kết quả.') {
        parent::__construct ( $message );
    }
}




