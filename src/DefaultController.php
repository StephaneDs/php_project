<?php

namespace App;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends abstractController
{
    #[Route('/')]
    public function home()
    {
        return new Response('<h1>Home Page</h1>');

    }
    #[Route('/categorie/{slug}')]
    public function categorie($slug) : Response
    {
        return $this->render( 'default/categorie.html.twig', ['slug'=>$slug]);
    }


}


