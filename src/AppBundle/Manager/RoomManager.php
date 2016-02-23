<?php
namespace AppBundle\Manager;

use AppBundle\Entity\Room;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class RoomManager extends CoreManager
{

    public function finder($url) {//finder
        $result = array();
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);

        $crawler = new Crawler($res->getBody()->getContents());

        $filter = $crawler->filter('div.room-info h3');

        foreach ($filter as $content) {
            $result[] = $content->textContent;
        }

        return $result;
    }

    public function add($data = array(), $offer) {//add
        if (!is_array($data)) {
            $data = isset($data) ? [$data] : [];
        }

        foreach ($data as $v) {
            $room = new Room();
            $room->setName($v);
            $room->setOffer($offer);
            $this->em->persist($room);
        }

        $this->em->flush();
    }

    public function getRoomsAddedByName($names = array()) {//getIdRoomsAddedByName
        if (!is_array($names)) {
            $names = isset($names) ? [$names] : [];
        }

        $results = array();
        $rooms = $this->em->getRepository("AppBundle:Room")->findAllWithNames($names);
        foreach ($rooms as $v) {
            $results[] = $v;
        }

        return $results;
    }

}