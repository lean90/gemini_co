<?php
namespace services;

use models\ModelUser;
class ServiceSecurity {
    CONST KEY_ENCRYT = "310711";
    /**
     * get token key form ModelUser
     * @param ModelUser $user
     * @return string
     */
    function getTokenKey(ModelUser $user){
        return base64_encode($user->entityUser->getId());
    }
    
    /**
     * get userId from tokenkey
     * @param String $tokenKey
     * @return string
     */
    function decryptTokenKey($tokenKey){
        return base64_decode($tokenKey);
    }
}
?>