<?php 

require "config/bootstrap.php";

$qb = $entityManager->createQueryBuilder();

//$qb->select('b')->from('Book', 'b')->where('b.id > ?1')->orderBy('b.id', 'DESC')->setFirstResult(1)->setMaxResults(3)->setParameter(1, 5);
//$qb->select('b')->from('Book', 'b')->where('b.id = ?1')->setParameter(1, 5);
$qb
    ->add('select', 'b')
    ->add('from', 'Book b')
    ->add('where', 'b.id > :id')
    ->add('orderBy', 'b.id ASC')
    ->setParameter('id', 6);
$query = $qb->getQuery();

$result = $query->getResult();
//$result = $query->getArrayResult();
//$result = $query->getScalarResult();
//$result = $query->getSingleResult();



print_r($result);

//var_dump($query);
//var_dump($qb->getType());
//var_dump($qb->getDQL());

