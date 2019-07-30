<?php

require "config/bootstrap.php";

$user = new User();

$user->setName('Sergey');
$user->setEmail('kasatkin87@gmail.com');
$user->setPassword(md5('123456'));

$entityManager->persist($user);
$entityManager->flush();


