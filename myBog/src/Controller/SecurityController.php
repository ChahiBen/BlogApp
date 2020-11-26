<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegestrationType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_regestration")
     */
    public function registration(Request $request, EntityManagerInterface $manager){
        $user = new User();
        
        $form = $this->createForm(RegestrationType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() ){
            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('security/registration.html.twig',[
            'form' => $form->createView()

        ]);

    }
}
