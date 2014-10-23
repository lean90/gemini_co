<?php
use repository\RepositoryUser;
use services\cli\ServiceCliUser;
use services\cli\ServiceCliRoom;
use repository\RepositoryRoom;
require_once APPPATH.'controllers/cli/cli_base_controller.php';
class generate extends cli_base_controller {
    var $doctrine;
    function __construct(){
        parent::__construct();
    }
    
    function demo_users(){
        $cliUser = new ServiceCliUser();
        $cliUser->createDemoUser(new RepositoryUser($this->doctrine));
        $this->print_f("Created Account is complete ");
        $this->print_f("User account : user1/user1 user2/user2 ...  user10/user10");
        $this->print_f("Admin account: admin/admin");
        $this->print_f("SYS account: sys/sys");
    }
    
    function create_room(){
        $cliRoom = new ServiceCliRoom(new RepositoryRoom($this->doctrine));
        $cliRoom->
    }
    
    function create_setting(){
        
    }
}

?>