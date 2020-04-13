<?php

require_once '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use App\Wcs\Hello;



$hi = new Hello();
echo $hi->talk();


