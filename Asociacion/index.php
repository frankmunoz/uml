<?php

require_once("../Class/Taxi.php");
require_once("../Class/Chofer.php");

//http://www.didierperez.com/2012/02/diagrama-de-clases-uml-asociacion/

$miChofer = new Chofer("Pedro");
$miTaxi = new Taxi($miChofer, "AHJ-1050");
$miTaxi->printChofer();
$miTaxi->printMatricula();
