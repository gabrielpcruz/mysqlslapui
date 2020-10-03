<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

    $app->get('/home', function (Request $request, Response $response, $parameters){

        $name = "Gabriel Cruz";

        return view($response, 'auth.home', compact('name'));
    });

    $app->get("/", [WelcomeController::class, 'index']);
    $app->get("/{name}", [WelcomeController::class, 'show']);

};