<?php
namespace AppBundle\Manager;

use Doctrine\ORM\EntityManager;

class CoreManager{
    public $em;
    
    public function __construct(EntityManager $entityManager){//__construct
        $this->em = $entityManager;
    }

}