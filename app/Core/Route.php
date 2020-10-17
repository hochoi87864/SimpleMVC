<?php

namespace App\Core;

use Bramus\Router\Router;

/**
 * Thin wrapper of Bramus\Router\Router class
 */
class Route
{
    /**
     * @var Bramus\Router\Router
     */
    private static $router = null;

    /**
     * Registe GET request
     *
     * @param string $pattern request URI pattern https://github.com/bramus/router#dynamic-pcre-based-route-patterns
     * @param $handler controller function to handle this request when it matches
     *
     * @return void
     */
    public static function get(string $pattern, $handler)
    {
        static::getRouter()->get($pattern, $handler);
    }

    /**
     * Registe POST request
     *
     * @param string $pattern request URI pattern https://github.com/bramus/router#dynamic-pcre-based-route-patterns
     * @param $handler controller function to handle this request when it matches
     *
     * @return void
     */
    public static function post(string $pattern, $handler)
    {
        static::getRouter()->post($pattern, $handler);
    }

    /**
     * Registe PUT request
     *
     * @param string $pattern request URI pattern https://github.com/bramus/router#dynamic-pcre-based-route-patterns
     * @param $handler controller function to handle this request when it matches
     *
     * @return void
     */
    public static function put(string $pattern, $handler)
    {
        static::getRouter()->put($pattern, $handler);
    }

    /**
     * Registe DELETE request
     *
     * @param string $pattern request URI pattern https://github.com/bramus/router#dynamic-pcre-based-route-patterns
     * @param $handler controller function to handle this request when it matches
     *
     * @return void
     */
    public static function delete(string $pattern, callable $handler)
    {
        static::getRouter()->delete($pattern, $handler);
    }

    public static function getRouter()
    {
        if (static::$router === null) {
            static::$router= new Router();
        }

        return static::$router;
    }
}
