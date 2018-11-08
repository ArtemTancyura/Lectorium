<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @Route("/registration", methods={"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {

        $user = new User();


        $form = $this->createForm(RegistrationType::class, $user);

        if ($request->getMethod() == Request::METHOD_POST) {

            $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_home_home');

        }

        return $this->render('forms/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @param Request $request
     * @Route("/login", methods={"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {

        $user = new User();

        $form = $this->createForm(LoginType::class, $user);

        if ($request->getMethod() == Request::METHOD_POST) {

            $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_home_home');

        }

        return $this->render('forms/login.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}