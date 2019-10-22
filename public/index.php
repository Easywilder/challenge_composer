<?php
require '../vendor/autoload.php';

use App\Wcs\Hello;

$world = new HelloWorld\SayHello();
echo $world->world();

$planet = new App\Wcs\Hello();
echo $planet->talk();