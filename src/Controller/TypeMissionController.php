<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeMissionController extends AbstractController
{
    #[Route('/type/mission', name: 'app_type_mission')]
    public function index(): Response
    {
        return $this->render('type_mission/index.html.twig', [
            'controller_name' => 'TypeMissionController',
        ]);
    }
}
