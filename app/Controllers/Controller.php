<?php

namespace App\Controllers;
use App\Services\Request;
use App\Services\Response;

class Controller
{
    protected $request;
    protected $response;

    /**
     * Controller constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}