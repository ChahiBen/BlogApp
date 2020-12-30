<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class ApiBlogController extends AbstractController
{
    /**
     * @Route("/api/blog", name="api_blog", methods={"GET"})
     */
    public function getArticles(ArticleRepository $articleRepository): Response
    {
        return $this->json($articleRepository->findAll(), 200, [], ['groups' => 'blog:get']);
    }

     /**
     * @Route("/api/blog/{slug}", name="api_blog_id", methods={"GET"})
     */
    public function getOneArticle(Article $article): Response
    {
        return $this->json($article, 200, [], ['groups' => 'blog:get']);
    }
}
