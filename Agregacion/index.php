<?php

require_once("../Class/Agregacion/Agenda.php");
require_once("../Class/Agregacion/Contacto.php");

/* Creamos una instancia de Agenda */
$miAgenda = new Agenda();
 
/* Agregamos algunos Contactos*/
$miAgenda->addContacto(new Contacto("Pepe", "3-21-54-87"));
$miAgenda->addContacto(new Contacto("Juan", "3-32-65-98"));
$miAgenda->addContacto(new Contacto("Luis", "3-78-13-46"));
$miAgenda->printContacto();
?>
<img src="uml-relacion-agregacion-composicion-ejemplo.jpg" alt=""/>
<br><a href="http://www.didierperez.com/2012/02/diagrama-de-clases-uml-agregacion-y-composicion/">Agregacion</a>