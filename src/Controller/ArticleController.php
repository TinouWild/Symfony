<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/admin/article/new", name="article_new")
     * @param Request $request
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request, ObjectManager $manager)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($article);
            $manager->flush();
            $this->addFlash('success', "Article créé !");
            return $this->redirectToRoute('articles');
        }
        return $this->render('admin/article/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
