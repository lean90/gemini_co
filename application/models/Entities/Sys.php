<?php


namespace models\Entities;

/**
 * Sys
 *
 * @Table(name="sys")
 * @Entity
 */
class Sys extends EntityBase
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $sysKey
     *
     * @Column(name="sys_key", type="string", length=255, nullable=true)
     */
    private $sysKey;

    /**
     * @var string $sysValue
     *
     * @Column(name="sys_value", type="string", length=255, nullable=true)
     */
    private $sysValue;


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
     * Set sysKey
     *
     * @param string $sysKey
     * @return Sys
     */
    public function setSysKey($sysKey)
    {
        $this->sysKey = $sysKey;
        return $this;
    }

    /**
     * Get sysKey
     *
     * @return string 
     */
    public function getSysKey()
    {
        return $this->sysKey;
    }

    /**
     * Set sysValue
     *
     * @param string $sysValue
     * @return Sys
     */
    public function setSysValue($sysValue)
    {
        $this->sysValue = $sysValue;
        return $this;
    }

    /**
     * Get sysValue
     *
     * @return string 
     */
    public function getSysValue()
    {
        return $this->sysValue;
    }
    
    public function __construct(){
        parent::__construct();
    }
}