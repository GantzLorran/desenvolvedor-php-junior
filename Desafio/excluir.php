<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Entity/Cadastro.php';
//Validação do post
use \App\Entity\Cadastro;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:index.php?status=error');
    exit;
}
$cad = Cadastro::buscaCadastro($_GET['id']);

//validação do cadastro
if(!$cad instanceof Cadastro){
    header('location:index.php?status=error');
    exit;
}
if(isset($_POST['excluir'])){
    $cad->excluir();
    header('location:index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';


