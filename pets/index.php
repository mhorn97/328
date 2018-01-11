<?php

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3 -> route('GET /', function() {
    echo "Pet Home!";

    $view = new View;
    echo $view->render
    ('views/home.html');
}
);

//Run Fat-Free Framework
$f3->run();
