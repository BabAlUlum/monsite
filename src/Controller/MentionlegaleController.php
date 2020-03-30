<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MentionlegaleController extends AbstractController
{
    /**
     * @Route("/mention_legale", name="mentionlegale")
     */
    public function index()
    {
        return $this->render('mentionlegale/index.html.twig', [
            'controller_name' => 'MentionlegaleController',
        ]);
    }
}
