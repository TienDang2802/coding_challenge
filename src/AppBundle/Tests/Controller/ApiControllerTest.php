<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Response;

class ApiControllerTest extends WebTestCase
{
    protected $url_search = 'http://www.hotels.com/ho555246/the-reverie-residence-ho-chi-minh-city-vietnam';

    /**
     * Test post offer API
     */
    public function testPost() {//testPost
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/offers',['date' => '27/02/2016']);
        $this->assertTrue($client->getResponse()->isSuccessful(), 'Response was not success');

    }

    /**
     *  Test delete offer API
     */
    public function testDelete() {//testDelete
        $client = static::createClient();

        /** @var Offer $offer */
        $offer = $client->getContainer()
            ->get('doctrine')
            ->getManager()
            ->getRepository("AppBundle:Offer")
            ->findFirst();

        $crawler = $client->request('DELETE', '/api/offers/' . $offer->getId());

        $this->assertTrue($client->getResponse()->isSuccessful(), 'Response was not response');
    }
}
