<?php

use Gabriel\Doctrine\Entity\Student;
use Gabriel\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
//quando utilizarmos apenas um objeto, podemos utilizar o entity manager e n um repositorio
$student = $entityManager->find(Student::class, $argv[1]); //quando o dado vem pelo find, ele ja esta sendo observado
// nao precisando utilizar o persist
$student->name = $argv[2];

$entityManager->flush();
