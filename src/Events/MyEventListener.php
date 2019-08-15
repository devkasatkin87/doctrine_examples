<?php

namespace Events;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class MyEventListener
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityManager = $args->getObjectManager();

        if ($entity instanceOf \Book){
            var_dump("Pre Persist!");
        }
    }
}