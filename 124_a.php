<?php 
class Adulto {
    private $peso=0.0;
    public function engordar($quilos){
        $this->peso = $this->peso + $quilos;
    }
    public function emagrecer($quilos){
        $this->peso =  $this->peso - $quilos;
    }
}
?>