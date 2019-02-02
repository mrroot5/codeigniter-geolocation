<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(FCPATH . 'vendor/autoload.php');

class Twig {
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(VIEWPATH);
        $this->twig = new Twig_Environment($loader);
    }

    public function render($template, $placeholders)
    {
        return $this->twig->render($template . '.html', $placeholders);
    }
}
