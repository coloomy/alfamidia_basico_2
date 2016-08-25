<?php

define("VALOR_MAX", getrandmax());
define("VALOR_MIN", 0);
$a = rand(VALOR_MIN, VALOR_MAX);
$b = rand(VALOR_MIN, VALOR_MAX);

if (($a % 2 == 0) && ($b % 2 == 0)) {

    echo "os dois valores são pares";
} elseif (($a % 2 == 0) && ($b % 2 == 1)) {
    echo "O valor $a é par e a $b é impar";
} elseif (($a % 2 == 1) && ($b % 2 == 0)) {
    echo "O valor $a é impar e a $b é par";
} elseif (($a % 2 == 1) && ($b % 2 == 1)) {
    echo "os dois valores são impares";
}