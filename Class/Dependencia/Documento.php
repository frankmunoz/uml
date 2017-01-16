<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Documento
 *
 * @author imac
 */
/* Clase Documento */
class Documento {

    private $_texto;

    public function Documento($texto) {
        $this->_texto = $texto;
    }

    public function getTexto() {
        return $this->_texto;
    }

}
