<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>CADASTRO DE PRODUTOS</title>
	<style>
body {
	background-color: #EE82EE;
}
</style>
</head>
<body>

<b><center>CADASTRO DE PRODUTOS</center></b>
<form name="formulario" method="POST" action="mostrarbdproduto.php">

<p>Código:</p>
<input type="text" name="CODIGO"> </br>

<p>Tipo:</p>
<input type="text" name="TIPO"> </br>

<p>Cor:</p>
<input type="text" name="COR"> </br>

<p>Tamanho:</p>
<input type="text" name="TAMANHO"> </br>

<p>Quantidade:</p>
<input type="text" name="QUANTIDADE"> </br>

<p>Modelo:</p>
<input type="text" name="MODELO"> </br>

<p>Marca:</p>
<input type="text" name="MARCA"> </br>

<p>Preço:</p>
<input type="text" name="PRECO"> </br>
<br><br>

<input type="submit" value="Cadastrar"> </br>


</form>
<form name="formulario" method="POST" action="menu.php">
<input type="submit" value="Voltar para o menu"> </br> 
</form>


</table>
</body>
</html>