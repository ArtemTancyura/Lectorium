<?php

namespace App\Services;

use Symfony\Component\Stopwatch\Stopwatch;

class ArticleService
{
    public function handleArticle()
    {

        $stopwatch = new Stopwatch();
        $stopwatch->start('eventName');


        $faker = \Faker\Factory::create();

        $article = $faker->realText(50);

        $name = $faker->name;

        $event = $stopwatch->stop('eventName');

        return  "Super cool article written by " . $name . ". Text of article: " . $article . "
         Time for creating: " . $event->getDuration() . " ms";

    }
}