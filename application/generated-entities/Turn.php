<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Turn
 *
 * @ORM\Table(name="turn")
 * @ORM\Entity
 */
class Turn
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var datetime $startedAt
     *
     * @ORM\Column(name="started_at", type="datetime", nullable=true)
     */
    private $startedAt;

    /**
     * @var datetime $completedAt
     *
     * @ORM\Column(name="completed_at", type="datetime", nullable=true)
     */
    private $completedAt;

    /**
     * @var string $pickNumberCollection
     *
     * @ORM\Column(name="pick_number_collection", type="string", length=255, nullable=true)
     */
    private $pickNumberCollection;

    /**
     * @var decimal $factorTai
     *
     * @ORM\Column(name="factor_tai", type="decimal", nullable=true)
     */
    private $factorTai;

    /**
     * @var decimal $factorXiu
     *
     * @ORM\Column(name="factor_xiu", type="decimal", nullable=true)
     */
    private $factorXiu;

    /**
     * @var decimal $factorTong810
     *
     * @ORM\Column(name="factor_tong810", type="decimal", nullable=true)
     */
    private $factorTong810;

    /**
     * @var decimal $factorLe
     *
     * @ORM\Column(name="factor_le", type="decimal", nullable=true)
     */
    private $factorLe;

    /**
     * @var decimal $factorChan
     *
     * @ORM\Column(name="factor_chan", type="decimal", nullable=true)
     */
    private $factorChan;

    /**
     * @var decimal $factorCacSoChan
     *
     * @ORM\Column(name="factor_cac_so_chan", type="decimal", nullable=true)
     */
    private $factorCacSoChan;

    /**
     * @var decimal $factorCacSoLe
     *
     * @ORM\Column(name="factor_cac_so_le", type="decimal", nullable=true)
     */
    private $factorCacSoLe;

    /**
     * @var decimal $factorCacSoHoa
     *
     * @ORM\Column(name="factor_cac_so_hoa", type="decimal", nullable=true)
     */
    private $factorCacSoHoa;

    /**
     * @var decimal $factorLienHoanTaiLe
     *
     * @ORM\Column(name="factor_lien_hoan_tai_le", type="decimal", nullable=true)
     */
    private $factorLienHoanTaiLe;

    /**
     * @var decimal $factorLienHoanXiuLe
     *
     * @ORM\Column(name="factor_lien_hoan_xiu_le", type="decimal", nullable=true)
     */
    private $factorLienHoanXiuLe;

    /**
     * @var decimal $factorLienHoanTaiChan
     *
     * @ORM\Column(name="factor_lien_hoan_tai_chan", type="decimal", nullable=true)
     */
    private $factorLienHoanTaiChan;

    /**
     * @var decimal $factorLienHoanXiuChan
     *
     * @ORM\Column(name="factor_lien_hoan_xiu_chan", type="decimal", nullable=true)
     */
    private $factorLienHoanXiuChan;

    /**
     * @var decimal $factorTren
     *
     * @ORM\Column(name="factor_tren", type="decimal", nullable=true)
     */
    private $factorTren;

    /**
     * @var decimal $factorDuoi
     *
     * @ORM\Column(name="factor_duoi", type="decimal", nullable=true)
     */
    private $factorDuoi;

    /**
     * @var decimal $factorHoa
     *
     * @ORM\Column(name="factor_hoa", type="decimal", nullable=true)
     */
    private $factorHoa;

    /**
     * @var decimal $factorNhKim
     *
     * @ORM\Column(name="factor_nh_kim", type="decimal", nullable=true)
     */
    private $factorNhKim;

    /**
     * @var decimal $factorNhMoc
     *
     * @ORM\Column(name="factor_nh_moc", type="decimal", nullable=true)
     */
    private $factorNhMoc;

    /**
     * @var decimal $factorNhThuy
     *
     * @ORM\Column(name="factor_nh_thuy", type="decimal", nullable=true)
     */
    private $factorNhThuy;

    /**
     * @var decimal $factorNhHoa
     *
     * @ORM\Column(name="factor_nh_hoa", type="decimal", nullable=true)
     */
    private $factorNhHoa;

    /**
     * @var decimal $factorNgTho
     *
     * @ORM\Column(name="factor_ng_tho", type="decimal", nullable=true)
     */
    private $factorNgTho;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime $deletedAt
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var boolean $deleted
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_room", referencedColumnName="id")
     * })
     */
    private $fkRoom;


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
    public function setFactorNgTho($factorNgTho)
    {
        $this->factorNgTho = $factorNgTho;
        return $this;
    }

    /**
     * Get factorNgTho
     *
     * @return decimal 
     */
    public function getFactorNgTho()
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return Turn
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get deleted
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
    public function setFkRoom(\Room $fkRoom = null)
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
}