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
            ['name' => 'Paul Wong', 'role' => 'President', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Caleb Lau', 'role' => 'Vice President', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Eileen Zhang', 'role' => 'Secretary', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Chai Shean Ng', 'role' => 'Treasurer', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Winston Yu', 'role' => 'Assistant Treasurer', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Jie Zhou', 'role' => 'Assistant Treasurer', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Vanessa Do', 'role' => 'Social Media Manager', 'image' => '/images/generic-placeholder_user.jpg'],
            ['name' => 'Nick Bowman', 'role' => 'General Committee', 'image' => '/images/generic-placeholder_user.jpg'],
        ]
    ];

    return $renderer->render($res, 'committee.php', $viewData);
})->setName('committee');


$app->get('/fixture-results', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    //? Temp data, will change once working on db 
    $viewData =  [
        'matches' => [
            [
                'title' => 'Week 1 (29/3)',
                'header' => 'State League Three Men',
                'team1' => 'Alliance Gold',
                'team1_logo' => '/images/AVC-Logo.svg',
                'team2' => 'Oakleigh Black',
                'team2_logo' => 'https://lh5.googleusercontent.com/F33dlUuQlFNTPP2D9VK92aa-kLKK1zgPV7zYG207vKkKGleHOlFb5EtyxP8oJvet27uzPEKRUSB3iO1AONocSlY=w16383',
                'score' => '0 - 0',
                'venue' => 'Dandenong Stadium',
                'time' => '4:35pm'
            ],
            [
                'title' => 'Week 2 (5/4)',
                'header' => 'State League Three Men',
                'team1' => 'FVUM',
                'team1_logo' => 'https://cdn.revolutionise.com.au/logos/zl3artogfpcp2lcn.jpg',
                'team2' => 'Strive Volleyball',
                'team2_logo' => 'https://cdn.revolutionise.com.au/logos/hclo8psdpouohbl7.png',
                'score' => '1 - 2',
                'venue' => 'Melbourne Stadium',
                'time' => '6:00pm'
            ],
            [
                'title' => 'Week 3 (12/4)',
                'header' => 'State League Three Men',
                'team1' => 'FVUM',
                'team1_logo' => 'https://cdn.revolutionise.com.au/logos/zl3artogfpcp2lcn.jpg',
                'team2' => 'Strive Volleyball',
                'team2_logo' => 'https://cdn.revolutionise.com.au/logos/hclo8psdpouohbl7.png',
                'score' => '1 - 2',
                'venue' => 'Melbourne Stadium',
                'time' => '6:00pm'
            ],
            [
                'title' => 'Week 4 (22/4)',
                'header' => 'State League Three Men',
                'team1' => 'FVUM',
                'team1_logo' => 'https://cdn.revolutionise.com.au/logos/zl3artogfpcp2lcn.jpg',
                'team2' => 'VUVC',
                'team2_logo' => 'https://cdn.revolutionise.com.au/logos/5xmswl1auqopunxe.jpg',
                'score' => '4 - 1',
                'venue' => 'Melbourne Stadium',
                'time' => '4:00pm'
            ],
            [
                'title' => 'Week 5 (30/4)',
                'header' => 'State League Three Men',
                'team1' => 'Alliance Gold',
                'team1_logo' => '/images/AVC-Logo.svg',
                'team2' => 'VUVC',
                'team2_logo' => 'https://cdn.revolutionise.com.au/logos/5xmswl1auqopunxe.jpg',
                'score' => '2 - 2',
                'venue' => 'Melbourne Stadium',
                'time' => '6:00pm'
            ],
        ]
    ];

    return $renderer->render($res, 'fixture.php', $viewData);
});

$app->get('/gallery', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    $viewData = [
        [
            'year'  => 2025,
            'items' => [
                [
                    'href'         => 'album/2025/Grand Final - Mixed-6.html',
                    'image'        => '/images/_temps/Gallery/_DSC1659.jpg',
                    'title'        => 'Grand Final - Mixed-6',
                    'description'  => 'Highlights from the 2025 mixed-6 grand final.',
                    'photographer' => 'Jack McKoiw'
                ],
                [
                    'href'         => 'album/2025/Winter Cup.html',
                    'image'        => '/images/_temps/Gallery/240624 AVC SL2M G Grand Finals-35.jpg',
                    'title'        => 'Winter Cup',
                    'description'  => 'Snapshots from the annual Winter Cup.',
                    'photographer' => 'Emily Tran'
                ]
            ],
        ],
        [
            'year'  => 2024,
            'items' => [
                [
                    'href'         => 'album/2025/Grand Final - Mixed-6.html',
                    'image'        => '/images/_temps/Gallery/_DSC1659.jpg',
                    'title'        => 'Grand Final - Mixed-6',
                    'description'  => 'Highlights from the 2025 mixed-6 grand final.',
                    'photographer' => 'Jack McKoiw'
                ],
                [
                    'href'         => 'album/2025/Winter Cup.html',
                    'image'        => '/images/_temps/Gallery/240624 AVC SL2M G Grand Finals-35.jpg',
                    'title'        => 'Winter Cup',
                    'description'  => 'Snapshots from the annual Winter Cup.',
                    'photographer' => 'Emily Tran'
                ]
            ],
        ],
        [
            'year'  => 2023,
            'items' => [
                [
                    'href'         => 'album/2025/Grand Final - Mixed-6.html',
                    'image'        => '/images/_temps/Gallery/_DSC1659.jpg',
                    'title'        => 'Grand Final - Mixed-6',
                    'description'  => 'Highlights from the 2025 mixed-6 grand final.',
                    'photographer' => 'Jack McKoiw'
                ],
                [
                    'href'         => 'album/2025/Winter Cup.html',
                    'image'        => '/images/_temps/Gallery/240624 AVC SL2M G Grand Finals-35.jpg',
                    'title'        => 'Winter Cup',
                    'description'  => 'Snapshots from the annual Winter Cup.',
                    'photographer' => 'Emily Tran'
                ]
            ],
        ],
    ];

    return $renderer->render($res, 'gallery.php', $viewData);
});

