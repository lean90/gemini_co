<?php

namespace services\cli;

use repository\RepositoryRoom;
use models\Entities\Room;

class ServiceCliRoom {
    
    /**
     * 
     * @param RepositoryRoom $repository
     */
    function __construct(RepositoryRoom $repository){
        
    }
    
    function insertDemoRoom(){
        $rooms = array();
        $room = new Room();
        $room->setCreatedAt(new \DateTime());
        $room->setRoomLocation("HA NOI, VIET NAM");
        $room->setRoomName("Phòng Hà Nội");
        $room->setFactorCacSoChan(2.3);
        $room->setFactorCacSoHoa(4.3);
        $room->setFactorCacSoLe(2.3);
        $room->setFactorChan(1.95);
        $room->setFactorDuoi(2.3);
        $room->setFactorHoa(4.3);
        $room->setFactorLe(2.3);
        $room->setFactorLienHoanTaiChan(3.7);
        $room->setFactorLienHoanTaiLe(3.7);
        $room->setFactorLienHoanXiuChan(3.7);
        $room->setFactorLienHoanXiuLe(3.7);
        $room->setFactorNhTho(9.2);
        $room->setFactorNhHoa(4.6);
        $room->setFactorNhKim(9.2);
        $room->setFactorNhMoc(4.6);
        $room->setFactorNhThuy(2.4);
        $room->setFactorTai(1.95);
        $room->setFactorTong810(108);
        $room->setFactorTren(1.95);
        $room->setFactorXiu(1.95);
        $room->setDuration(2 * 60);
        array_push($rooms, $room);
        
        $room = new Room();
        $room->setCreatedAt(new \DateTime());
        $room->setRoomLocation("HA NOI, VIET NAM");
        $room->setRoomName("Phòng Đà Nẵng");
        $room->setFactorCacSoChan(2.3);
        $room->setFactorCacSoHoa(4.3);
        $room->setFactorCacSoLe(2.3);
        $room->setFactorChan(1.95);
        $room->setFactorDuoi(2.3);
        $room->setFactorHoa(4.3);
        $room->setFactorLe(2.3);
        $room->setFactorLienHoanTaiChan(3.7);
        $room->setFactorLienHoanTaiLe(3.7);
        $room->setFactorLienHoanXiuChan(3.7);
        $room->setFactorLienHoanXiuLe(3.7);
        $room->setFactorNhTho(9.2);
        $room->setFactorNhHoa(4.6);
        $room->setFactorNhKim(9.2);
        $room->setFactorNhMoc(4.6);
        $room->setFactorNhThuy(2.4);
        $room->setFactorTai(1.95);
        $room->setFactorTong810(108);
        $room->setFactorTren(1.95);
        $room->setFactorXiu(1.95);
        $room->setDuration(2 * 60);
        array_push($rooms, $room);
        
        $room = new Room();
        $room->setCreatedAt(new \DateTime());
        $room->setRoomLocation("HA NOI, VIET NAM");
        $room->setRoomName("Phòng Sài Gòn");
        $room->setFactorCacSoChan(2.3);
        $room->setFactorCacSoHoa(4.3);
        $room->setFactorCacSoLe(2.3);
        $room->setFactorChan(1.95);
        $room->setFactorDuoi(2.3);
        $room->setFactorHoa(4.3);
        $room->setFactorLe(2.3);
        $room->setFactorLienHoanTaiChan(3.7);
        $room->setFactorLienHoanTaiLe(3.7);
        $room->setFactorLienHoanXiuChan(3.7);
        $room->setFactorLienHoanXiuLe(3.7);
        $room->setFactorNhTho(9.2);
        $room->setFactorNhHoa(4.6);
        $room->setFactorNhKim(9.2);
        $room->setFactorNhMoc(4.6);
        $room->setFactorNhThuy(2.4);
        $room->setFactorTai(1.95);
        $room->setFactorTong810(108);
        $room->setFactorTren(1.95);
        $room->setFactorXiu(1.95);
        $room->setDuration(2 * 60);
        array_push($rooms, $room);
        
        $repository->insertRooms($rooms);
        
    }
    
}

?>