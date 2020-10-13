<?php
require __DIR__.'../vendor/autoload.php';
use \App\Entity\Cadastro;

$cad = Cadastro::getCadastro();
//$cads = Cadastro::buscaCadastro();
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/footer.php';
include __DIR__.'/includes/listagem.php';
