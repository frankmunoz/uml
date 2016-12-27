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

    private $chofer;
    private $matricula;

    public function Taxi(Chofer $chofer, $matricula) {
        $this->chofer = $chofer;
        $this->matricula = $matricula;
    }

    public function printMatricula() {
        echo $this->matricula;
    }

    public function printChofer() {
        $nombreChofer = $this->chofer->getNombre();
        echo $nombreChofer;
    }

}
