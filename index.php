<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 1/11/2018
 * Time: 11:14 AM
 */

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function()
{
    $view = new View;
    echo $view->render
    ('views/index.html');
}
);

//Run Fat-Free
$f3->run();