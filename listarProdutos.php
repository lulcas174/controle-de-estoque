<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top:40px">
        <h3> Lista de produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Numero do produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">ação</th>
                </tr>
            </thead>
                <?php
                include 'conexaoBanco.php';
                $sql = mysqli_query($link, 'SELECT * FROM estoque');
                while ($array = mysqli_fetch_array($sql)) {
                    //esse A+ variável, significa que eu to dizendo que é ARRAYidEstoque, ARRAYnumeroProduto, so para ficar mais fácil para você, Lucas do futuro
                    $Aid_estoque = $array['id_estoque'];
                    $Anroproduto = $array['nroproduto'];
                    $Anomeproduto = $array['nomeproduto'];
                    $Acategoria = $array['categoria'];
                    $Aquantidade = $array['quantidade'];
                    $Afornecedor = $array['fornecedor'];
                
                ?>
                <tr>
                <td><?php echo $Anroproduto ?></td>
                <td><?php echo $Anomeproduto ?></td>
                <td><?php echo $Acategoria ?></td>
                <td><?php echo $Aquantidade ?></td>
                <td><?php echo $Afornecedor ?></td>
                <td><a class="btn btn-warning btn-sm" style="color:black" href="EditarProduto.php?id=<?php echo $Aid_estoque?>" role="button">Editar</a>
                <a class="btn btn-danger btn-sm" style="color:black" href="deletarProduto.php?id=<?php echo $Aid_estoque?>" role="button">Excluir</a>
                </td>
                </tr>
                <?php } ?>
        </table>
        <div style="text-align:right">
        <a href="index.php" type="submit" class="btn btn-success btn-sm">Voltar</a>
        </div>
    </div>
        <script src="./js/bootstrap.js"></script>
</body>

</html>