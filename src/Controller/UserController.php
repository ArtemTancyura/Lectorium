<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends AbstractController
{
    /**
     * @Route("/registration")
     */

    public function register(Request $request)
    {

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('email', EmailType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('pass', RepeatedType::class)
            ->add('save', SubmitType::class, array('label' => 'Registration'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
             $em = $this->getDoctrine()->getManager();
             $em->persist($user);
             $em->flush();

            return $this->render('home/home.html.twig');
        }

        return $this->render('forms/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/login")
     */

    public function login(Request $request)
    {

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('email', EmailType::class)
            ->add('pass', RepeatedType::class)
            ->add('save', SubmitType::class, array('label' => 'Registration'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->render('home/home.html.twig');
        }

        return $this->render('forms/login.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}