<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\AppService;

class HomeController extends Controller
{
    /**
     * @var App\Services\AppService
     */
    private $appService;

    public function __construct()
    {
        $this->appService = new AppService();
    }

    /**
     * Home page
     *
     * @return html
     */
    public function index()
    {
        return $this->render('home', $this->appService->getAppInfo());
    }
}
