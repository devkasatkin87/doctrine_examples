<?php
//use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

require "config/bootstrap.php";

$sql = "SELECT * FROM books WHERE id > :id";

//$rsm = new ResultSetMapping();
// $rsm->addEntityResult('Book', 'b');
// $rsm->addFieldResult('b', 'id', 'id');
// $rsm->addFieldResult('b', 'title_book', 'title');

$rsm = new ResultSetMappingBuilder($entityManager);
$rsm->addRootEntityFromClassMetadata('Book','b');

$query = $entityManager->createNativeQuery($sql, $rsm);
$query->setParameter('id', 1);

$books = $query->getResult();

print_r($books);