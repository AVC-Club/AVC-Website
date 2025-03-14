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

$app->get('/favicon.ico', function (Req $req, Res $res, array $args) use ($publicPath) {
    $streamFactory = new Slim\Psr7\Factory\StreamFactory();
    return $res
        ->withHeader('Content-Type', 'image/svg+xml') // Set proper SVG MIME type
        ->withBody(
            $streamFactory->createStreamFromFile($publicPath . '/src/images/AVC-Logo.svg')
        );
});


$app->get('/', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'index.php');
});

$app->get('/committee', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    $viewData = [
        'members' => [
            ['name' => 'Paul Wong', 'position' => 'President'],
            ['name' => 'Caleb Lau', 'position' => 'Vice President'],
            ['name' => 'Eileen Zhang', 'position' => 'Secretary'],
            ['name' => 'Chai Shean Ng', 'position' => 'Treasurer'],
            ['name' => 'Winston Yu', 'position' => 'Assistant Treasurer'],
            ['name' => 'Jie Zhou', 'position' => 'Assistant Treasurer'],
            ['name' => 'Vanessa Do', 'position' => 'Social Media Manager'],
            ['name' => 'Nick Bowman', 'position' => 'General Committee'],
        ]
    ];

    return $renderer->render($res, 'committee.php', $viewData);
})->setName('committee');

// Register error handlers
function registerErrorHandlers($app, $publicPath) {
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
