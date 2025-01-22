<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AJGController
{
    #[Route('/api/ajg', name: 'api_ajg')]
    public function index(): Response
    {
        return new Response('Symfony de Alvaro Jimenez Responde a la llamada de
React');
    }
}
