<?php

/**
 * Ekam
 * Description: Default route
 */
//error reporting turned on
ini_set("display_errors", 1);
error_reporting(E_ALL);

//require vendor/autoload.php

require("vendor/autoload.php");


//instantiate Fat-free
$f3 = Base:: instance();

//default route
$f3->route('GET /', function () {
    $pet1 = new Pet("Fido", "pink");
    $pet1->eat();
    $pet1->talk();


    /*$view = new Template();
    echo $view->render('views/my-pets.html');*/

});

//run fat free

$f3->run();