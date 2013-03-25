<?php
// src/Acme/StoreBundle/Entity/ProductRepository.php
namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findByAllOrderedByName()
    {
        return $this->getEntityManager()
        ->createQuery('SELECT p FROM AcmeStoreBundle:Product p ORDER BY p.name ASC')
        ->getResult();
    }
    
    // src/Acme/StoreBundle/Entity/ProductRepository.php
    public function findOneByIdJoinedToCategory($id)
    {
        $query = $this->getEntityManager()
        ->createQuery('
            SELECT p, c FROM AcmeStoreBundle:Product p
            JOIN p.category c
            WHERE p.id = :id'
        )->setParameter('id', $id);
        
        echo $query->getSqlQuery();
        
//         try {
//             return $query->getSingleResult();
//         } catch (\Doctrine\ORM\NoResultException $e) {
//             return null;
//         }
    }
}// end class