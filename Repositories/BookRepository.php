<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function getAllMyBooks()
    {
        return $this->_em->createQuery('SELECT b FROM Book b WHERE b.id = 5')->getResult();
    }
}
