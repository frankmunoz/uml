<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chofer
 *
 * @author imac
 */
/* Clase Chofer */
class Chofer {

    private $_nombre;

    public function setNombre($nombre) {
        $this->_nombre = $nombre;
    }

    public function getNombre() {
        return $this->_nombre;
    }

}
