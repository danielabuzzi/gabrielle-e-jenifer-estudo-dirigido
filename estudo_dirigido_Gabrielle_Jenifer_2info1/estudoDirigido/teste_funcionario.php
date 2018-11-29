<?php

require __DIR__."/Funcionario.php";
require __DIR__."/Data.php";



//usuario 1
$usuario1 = new Funcionario();
$usuario1->departamento = "Administrativo";
$usuario1->salario = 3000;
$usuario1->CPF = "123.897.572-05";

$dataEntrada = new Data(26,04,2012);
// $dataEntrada->dia = 26;
// $dataEntrada->mes = 04;
// $dataEntrada->ano = 2012;

$usuario1->dataEntrada = $dataEntrada1;

$recebeAumento = $usuario1->recebeAumento();
$salarioAnual = $usuario1->calculaGanhoAnual();

//echo $usuario1;



//usuario2

$usuario2 = new Funcionario();
$usuario2->departamento = "atendimento";
$usuario2->salario = 2200;
$usuario2->CPF = "100.890.145-67";

$dataEntrada = new Data(12,12,2010);
// $dataEntrada->dia = 12;
// $dataEntrada->mes = 12;
// $dataEntrada->ano = 2010;

$usuario2->dataEntrada = $dataEntrada2;

$recebeAumento = $usuario2->recebeAumento();
$salarioAnual = $usuario2->calculaGanhoAnual();

//echo $usuario2;


$usuario1->mostra();
$usuario2->mostra();
