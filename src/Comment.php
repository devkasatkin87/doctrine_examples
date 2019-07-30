<?php

class Comment
{
    protected $id;
    protected $user_id;
    protected $message;
    protected $created_at;

    public function setUserId(int $id)
    {
        $this->user_id = $id;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setCreatedAt(string $date)
    {
        $this->created_at = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

}