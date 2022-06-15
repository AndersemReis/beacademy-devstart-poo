<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('chiquim@gmail.com','123456');
$g1 = new Gestor('zezim@gmail.com','123123',6000);

$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2019');


$g1->setNome('Zezim');


var_dump($c1);
var_dump($g1);
