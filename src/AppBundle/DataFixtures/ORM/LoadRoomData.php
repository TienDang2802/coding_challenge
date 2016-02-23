<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Room;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadRoomData extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $room = new Room();
        $room->setName('Test room 01');
        $room->setOffers($this->getOfferFirst($manager));

        $room2 = new Room();
        $room2->setName('Test room 02');
        $room2->setOffers($this->getOfferFirst($manager));

        $room3 = new Room();
        $room3->setName('Test room 03');
        $room3->setOffers($this->getOfferFirst($manager));

        $manager->persist($room);
        $manager->persist($room2);
        $manager->persist($room3);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return 10;
    }
    
    public function getOfferFirst(ObjectManager $manager){//getOfferFirst
        return $manager->getRepository("AppBundle:Offer")->findFirst();
    }
}