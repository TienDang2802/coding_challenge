<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RoomRepository extends EntityRepository{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilder(){//getQueryBuilder
        $em = $this->getEntityManager();
        $qb = $em->getRepository("AppBundle:Room")
            ->createQueryBuilder('r');

        return $qb;
    }

    public function findFirst(){//findFirst
        $qb = $this->getQueryBuilder()
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult();

        return $qb;
    }

    public function findOneWithName($name){//findWithName
        $qb = $this->getEntityManager()
                    ->getRepository("AppBundle:Room")
                    ->findOneBy(['name' => $name]);
        return $qb;
    }

    public function findAllWithNames($names=array()){//findAllWithNames
        if (!is_array($names)) {
            $names = isset($names) ? [$names] : [];
        }
        $qb = $this->getQueryBuilder()
                    ->where("r.name IN (:rooms)")
                    ->setParameter('rooms', array_values($names))
                    ->getQuery()
                    ->getResult();

        return $qb;
    }
    

}