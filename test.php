<?php

use \Project\Doctrine\Helper\EntityManagerFactory;

require_once(__DIR__ . '/vendor/autoload.php');

// Connect on BD
$entityManagerFactory = new EntityManagerFactory();
$entityManager= $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());