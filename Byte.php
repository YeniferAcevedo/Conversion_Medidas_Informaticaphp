<?php 

require_once 'Valor.php';

class Byte extends Valor{

    public function calcularBinarioAByte(){
        return $this->getValor() * 0.125;
    }

    public function calcularKilobyteAByte(){
        return $this->getValor() * 1024;
    }

    public function calcularMegabyteAByte(){
        return $this->getValor() * 1048576;
    }

    public function calcularGigabyteAByte(){
        return $this->getValor() * 1073741824;
    }

    public function calcularTerabyteAByte(){
        return $this->getValor() * 1099511627776;
    }

}

?>