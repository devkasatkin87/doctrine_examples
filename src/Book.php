<?php

/**
 * @Entity(repositoryClass="\Repositories\BookRepository")
 * @Table(name="books") 
 * @HasLifecycleCallbacks
 * @EntityListeners({"\Events\BookListener"})
 **/
class Book
{
    /** @Id 
     * @Column(type="integer" ) 
     * @GeneratedValue 
     **/
    protected $id;

    /** 
     * @Column(type="string", name="title_book", length=32, unique=true)
     **/
    protected $title;

    /** 
     * @ManyToOne(targetEntity="User", inversedBy="books") //обратная связь
     * JoinColumn(name="user_id", referencedColumnName="id") 
     **/
    protected $user;

    /** 
     *  @Column(type="datetime", nullable=true) 
    **/
    protected $createdAt;
    
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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /** 
     *  @PrePersist
    **/
    public function setCreatedAt()
    {
        $this->createdAt = new DateTime;
    }
}