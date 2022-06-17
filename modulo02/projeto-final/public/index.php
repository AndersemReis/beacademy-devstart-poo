<?php
include 'modulo02\projeto-final\vendor\autoload.php';
use App\Controller\IndexController;

$c = new IndexController();
$c -> loginAction();

