<?php

namespace App\Core;


/**
 * Simple Session wrapper class for ease to replace later
 */
class Session
{
    /**
     * Start session
     *
     */
    public static function start()
    {
        $name = env('APP_NAME') . '_session';
        session_name($name);
        session_start();
    }

    /**
     * Destroy session
     *
     */
    public static function destroy()
    {
        session_destroy();
    }

    /**
     * Get value from session by key
     *
     * @param $key session key name
     * @param mix $data data to be stored in session
     *
     * @return mix | null
     */
    public static function get(string $key, $data, $defaultValue = null)
    {
        if (!isset($_SESSION[$key])) {
            return $defaultValue;
        }

        return $_SESSION[$key];
    }

    /**
     * Store value in session by key
     *
     * @param $key session key name
     * @param mix $data data to be stored in session
     *
     * @return void
     */
    public static function set(string $key, $data)
    {
        $_SESSION[$key] = $data;
    }
}
