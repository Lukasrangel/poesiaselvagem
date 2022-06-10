<?php


include_once('classes/Views/MainView.php');
include_once('classes/Controllers/HomeController.php');
include_once('classes/Models/randomModel.php');
$autoload = function($class){
    include_once('classes/' . $class . '.php');
};

spl_autoload_register($autoload);


define('INITIAL_PATH', 'http://poesiaselvagem.tech');
define('DB','epiz_31848720_poesiaselvagem');
define('HOST','sql304.epizy.com ');
define('USER','epiz_31848720');
define('PASS','6y0ryCY41QuF');


?>