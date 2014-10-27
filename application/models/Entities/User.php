<?php

namespace models\Entities;
/**
 * User
 *
 * @Entity @Table(name="user")
 * 
 */
class User extends EntityBase
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
     * @var string $username
     *
     * @Column(name="username", type="string", length=50, nullable=true)
     */
    public $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=50, nullable=true)
     */
    public $password;

    /**
     * @var string $userRole
     *
     * @Column(name="user_role", type="string", length=20, nullable=true)
     */
    public $userRole;

    /**
     * @var datetime $createdAt
     * 
     * @Column(name="created_at", type="datetime")
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userRole
     *
     * @param string $userRole
     * @return User
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * Get userRole
     *
     * @return string 
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Get deleted
     *
     * @return datetime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
    
    public function __construct(){
        parent::__construct();
    }
}