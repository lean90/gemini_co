<?php

namespace repository;

class RepositoryMasterPickupCollection extends RepositoryBase {
    
    
    /**
     * 
     * @param array $indexs
     */
    function insertMasterPickupCollection(array $indexs){
        $masterPickupCollection = new \MasterPickupCollection(); 
        for ($i = 1; $i < 21; $i ++){
            $functionName = "setIndex".$i;
            call_user_method($functionName,$masterPickupCollection,$indexs[$i-1]);
        }
        $this->db->em->persist($masterPickupCollection);
        $this->db->em->flush();
    }

}

?>