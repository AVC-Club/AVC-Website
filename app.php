<?php

use Psr\Http\Message\ResponseInterface as Res;
use Psr\Http\Message\ServerRequestInterface as Req;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Exception\HttpException;
use Slim\Psr7\Response;

require __DIR__ . '/vendor/autoload.php';

$publicPath = __DIR__ . '/public';

// Create App
$app = AppFactory::create();

//! A 'hack-ish' way to control the public content. Will need to find a better way!
$app->get('/favicon.ico', function (Req $req, Res $res, array $args) use ($publicPath) {
    $streamFactory = new Slim\Psr7\Factory\StreamFactory();
    return $res
        ->withHeader('Content-Type', 'image/svg+xml') // Set proper SVG MIME type
        ->withBody(
            $streamFactory->createStreamFromFile($publicPath . '/src/images/AVC-Logo.svg')
        );
});

$app->get('/genericPlaceholder.jpg', function (Req $req, Res $res, array $args) use ($publicPath) {
    $streamFactory = new Slim\Psr7\Factory\StreamFactory();
    return $res
        ->withHeader('Content-Type', 'image/jpg') // Set proper SVG MIME type
        ->withBody(
            $streamFactory->createStreamFromFile($publicPath . '/src/images/generic-placeholder.jpg')
        );
});

//! End of 'hack-ish' way


$app->get('/', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'index.php');
});

$app->get('/committee', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    //? Temp data, will change once working on db 
    $viewData =  [
        'members' => [
            ['name' => 'Paul Wong', 'role' => 'President', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Caleb Lau', 'role' => 'Vice President', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Eileen Zhang', 'role' => 'Secretary', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Chai Shean Ng', 'role' => 'Treasurer', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Winston Yu', 'role' => 'Assistant Treasurer', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Jie Zhou', 'role' => 'Assistant Treasurer', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Vanessa Do', 'role' => 'Social Media Manager', 'image' => 'genericPlaceholder.jpg'],
            ['name' => 'Nick Bowman', 'role' => 'General Committee', 'image' => 'genericPlaceholder.jpg'],
        ]
    ];

    return $renderer->render($res, 'committee.php', $viewData);
})->setName('committee');

// Register error handlers
function registerErrorHandlers($app, $publicPath)
{
    $errorMiddleware = $app->addErrorMiddleware(true, true, true);

    $errorHandler = function ($req, HttpException $exception, $displayErrorDetails) use ($publicPath) {
        $renderer = new PhpRenderer($publicPath);
        $statusCode = $exception->getCode() ?: 500;
        $errorPage = file_exists("$publicPath/errors/{$statusCode}.err.php") ? "errors/{$statusCode}.err.php" : "errors/500.err.php";
        return $renderer->render(new Response(), $errorPage)->withStatus($statusCode);
    };

    $errorMiddleware->setDefaultErrorHandler($errorHandler);
}

registerErrorHandlers($app, $publicPath);
// Gab was here
$app->run();
