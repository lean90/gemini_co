<?php
class cli_base_controller extends CI_Controller {
    /**
     * 
     * @var Doctrine
     */
    var $doctrine;
    function __construct(){
        parent::__construct();
        if($this->router->method == "index"){
            $this->print_f("");
            $this->print_f("-------------------------Welcome Gemini.Co Project command line tool--------------------------------");
            $this->print_f("");
            $this->show_all_cli_command();
        }
        
    }
    
    function show_all_cli_command($break = true){
        $this->print_f("index.php cli/generate pickup_numbers --> generate pickup collection");
        $this->print_f("index.php cli/generate demo_users --> generate Demo User");
        $this->print_f("");
        if($break){
            die;
        }
    }
    
    function print_f($txt, $autoBreakLine = true){
        echo $txt. ($autoBreakLine ? "\n" : "");
    }
}

?>