<?php

namespace App\Services;

class AppService
{
    /**
     * Return application info
     *
     * @return array
     */
    public function getAppInfo()
    {
        return [
            'author'  => 'Phuc Ngo',
            'appName' => 'SimpleMVC For Training DE'
        ];
    }
}
