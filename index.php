<?php
/**
 * Slim index.php entrypoint
 * @author Muhammad Aditya Hilmy 16517292
 */

include "vendor/autoload.php";

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();