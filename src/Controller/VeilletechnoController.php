<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VeilletechnoController extends AbstractController
{
    /**
     * @Route("/veilletechno", name="veilletechno")
     */
    public function index()
    {
        return $this->render('veilletechno/index.html.twig', [
            'controller_name' => 'VeilletechnoController',
        ]);
    }
}
