<h1>Listar jogadores</h1>

<?php 

    $sql = "SELECT * FROM jogador where id";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
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
            <button class='btn btn-danger'>X</button>
            </td>";
            
            print "</tr>";
        }

        print "</table>";

    }else{

    }




?>