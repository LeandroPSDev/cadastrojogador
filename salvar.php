<?php

    switch (isset($_REQUEST["acao"])) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $valor = $_POST["valor"];
            $descricao = $_POST["descricao"];
            $ativo = $_POST["ativo"];

            $sql = "INSERT INTO jogador (nome, descricao, valor, ativo) VALUES ('{$nome}', '{$descricao}', '{$valor}', '{$ativo}')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }


            break;
            
        case 'editar':
            # code...
            break;
        case 'excluir':
            # code...
            break;
    }

?>