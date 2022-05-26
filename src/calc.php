<?php

echo file_get_contents('templates/head.html');



$page= file_get_contents('templates/calc.html');
$testtomeg=$_GET('testtomeg');
$magassag=$_GET('magasság');
$eletkor=$_GET('eletkor');

$area=calcArea($testtomeg,$magassag,$eletkor);

function calcArea($testtomeg,$magassag,$eletkor){

    $kalorai=(13.397*$testtomeg)+(4.799*$magassag)-(5.667*$eletkor)+447.593;
}
$page=str_replace('{{RESULT}}')


echo $page;


echo file_get_contents('templates/foot.html');