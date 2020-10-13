<main class="container">
    <h2 class="mt-3">Excluir cadastro</h2>
    <form id="formulario" method="post">
            <div class="form-group">
                <p>Você deseja mesmo excluir o <strong><?= $cad->nome ?></strong>?</p>
            </div>
        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div> 
    </form> 
</main>