<?php
use repository\RepositoryRoom;
require_once APPPATH.'/controllers/api/ControllerAPIBase.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class room extends ControllerAPIBase{
    function getAllRoom(){
        $repositoryRoom = new RepositoryRoom($this->doctrine);
        $rooms = $repositoryRoom->getActiveRoom();
        $this->write($rooms);
    }
}