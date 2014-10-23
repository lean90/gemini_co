<?php
namespace services\cli;
use repository\RepositoryUser;
use models\Entities\User;
class ServiceCliUser {
   function __construct(){
   }
   
   function createDemoUser(RepositoryUser $repositoryUser){
       $users = array();
        for($i = 1 ; $i < 11; $i ++){
            $user = new User();
            $user->setUsername("user{$i}");
            $user->setPassword(md5("user{$i}"));
            $user->setUserRole(\constants::ACCOUNT_ROLE_USER);
            $user->setCreatedAt(new \DateTime());
            array_push($users, $user);
        }
        $user = new User();
        $user->setUsername("admin");
        $user->setPassword(md5("admin"));
        $user->setUserRole(\constants::ACCOUNT_ROLE_ADMIN);
        $user->setCreatedAt(new \DateTime());
        array_push($users, $user);
        
        $user = new User();
        $user->setUsername("sys");
        $user->setPassword(md5("sys"));
        $user->setUserRole(\constants::ACCOUNT_ROLE_SYS);
        $user->setCreatedAt(new \DateTime());
        array_push($users, $user);
        
        $repositoryUser->insertUsers($users);
   }
}

?>