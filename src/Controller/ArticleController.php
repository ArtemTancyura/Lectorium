<?php

namespace App\Controller;

use App\Entity\Article;
use App\Services\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request, ArticleService $articleService)
    {
        $name = $request->query->get('name');

        $text = $articleService->handleArticle($name);

        $article = new Article();

        $article->setText($text);

        $this->getDoctrine()->getManager()->persist($article);
        $this ->getDoctrine()->getManager()->flush();



        return new Response(
            "<html><body><h1>$text</h1></body></html>"
        );
    }

}