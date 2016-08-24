<?php
echo "<h2>OPERADORES LOGICOS</h2>"  ;

$a=true; 
$b=true;
    
     if ($a and $b){
         
         echo "A e B é igual a Verdadeiro<br/>";
     }
     if ($a or $b){
         
         echo "A ou B é igual a Verdadeiro<br/>";
     }
     if ($a xor $b){
         
         echo "A ou B é igual a Falso<br/>";
     }
     if ($a && $b){
         
         echo "A e B é igual a Verdadeiro<br/>";
     }
     if ($a || $b){
         
         echo "A ou B é igual a Verdadeiro<br/>";
     }
     if (!$a and $b){
         
         echo "Não A e B é igual a Falso<br/>";
     }
    


?>