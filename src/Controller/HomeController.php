<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class HomeController extends AbstractController
{
    public function __construct(
    ) {}

    public function getExchangeRate(): Response
    {
        return $this->render(view: 'crypto/bitcoin.html.twig');
    }

    public function home(): JsonResponse
    {
        return new JsonResponse(
            data:
            [
                'status' => 'ok'
            ]
        );
    }
}