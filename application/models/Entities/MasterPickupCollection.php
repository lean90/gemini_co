<?php


namespace models\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * MasterPickupCollection
 *
 * Table(name="master_pickup_collection")
 * Entity
 */
class MasterPickupCollection
{
    /**
     * @var string $id
     *
     * Column(name="id", type="string", length=50, nullable=false)
     * Id
     * GeneratedValue(strategy="GUID")
     */
    protected $id;

    /**
     * @var integer $index1
     *
     * Column(name="index_1", type="integer", nullable=true)
     */
    protected $index1;

    /**
     * @var integer $index2
     *
     * Column(name="index_2", type="integer", nullable=true)
     */
    protected $index2;

    /**
     * @var integer $index3
     *
     * Column(name="index_3", type="integer", nullable=true)
     */
    protected $index3;

    /**
     * @var integer $index4
     *
     * Column(name="index_4", type="integer", nullable=true)
     */
    protected $index4;

    /**
     * @var integer $index5
     *
     * Column(name="index_5", type="integer", nullable=true)
     */
    protected $index5;

    /**
     * @var integer $index6
     *
     * Column(name="index_6", type="integer", nullable=true)
     */
    protected $index6;

    /**
     * @var integer $index7
     *
     * Column(name="index_7", type="integer", nullable=true)
     */
    protected $index7;

    /**
     * @var integer $index8
     *
     * Column(name="index_8", type="integer", nullable=true)
     */
    protected $index8;

    /**
     * @var integer $index9
     *
     * Column(name="index_9", type="integer", nullable=true)
     */
    protected $index9;

    /**
     * @var integer $index10
     *
     * Column(name="index_10", type="integer", nullable=true)
     */
    protected $index10;

    /**
     * @var integer $index11
     *
     * Column(name="index_11", type="integer", nullable=true)
     */
    protected $index11;

    /**
     * @var integer $index12
     *
     * Column(name="index_12", type="integer", nullable=true)
     */
    protected $index12;

    /**
     * @var integer $index13
     *
     * Column(name="index_13", type="integer", nullable=true)
     */
    protected $index13;

    /**
     * @var integer $index14
     *
     * Column(name="index_14", type="integer", nullable=true)
     */
    protected $index14;

    /**
     * @var integer $index15
     *
     * Column(name="index_15", type="integer", nullable=true)
     */
    protected $index15;

    /**
     * @var integer $index16
     *
     * Column(name="index_16", type="integer", nullable=true)
     */
    protected $index16;

    /**
     * @var integer $index17
     *
     * Column(name="index_17", type="integer", nullable=true)
     */
    protected $index17;

    /**
     * @var integer $index18
     *
     * Column(name="index_18", type="integer", nullable=true)
     */
    protected $index18;

    /**
     * @var integer $index19
     *
     * Column(name="index_19", type="integer", nullable=true)
     */
    protected $index19;

    /**
     * @var integer $index20
     *
     * Column(name="index_20", type="integer", nullable=true)
     */
    protected $index20;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set index1
     *
     * @param integer $index1
     * @return MasterPickupCollection
     */
    public function setIndex1($index1)
    {
        $this->index1 = $index1;
        return $this;
    }

    /**
     * Get index1
     *
     * @return integer 
     */
    public function getIndex1()
    {
        return $this->index1;
    }

    /**
     * Set index2
     *
     * @param integer $index2
     * @return MasterPickupCollection
     */
    public function setIndex2($index2)
    {
        $this->index2 = $index2;
        return $this;
    }

    /**
     * Get index2
     *
     * @return integer 
     */
    public function getIndex2()
    {
        return $this->index2;
    }

    /**
     * Set index3
     *
     * @param integer $index3
     * @return MasterPickupCollection
     */
    public function setIndex3($index3)
    {
        $this->index3 = $index3;
        return $this;
    }

    /**
     * Get index3
     *
     * @return integer 
     */
    public function getIndex3()
    {
        return $this->index3;
    }

    /**
     * Set index4
     *
     * @param integer $index4
     * @return MasterPickupCollection
     */
    public function setIndex4($index4)
    {
        $this->index4 = $index4;
        return $this;
    }

    /**
     * Get index4
     *
     * @return integer 
     */
    public function getIndex4()
    {
        return $this->index4;
    }

    /**
     * Set index5
     *
     * @param integer $index5
     * @return MasterPickupCollection
     */
    public function setIndex5($index5)
    {
        $this->index5 = $index5;
        return $this;
    }

    /**
     * Get index5
     *
     * @return integer 
     */
    public function getIndex5()
    {
        return $this->index5;
    }

    /**
     * Set index6
     *
     * @param integer $index6
     * @return MasterPickupCollection
     */
    public function setIndex6($index6)
    {
        $this->index6 = $index6;
        return $this;
    }

