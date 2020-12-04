<?php

require_once 'Valor.php';

class Megabyte extends Valor{

    public function calcularBinarioAMegabyte(){
        return $this->getValor() * 1.19209e-7;
    }

    public function calcularByteAMegabyte(){
        return $this->getValor() * 9.53674e-7;
    }

    public function calcularKilobyteAMegabyte(){
        return $this->getValor() * 0.000976563;
    }

    public function calcularGigabyteAMegabyte(){
        return $this->getValor() * 1024;
    }

    public function calcularTerabyteAMegabyte(){
        return $this->getValor() * 1048576;
    }
}

?>