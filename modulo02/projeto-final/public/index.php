<?php
include 'modulo02\projeto-final\vendor\autoload.php';
use App\Controller\IndexController;
use App\Controller\ProductController;

$p = new ProductController();

$c = new IndexController();

$c -> loginAction();
$p->listAction();

$p->editAction();