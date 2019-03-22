<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/admin/articles", name="articles")
     */
    public function index()
    {
        return $this->render('admin/article/index.html.twig');
    }
}
