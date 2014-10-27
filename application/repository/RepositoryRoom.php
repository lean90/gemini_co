<?php

namespace repository;

use models\Entities\Room;
class RepositoryRoom  extends RepositoryBase{
    CONST id = "id";
    CONST room_name = "room_name";
    CONST room_location = "room_location";
    CONST duration  = "duration";
    CONST factor_tai = "factor_tai";
    CONST factor_xiu = "factor_xiu";
    CONST factor_tong810 = "factor_tong810";
    CONST factor_le = "factor_le";
    CONST factor_chan = "factor_chan";
    CONST factor_cac_so_chan = "factor_cac_so_chan";
    CONST factor_cac_so_le = "factor_cac_so_le";
    CONST factor_cac_so_hoa = "factor_cac_so_hoa";
    CONST factor_lien_hoan_tai_le = "factor_lien_hoan_tai_le";
    CONST factor_lien_hoan_xiu_le = "factor_lien_hoan_xiu_le";
    CONST factor_lien_hoan_tai_chan = "factor_lien_hoan_tai_chan";
    CONST factor_lien_hoan_xiu_chan = "factor_lien_hoan_xiu_chan";
    CONST factor_tren = "factor_tren";
    CONST factor_duoi = "factor_duoi";
    CONST factor_hoa = "factor_hoa";
    CONST factor_nh_kim = "factor_nh_kim";
    CONST factor_nh_moc = "factor_nh_moc";
    CONST factor_nh_thuy = "factor_nh_thuy";
    CONST factor_nh_hoa = "factor_nh_hoa";
    CONST factor_ng_tho = "factor_ng_tho";
    CONST created_at = "created_at";
    CONST deleted_at = "deleted_at";
    CONST updated_at = "updated_at";
    CONST deleted = "deleted";
    
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
    
    /**
     * get All actived room
     */
    function getActiveRoom(){
        return $this->db->em->getRepository(get_class(new Room()))->findBy(
            array(RepositoryRoom::deleted => 0)
        );
    }
}

?>