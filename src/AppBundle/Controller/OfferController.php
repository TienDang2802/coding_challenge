<?php

namespace AppBundle\Controller;

use AppBundle\Manager\OfferManager;
use AppBundle\Manager\RoomManager;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\AcceptHeader;

class OfferController extends Controller
{
    /**
     * @var RoomManager
     */
    protected $room_manager;

    /**
     * @var OfferManager
     */
    protected $offer_manager;

    /** @var  TwigEngine */
    protected $template;

    /** @var string */
    protected $url = 'http://www.hotels.com/hotel/details.html';

    public function __construct(
        TwigEngine $template,
        RoomManager $roomManager,
        OfferManager $offerManager
    ) {//__construct
        $this->room_manager = $roomManager;
        $this->offer_manager = $offerManager;
        $this->template = $template;
    }

    /**
     * @return JsonResponse
     */
    public function addAction(Request $request, $date = '') {//addAction
        if ($date == '') {
            $date = new \DateTime();
        } else {
            $date = \DateTime::createFromFormat('d/m/Y', $date);
        }

        $date_next = clone $date;
        $date_next->modify('+1 day');

        $data_post = array(
            'hotel-id'              => 555246,
            'q-room-0-adults'       => 2,
            'q-localised-check-in'  => $date->format('d/m/Y'),
            'q-localised-check-out' => $date_next->format('d/m/Y'),
            'q-room-0-children'     => 0
        );

        $rooms = $this->room_manager->finder($this->url . '?' . http_build_query($data_post));
        if (count($rooms) > 0) {
            $offer = $this->offer_manager->save($date->format('d/m/Y'));
            $this->room_manager->add($rooms, $offer);
        }

        $data_response = [
            'offer_date'  => $offer->getDate(),
            'offer_rooms' => $rooms
        ];

        $accept = AcceptHeader::fromString($request->headers->get('Accept'));

        if ($accept->has('application/vnd.api+json')) {
            $data_response['status'] = 200;

            return new JsonResponse($data_response, Response::HTTP_OK);
        } else {
            return $this->template->renderResponse("@App/Api/post.html.twig", $data_response);
        }

    }

    public function removeAction($offer_id) {//removeAction
        $offer = $this->offer_manager->findById($offer_id);
        $response = new Response();
        if ($offer == null) {
            $response->setStatusCode(Response::HTTP_NOT_FOUND);
        } else {
            $this->offer_manager->remove($offer_id);
            $response->setStatusCode(Response::HTTP_OK);
        }

        return $response->send();
    }
}
