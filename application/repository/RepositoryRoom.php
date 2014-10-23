<?php

namespace repository;

class RepositoryRoom  extends RepositoryBase{
    
    /**
     * Insert rooms
     * @param array $room
     */
    function insertRooms(array $rooms){
        foreach ($rooms as $room){
            $this->db->em->persist($room);
        }
        $this->db->em->flush();
    }
}

?>