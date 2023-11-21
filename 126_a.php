<?php

class Quadrado {
    private $lado;

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}
$quadrado = new Quadrado();
$quadrado->setLado(5.0);
echo "Área do quadrado: " . $quadrado->calculaArea() . "\n";
?>
