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
        <form action="./InserirProduto.php" method="POST" style="margin-top: 20px">
            <div class="form-group">
                <label class="mt-1 mb-1">NRO produto</label>
                <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto">
            </div>
            <div class="form-group">
                <label class="mt-1 mb-1 ">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome">
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
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto">
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
                <button type="submit" id="btn-cadastrar" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>

    </div>

    <script src="./js/bootstrap.js"></script>
</body>

</html>