<?php

use Gabriel\Doctrine\Entity\Student;
use Gabriel\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id\nNome: $student->name\n\n"; 
}

/** @var Student $student */
$student = $studentRepository->findOneBy(['name' =>'Aluno teste']); //retorna como objeto
//$student = $studentRepository->findBy(['name' =>'Aluno teste']); retorna como array
//$student = $studentRepository->find(2);
//var_dump($student);
//echo $student->name;
echo $studentRepository->count([]) . PHP_EOL;

/* 
    FUNCIONAMENTO DO FINDBY - ORDER BY, lIMIT, TOP
    public function findBy(
    array $criteria,
    ?array $orderBy = null,
    ?int $limit = null,
    ?int $offset = null a partir de qual item trazer os resultados


    buscar apenas 2 entidades, ordenadas pelo campo nome de forma crescente, começando a partir do 3 resultado
    $alunoRepository->findBy([], ['nome' => 'ASC'], 2, 3);
) */