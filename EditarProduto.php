<?php
include 'conexaoBanco.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Formulário de cadastro</title>
    <style type="text/css">
        #containerFormulario {
            width: 500px;
            margin-top: 40px;
        }

        #btn-cadastrar {
            background-color: #FF1168;
            color: #FFFFFF;
        }
    </style>
</head>
<link rel="stylesheet" href="./css/bootstrap.css">

<body>
    <div class="container" id="containerFormulario">
        <h4>Formulario de cadastro de produtos</h4>
        <form action="atualizarProdutos.php" method="POST" style="margin-top: 20px">
        <?php
        //$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id ";
       // $buscar = mysqli_query($link, $sql);
        //while ($array = mysqli_fetch_array($buscar)){
            $sql = mysqli_query($link,"SELECT * FROM `estoque` WHERE id_estoque = $id ");
            while ($array = mysqli_fetch_array($sql)){
                    $Aid_estoque = $array['id_estoque'];
                    $Anroproduto = $array['nroproduto'];
                    $Anomeproduto = $array['nomeproduto'];
                    $Acategoria = $array['categoria'];
                    $Aquantidade = $array['quantidade'];
                    $Afornecedor = $array['fornecedor'];
        ?>
            <div class="form-group">
                <label class="mt-1 mb-1">NRO produto</label>
                <input type="number" class="form-control" name="nroProduto" value="<?php echo $Anroproduto ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
            </div>
            <div class="form-group">
                <label class="mt-1 mb-1 ">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" value="<?php echo $Anomeproduto ?>">
            </div>

            <label class="mt-1 mb-1">Categoria</label>
            <br>
            <div class="form-group">
                <select class="form-control" name="categoria">
                    <option selected>Categoria do produto</option>
                    <option value="1">Periferico</option>
                    <option value="2">Hardware</option>
                    <option value="3">Software</option>
                    <option value="4">Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mt-1 mb-1">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value= "<?php echo $Aquantidade?>">
            </div>
            <label class="mt-1 mb-1">Fornecedor</label>
            <br>
            <div class="form-group">
                <select class="form-control" name="fornecedor">
                    <option selected>Fornecedor</option>
                    <option value="1">Login</option>
                    <option value="2">Solutis</option>
                    <option value="3">SEC</option>
                </select>
            </div>
            <br>
            <div style="text-align: right;">
            <button type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </div>
            <?php } ?>
        </form>

    </div>

    <script src="./js/bootstrap.js"></script>
</body>

</html>