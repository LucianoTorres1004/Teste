<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>->> Cadastro de produtos <<-</title>
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">

</head>
<body>
    <form action="cadastroProdutos.php" method="POST">
    <h3>CADASTRAR PRODUTOS</h3>
    <label for="">Produto:</label><input class="cxproduto" type="text" name="cxproduto" id="produto"><br>
    <label for="">Quantidade:</label><input class="cxqtd" type="number" name="cxqtd"><br>
    <label for="">Validade:</label><input class="cxdata" type="date" name="cxdata"><br>
    <label for="">Valor:</label><input class="cxvalor" type="number" name="cxvalor" min="0" max="100" step=".01"><br>
    <label for="">Marca:</label><input class="cxmarca" type="text" name="cxmarca"><br>
    <input class="botao" type="submit" value="Cadastrar">
    </form>
</body>
</html>