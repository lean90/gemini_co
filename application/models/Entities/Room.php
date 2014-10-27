<?php
namespace models\Entities;
/**
 * Room
 *
 * @Entity @Table(name="room")
 * 
 */
class Room extends EntityBase
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    public  $id;

    /**
     * @var text $roomName
     *
     * @Column(name="room_name", type="text", nullable=true)
     */
    public $roomName;

    /**
     * @var text $roomLocation
     *
     * @Column(name="room_location", type="text", nullable=true)
     */
    public $roomLocation;

    /**
     * @var integer $duration
     *
     * @Column(name="duration", type="integer", nullable=true)
     */
    public $duration;

    /**
     * @var decimal $factorTai
     *
     * @Column(name="factor_tai", type="decimal", nullable=true)
     */
    public $factorTai;

    /**
     * @var decimal $factorXiu
     *
     * @Column(name="factor_xiu", type="decimal", nullable=true)
     */
    public $factorXiu;

    /**
     * @var decimal $factorTong810
     *
     * @Column(name="factor_tong810", type="decimal", nullable=true)
     */
    public $factorTong810;

    /**
     * @var decimal $factorLe
     *
     * @Column(name="factor_le", type="decimal", nullable=true)
     */
    public $factorLe;

    /**
     * @var decimal $factorChan
     *
     * @Column(name="factor_chan", type="decimal", nullable=true)
     */
    public $factorChan;

    /**
     * @var decimal $factorCacSoChan
     *
     * @Column(name="factor_cac_so_chan", type="decimal", nullable=true)
     */
    public $factorCacSoChan;

    /**
     * @var decimal $factorCacSoLe
     *
     * @Column(name="factor_cac_so_le", type="decimal", nullable=true)
     */
    public $factorCacSoLe;

    /**
     * @var decimal $factorCacSoHoa
     *
     * @Column(name="factor_cac_so_hoa", type="decimal", nullable=true)
     */
    public $factorCacSoHoa;

    /**
     * @var decimal $factorLienHoanTaiLe
     *
     * @Column(name="factor_lien_hoan_tai_le", type="decimal", nullable=true)
     */
    public $factorLienHoanTaiLe;

    /**
     * @var decimal $factorLienHoanXiuLe
     *
     * @Column(name="factor_lien_hoan_xiu_le", type="decimal", nullable=true)
     */
    public $factorLienHoanXiuLe;

    /**
     * @var decimal $factorLienHoanTaiChan
     *
     * @Column(name="factor_lien_hoan_tai_chan", type="decimal", nullable=true)
     */
    public $factorLienHoanTaiChan;

    /**
     * @var decimal $factorLienHoanXiuChan
     *
     * @Column(name="factor_lien_hoan_xiu_chan", type="decimal", nullable=true)
     */
    public $factorLienHoanXiuChan;

    /**
     * @var decimal $factorTren
     *
     * @Column(name="factor_tren", type="decimal", nullable=true)
     */
    public $factorTren;

    /**
     * @var decimal $factorDuoi
     *
     * @Column(name="factor_duoi", type="decimal", nullable=true)
     */
    public $factorDuoi;

    /**
     * @var decimal $factorHoa
     *
     * @Column(name="factor_hoa", type="decimal", nullable=true)
     */
    public $factorHoa;

    /**
     * @var decimal $factorNhKim
     *
     * @Column(name="factor_nh_kim", type="decimal", nullable=true)
     */
    public $factorNhKim;

    /**
     * @var decimal $factorNhMoc
     *
     * @Column(name="factor_nh_moc", type="decimal", nullable=true)
     */
    public $factorNhMoc;

    /**
     * @var decimal $factorNhThuy
     *
     * @Column(name="factor_nh_thuy", type="decimal", nullable=true)
     */
    public $factorNhThuy;

    /**
     * @var decimal $factorNhHoa
     *
     * @Column(name="factor_nh_hoa", type="decimal", nullable=true)
     */
    public $factorNhHoa;

    /**
     * @var decimal $factorNgTho
     *
     * @Column(name="factor_ng_tho", type="decimal", nullable=true)
     */
    public $factorNhTho;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    public $createdAt;

    /**
     * @var datetime $deletedAt
     *
     * @Column(name="deleted_at", type="datetime", nullable=true)
     */
    public $deletedAt;

    /**
     * @var datetime $updatedAt
     *
     * @Column(name="updated_at", type="datetime", nullable=true)
     */
    public $updatedAt;

    /**
     * @var boolean $deleted
     *
     * @Column(name="deleted", type="boolean", nullable=true)
     */
    public $deleted;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set roomName
     *
     * @param text $roomName
     * @return Room
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
        return $this;
    }

    /**
     * Get roomName
     *
     * @return text 
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Set roomLocation
     *
     * @param text $roomLocation
     * @return Room
     */
    public function setRoomLocation($roomLocation)
    {
        $this->roomLocation = $roomLocation;
        return $this;
    }

    /**
     * Get roomLocation
     *
     * @return text 
     */
    public function getRoomLocation()
    {
        return $this->roomLocation;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Room
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set factorTai
     *
     * @param decimal $factorTai
     * @return Room
     */
    public function setFactorTai($factorTai)
    {
        $this->factorTai = $factorTai;
        return $this;
    }

    /**
     * Get factorTai
     *
     * @return decimal 
     */
    public function getFactorTai()
    {
        return $this->factorTai;
    }

    /**
     * Set factorXiu
     *
     * @param decimal $factorXiu
     * @return Room
     */
    public function setFactorXiu($factorXiu)
    {
        $this->factorXiu = $factorXiu;
        return $this;
    }

    /**
     * Get factorXiu
     *
     * @return decimal 
     */
    public function getFactorXiu()
    {
        return $this->factorXiu;
    }

    /**
     * Set factorTong810
     *
     * @param decimal $factorTong810
     * @return Room
     */
    public function setFactorTong810($factorTong810)
    {
        $this->factorTong810 = $factorTong810;
        return $this;
    }

    /**
     * Get factorTong810
     *
     * @return decimal 
     */
    public function getFactorTong810()
    {
        return $this->factorTong810;
    }

    /**
     * Set factorLe
     *
     * @param decimal $factorLe
     * @return Room
     */
    public function setFactorLe($factorLe)
    {
        $this->factorLe = $factorLe;
        return $this;
    }

    /**
     * Get factorLe
     *
     * @return decimal 
     */
    public function getFactorLe()
    {
        return $this->factorLe;
    }

    /**
     * Set factorChan
     *
     * @param decimal $factorChan
     * @return Room
     */
    public function setFactorChan($factorChan)
    {
        $this->factorChan = $factorChan;
        return $this;
    }

    /**
     * Get factorChan
     *
     * @return decimal 
     */
    public function getFactorChan()
    {
        return $this->factorChan;
    }

    /**
     * Set factorCacSoChan
     *
     * @param decimal $factorCacSoChan
     * @return Room
     */
    public function setFactorCacSoChan($factorCacSoChan)
    {
        $this->factorCacSoChan = $factorCacSoChan;
        return $this;
    }

    /**
     * Get factorCacSoChan
     *
     * @return decimal 
     */
    public function getFactorCacSoChan()
    {
        return $this->factorCacSoChan;
    }

    /**
     * Set factorCacSoLe
     *
     * @param decimal $factorCacSoLe
     * @return Room
     */
    public function setFactorCacSoLe($factorCacSoLe)
    {
        $this->factorCacSoLe = $factorCacSoLe;
        return $this;
    }

    /**
     * Get factorCacSoLe
     *
     * @return decimal 
     */
    public function getFactorCacSoLe()
    {
        return $this->factorCacSoLe;
    }

    /**
     * Set factorCacSoHoa
     *
     * @param decimal $factorCacSoHoa
     * @return Room
     */
    public function setFactorCacSoHoa($factorCacSoHoa)
    {
        $this->factorCacSoHoa = $factorCacSoHoa;
        return $this;
    }

    /**
     * Get factorCacSoHoa
     *
     * @return decimal 
     */
    public function getFactorCacSoHoa()
    {
        return $this->factorCacSoHoa;
    }

    /**
     * Set factorLienHoanTaiLe
     *
     * @param decimal $factorLienHoanTaiLe
     * @return Room
     */
    public function setFactorLienHoanTaiLe($factorLienHoanTaiLe)
    {
        $this->factorLienHoanTaiLe = $factorLienHoanTaiLe;
        return $this;
    }

    /**
     * Get factorLienHoanTaiLe
     *
     * @return decimal 
     */
    public function getFactorLienHoanTaiLe()
    {
        return $this->factorLienHoanTaiLe;
    }

    /**
     * Set factorLienHoanXiuLe
     *
     * @param decimal $factorLienHoanXiuLe
     * @return Room
     */
    public function setFactorLienHoanXiuLe($factorLienHoanXiuLe)
    {
        $this->factorLienHoanXiuLe = $factorLienHoanXiuLe;
        return $this;
    }

    /**
     * Get factorLienHoanXiuLe
     *
     * @return decimal 
     */
    public function getFactorLienHoanXiuLe()
    {
        return $this->factorLienHoanXiuLe;
    }

    /**
     * Set factorLienHoanTaiChan
     *
     * @param decimal $factorLienHoanTaiChan
     * @return Room
     */
    public function setFactorLienHoanTaiChan($factorLienHoanTaiChan)
    {
        $this->factorLienHoanTaiChan = $factorLienHoanTaiChan;
        return $this;
    }

    /**
     * Get factorLienHoanTaiChan
     *
     * @return decimal 
     */
    public function getFactorLienHoanTaiChan()
    {
        return $this->factorLienHoanTaiChan;
    }

    /**
     * Set factorLienHoanXiuChan
     *
     * @param decimal $factorLienHoanXiuChan
     * @return Room
     */
    public function setFactorLienHoanXiuChan($factorLienHoanXiuChan)
    {
        $this->factorLienHoanXiuChan = $factorLienHoanXiuChan;
        return $this;
    }

    /**
     * Get factorLienHoanXiuChan
     *
     * @return decimal 
     */
    public function getFactorLienHoanXiuChan()
    {
        return $this->factorLienHoanXiuChan;
    }

    /**
     * Set factorTren
     *
     * @param decimal $factorTren
     * @return Room
     */
    public function setFactorTren($factorTren)
    {
        $this->factorTren = $factorTren;
        return $this;
    }

    /**
     * Get factorTren
     *
     * @return decimal 
     */
    public function getFactorTren()
    {
        return $this->factorTren;
    }

    /**
     * Set factorDuoi
     *
     * @param decimal $factorDuoi
     * @return Room
     */
    public function setFactorDuoi($factorDuoi)
    {
        $this->factorDuoi = $factorDuoi;
        return $this;
    }

    /**
     * Get factorDuoi
     *
     * @return decimal 
     */
    public function getFactorDuoi()
    {
        return $this->factorDuoi;
    }

    /**
     * Set factorHoa
     *
     * @param decimal $factorHoa
     * @return Room
     */
    public function setFactorHoa($factorHoa)
    {
        $this->factorHoa = $factorHoa;
        return $this;
    }

    /**
     * Get factorHoa
     *
     * @return decimal 
     */
    public function getFactorHoa()
    {
        return $this->factorHoa;
    }

    /**
     * Set factorNhKim
     *
     * @param decimal $factorNhKim
     * @return Room
     */
    public function setFactorNhKim($factorNhKim)
    {
        $this->factorNhKim = $factorNhKim;
        return $this;
    }

    /**
     * Get factorNhKim
     *
     * @return decimal 
     */
    public function getFactorNhKim()
    {
        return $this->factorNhKim;
    }

    /**
     * Set factorNhMoc
     *
     * @param decimal $factorNhMoc
     * @return Room
     */
    public function setFactorNhMoc($factorNhMoc)
    {
        $this->factorNhMoc = $factorNhMoc;
        return $this;
    }

    /**
     * Get factorNhMoc
     *
     * @return decimal 
     */
    public function getFactorNhMoc()
    {
        return $this->factorNhMoc;
    }

    /**
     * Set factorNhThuy
     *
     * @param decimal $factorNhThuy
     * @return Room
     */
    public function setFactorNhThuy($factorNhThuy)
    {
        $this->factorNhThuy = $factorNhThuy;
        return $this;
    }

    /**
     * Get factorNhThuy
     *
     * @return decimal 
     */
    public function getFactorNhThuy()
    {
        return $this->factorNhThuy;
    }

    /**
     * Set factorNhHoa
     *
     * @param decimal $factorNhHoa
     * @return Room
     */
    public function setFactorNhHoa($factorNhHoa)
    {
        $this->factorNhHoa = $factorNhHoa;
        return $this;
    }

    /**
     * Get factorNhHoa
     *
     * @return decimal 
     */
    public function getFactorNhHoa()
    {
        return $this->factorNhHoa;
    }

    /**
     * Set factorNhTho
     *
     * @param decimal $factorNgTho
     * @return Room
     */
    public function setFactorNhTho($factorNhTho)
    {
        $this->factorNhHoa = $factorNhTho;
        return $this;
    }

    /**
     * Get factorNhTho
     *
     * @return decimal 
     */
    public function getFactorNhTho()
    {
        return $this->factorNhTho;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return Room
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set deletedAt
     *
     * @param datetime $deletedAt
     * @return Room
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return datetime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     * @return Room
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set delete
     *
     * @param boolean $delete
     * @return Room
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Get delete
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
    
    public function __construct(){
        parent::__construct();
    }
}