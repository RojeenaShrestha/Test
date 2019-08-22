<?php

namespace App\Config;

class Template
{
    /**
     * Base path of template
     *
     * @var string
     */
    private $templatePath = BASE_URL . 'views/';

    /**
     * Get base path of the templates
     *
     * @return string
     */
    private function getRootPath()
    {
        return $this->templatePath;
    }


    /**
     * Render the template along with variables
     *
     * @param $path
     * @param array $data
     * @return void
     */
    public function render($path, $data = [])
    {

        include $this->getRootPath() . $path;
    }

}