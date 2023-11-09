<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        // die('Testing symfony controller & router.');
        // Symfony HttpFoundation library has lots of classes related to Request & Response.
        // Response can be anything HTML/JSON or String.
        return new Response('Test Title: Music Director Pritam');
    }

}