<?php
echo "<h2>TIPO DE DADOS ARRAY</h2>"  ;

$valores = array ("caralho", 1234, array ('a','b','c'));

echo $valores[0][5];
echo "<br>";
$valores2 = [array ("String", 1234, array ('a','b','c'))];
        
echo $valores[0];
echo "<br>";
echo $valores[1];
echo "<br>";
echo $valores[2];
echo "<br>";
echo $valores[3];
echo "<br>";
echo $valores[2];
echo "<br>";
echo $valores[0][2]

?>