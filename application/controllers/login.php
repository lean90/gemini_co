<?php
use libraries\layout\LayoutFactory;
use repository\RepositoryUser;
use models\ModelUser;
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends ControllerBase {
    protected $authorizationRequired = FALSE;
    public function index()
    {
        LayoutFactory::getLayout(LayoutFactory::MAIN)->setTitles("Đăng nhập")->render("login");
    }
    
    public function in(){
        $targetPage = $this->input->get("page");
        $userId = $this->input->post("userid"); 
        $password = $this->input->post("pass");
        $password = md5($password);
        $repositoryUser = new RepositoryUser($this->doctrine);
        $users = $repositoryUser->getUserByUsernameAndPassword($userId, $password);
        if(count($users) == 0){
            $data = array(
                "error" => "Tên đăng nhập hoặc mật khẩu sai"
            );
            LayoutFactory::getLayout(LayoutFactory::MAIN)->setData($data)->setTitles("Đăng nhập")->render("login");
            return;
        }
        $this->user = new ModelUser($users[0]);
        $this->user->isAuthen = true;
        $this->session->set_userdata(constants::SESSION_USER_KEY,$this->user->entityUser->getId());
        
        redirect($targetPage);
    }
}