    /**
     * Get index6
     *
     * @return integer 
     */
    public function getIndex6()
    {
        return $this->index6;
    }

    /**
     * Set index7
     *
     * @param integer $index7
     * @return MasterPickupCollection
     */
    public function setIndex7($index7)
    {
        $this->index7 = $index7;
        return $this;
    }

    /**
     * Get index7
     *
     * @return integer 
     */
    public function getIndex7()
    {
        return $this->index7;
    }

    /**
     * Set index8
     *
     * @param integer $index8
     * @return MasterPickupCollection
     */
    public function setIndex8($index8)
    {
        $this->index8 = $index8;
        return $this;
    }

    /**
     * Get index8
     *
     * @return integer 
     */
    public function getIndex8()
    {
        return $this->index8;
    }

    /**
     * Set index9
     *
     * @param integer $index9
     * @return MasterPickupCollection
     */
    public function setIndex9($index9)
    {
        $this->index9 = $index9;
        return $this;
    }

    /**
     * Get index9
     *
     * @return integer 
     */
    public function getIndex9()
    {
        return $this->index9;
    }

    /**
     * Set index10
     *
     * @param integer $index10
     * @return MasterPickupCollection
     */
    public function setIndex10($index10)
    {
        $this->index10 = $index10;
        return $this;
    }

    /**
     * Get index10
     *
     * @return integer 
     */
    public function getIndex10()
    {
        return $this->index10;
    }

    /**
     * Set index11
     *
     * @param integer $index11
     * @return MasterPickupCollection
     */
    public function setIndex11($index11)
    {
        $this->index11 = $index11;
        return $this;
    }

    /**
     * Get index11
     *
     * @return integer 
     */
    public function getIndex11()
    {
        return $this->index11;
    }

    /**
     * Set index12
     *
     * @param integer $index12
     * @return MasterPickupCollection
     */
    public function setIndex12($index12)
    {
        $this->index12 = $index12;
        return $this;
    }

    /**
     * Get index12
     *
     * @return integer 
     */
    public function getIndex12()
    {
        return $this->index12;
    }

    /**
     * Set index13
     *
     * @param integer $index13
     * @return MasterPickupCollection
     */
    public function setIndex13($index13)
    {
        $this->index13 = $index13;
        return $this;
    }

    /**
     * Get index13
     *
     * @return integer 
     */
    public function getIndex13()
    {
        return $this->index13;
    }

    /**
     * Set index14
     *
     * @param integer $index14
     * @return MasterPickupCollection
     */
    public function setIndex14($index14)
    {
        $this->index14 = $index14;
        return $this;
    }

    /**
     * Get index14
     *
     * @return integer 
     */
    public function getIndex14()
    {
        return $this->index14;
    }

    /**
     * Set index15
     *
     * @param integer $index15
     * @return MasterPickupCollection
     */
    public function setIndex15($index15)
    {
        $this->index15 = $index15;
        return $this;
    }

    /**
     * Get index15
     *
     * @return integer 
     */
    public function getIndex15()
    {
        return $this->index15;
    }

    /**
     * Set index16
     *
     * @param integer $index16
     * @return MasterPickupCollection
     */
    public function setIndex16($index16)
    {
        $this->index16 = $index16;
        return $this;
    }

    /**
     * Get index16
     *
     * @return integer 
     */
    public function getIndex16()
    {
        return $this->index16;
    }

    /**
     * Set index17
     *
     * @param integer $index17
     * @return MasterPickupCollection
     */
    public function setIndex17($index17)
    {
        $this->index17 = $index17;
        return $this;
    }

    /**
     * Get index17
     *
     * @return integer 
     */
    public function getIndex17()
    {
        return $this->index17;
    }

    /**
     * Set index18
     *
     * @param integer $index18
     * @return MasterPickupCollection
     */
    public function setIndex18($index18)
    {
        $this->index18 = $index18;
        return $this;
    }

    /**
     * Get index18
     *
     * @return integer 
     */
    public function getIndex18()
    {
        return $this->index18;
    }

    /**
     * Set index19
     *
     * @param integer $index19
     * @return MasterPickupCollection
     */
    public function setIndex19($index19)
    {
        $this->index19 = $index19;
        return $this;
    }

    /**
     * Get index19
     *
     * @return integer 
     */
    public function getIndex19()
    {
        return $this->index19;
    }

    /**
     * Set index20
     *
     * @param integer $index20
     * @return MasterPickupCollection
     */
    public function setIndex20($index20)
    {
        $this->index20 = $index20;
        return $this;
    }

    /**
     * Get index20
     *
     * @return integer 
     */
    public function getIndex20()
    {
        return $this->index20;
    }
    
    public function __construct(){
        parent::__construct();
    }
}