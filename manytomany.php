<?php

require "config/bootstrap.php";

$role = new Role();
// $role->setName('Moderator');
// $entityManager->persist($role);
// $entityManager->flush();

$user = $entityManager->find('\User', 2);
$role = $entityManager->find('\Role', 1);

// $user->addRole($role);
// $entityManager->persist($user);
// $entityManager->flush();

// foreach ($user->getRoles() as $role)
// {
//     echo $role->getName().PHP_EOL;
// }

// $role->addUser($user);
// $entityManager->persist($role);
// $entityManager->flush();

foreach ($role->getUsers() as $user)
{
    echo $user->getName().PHP_EOL;
}