<?php
namespace repository;

use models\Entities\Turn;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\Common\Util\Debug;
use models\Entities\Room;
class RepositoryTurn extends RepositoryBase {
    
    CONST id = "id";
    CONST fk_room  = "fkRoom";
    CONST started_at = "started_at";
    CONST completed_at = "completedAt";
    CONST pick_number_collection  = "pick_number_collection";
    CONST factor_tai = "factor_tai";
    CONST factor_xiu = "factor_xiu";
    CONST factor_tong810 = "factor_tong810";
    CONST factor_le = "factor_le";
    CONST factor_chan  = "factor_chan";
    CONST factor_cac_so_chan = "factor_cac_so_chan";
    CONST factor_cac_so_le = "factor_cac_so_le";
    CONST factor_cac_so_hoa = "factor_cac_so_hoa";
    CONST factor_lien_hoan_tai_le = "factor_lien_hoan_tai_le";
    CONST factor_lien_hoan_xiu_le = "factor_lien_hoan_xiu_le";
    CONST factor_lien_hoan_tai_chan = "factor_lien_hoan_tai_chan";
    CONST factor_lien_hoan_xiu_chan = "factor_lien_hoan_xiu_chan";
    CONST factor_tren = "factor_tren";
    CONST factor_duoi = "factor_duoi";
    CONST factor_hoa  = "factor_hoa";
    CONST factor_nh_kim = "factor_nh_kim";
    CONST factor_nh_moc = "factor_nh_moc";
    CONST factor_nh_thuy = "factor_nh_thuy";
    CONST factor_nh_hoa = "factor_nh_hoa";
    CONST factor_ng_tho = "factor_ng_tho";
    CONST created_at = "created_at";
    CONST deleted_at = "deleted_at";
    CONST deleted = "deleted";
    CONST turn_status = "turnStatus";
    
    CONST TURN_STATUS_PLAYING = "PLAYING";
    CONST TURN_STATUS_MATCHING = "MATCHING";
    CONST TURN_STATUS_CLOSED = "CLOSED";
    
    /**
     * 
     * @var QueryBuilder
     */
    protected $builder;
    
    function __construct($doctrine){
        parent::__construct($doctrine);
        $this->builder = $this->db->em->createQueryBuilder();
    }

    /**
     * get playing turn.
     */
    function getPlayingTurn(){
       $turns = $this->db->em->getRepository ( get_class ( new Turn () ) )->findBy(array (
            RepositoryTurn::turn_status => RepositoryTurn::TURN_STATUS_PLAYING));
       foreach ($turns as $turn){
            $turn->countingTimeLeft();
       }
       return $turns;
    }
    
    /**
     * 
     * @param string $roomId
     */
    function getLastTurnByRoom($roomId){
        return $this->db->em->getRepository(get_class(new Turn()))
        ->findBy(array(
            RepositoryTurn::fk_room => $roomId
        ),array(RepositoryTurn::completed_at=>"DESC"),1,0);
    }
    
    /**
     * insert new turn from room
     * @param array $rooms
     */
    function insertedNewTurn($rooms){
        foreach ($rooms as $room){
            $lastTurn = $this->getLastTurnByRoom($room->getId());
            $completedAt =  new \DateTime();
            $completedAt->modify("+{$room->getDuration()} seconds");
            $turn = new Turn();
            $turn->setFkRoom($room);
            $turn->createdAt = new \DateTime();
            $turn->startedAt = new \DateTime();
            $turn->completedAt = $completedAt;
            $turn->maxValue = $room->maxValue;
            $turn->minValue = $room->minValue;
            $turn->turnNumber = count($lastTurn) == 0 ? 1 : $lastTurn[0]->turnNumber + 1 ;
            $turn->factorCacSoChan = $room->factorCacSoChan;
            $turn->factorCacSoHoa = $room->factorCacSoHoa;
            $turn->factorCacSoLe = $room->factorCacSoLe;
            $turn->factorChan = $room->factorChan;
            $turn->factorDuoi = $room->factorDuoi;
            $turn->factorHoa = $room->factorHoa;
            $turn->factorLe = $room->factorLe;
            $turn->factorLienHoanTaiChan = $room->factorLienHoanTaiChan;
            $turn->factorLienHoanTaiLe = $room->factorLienHoanTaiLe;
            $turn->factorLienHoanXiuChan = $room->factorLienHoanXiuChan;
            $turn->factorLienHoanXiuLe = $room->factorLienHoanXiuLe;
            $turn->factorNhTho = $room->factorNhTho;
            $turn->factorNhHoa = $room->factorNhHoa;
            $turn->factorNhKim = $room->factorNhKim;
            $turn->factorNhMoc = $room->factorNhMoc;
            $turn->factorNhThuy = $room->factorNhThuy;
            $turn->factorTai = $room->factorTai;
            $turn->factorTong810 = $room->factorTong810;
            $turn->factorTren = $room->factorTren;
            $turn->factorXiu = $room->factorXiu;
            $turn->turnStatus = RepositoryTurn::TURN_STATUS_PLAYING;
            $this->db->em->persist($turn);
        }
        $this->db->em->flush();
    }
}
?>