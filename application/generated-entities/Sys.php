<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sys
 *
 * @ORM\Table(name="sys")
 * @ORM\Entity
 */
class Sys
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
     * @var string $sysKey
     *
     * @ORM\Column(name="sys_key", type="string", length=255, nullable=true)
     */
    private $sysKey;

    /**
     * @var string $sysValue
     *
     * @ORM\Column(name="sys_value", type="string", length=255, nullable=true)
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
}