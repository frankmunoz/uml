<?php

require_once("../Class/Asociacion/Taxi.php");
require_once("../Class/Asociacion/Chofer.php");

$miChofer = new Chofer();
$miChofer->setNombre("Pedro");
$miTaxi = new Taxi($miChofer, "AHJ-1050");
echo "Matricula:";
$miTaxi->printMatricula();
echo "<hr>Chofer: ";
$miTaxi->printChofer();
echo "<hr>";
?>
<img src="uml-relacion-asociacion-ejemplo.jpg" alt=""/>
<br><a href="http://www.didierperez.com/2012/02/diagrama-de-clases-uml-asociacion/">Asociacion</a>