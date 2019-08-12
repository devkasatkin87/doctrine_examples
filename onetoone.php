<?php

require "config/bootstrap.php";

// $info = new Info();

// $info->setDescription('Test Description');

// $entityManager->persist($info);
// $entityManager->flush();

// $user = new User();
// $user->setName("Petrov");
// $user->setEmail("petrov@i.ua");
// $user->setPassword("111");
// $user->setInfo($entityManager->find('\Info', 1));
// $entityManager->persist($user);
// $entityManager->flush();

//Через EntityManager
$user = $entityManager->find('\User', 2);
var_dump($user->getInfo()->getDescription());
$info = $entityManager->find('\Info', 1);
var_dump($info->getUser()->getName());
//Через DQL
$query = $entityManager->createQuery("SELECT u FROM User u JOIN u.info i WHERE u.name like 'Petrov'");
$users = $query->getResult();
foreach ($users as $user){
    echo $user->getName()." -- ".$user->getInfo()->getDescription();
    echo PHP_EOL;
}