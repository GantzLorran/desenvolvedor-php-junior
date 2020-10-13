<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Entity/Cadastro.php';
define('TITLE', 'Editar cadastro');
//Validação do post
use \App\Entity\Cadastro;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location:index.php?status=error');
    exit;
}
$cad = Cadastro::buscaCadastro($_GET['id']);
//echo "<pre>"; print_r($cad); echo"</pre>"; exit;
//validação do cadastro
if(!$cad instanceof Cadastro){
    header('location:index.php?status=error');
    exit;
}
if(isset($_POST['nome'],$_POST['cpf'],$_POST['datanasc'],$_POST['email'],$_POST['tel'],$_POST['endereco'],$_POST['cid'],$_POST['estado'])){

    $cad->nome = $_POST['nome'];
    $cad->cpf = $_POST['cpf'];
    $cad->datanasc = $_POST['datanasc'];
    $cad->email = $_POST['email'];
    $cad->tel = $_POST['tel'];
    $cad->endereco = $_POST['endereco'];
    $cad->cid = $_POST['cid'];
    $cad->estado = $_POST['estado'];
    $cad->atualizar();
    header('location: index.php?status=success');
    exit;
    //echo "<pre>"; print_r($cad); echo"</pre>"; exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';


