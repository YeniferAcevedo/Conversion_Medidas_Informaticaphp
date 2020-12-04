<?php

require_once 'Valor.php';

class Kilobyte extends Valor{

    public function calcularBinarioAKilobyte(){
        return $this->getValor() * 0.00012207;
    }

    public function calcularByteAKilobyte(){
        return $this->getValor() * 0.000976563;
    }

    public function calcularMegabyteAKilobyte(){
        return $this->getValor() * 1024;
    }

    public function calcularGigabyteAKilobyte(){
        return $this->getValor() * 1048576;
    }

    public function calcularTerabyteAKilobyte(){
        return $this->getValor() * 1073741824;
    }
}

?>