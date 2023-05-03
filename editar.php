<h1>Editar livro</h1>

<?php

    $sql = "SELECT * FROM livros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">

<input type="hidden" name="acao" value="editar" />
<input type="hidden" name="id" value="<?php print $row->id; ?>" />

<div class="mb-3">
        <input type="text" name="nome" value="<?php print $row->nome; ?>" placeholder="Digite o nome" class="form-control" />
    </div>

    <div class="mb-3">
        <input type="text" name="valor" value="<?php print $row->valor; ?>" placeholder="Digite o valor" class="form-control" />
    </div>

    <div class="mb-3">
        <select name="ativo" class="form-control">
            <option value="Y" <?php echo ($row->ativo == "Y" ? "selected" : ""); ?>>Ativo</option>
            <option value="N" <?php echo ($row->ativo == "N" ? "selected" : ""); ?>>Inativo</option>
        </select>
    </div>

    <div class="mb-3">
        <textarea name="descricao" placeholder="Descreva o jogador" class="form-control"><?php print $row->descricao; ?></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    
</form>