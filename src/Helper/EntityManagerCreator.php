<?php

namespace Gabriel\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function createEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . "/.."],
            true
        );

        $conn = [
            'driver' => 'pdo_sqlite',//mysql
            //host
            //usuario
            //senha
            'path' => __DIR__ . '/../../db.sqlite',
        ];

        return EntityManager::create($conn, $config);
    }
}