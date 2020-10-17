<?php

if (!function_exists('env')) {
    /**
     * Get value from environment variable
     *
     * @param string $key ENV name
     * 
     * @return string | null
     */
    function env(string $key, $defaultValue = null)
    {
        if (!isset($_ENV[$key])) {
            return $defaultValue;
        }

        return $_ENV[$key];
    }
}
