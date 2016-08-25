<?php

$a = rand(0, getrendmax());
$b = rand(0, getrendmax());

//Os dois valores são pares?
//Qual é o Valor Par?
//Qual é o valor impar?
//Os dois valores são impares?

if (($a % 2 == 0) && ($b % 2 == 0)) {

    echo "os dois valores são pares";
} elseif (($a % 2 == 0) && ($b % 2 == 1)) {
    echo "O valor $a é par e a $b é impar";
} elseif (($a % 2 == 1) && ($b % 2 == 0)) {
    echo "O valor $a é impar e a $b é par";
} elseif (($a % 2 == 1) && ($b % 2 == 1)) {
    echo "os dois valores são impares";
}