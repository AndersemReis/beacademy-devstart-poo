<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente();
$g1 = new Gestor();

$c1->setNome('Chiquim');

$g1->setNome('Zezim');

var_dump($c1);
var_dump($g1);
