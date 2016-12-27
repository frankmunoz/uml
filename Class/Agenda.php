<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Agenda
 *
 * @author imac
 */
/* Clase Agenda */
class Agenda {

    private $_contactoCollection = [];

    public function __construct() {
        
    }

    public function addContacto(Contacto $contacto) {
        $this->_contactoCollection[] = $contacto;
    }

    public function printContacto() {
        echo "<pre>";
        print_r($this->_contactoCollection);
        echo "</pre>";
    }
}
