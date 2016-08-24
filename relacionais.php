<?php
echo "<h2>OPERADORES RELACIONAIS</h2>"  ;

$v1=1; 
$v2;


compara ($v1, $v2);

function compara ($v1, $v2) {
    
     if ($v1 === $v2){
         
         echo "V1 é identico em valor e tipo a V2<br/>";
     }
     if ($v1 == $v2){
         
         echo "V1 é igual em valor a V2<br/>";
     }
     if ($v1 != $v2){
         
         echo "V1 é diferente que V2<br/>";
     }
     if ($v1 < $v2){
         
         echo "V1 é menor que V2<br/>";
     }
     if ($v1 > $v2){
         
         echo "V1 é maior que V2<br/>";
     }
     if ($v1 <= $v2){
         
         echo "V1 é menor ou igual a V2<br/>";
     }
     if ($v1 >= $v2){
         
         echo "V1 é maior ou igual a V2<br/>";
     }
}

?>