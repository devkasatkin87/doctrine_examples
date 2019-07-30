<?php

class Article
{
    protected $id;
    protected $name;
    protected $author;
    protected $text;
    protected $created_at;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function setCreatedAt(string $date)
    {
        $this->created_at = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

}