<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetController extends AbstractController
{
    #[Route('/widget', name: 'app_widget')]
    public function index(): Response
    {
        $response = new Response();
        $expires = time() + 36000;
        $cookie = Cookie::create("zob", "zib",  $expires);
        //$cookie = $response->headers->setCookie(Cookie::create('foo', 'bar'));
        $response->headers->setCookie($cookie);

        $content = "<html><body><h1>Learning symfony cookie creation techniques?</h1></body></html>";
        $response->setContent($content);
        $response->headers->set('Content-Type', 'text/html');
        return $response;
        return $this->render('base.html.twig', [
            'controller_name' => 'WidgetController',
        ]);
    }
}
