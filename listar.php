<h1>Listar jogadores</h1>

<?php 

    $sql = "SELECT * FROM jogador where id";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."<td>";
            print "<td>".$row->nome."<td>";
            print "<td>".$row->valor."<td>";
            print "<td>".$row->descricao."<td>";
            print "<tr>";
        }

        print "</table>";

    }else{

    }




?>