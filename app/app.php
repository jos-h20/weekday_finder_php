<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Finder.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
// End busy code -----------^
    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig'); //
    });
    // Grabs User Input
    $app->get("/userInput", function() use ($app) {

		$input_month = $_GET['month'];
		$input_day = $_GET['day'];
		$input_year = $_GET['year'];

		$finder = new Finder;



        $results = $finder->mainFormula($input_month, $input_day, $input_year);
        return $app['twig']->render('form.twig', array(
            'results' => $results,
    ));
    });
    return $app;
?>
