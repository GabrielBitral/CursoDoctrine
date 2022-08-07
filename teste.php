<?php

require_once 'vendor/autoload.php';

$entityManager = \Gabriel\Doctrine\Helper\EntityManagerCreator::createEntityManager();

var_dump($entityManager);
