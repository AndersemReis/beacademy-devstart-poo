<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;

//$us1 = new Classes\Usuario();
//$us2 = new Classes\Config\Usuario();
$us2 = new Usuario();
$c1 = new Categoria();
//var_dump($us1);
var_dump($us2);
var_dump($c1);
echo 'funcionou';