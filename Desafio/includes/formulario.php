<main class="container">
    <section>
        <a href="index.php">
            <button type="button" class="btn btn-success">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?=TITLE?></h2>
        <form id="formulario" method="post">
            <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?=$cad->nome?>" placeholder="Digite seu nome...">
            </div>
            <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" value="<?=$cad->cpf?>" placeholder="Digite seu CPF...">
            </div>  
            <div class="form-group">
            <label>Data de nascimento</label>
            <input type="text" name="datanasc" class="form-control" id="datanasc" value="<?=$cad->datanasc?>" placeholder="Informe sua Data de nascimento">
            </div>
            <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" id="email" value="<?=$cad->email?>" placeholder="Informe seu E-mail...">
            </div>   
            <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="tel" class="form-control" id="tel" value="<?=$cad->tel?>" placeholder="Digite seu telefone...">
            </div>  
            <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="<?=$cad->endereco?>" id="endereco" placeholder="Digite seu endereço...">
            </div>
            <div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cid" class="form-control" id="cid" value="<?=$cad->cid?>" placeholder="Digite sua cidade...">
            </div>
            <div class="form-group">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" id="estado" value="<?=$cad->estado?>" placeholder="Informe seu estado...">
            </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>  
</main>