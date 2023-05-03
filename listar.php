<h1>Listar livros</h1>

<?php 

    #$sql = "SELECT * FROM livros ORDER BY 'valor'";
    $sql = "SELECT id, nome, valor, descricao, ativo FROM livros ORDER BY valor asc";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if(isset($qtd)){
        print "<table class='table table-hover table-striped table-bordered'>";

            print "<tr>";            
            print "<th>Nome</th>";
            print "<th>Valor</th>";
            print "<th style='text-align:center;'>Ativo</th>";
            print "<th style='text-align:center;'>Ações</th>";
            print "</tr>";
            
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>R$".$row->valor."</td>";
            print "<td style='text-align:center;'>".($row->ativo == "Y" ? "<img src='imagens/disponivel.png' alt='Em estoque' title='Em estoque' />" : "<img src='imagens/indisponivel.png' alt='Em falta' title='Em falta' />")."</td>";
            
            print "<td style='text-align:center;'>
            
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn'><img src='imagens/editar.png' alt='Editar' title='Editar' /></button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir o livro: ".$row->nome."?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn'><img src='imagens/excluir.png' alt='Excluir' title='Excluir' /></button>
            </td>";
            
            print "</tr>";
        }

        print "</table>";

    }else{
        print "Não existem livros cadastrados.";
    }
?>