<?php
namespace AppBundle\Manager;

use AppBundle\Entity\Offer;
use Symfony\Component\HttpFoundation\Request;

class OfferManager extends CoreManager
{

    /**
     * Save offer
     */
    public function save($date_check_in) {//save
        $offer = new Offer();
        $offer->setDate(\DateTime::createFromFormat('d/m/Y', $date_check_in));
        $this->em->persist($offer);
        $this->em->flush();
        return $offer;
    }

    public function remove($offer_id){//remove
        $offer = $this->findById($offer_id);
        $this->em->remove($offer);
        $this->em->flush();
    }

    /**
     * @param $id
     *
     * @return Offer|null|object
     */
    public function findById($id){//findById
        $qb = $this->em->getRepository("AppBundle:Offer")->findOneBy(['id' => $id]);
        return $qb;
    }
}