<?php

namespace Pure\controller;

use Pure\model\User;
use think\facade\Db;

class Test extends BaseController
{
    public function index()
    {
        // $loader = new \Twig\Loader\ArrayLoader([
        //     'index' => 'Hello {{ name }}!',
        // ]);
        // $twig = new \Twig\Environment($loader);

        // $loader = new \Twig\Loader\FilesystemLoader('/path/to/templates');
        // $twig = new \Twig\Environment($loader, [
        //     'cache' => '/path/to/compilation_cache',
        // ]);
        // echo $twig->render('index', ['name' => 'Fabien']);

        $this->assign('name', 'wzh');

        new User();
        $user = Db::name('User')->select();
        $this->assign('list', $user->toArray());
        echo 12>>2;
        return $this->display('index');
    }
}
