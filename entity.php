<?php 

require "config/bootstrap.php";

// $book = $entityManager->find('\Book', 1);
// $book = $entityManager->getRepository('\Book')->find(1);
// $book = $entityManager->getRepository('\Book')->findBy(
//     ['id' => 1, 'title' => 'Test'], 
//     ["id" => "DESC"],
//     1,
//     0
// );

// $book = $entityManager->getRepository('\Book')->findOneBy(
//     ['id' => 1, 'title' => 'Test'], 
//     ["id" => "DESC"]
// );

$book = $entityManager->getRepository('\Book')->getAllMyBooks();

// $entityManager->remove($book);
// $entityManager->flush();

print_r($book);

// $entityManager->persist($book);
// $entityManager->flush();

