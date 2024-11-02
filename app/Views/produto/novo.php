<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>

    <?php if(session()->has("aviso")): ?>
        
        <?= session("aviso")?>

    <?php endif; ?>

    
    <h1>cadastro De Produto</h1>
    <form action="/salvar" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" step="0.05" required>
        </div>
        <div>
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" acction="*.jpeg,.jpg,.png " required>
        </div>
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>


</body>
</html>