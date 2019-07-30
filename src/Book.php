<?php

/**
 * @Entity
 * @Table(name="books") 
 * **/
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



}