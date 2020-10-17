<?php

namespace App\Core;


use App\Core\Exceptions\TemplateNotFoundException;

/**
 * Simple view tempalate implementation
 *
 */
class View
{
    /**
     * Render template to html content
     *
     * @param string $templateFile template file name
     * @param array associate array of data that will be used in the template
     *
     * @return string
     */
    public static function render(string $templateFile, array $data = [])
    {
        header('Content-Type: text/html');
        $content = static::parse($templateFile, $data);
        echo $content;

        return $content;
    }


    /**
     * Process template file with data
     *
     * @param string $templateFile template file name
     * @param array associate array of data that will be used in the template
     *
     * @return string
     */
    public static function parse(string $templateFile, array $data = [])
    {
        $template = APP_ROOT . 'app/Views/' . $templateFile . '.php.html';
        $header = APP_ROOT . 'app/Views/layouts/header.php.html';
        $layout = APP_ROOT . 'app/Views/layouts/main.php.html';
        $footer = APP_ROOT . 'app/Views/layouts/footer.php.html';

        if (!file_exists($template)) {
            throw new TemplateNotFoundException($template);
        }

        // process main content
        extract($data);
        ob_start();
        include $template;
        $content = ob_get_clean();


        $data['content'] = $content;
        extract($data);
        ob_start();

        include $header;
        include $layout;
        include $footer;
        return ob_get_clean();
    }
}
