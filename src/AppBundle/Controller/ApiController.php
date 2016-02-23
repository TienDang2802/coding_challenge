<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    public function postAction(Request $request) {//postAction
        $date = $request->get('date');

        return $this->get('offer_controller')->addAction($request, $date);
    }

    public function deleteAction(Request $request) {//deleteAction
        $offer_id = $request->get('id');
        return $this->get('offer_controller')->removeAction((int)$offer_id);
    }
}
