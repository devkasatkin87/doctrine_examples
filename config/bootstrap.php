<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(["./src"], $isDevMode);

$connection = [
    "dbname" => "dbdoctrine",
    "user" => "dbuser",
    "password" => "123456",
    "host" => "mysql",
    "driver" => "pdo_mysql"
];

$entityManager = EntityManager::create($connection, $config);
