<?php
//Using composer Class autoloader
require_once __DIR__ . "vendor/autoload.php";

//DB LOGIC

$userInput= $_SERVER[$REQUEST_URI];

$routes = [
    '/'         => __DIR__. 'views/index.php',
    '/sazina'   => __DIR__. 'views/sazina.php',
    '/parmani'  => __DIR__. 'views/par_mani.php',
    '/projekti' => __DIR__. 'views/projekti.php',
];


if (isset($routes[$userInput])){
    include $routes[$userInput];

}







class User{
    public function helloFromClass(){

        echo'hello';
    }
}


function helloUser()
{
    echo'hello user';
}



?>