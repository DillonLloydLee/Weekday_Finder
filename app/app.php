<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WeekdayFinder.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('root.twig');
    });

    $app->get('/result', function() use ($app) {
        $this_WeekdayFinder = new WeekdayFinder;
        $this_day = $this_WeekdayFinder->findWeekday($_GET['date']);
        return $app['twig']->render('result.twig', array('value' => $this_day));
    });

    return $app;
 ?>
