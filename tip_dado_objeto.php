<?php
echo "<h2>TIPO DE DADOS OBJETO</h2>"  ;

Class Televisor {
    public $voltagem;
    
    function ligar() {
        echo "Televisão ligada. Voltagem {$this->voltagem}";
    }
    
}

$obj = new Televisor;
$obj->voltagem = "220v";
$obj->ligar();

?>