<?php

declare (strict_types=1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas','Roupas Unissex');
$c2 = new Categoria('Roupas de banho', 'Toalhas, toalhas de rosto');

var_dump($c1);
var_dump($c2);

$p1 = new Produto('Tênis para Corrida', 299);
$p1 -> setDescricao('Tenis para corrida de rua');
/*$p1->setNome('Tênis para corrida');
$p1->setvalor(299);*/

$p2 = new Produto('Calça jeans', 100);
/*$p2->setNome('Calça Jeans');
$p2->setValor(100);*/

$p3 = new Produto('Saia azul', 200);
/*$p3->setNome('Saia Jeans');
$p3->setValor(100);*/

var_dump($p1);
var_dump($p2);
var_dump($p3);