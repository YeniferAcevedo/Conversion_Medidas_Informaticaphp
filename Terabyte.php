<?php

require_once 'Valor.php';

class Terabyte extends Valor{

    public function calcularBinarioATerabyte(){
        return $this->getValor() * 1.13687e-13;
    }

    public function calcularByteATerabyte(){
        return $this->getValor() * 9.09495e-13;
    }

    public function calcularKilobyteATerabyte(){
        return $this->getValor() * 9.31323e-10;
    }

    public function calcularMegabyteATerabyte(){
        return $this->getValor() * 9.53674e-7;
    }

    public function calcularGigabyteATerabyte(){
        return $this->getValor() * 0.000976563;
    }
}

?>