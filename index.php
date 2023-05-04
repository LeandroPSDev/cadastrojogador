<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de livros</title>
    <link href="imagens/favicon.png" rel="icon">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Leandro Pires dos Santos" />

</head>
  <body>
<div id="livraria-topo">
    <div><img src="imagens/favicon.png" alt="Cadastro de livros" title="Cadastro de livros" style="margin-right: 10px;" /></div>
        
    <nav> 
        <ul>
            <li>
            <a href="index.php">Listar livros</a>
            </li>
            <li>
            <a href="?page=novo" >Cadastrar livro</a>
            </li>
        </ul> 
    </nav>
</div>

<div id="livraria-conteudo">
            <?php
                include('config.php');

                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo.php");
                        break;
                    case "listar":
                        include("listar.php");
                        break;
                    case "salvar":
                        include("salvar.php");
                        break;
                    case "editar":
                        include("editar.php");
                        break;
                    default:
                    include("listar.php");
                    break;
                }
            ?>
</div>

<footer>
    <a href="https://www.linkedin.com/in/leandrops-dev/" target="_blank">Leandro Pires dos Santos</a> | Teste Estágio de desenvolvimento - <a href="https://www.oaktecnologia.com/" target="_blank">Oak Tecnologia</a>
</footer>
   
</body>
</html>