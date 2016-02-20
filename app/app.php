<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('counter_home.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $new_counter = new RepeatCounter;
        $results = $new_counter->repeatCounter($_GET['word'], $_GET['paragraph']);
        return $app['twig']->render("results.html.twig", array('results' => $results, 'word' => $_GET['word'], 'paragraph' => $_GET['paragraph']));
    });

    return $app;
 ?>
