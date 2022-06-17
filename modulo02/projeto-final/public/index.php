<?php
include 'modulo02\projeto-final\vendor\autoload.php';
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
$p = new ProductController();
$ca = new CategoryController();
$c = new IndexController();

$c -> loginAction();
$p->listAction();
$ca->listAction();
$p->editAction();