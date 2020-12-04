<?php

require_once 'Valor.php';

class Binario extends Valor{

    public function calcularByteABinario(){
        return $this->getValor() * 8;
            
    }

    public function calcularKilobyteABinario(){
        return $this->getValor() * 8192;
    }

    public function calcularMegabyteABinario(){
        return $this->getValor() * 8388608;
    }

    public function calcularGigabyteABinario(){
        return $this->getValor() * 8589934592;
    }

    public function calcularTerabyteABinario(){
        return $this->getValor() * 8796093022208;
    }
}

?>