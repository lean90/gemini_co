<?php
namespace repository;
class RepositoryUser extends RepositoryBase{
    
    public function insertDemoUser(){
        
    }
    
    /**
     * insert user
     * @param array $users
     */
    public function insertUsers(array $users){
        foreach ($users as $user){
            $this->db->em->persist($user);
        }
        return $this->db->em->flush();
    }
}

?>