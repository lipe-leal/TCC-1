<?= $this->extend("template/modelo") ?>

<?php $this->section("conteudo") ?>

<?php if(session()->has("aviso")): ?>

    <?= session()->get("aviso") ?>

<?php endif; ?>

    <h1>Categoria <?= $nome ?> / <?= $idade ?> </h1>
    <form action="/categoria/cadastrar" method="post">
        <div>
            <label for="idcategoria">Código de Categoria</label>
            <input type="number" id="idcategoria" name="idcategoria" readonly>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" >
        </div>
        <div>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>

    <table border="1" style="margin-top: 20px; width: 100%;">
        <thead>
            <th>Código</th>
            <th>Nome</th>
            <th>Opções</th>
        </thead>
        <tbody>
            <?php foreach($categorias as $item): ?>
                <tr>
                    <td><?= $item["idcategoria"] ?></td>
                    <td><?= $item["nome"] ?></td>
                    <td><a href="/categoria/excluir/<?= $item["idcategoria"] ?>" onclick="return confirm('Deseja realmente excluir');">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $this->endSection() ?>