<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(ArticleRepository $repo) {
        $articles = $repo->findAll();
        

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    
     /**
     * @Route("/blog/{slug}/delete", name="deleteArticle")
     */
    public function deleteArticle (Article $article,EntityManagerInterface $entityManager)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($article->getUser()->getId() != $this->getUser()->getId()) {
            throw new \Exception('Vous n\'êtes pas l\'auteur de cet article !');
        }
        $entityManager->remove($article);
        $entityManager->flush();
        return $this->redirectToRoute('blog');
    }

    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{slug}/edit", name="blog_edit")
     */
    public function form(Article $article = null, Request $request, EntityManagerInterface $objectManager){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if (strcmp($request->get('_route'), 'blog_edit') == 0) {
            if (!$article) {
                throw new \Exception('Article innexistant !');
            }
            elseif ($article->getUser()->getId() != $this->getUser()->getId())
            {
                throw new \Exception('Vous n\'êtes pas l\'auteur de cet article !');
            }
        }
        if(!$article){
            $article = new Article();
        }
            
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if(!$article->getId()){
                $article->setCreatedAt(new \DateTime() );
            }
            $article->setUser($this->getUser());
            $objectManager->persist($article);
            $objectManager->flush();

            $article->setSlug(sha1($article->getId()));
            $objectManager->flush();

            return $this->redirectToRoute('blog_show', ['slug' => $article->getSlug()]);
        }
        return $this->render('blog/create.html.twig',[
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

     /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(Article $article, Request $request, EntityManagerInterface $manager){
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() ){
            $comment->setCreatedAt(new \DateTime())
                    ->setArticle($article);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show',['slug' => $article->getSlug()]);
        }
        return $this->render('blog/show.html.twig',[
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }
}
