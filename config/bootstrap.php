<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\ClassLoader;

require_once "./vendor/autoload.php";
require_once "./vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php";

$classLoader = new ClassLoader('Repositories');
$classLoader->register();

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(["./src"], $isDevMode);

//$config = Setup::createXMLMetadataConfiguration(["config/xml"], $isDevMode);

//$config = Setup::createYAMLMetadataConfiguration(["config/yml"], $isDevMode);

$connection = [
    "dbname" => "dbdoctrine",
    "user" => "dbuser",
    "password" => "123456",
    "host" => "mysql",
    "driver" => "pdo_mysql"
];

$entityManager = EntityManager::create($connection, $config);
