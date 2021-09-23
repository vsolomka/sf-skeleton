<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class RandomNumberController extends AbstractController
{
    public function getRandom(): JsonResponse
    {
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $data[] = mt_rand(1e6, 1e7 - 1);
        }

        return $this->json([
            'title' => 'Ramdom numbers',
            'numbers' => $data
        ]);
    }
}
