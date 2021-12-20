<?php

namespace Project\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

/**
 * Class base EntityManagerFactory
 *
 * @author Weslley <weslleybezerra95@gmail.com>
 */
class EntityManagerFactory {
    
    /**
     * Entity manager
     * 
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager( ):EntityManagerInterface {
        
        $rootDir = __DIR__ . '/../..';
        
        // Config in anotation
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir .  '/src'], true);
        
        // Connection
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir .  '/var/data/banco.sqlite'
        ];
        
        return EntityManager::create($connection, $config);
    }
}
