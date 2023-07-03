<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZoneRegionController extends AbstractController
{
    #[Route('/zone/region', name: 'app_zone_region')]
    public function index(): Response
    {
        return $this->render('zone_region/index.html.twig', [
            'controller_name' => 'ZoneRegionController',
        ]);
    }
}
