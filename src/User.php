<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
 **/
class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /** @Column(type="string") **/
    protected $email;

    /** @Column(type="string") **/
    protected $password;

    /** 
     * @OneToOne(targetEntity="Info", inversedBy="user") //обратная связь
     * //@JoinColumn(name="info_id", referencedColumnName="id") 
    **/
    protected $info;

    /** 
     * @OneToMany(targetEntity="Book", mappedBy="user")
     **/
    protected $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of info
     */ 
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @return  self
     */ 
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of books
     */ 
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Set the value of books
     *
     * @return  self
     */ 
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }
}