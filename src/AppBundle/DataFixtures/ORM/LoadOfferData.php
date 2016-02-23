<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Offer;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadOfferData extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $offer1 = new Offer();
        $offer1->setDate(new \DateTime());

        $offer2 = new Offer();
        $offer2->setDate(new \DateTime());

        $offer3 = new Offer();
        $offer3->setDate(new \DateTime());

        $manager->persist($offer1);
        $manager->persist($offer2);
        $manager->persist($offer3);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return 8;
    }

}