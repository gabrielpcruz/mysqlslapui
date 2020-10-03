<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function index(Request $request, Response $response)
    {

        $response->getBody()->write("Welcome Controller Hello world!");

        return $response;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $parameters
     * @return Response
     */
    public function show(
        Request $request,
        Response $response,
        $parameters
    ) {

       var_dump($parameters);

       return $response;
    }
}