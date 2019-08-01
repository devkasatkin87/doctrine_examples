<?php

require "config/bootstrap.php";

$book = new Book();

$book->setTitle("Test".rand(0,100));
$book->setAuthor("John");
$book->setPrice(15.56);
$book->setPages(150);
$book->setTirage(20000);
$book->setPublish(true);
$book->setCreated_at(new DateTime());
$book->setUpdated_at(new DateTime());
$book->setText("Text Text Text Text");

$obj = new stdClass();
$obj->x = "x";
$obj->y = "y";

$book->setParams($obj);
$book->setParams_a(['x'=>"x",'y'=>"y"]);
$book->setParams_s(['c'=>"C",'a'=>"A"]);
$book->setParams_j(['z'=>"ZZ",'v'=>"VVV"]);

$entityManager->persist($book);
$entityManager->flush();