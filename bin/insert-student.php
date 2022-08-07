<?php

use Gabriel\Doctrine\Entity\Student;
use Gabriel\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]);

$entityManager->persist($student); //persist armazena para depois ser enviado para o banco
$entityManager->flush(); // Pega tudo o q o entity manager está monitorando e envia para o bd
//podemos fazer varias inserções sem se preocupar com transações no bd, até o flush n envia para o bd
