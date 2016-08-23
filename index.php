<?php

/*
$str = "<br/>STRING";

echo $str;

echo strMinusculo ($str);

echo $str;


function strMinusculo ($str)
{
	$s = $str;
	
	$s = strtolower ($s);
	
	return $s; 
}*/
//proximo exemplo




$str = "<br/>STRING";

echo $str;

echo strMinusculo ($str);

echo $str;


function strMinusculo ($str)
{
	return "<br/>".strtolower($str)."<br/>";
}