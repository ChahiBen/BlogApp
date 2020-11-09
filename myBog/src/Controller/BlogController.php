<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo) {
        $articles = $repo->findAll();
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
     * @Route("/blog/new", name="blog_create")
     */
    public function create(Request $request, EntityManagerInterface $objectManager){
        $article = new Article();

        $article->setTitle("Titre d'exemple")
                ->setContent("ContenuExemple");

        $form = $this->createFormBuilder($article)
                ->add('title')
                ->add('content')
                ->add('image')
                ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article->setCreatedAt(new \DateTime() );

            $objectManager->persist($article);
            $objectManager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }

        return $this->render('blog/create.html.twig',[
            'formArticle' => $form->createView()
        ]);
    }

     /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Article $article){
        return $this->render('blog/show.html.twig',[
            'article' => $article
        ]);
    }
}
