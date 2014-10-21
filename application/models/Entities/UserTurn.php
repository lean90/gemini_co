<?php
namespace models\Entities;

/**
 * UserTurn
 *
 * @Table(name="user_turn")
 * 
 */
class UserTurn extends EntityBase
{
    /**
     * @var string $id
     *
     * @Column(name="id", type="string", length=50, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $pickType
     *
     * @Column(name="pick_type", type="string", length=50, nullable=true)
     */
    private $pickType;

    /**
     * @var string $pickValue
     *
     * @Column(name="pick_value", type="string", length=50, nullable=true)
     */
    private $pickValue;

    /**
     * @var string $pickCollection
     *
     * @Column(name="pick_collection", type="string", length=255, nullable=true)
     */
    private $pickCollection;

    /**
     * @var datetime $createdAt
     *
     * @Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime $deletedAt
     *
     * @Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var boolean $deleted
     *
     * @Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var Turn
     *
     * @ManyToOne(targetEntity="Turn")
     * @JoinColumns({
     *   @JoinColumn(name="fk_turn", referencedColumnName="id")
     * })
     */
    private $fkTurn;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="User")
     * @JoinColumns({
     *   @JoinColumn(name="fk_user", referencedColumnName="id")
     * })
     */
    private $fkUser;


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
     * Set pickType
     *
     * @param string $pickType
     * @return UserTurn
     */
    public function setPickType($pickType)
    {
        $this->pickType = $pickType;
        return $this;
    }

    /**
     * Get pickType
     *
     * @return string 
     */
    public function getPickType()
    {
        return $this->pickType;
    }

    /**
     * Set pickValue
     *
     * @param string $pickValue
     * @return UserTurn
     */
    public function setPickValue($pickValue)
    {
        $this->pickValue = $pickValue;
        return $this;
    }

    /**
     * Get pickValue
     *
     * @return string 
     */
    public function getPickValue()
    {
        return $this->pickValue;
    }

    /**
     * Set pickCollection
     *
     * @param string $pickCollection
     * @return UserTurn
     */
    public function setPickCollection($pickCollection)
    {
        $this->pickCollection = $pickCollection;
        return $this;
    }

    /**
     * Get pickCollection
     *
     * @return string 
     */
    public function getPickCollection()
    {
        return $this->pickCollection;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return UserTurn
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
     * @return UserTurn
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
     * @return UserTurn
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
     * Set fkTurn
     *
     * @param Turn $fkTurn
     * @return UserTurn
     */
    public function setFkTurn(\Turn $fkTurn = null)
    {
        $this->fkTurn = $fkTurn;
        return $this;
    }

    /**
     * Get fkTurn
     *
     * @return Turn 
     */
    public function getFkTurn()
    {
        return $this->fkTurn;
    }

    /**
     * Set fkUser
     *
     * @param User $fkUser
     * @return UserTurn
     */
    public function setFkUser(\User $fkUser = null)
    {
        $this->fkUser = $fkUser;
        return $this;
    }

    /**
     * Get fkUser
     *
     * @return User 
     */
    public function getFkUser()
    {
        return $this->fkUser;
    }
    
    public function __construct(){
        parent::__construct();
    }
}