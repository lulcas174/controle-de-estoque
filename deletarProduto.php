<?php
include 'conexaoBanco.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE  id_estoque = $id";
$deletar = mysqli_query($link, $sql);

?>
<link rel="stylesheet" href="./css/bootstrap.css">
<div class = "container" style="width:400px">
<center>
<h3>Deletado com sucesso</h3>
<div style="margin-top: 10px">
<a href="listarProdutos.php" class="bnt btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>