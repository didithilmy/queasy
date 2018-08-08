<?php
/**
 * Slim index.php entrypoint
 * @author Muhammad Aditya Hilmy 16517292
 */

define("BASE_URL", getenv("BASE_URL") ?: "http://localhost/queasy");
include "vendor/autoload.php";

use Slim\Views\PhpRenderer;

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("./templates");

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

/**
 * Home view
 */
$app->get('/kiosk', function ($request, $response, $args) {
    // $this->renderer->render($response, "/header.php", $args);
    // $this->renderer->render($response, "/home.php", $args);
    return $this->renderer->render($response, "/kiosk.php", $args);
});

// Run app
$app->run();