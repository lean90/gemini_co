<?php
use repository\RepositoryRoom;
use repository\RepositoryTurn;
require_once APPPATH.'/controllers/api/ControllerAPIBase.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class room extends ControllerAPIBase{
    
    /**
     * get all rom with current turn
     */
    function getAllRoom(){
        $repositoryRoom = new RepositoryRoom($this->doctrine);
        $rooms = $repositoryRoom->getActiveRoom();
        
        $repositoryTurn = new RepositoryTurn($this->doctrine);
        $turns = $repositoryTurn->getPlayingTurn();
        
        foreach ($rooms as &$room){
            foreach ($turns as &$turn){
                if($room->getId() == $turn->getFkRoom()->getId()){
                    $room->turn = $turn;
                }
            }
        }
        
        $roomNeedTurn = array();
        foreach ($rooms as &$room){
            if(!isset($room->turn)){
                array_push($roomNeedTurn, $room);
            }
        }
        
        if(count($roomNeedTurn) > 0){
            $repositoryTurn->insertedNewTurn($rooms);
            $turns = $repositoryTurn->getPlayingTurn();
            foreach ($rooms as &$room){
                foreach ($turns as &$turn){
                    if($room->getId() == $turn->getFkRoom()->getId()){
                        $room->turn = $turn;
                    }
                }
            }
        }
        $this->write($rooms);
    }
}