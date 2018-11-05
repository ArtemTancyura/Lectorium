<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Stopwatch\Stopwatch;

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class HomeController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function home()
    {
            $stopwatch = new Stopwatch();

            $stopwatch->start('articleCreating');

            $faker = \Faker\Factory::create();

            $article = $faker->realText(500);

            $name = $faker->name;

            $img = $faker->imageUrl(640,440);

            $date = date('Y-m-d h:i', time() - 86400 * 30);

            $title = "Title of article";

            $event = $stopwatch->stop('articleCreating');

        $translator = new Translator('uk_UA');
        $translator->addLoader('array', new ArrayLoader());
        $translator->addResource('array', array(
            'Title of article' => 'Заголовок статті',
            'Article written by' => 'Стаття написана',
            'Time for creating article' => 'Час, затрачений на створення статті',
        ), 'uk_UA');


        return $this->render('home/home.html.twig', [
            'article' => $article,
            'name' => $name,
            'event' => $event->getDuration(),
            'date' => $date,
            'img' => $img,
            'title' => $title,
            'title2' => $translator->trans('Title of article'),
            'author' => $translator->trans('Article written by'),
            'event2' => $translator->trans('Time for creating article'),
        ]);
    }


}