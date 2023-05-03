<h1>Listar livros</h1>

<?php 

    $sql = "SELECT * FROM livros where id";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if(isset($qtd)){
        print "<table class='table table-hover table-striped table-bordered'>";

            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Valor</th>";
            print "<th>Descrição</th>";
            print "<th>Ativo</th>";
            print "<th>Ações</th>";
            print "</tr>";
            
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->ativo."</td>";
            
            print "<td>
            
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir o livro: ".$row->nome."?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            
            print "</tr>";
        }

        print "</table>";

    }else{
        print "Não existem livros cadastrados.";
    }
?>