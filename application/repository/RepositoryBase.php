<?php

namespace repository;

class RepositoryBase {
    
    protected $db ;
    function __construct(\Doctrine $doctrine){
        $this->db = $doctrine;
    }
    
    /**
     * Lấy unique Id.
     */
    protected function getGUIID(){
        
    }
    
    /**
     * get current datetime base with mysql
     */
    public function getNow(){
        $query = $this->db->em->createQuery("SELECT CURRENT_DATE()");
        $datetime = $query->getResult();
        echo $datetime; die;
    }
    
    
}
?>