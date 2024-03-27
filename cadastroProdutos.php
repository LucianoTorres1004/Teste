<?php
$produto = $_POST['cxproduto'];
$qtd = $_POST['cxqtd'];
$validade = $_POST['cxdata'];
$valor = $_POST['cxvalor'];
$marca = $_POST['cxmarca'];
include_once "factory/conexao.php";
$sql = "insert into produtos (produto, qtde, datavalidade, valor, marca) values ('$produto', '$qtd', '$validade', '$valor', '$marca')";
$result = mysqli_query($conexao,$sql);
if ($sql = true) {
    echo "<script>window.alert('Produto cadastrado!'); location.href=('formCadastro.php')</script>";
      
}
else {
    echo "<script>window.alert('Algo deu errado, tente novamente!')</script>";
}




?>