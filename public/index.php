<?php

require '../vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {
    echo "this is /";
});

Macaw::get('/hello', function () {
    echo "hello";
});

Macaw::get('/aa/bb/cc', "Pure\\controller\\Test@index");

Macaw::dispatch();

// use Pure\controller\Test;
// $a = new Test();
// dump($a);

// use extend\some\Hello;
// $h = new Hello();
// $h->aaa();
// dump(smallpure());