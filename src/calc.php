/*
* File: calc.php
* Author: Farkas Csaba
* Copyright: 2022,Farkas Csaba
* Group: Szoft I/N
* Date: 2022-05-26
* Github: https://github.com/fcsabi/
* Licenc: GNU GPL
*/
<?php

echo file_get_contents('templates/head.html');



$page= file_get_contents('templates/calc.html');



$testtomeg=$_GET('testtomeg');
$magassag=$_GET('magasság');
$eletkor=$_GET('eletkor');

$area=calcArea($testtomeg,$magassag,$eletkor);

function calcArea($testtomeg,$magassag,$eletkor){

    $kalorai=(13.397*$testtomeg)+(4.799*$magassag)-(5.667*$eletkor)+447.593;
};

$result=str_replace('{{RESULT}}',$result,$page);


echo $page;


echo file_get_contents('templates/foot.html');