<?php

require "config/bootstrap.php";

$book = new Book();

$book->setTitle('New book'.rand(10, 100));

$entityManager->persist($book);
$entityManager->flush();