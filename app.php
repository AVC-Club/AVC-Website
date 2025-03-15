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


$app->get('/', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'index.php');
});

$app->get('/committee', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    //? Temp data, will change once working on db 
    $viewData =  [
        'members' => [
            ['name' => 'Paul Wong', 'role' => 'President', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Caleb Lau', 'role' => 'Vice President', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Eileen Zhang', 'role' => 'Secretary', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Chai Shean Ng', 'role' => 'Treasurer', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Winston Yu', 'role' => 'Assistant Treasurer', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Jie Zhou', 'role' => 'Assistant Treasurer', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Vanessa Do', 'role' => 'Social Media Manager', 'image' => '/images/generic-placeholder.jpg'],
            ['name' => 'Nick Bowman', 'role' => 'General Committee', 'image' => '/images/generic-placeholder.jpg'],
        ]
    ];

    return $renderer->render($res, 'committee.php', $viewData);
})->setName('committee');


$app->get('/fixture-results', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'fixture.php');
});

$app->get('/gallery', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    // Will need to add photos

    return $renderer->render($res, 'gallery.php');
});

$app->get('/open-gym', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'open-gym.php');
});


//* Expose images dir to public
$app->get('/images/{file:.+}', function (Req $req, Res $res, array $args) use ($publicPath) {
    // Construct the file path
    $filePath = $publicPath . '/src/images/' . $args['file'];

    // Log the file path to ensure it's correct
    error_log("Requested file path: " . $filePath);

    // Check if the file exists and is readable
    if (file_exists($filePath) && is_readable($filePath)) {
        try {
            // Create a stream for the file
            $streamFactory = new Slim\Psr7\Factory\StreamFactory();
            $stream = $streamFactory->createStreamFromFile($filePath);

            // Get the file's MIME type
            $mimeType = mime_content_type($filePath);

            // Log the MIME type for debugging
            error_log("MIME type: " . $mimeType);

            return $res
                ->withHeader('Content-Type', $mimeType)
                ->withBody($stream);
        } catch (Exception $e) {
            // Log any exceptions that occur while handling the file
            error_log("Error handling file: " . $e->getMessage());
            return $res->withStatus(500);
        }
    } else {
        // If file doesn't exist or is not readable, log the error and return 404
        error_log("File not found or not readable: " . $filePath);
        return $res->withStatus(404);
    }
});

// Register error handlers
function registerErrorHandlers($app, $publicPath)
{
    $errorMiddleware = $app->addErrorMiddleware(true, true, true);

    // Modify the error handler to catch all exceptions (Throwable)
    $errorHandler = function ($req, $exception, $displayErrorDetails) use ($publicPath) {
        // Log the exception details for debugging
        error_log("Error occurred: " . $exception->getMessage());
        error_log("Exception type: " . get_class($exception));

        // Render the error page using PhpRenderer
        $renderer = new PhpRenderer($publicPath);
        $statusCode = ($exception instanceof HttpException) ? $exception->getCode() : 500;

        // Log the status code
        error_log("Status code: " . $statusCode);

        // Check if the error page exists, otherwise default to 500 page
        $errorPage = file_exists("$publicPath/errors/{$statusCode}.err.php") ? "errors/{$statusCode}.err.php" : "errors/500.err.php";

        // Log the error page path
        error_log("Error page: " . $errorPage);

        return $renderer->render(new Response(), $errorPage)->withStatus($statusCode);
    };

    $errorMiddleware->setDefaultErrorHandler($errorHandler);
}

registerErrorHandlers($app, $publicPath);

$app->run();
