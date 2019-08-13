<?php

use Doctrine\Common\Collections\ArrayCollection;

/** 
* @Entity @Table(name="roles")
**/
class Role
{
    /** @Id 
     * @Column(type="integer" ) 
     * @GeneratedValue 
     **/
    protected $id;

    /** 
     * @Column(type="string")
     **/
    protected $name;

    /** 
     * @ManyToMany(targetEntity="User", mappedBy="roles")
    **/
    protected $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of users
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function addUser(User $user)
    {
        $user->addRole($this);
        $this->users[] = $user;

        return $this;
    }
}