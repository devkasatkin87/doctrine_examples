<?php

/**
 * @Entity(repositoryClass="\Repositories\BookRepository")
 * @Table(name="books1") 
 **/
class Book1
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
     * @Column(type="string", length=22)
     **/
    protected $author;

    /** 
     * @Column(type="decimal", precision=4, scale=2, options={"unsigned":true, "default":00.10, "comment":"For Price"})
     * **/
    protected $price;

    /** 
     * @Column(type="smallint", nullable=true)
     * **/
    protected $pages;

    /** 
     * @Column(type="bigint", nullable=true)
     * **/
    protected $tirage;

    /** 
     * @Column(type="boolean", nullable=true)
     * **/
    protected $publish;

    /** 
     * @Column(type="date", nullable=true)
     * **/
    protected $created_at;

    /** 
     * @Column(type="datetime", nullable=true)
     * **/
    protected $updated_at;

    /** 
     * @Column(type="text", nullable=true)
     * **/
    protected $text;

    /** 
     * @Column(type="object", nullable=true)
     * **/
    protected $params;

    /** 
     * @Column(type="array", nullable=true)
     * **/
    protected $params_a;

    /** 
     * @Column(type="simple_array", nullable=true)
     * **/
    protected $params_s;

    /** 
     * @Column(type="json_array", nullable=true)
     * **/
    protected $params_j;

    /** 
     * @Column(type="blob", nullable=true)
     * **/
    protected $ftext;

    


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
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of pages
     */ 
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */ 
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of tirage
     */ 
    public function getTirage()
    {
        return $this->tirage;
    }

    /**
     * Set the value of tirage
     *
     * @return  self
     */ 
    public function setTirage($tirage)
    {
        $this->tirage = $tirage;

        return $this;
    }

    /**
     * Get the value of publish
     */ 
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set the value of publish
     *
     * @return  self
     */ 
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of params
     */ 
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set the value of params
     *
     * @return  self
     */ 
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get the value of params_a
     */ 
    public function getParams_a()
    {
        return $this->params_a;
    }

    /**
     * Set the value of params_a
     *
     * @return  self
     */ 
    public function setParams_a($params_a)
    {
        $this->params_a = $params_a;

        return $this;
    }

    /**
     * Get the value of params_s
     */ 
    public function getParams_s()
    {
        return $this->params_s;
    }

    /**
     * Set the value of params_s
     *
     * @return  self
     */ 
    public function setParams_s($params_s)
    {
        $this->params_s = $params_s;

        return $this;
    }

    /**
     * Get the value of params_j
     */ 
    public function getParams_j()
    {
        return $this->params_j;
    }

    /**
     * Set the value of params_j
     *
     * @return  self
     */ 
    public function setParams_j($params_j)
    {
        $this->params_j = $params_j;

        return $this;
    }

    /**
     * Get the value of ftext
     */ 
    public function getFtext()
    {
        return $this->ftext;
    }

    /**
     * Set the value of ftext
     *
     * @return  self
     */ 
    public function setFtext($ftext)
    {
        $this->ftext = $ftext;

        return $this;
    }
}