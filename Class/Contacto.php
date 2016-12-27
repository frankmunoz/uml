<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contacto
 *
 * @author imac
 */
/* Clase Contacto */
Class Contacto {

    private $_nombre;
    private $_telefono;

    public function __construct($nombre, $telefono) {
        $this->_nombre = $nombre;
        $this->_telefono = $telefono;
    }

}

