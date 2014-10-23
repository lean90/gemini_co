<?php

namespace models;
use models\Entities\User;
class ModelUser extends ModelBase{
    /**
     * EntityUser
     * @var User
     */
    public $entityUser;
    
    /**
     * Is authen
     * @var boolean
     */
    public $isAuthen = false;
    
    /**
     * get user id
     * @return String userId
     */
    public function getUserId(){
        return isset($this->entityUse) ? $this->entityUser->getId() : $this->entityUser;
    }
    
    
    /**
     * @return the $entityUser
     */
    public function getEntityUser() {
        return $this->entityUser;
    }

	/**
     * @return the $isAuthen
     */
    public function getIsAuthen() {
        return $this->isAuthen;
    }

	/**
     * @param \models\Entities\User $entityUser
     */
    public function setEntityUser($entityUser) {
        $this->entityUser = $entityUser;
    }

	/**
     * @param boolean $isAuthen
     */
    public function setIsAuthen($isAuthen) {
        $this->isAuthen = $isAuthen;
    }

    /**
     * 
     * @param models\Entities\User $user
     */
	function __construct(Entities\User $user = null){
        $this->entityUser = $user == null ?  new User()  : $user;
        $this->isAuthen = false;
    }
}

?>