<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findAll();
        //$articles = [new Article(), new Article()];

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('blog/home.html.twig', [
            'title' => 'Bienvenue !',
            'age' => 24 
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show($id){
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $article = $repo->find($id);

        return $this->render('blog/show.html.twig',[
            'article' => $article
        ]);
    }
    
}
