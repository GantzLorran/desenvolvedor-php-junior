<?php

$mensagem = '';
if(isset($_GET['status'])){
  switch($_GET['status']){
    case 'success':
      $mensagem = '<div class="alert-success">Ação executada com se
      ucesso!</div>';
    break;
    case 'error':
      $mensagem = '<div class="alert-danger">Ação não executada</div>';
  }
}

$resultado = '';
foreach($cad as $cadastro){
    $resultado .= '<tr>
    <td>'.$cadastro->id.'</td>
    <td>'.$cadastro->nome.'</td>
    <td>'.$cadastro->cpf.'</td>
    <td>'.$cadastro->datanasc.'</td>
    <td>'.$cadastro->email.'</td>
    <td>'.$cadastro->tel.'</td>
    <td>'.$cadastro->endereco.'</td>
    <td>'.$cadastro->cid.'</td>
    <td>'.$cadastro->estado.'</td>
    <td>
    <div class=" col-lg-12" style="text-align: right;">
      <a href="editar.php?id='.$cadastro->id.'">
        <button type="button" class="btn btn-primary button-right">Editar</button>
      </a>
      <a href="excluir.php?id='.$cadastro->id.'">
      <button type="button" class="btn btn-danger text-left">Excluir</button>
    </a>
    </div>
    </td>
  </tr>';
  $resultado = strlen($resultado) ? $resultado : '<tr>
  <td colspan="6" class="text-center"> Nenhuma vaga encontrada</td></tr>';
}
$resultado = strlen($resultado) ? $resultado : '<tr>
  <td colspan="6" class=" text-left">
        Nenhuma vaga encontrada
  </td>
</tr>';
?>

<main>
    <section class="container">
        <a href="cadastrar.php">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </section>
    
    <section class="container table bg-light mt-3 text-left">
        <table class=" table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de nascimento</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
        </table>
        <tbody class="col align-self-center">
        <?= $resultado ?>
        </tbody>
    </section>
</main>