<?php

namespace Project\Doctrine\Helper;

/**
 * Class base EntityManagerFactory
 *
 * @author Weslley <weslleybezerra95@gmail.com>
 */
class EntityManagerFactory {
    
    /**
     * Entity manager
     * 
     * @return object entity manager
     */
    public function getEntityManager( ): EntityManager {
        
        // Config in anotation
        $config = Setup::createAnnotationMetadataConfiguration();
        
        return EntityManager::create($connection, $config);
    }
}
