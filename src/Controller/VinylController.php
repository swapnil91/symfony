<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * VinylController Class.
 *
 * AbsctractController gives us a shortcut methods like render
 * thats why extending the same.
 */
class VinylController extends AbstractController {

  /**
   * Homepage url /.
  */
  #[Route('/')]
    public function homepage(): Response {
    // die('Testing symfony controller & router.');
    // Symfony HttpFoundation library has lots of classes related to Request
    // & Response, Response can be anything HTML/JSON or String.
    // Symfony method should always return a Response.
    // render method internally do the same.
    // return new Response('Test Title: Music Director Pritam');.
    return $this->render('vinyl/homepage.html.twig', [
      'title' => 'Jack & Jones',
    ]);
    }

    /**
     * Dynamic URL /browser/{anything}.
    */
    #[Route('/browse/{slug}')]
    public function browse(string $slug = NULL): Response {
      return new Response('Genre: ' . $slug);
    }

}
