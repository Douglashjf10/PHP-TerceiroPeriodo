<?php

require_once ("Funcionario.php");
require_once "Departamento.php";
//require_once("UsuarioSessao.php");

//require_once("UsuarioSessaoPermissao.php");

//$usul = new UsuarioSessao("Douglas", "Doug");

//$usul1 = new UsuarioSessaoPermissao("James", "Doug", 10);

//$usul1 -> = "James";
//$usul1 -> = "Dougl";

//$usul->nome = "Douglas";
//$usul->login = "Doug";

$func1 = new Funcionario(2000, "Juca", 123);
$func2 = new Funcionario(2000, "Maria", 321);

$dep = new Departamento();

$dep-> addFuncionario($func1);
$dep-> addFuncionario($func2);

echo $dep->getFuncionario(1)->getSalario();

var_dump($func1);    