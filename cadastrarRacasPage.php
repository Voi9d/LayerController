<!DOCTYPE html>

<html>
    <head>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="controller/racasControler.php">
        <div class="container">
        <h1>Cadastro de raças</h1>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="form-group">
            <label for="faixaPreco">Faixa de Preço:</label>
            <input type="text" class="form-control" id="faixaPreco" name="faixaPreco">
        </div>
        <div class="form-group">
            <label for="faixaPeso">Faixa de Peso:</label>
            <input type="text" class="form-control" id="faixaPeso" name="faixaPeso">
        </div>
        <br>
            <input type="submit" class="btn btn-success" value="Salvar">
</div>
        </form>
    </body>
</html>
