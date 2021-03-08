<?php
include 'conexaoBanco.php';
$id = $_POST['id'];
//$nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeProduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";
$atualizar = mysqli_query($link, $sql);
?>
<link rel="stylesheet" href="./css/bootstrap.css">
<div class = "container" style="width:400px">
<center>
<h3>Atualizado com sucesso</h3>
<div style="margin-top: 10px">
<a href="listarProdutos.php" class="bnt btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>