$app->get('/teams', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    return $renderer->render($res, 'our-teams.php');
});

$app->get('/open-gym', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);

    $sessions = ['data' => [
        [
            'title' => 'Wednesdays @ Waverley Christian College',
            'description' => 'Shake off the midweek slump with some volleyball action. Open to all skill levels!',
            'time' => '7:00 PM – 10:00 PM',
            'price' => '$15 flat rate',
            'location' => 'Waverley Christian College (Gate 3 & 4)',
            'address' => '1248 High Street Road, Wantirna South, VIC, 3152',
            'image' => 'images/generic-placeholder_court.jpg',
            'alt' => 'white and red volleyball court aerial photo',
        ],
        [
            'title' => 'Thursdays @ Waverley Christian College',
            'description' => 'Perfect for those looking to squeeze in a session before dinner.',
            'time' => '5:30 PM – 8:00 PM',
            'price' => '$12 flat rate',
            'location' => 'Waverley Christian College (Gate 3 & 4)',
            'address' => '1248 High Street Road, Wantirna South, VIC, 3152',
            'image' => 'images/generic-placeholder_court.jpg',
            'alt' => 'white and red volleyball court aerial photo',
        ],
        [
            'title' => 'Friday @ Templestowe College',
            'description' => 'Start your weekend right with some solid rallies and good vibes.',
            'time' => '7:00 PM – 10:00 PM',
            'price' => '$15 flat rate',
            'location' => 'Templestowe College',
            'address' => '7 Cypress Ave, Templestowe Lower, VIC, 3107',
            'image' => 'images/generic-placeholder_court.jpg',
            'alt' => 'white and red volleyball court aerial photo',
        ],
        [
            'title' => 'Saturdays @ Waverley Christian College',
            'description' => 'A great way to get in some volleyball before your weekend plans.',
            'time' => '11:15 AM – 1:30 PM',
            'price' => '$12 flat rate',
            'location' => 'Waverley Christian College (Gate 3 & 4)',
            'address' => '1248 High Street Road, Wantirna South, VIC, 3152',
            'image' => 'images/generic-placeholder_court.jpg',
            'alt' => 'white and red volleyball court aerial photo',
        ],
    ]];

    return $renderer->render($res, 'open-gym.php', $sessions);
});

$app->get('/about-us', function (Req $req, Res $res) use ($publicPath) {
    $renderer = new PhpRenderer($publicPath);
    return $renderer->render($res, 'about-us.php');
});


//* Expose src dir to public
$app->get('/{type:images|css|js|fonts}/{file:.+}', function (Req $req, Res $res, array $args) use ($publicPath) {
    // Define base paths for different resource types
    $basePaths = [
        'images' => $publicPath . '/src/images/',
        'css'    => $publicPath . '/src/css/',
        'js'     => $publicPath . '/src/js/',
        'fonts'  => $publicPath . '/src/fonts/',
    ];

    $type = $args['type'];
    $filePath = $basePaths[$type] . $args['file'];

    // Log the requested file path
    error_log("Requested file path: " . $filePath);

    // Check if the file exists and is readable
    if (file_exists($filePath) && is_readable($filePath)) {
        try {
            $streamFactory = new Slim\Psr7\Factory\StreamFactory();
            $stream = $streamFactory->createStreamFromFile($filePath);

            // Explicitly set MIME types for common formats
            $mimeTypes = [
                'css'  => 'text/css',
                'js'   => 'application/javascript',
                'jpg'  => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'png'  => 'image/png',
                'gif'  => 'image/gif',
                'svg'  => 'image/svg+xml',
                'woff' => 'font/woff',
                'woff2' => 'font/woff2',
                'ttf'  => 'font/ttf',
                'otf'  => 'font/otf',
            ];

            // Get file extension
            $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

            // Determine MIME type
            $mimeType = $mimeTypes[$ext] ?? mime_content_type($filePath) ?: 'application/octet-stream';

            // Set correct content-type header
            return $res
                ->withHeader('Content-Type', $mimeType)
                ->withBody($stream);
        } catch (Exception $e) {
            error_log("Error handling file: " . $e->getMessage());
            return $res->withStatus(500);
        }
    } else {
        error_log("File not found or not readable: " . $filePath);
        return $res->withStatus(404);
    }
});


//* Register error handlers
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
