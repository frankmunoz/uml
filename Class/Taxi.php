<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Taxi
 *
 * @author imac
 */
/* Clase Taxi */
class Taxi {

    private $_chofer;
    private $_matricula;

    public function Taxi(Chofer $chofer, $matricula) {
        $this->_chofer = $chofer;
        $this->_matricula = $matricula;
    }

    public function printMatricula() {
        echo $this->_matricula;
    }

    public function printChofer() {
        $nombreChofer = $this->_chofer->getNombre();
        echo $nombreChofer;
    }

}
