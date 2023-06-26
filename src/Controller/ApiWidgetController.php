<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/widget', name: 'widget_')]
class ApiWidgetController extends AbstractController
{
    #[Route(path: "current", name: "current", methods: ["GET"])]
    public function getByUser(): JsonResponse
    {
        $user = $this->getUser()->getWidgets();


    }
}
