<?php

namespace Events;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\Common\Persistence\Event\PreUpdateEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;

class BookListener
{
    /** 
     * @PrePersist
     * 
     * 
     **/
    public function prePresistHandler(\Book $book, LifecycleEventArgs $args)
    {
        var_dump("Pre Persist Listener Book");
    }
}