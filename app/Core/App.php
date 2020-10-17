<?php

namespace App\Core;

use Dotenv\Dotenv;
use App\Core\Route;
use App\Core\Session;

class App
{
    /**
     * Initialize and start application
     *
     */
    public function run()
    {
        $this->setupDotEnv();
        $this->setupSession();
        $this->setupRouter();
    }

    /**
     * Setup front controller(router)
     *
     */
    protected function setupRouter()
    {
        $router = Route::getRouter();
        $router->setNamespace('\App\Controllers');

        // Include routes definitions
        require_once APP_ROOT . '/routes/web.php';

        $router->run();
    }

    /**
     * Setup session
     */
    public function setupSession()
    {
        Session::start();
    }

    public function setupDotEnv()
    {
        $dotenv = Dotenv::createImmutable(APP_ROOT);
        $dotenv->load();
    }
}
