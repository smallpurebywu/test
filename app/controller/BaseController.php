<?php

namespace Pure\controller;

class BaseController
{
    protected $twig;

    protected $data = [];

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../view/');
        $this->twig = new \Twig\Environment($loader, [
            // 'cache' => __DIR__ . '/../cache/',
        ]);
    }

    public function assign($var, $value)
    {
        if (is_array($var)) {
            $this->data = array_merge($this->data, $var);
        } else {
            $this->data[$var] = $value;
        }
    }

    public function display(string $template): void
    {
        echo $this->twig->render($template . '.html', $this->data);
    }
}
