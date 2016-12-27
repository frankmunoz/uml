<?php

require_once '../Class/Documento.php';
require_once '../Class/Impresora.php';

//http://www.didierperez.com/2012/02/diagrama-de-clases-uml-dependencia/Ï

$miDocumento = new Documento("Hello World!");
$miImpresora = new Impresora();
$miImpresora->imprimir($miDocumento);
