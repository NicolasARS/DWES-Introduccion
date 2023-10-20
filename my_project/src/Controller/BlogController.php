<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController{


    #[Route('/blog', name: 'blog_list')]

    public function list()

    {
        $content = "<ul>";
        for($i = 1; $i <= 10; $i++){
          $content .= "<li>Entrada $i </li>";
        }
        $content .= "</ul>";
          return new Response("<html><body>$content</body></html>");

    }

    #[Route('/blog/{entryId}', name: 'blog_show')]
    public function show(int $entryId = 1)
    {
        return new Response('<html><body>Entrada ' . $entryId . '</body></html>');
    }

}