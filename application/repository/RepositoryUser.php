<?php
namespace repository;
use models\ModelUser;
use models\Entities\User;
class RepositoryUser extends RepositoryBase{
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
    
    /**
     * Get user model
     * @param String $userId
     * @return ModelUser
     */
    public function getUserByUserId($userId){
        $modelUser = new ModelUser();
        $models = $this->db->em->getRepository(get_class(new User()))->findBy(array("id"=>$userId));
        if(count($models) > 0){
            $modelUser->entityUser = $models[0];
        }
        return $modelUser;
    }
    /**
     * Login
     * @param String $username
     * @param String $password
     * @return User
     */
    public function getUserByUsernameAndPassword($username, $password){
        $users = $this->db->em->getRepository(get_class(new User()))->findBy( array (
            "username" => $username,
            "password" => $password 
        ));
        return $users;
    }
}

?>