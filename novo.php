<h1>Novo livro</h1>

<form action="?page=salvar" method="POST">

<input type="hidden" name="acao" value="cadastrar" />

<div class="mb-3">
        <input type="text" name="nome" placeholder="Digite o nome" class="form-control" />
    </div>

    <div class="mb-3">
        <input type="text" name="valor" placeholder="Digite o valor" class="form-control" />
    </div>

    <div class="mb-3">
        <select name="ativo" class="form-control">
            <option value="Y">Ativo</option>
            <option value="N">Inativo</option>
        </select>
    </div>

    <div class="mb-3">
        <textarea name="descricao" placeholder="Descrição do livro" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    
</form>