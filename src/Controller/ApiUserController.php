<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/user/', name: 'user_')]
class ApiUserController extends AbstractController
{
    #[Route(path: "current", name: "current", methods: ["GET"])]
    public function getCurrent(): Response
    {
        $user = $this->getUser();

        return $this->json($user);
    }
}
