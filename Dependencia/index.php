<?php

require_once '../Class/Dependencia/Documento.php';
require_once '../Class/Dependencia/Impresora.php';

$miDocumento = new Documento("Hello World!");
$miImpresora = new Impresora();
$miImpresora->imprimir($miDocumento);
?>
<br><img src="uml-relacion-dependencia-ejemplo.jpg" alt=""/>
<br><a href="http://www.didierperez.com/2012/02/diagrama-de-clases-uml-dependencia/">Dependencia</a>