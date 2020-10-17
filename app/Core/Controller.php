<?php

namespace App\Core;


use App\Core\View;

class Controller
{
    protected function render(string $fileName, array $data = [])
    {
        return View::render($fileName, $data);
    }
}
