<?php
include "conexaoBanco.php";
    $nroproduto = $_POST['nroProduto'];
    $nomeproduto = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    $sql= mysqli_query($link, "insert into estoque (nroProduto, nomeProduto, categoria, quantidade, fornecedor) values ('$nroproduto', '$nomeproduto', '$categoria', '$quantidade', '$fornecedor')");
?>
<link rel="stylesheet" href="./css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>PRODUTO ADICIONADO COM SUCESSO!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="adicionarProduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar outro item</a>
        </center>
    </div>
</div>