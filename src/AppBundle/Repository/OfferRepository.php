<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class OfferRepository extends EntityRepository
{

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilder() {//getQueryBuilder
        $em = $this->getEntityManager();
        $qb = $em->getRepository("AppBundle:Offer")
            ->createQueryBuilder('o');

        return $qb;
    }

    public function findFirst() {//findFirst
        $qb = $this->getQueryBuilder()
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();

        return $qb;
    }
    
    public function remove(){//delete
        
    }
}