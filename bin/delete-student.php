<?php

use Gabriel\Doctrine\Entity\Student;
use Gabriel\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

//getPartialReference aumenta a performance, pois não será realizada a busca no banco de dados para depois remover
//apenas cria um objeto com o id que será utilizado no delete. Pode ser utilizado no update também.
//$student = $entityManager->getPartialReference(Student::class, $argv[1]);

$student = $entityManager->find(Student::class, $argv[1]); 
$entityManager->remove($student);
$entityManager->flush();
