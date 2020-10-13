<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/Entity/Cadastro.php';
define('TITLE', 'Cadastrar pessoa');
//Validação do post
use \App\Entity\Cadastro;
$cad = new Cadastro;
if(isset($_POST['nome'],$_POST['cpf'],$_POST['datanasc'],$_POST['email'],$_POST['tel'],$_POST['endereco'],$_POST['cid'],$_POST['estado'])){

    $cad->nome = $_POST['nome'];
    $cad->cpf = $_POST['cpf'];
    $cad->datanasc = $_POST['datanasc'];
    $cad->email = $_POST['email'];
    $cad->tel = $_POST['tel'];
    $cad->endereco = $_POST['endereco'];
    $cad->cid = $_POST['cid'];
    $cad->estado = $_POST['estado'];
    $cad->cadastrar();
    header('location: index.php?status=success');
    exit;
    //echo "<pre>"; print_r($cad); echo"</pre>"; exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';


