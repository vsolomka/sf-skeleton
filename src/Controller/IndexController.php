<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends AbstractController
{
    public function index(): JsonResponse
    {
        return $this->json([
            'title' => 'Welcome to Symfony',
            'today' => date('Y-m-d')
        ]);
    }

}