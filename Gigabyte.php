<?php

require_once 'Valor.php';

class Gigabyte extends Valor{

    public function calcularBinarioAGigabyte(){
        return $this->getValor() * 1.16415e-10;
    }

    public function calcularByteAGigabyte(){
        return $this->getValor() * 9.31323e-10;
    }

    public function calcularKilobyteAGigabyte(){
        return $this->getValor() * 9.53674e-7;
    }

    public function calcularMegabyteAGigabyte(){
        return $this->getValor() * 0.000976563;
    }

    public function calcularTerabyteAGigabyte(){
        return $this->getValor() * 1024;
    }
}

?>