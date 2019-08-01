<?php

require "config/bootstrap.php";

//$sql = "SELECT b.id, b.title FROM \Book b";//SELECT id, title_books FROM books;
$sql = "SELECT b FROM \Book b";//SELECT * FROM books;

$query = $entityManager->createQuery($sql);

$books = $query->getResult();

print_r($books);

