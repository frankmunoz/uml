<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Impresora
 *
 * @author imac
 */
/* Clase Impresora */
class Impresora {

    public function Impresora() {
        
    }

    public function imprimir(Documento $documento) {
        $texto = $documento->getTexto();
        echo $texto;
    }

}
