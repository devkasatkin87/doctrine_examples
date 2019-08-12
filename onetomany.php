<?php

require "config/bootstrap.php";

// $book = new Book();
// $book->setTitle('NEWSSSS TITLE BOOK');
// $book->setUser($entityManager->find('\User', 1));
// $entityManager->persist($book);
// $entityManager->flush();

$book = $entityManager->find('\Book',11);

print_r($book->getUser()->getName().PHP_EOL);

$user = $entityManager->find('\User', 1);
$books = $user->getBooks();

foreach ($books as $book){
    print_r($book->getTitle().PHP_EOL);
}

$qb = $entityManager->createQueryBuilder();

// $qb->select('b')->from('Book', 'b')->join('b.user','u')->orderBy('b.title');
// $query = $qb->getQuery();
// $books = $query->getResult();
// echo "<From QueryBuilder BOOKS::>".PHP_EOL;
// print_r($books[1]->getTitle().PHP_EOL);
// print_r($books[1]->getUser()->getName().PHP_EOL);

$qb->select('u')->from('User', 'u')->join('u.books','b')->orderBy('b.title');
$query1 = $qb->getQuery();
$user = $query1->getResult();
echo "<From QueryBuilder USER::>".PHP_EOL;
print_r($user[1]->getName().PHP_EOL);
foreach ($user[1]->getBooks() as $book){
    echo $book->getTitle().PHP_EOL;
}