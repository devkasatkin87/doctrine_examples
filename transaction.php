<?php

use Doctrine\ORM\Tools\Pagination\Paginator;

require "config/bootstrap.php";

//Variant1

//$entityManager->getConnection()->beginTransaction();

// try {
//     $user = new User();
//     $user->setEmail('aaa@i.ua');
//     $user->setName('Alfred');
//     $user->setPassword('111');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('aaa111@i.ua');
//     $user->setName('Alfred111');
//     $user->setPassword('1112');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('aaa222@i.ua');
//     $user->setName('Alfred222');
//     $user->setPassword('1113');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('aaa333@i.ua');
//     $user->setName('Alfred333');
//     $user->setPassword('1113');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $entityManager->getConnection()->commit();
// } 
// catch(Exception $e) {
//     print_r($e);
//     $entityManager->getConnection()->rollBack();
// }

//Variant2

// $entityManager->transactional(function($entityManager) {
//     $user = new User();
//     $user->setEmail('bbb@i.ua');
//     $user->setName('Petrovich');
//     $user->setPassword('111');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('bbb222@i.ua');
//     $user->setName('Petrovich111');
//     $user->setPassword('1112');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('bbb333@i.ua');
//     $user->setName('Petrovich222');
//     $user->setPassword('1113');

//     $entityManager->persist($user);
//     $entityManager->flush();

//     $user = new User();
//     $user->setEmail('bbb444@i.ua');
//     $user->setName('Petrovich333');
//     $user->setPassword('1113');

//     $entityManager->persist($user);
//     $entityManager->flush();
// });

//Pagination

$dql = "SELECT b FROM Book b";
$query = $entityManager->createQuery($dql)->setFirstResult(1)->setMaxResults(100);

$paginator = new Paginator($query);

var_dump(count($paginator));

foreach ($paginator as $book) {
    print_r($book->getTitle().PHP_EOL);
}