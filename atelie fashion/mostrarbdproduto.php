
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title> CADASTRO CONCLUIDO</title>
	<style>
body {
	background-color: #EE82EE;
		

}
</style>

</HEAD>
<BODY>
<?php

include 'conectabd.php';

$Codigo = $_POST['CODIGO'];
$Tipo = $_POST['TIPO'];
$Cor = $_POST['COR'];
$Tamanho = $_POST['TAMANHO'];
$Quantidade = $_POST['QUANTIDADE'];
$Modelo = $_POST['MODELO'];
$Marca = $_POST['MARCA'];
$Preco = $_POST['PRECO'];

$my_Insert_Statement =$my_Db_Connection->prepare("INSERT INTO cadastro_produtos (CODIGO, TIPO, COR, TAMANHO, QUANTIDADE, MODELO, MARCA, PRECO) VALUES (:codigo, :tipo, :cor, :tamanho, :quantidade, :modelo, :marca, :preco)");


$my_Insert_Statement->bindParam(codigo, $Codigo);
$my_Insert_Statement->bindParam(tipo, $Tipo);
$my_Insert_Statement->bindParam(cor, $Cor);
$my_Insert_Statement->bindParam(tamanho, $Tamanho);
$my_Insert_Statement->bindParam(quantidade, $Quantidade);
$my_Insert_Statement->bindParam(modelo, $Modelo);
$my_Insert_Statement->bindParam(marca, $Marca);
$my_Insert_Statement->bindParam(preco, $Preco);


if ($my_Insert_Statement->execute())

{
echo "<h5><center>CADASTRO CONCLUIDO </center> </h5>";
}
else
{
echo ("Cadastro não foi concluido");
}
 
?>
<a href='cadastroprodutos.php'>    <<< Cadastrar novos produtos>>> </a> <br> <br>
<a href='estoque.php'>    <<< Ver estoque>>> </a>
</BODY>
</HTML>