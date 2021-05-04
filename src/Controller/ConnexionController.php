<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('home/connexion/connexion.html.twig', [
            
        ]);
    }

        /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('home/connexion/inscription.html.twig', [
            
        ]);
    }
}