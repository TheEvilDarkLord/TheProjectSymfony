<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvilController extends AbstractController
{
    #[Route('/evil', name: 'app_evil')]
    public function index(): Response
    {
        return $this->render('evil/index.html.twig', [
            'controller_name' => 'EvilController',
        ]);
    }
}
