<?php


namespace models\Entities;

/**
 * Turn
 *
 * @Table(name="turn")
 * @Entity
 */
class Turn extends EntityBase
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var datetime $startedAt
     *
     * @Column(name="started_at", type="datetime", nullable=true)
     */
    public $startedAt;

    /**
     * @var datetime $completedAt
     *
     * @Column(name="completed_at", type="datetime", nullable=true)
     */
    public $completedAt;

    /**
     * @var string $pickNumberCollection
     *
     * @Column(name="pick_number_collection", type="string", length=255, nullable=true)
     */
    public $pickNumberCollection;

    /**
     * @var decimal $factorTai
     *
     * @Column(name="factor_tai", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorTai;

    /**
     * @var decimal $factorXiu
     *
     * @Column(name="factor_xiu", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorXiu;

    /**
     * @var decimal $factorTong810
     *
     * @Column(name="factor_tong810", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorTong810;

    /**
     * @var decimal $factorLe
     *
     * @Column(name="factor_le", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorLe;

    /**
     * @var decimal $factorChan
     *
     * @Column(name="factor_chan", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorChan;

    /**
     * @var decimal $factorCacSoChan
     *
     * @Column(name="factor_cac_so_chan", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorCacSoChan;

    /**
     * @var decimal $factorCacSoLe
     *
     * @Column(name="factor_cac_so_le", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorCacSoLe;

    /**
     * @var decimal $factorCacSoHoa
     *
     * @Column(name="factor_cac_so_hoa", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorCacSoHoa;

    /**
     * @var decimal $factorLienHoanTaiLe
     *
     * @Column(name="factor_lien_hoan_tai_le", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorLienHoanTaiLe;

    /**
     * @var decimal $factorLienHoanXiuLe
     *
     * @Column(name="factor_lien_hoan_xiu_le", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorLienHoanXiuLe;

    /**
     * @var decimal $factorLienHoanTaiChan
     *
     * @Column(name="factor_lien_hoan_tai_chan", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorLienHoanTaiChan;

    /**
     * @var decimal $factorLienHoanXiuChan
     *
     * @Column(name="factor_lien_hoan_xiu_chan", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorLienHoanXiuChan;

    /**
     * @var decimal $factorTren
     *
     * @Column(name="factor_tren", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorTren;

    /**
     * @var decimal $factorDuoi
     *
     * @Column(name="factor_duoi", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorDuoi;

    /**
     * @var decimal $factorHoa
     *
     * @Column(name="factor_hoa", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorHoa;

    /**
     * @var decimal $factorNhKim
     *
     * @Column(name="factor_nh_kim", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorNhKim;

    /**
     * @var decimal $factorNhMoc
     *
     * @Column(name="factor_nh_moc", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorNhMoc;

    /**
     * @var decimal $factorNhThuy
     *
     * @Column(name="factor_nh_thuy", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorNhThuy;

    /**
     * @var decimal $factorNhHoa
     *
     * @Column(name="factor_nh_hoa", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorNhHoa;

    /**
     * @var decimal $factorNgTho
     *
     * @Column(name="factor_nh_tho", type="decimal", nullable=true,precision=10,scale=2)
     */
    public $factorNhTho;

    
    /**
     * @var string $turnStatus
     *
     * @Column(name="turn_status", type="string", length=25, nullable=true)
     */
    public $turnStatus;
    
    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    public $createdAt;
    
    /**
     * @var datetime $updatedAt
     *
     * @Column(name="updated_at", type="datetime", nullable=true)
     */
    public $updatedAt;

    /**
     * @var datetime $deletedAt
     *
     * @Column(name="deleted_at", type="datetime", nullable=true)
     */
    public $deletedAt;

    /**
     * @var boolean $delete
     *
     * @Column(name="deleted", type="boolean", nullable=true)
     */
    public $deleted;

    /**
     * @var Room
     *
     * @ManyToOne(targetEntity="Room",fetch="LAZY")
     * @JoinColumns({
     *   @JoinColumn(name="fk_room", referencedColumnName="id")
     * })
     */
    protected $fkRoom;



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
     * Set startedAt
     *
     * @param datetime $startedAt
     * @return Turn
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
        return $this;
    }

    /**
     * Get startedAt
     *
     * @return datetime 
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * Set completedAt
     *
     * @param datetime $completedAt
     * @return Turn
     */
    public function setCompletedAt($completedAt)
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * Get completedAt
     *
     * @return datetime 
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * Set pickNumberCollection
     *
     * @param string $pickNumberCollection
     * @return Turn
     */
    public function setPickNumberCollection($pickNumberCollection)
    {
        $this->pickNumberCollection = $pickNumberCollection;
        return $this;
    }

    /**
     * Get pickNumberCollection
     *
     * @return string 
     */
    public function getPickNumberCollection()
    {
        return $this->pickNumberCollection;
    }

    /**
     * Set factorTai
     *
     * @param decimal $factorTai
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return the $updatedAt
     */
    public function getUpdatedAt( ){
        return $this->updatedAt;
    }

	/**
     * @param number $id
     */
    public function setId($id){
        $this->id = $id;
    }

	/**
     * @param \models\Entities\datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt){
        $this->updatedAt = $updatedAt;
    }

	/**
     * @param boolean $deleted
     */
    public function setDeleted($deleted){
        $this->deleted = $deleted;
    }

	/**
     * Set factorNhKim
     *
     * @param decimal $factorNhKim
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * @return Turn
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
     * Set factorNgTho
     *
     * @param decimal $factorNgTho
     * @return Turn
     */
    public function setFactorNhTho($factorNgTho)
    {
        $this->factorNgTho = $factorNgTho;
        return $this;
    }

    /**
     * Get factorNgTho
     *
     * @return decimal 
     */
    public function getFactorNhTho()
    {
        return $this->factorNgTho;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return Turn
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
     * @return Turn
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
     * Set delete
     *
     * @param boolean $delete
     * @return Turn
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

    /**
     * Set fkRoom
     *
     * @param Room $fkRoom
     * @return Turn
     */
    public function setFkRoom(Room $fkRoom = null)
    {
        $this->fkRoom = $fkRoom;
        return $this;
    }

    /**
     * Get fkRoom
     *
     * @return Room 
     */
    public function getFkRoom()
    {
        return $this->fkRoom;
    }
    
    public $timeLeftInSeconds = 0;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function countingTimeLeft(){
        if(isset($this->startedAt) && isset($this->completedAt)){
            $currentDate = new \DateTime();
            $this->timeLeftInSeconds = $this->completedAt->getTimestamp() - $currentDate->getTimestamp();
        }
        return $this->timeLeftInSeconds;
    }
    
    
}