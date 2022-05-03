<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>CADASTRO DE CLIENTES</title>
	<style>
body {
	background-color: #EE82EE;
}
</style>
</head>
<body>

<b><center>CADASTRO DE CLIENTES</center></b>
<form name="formulario" method="POST" action="mostrarbdcliente.php">

<p>CPF:</p>
<input type="text" name="CPF"> </br>

<p>Nome:</p>
<input type="text" name="NOME"> </br>

<p>Telefone:</p>
<input type="text" name="TELEFONE"> </br>

<p>Email:</p>
<input type="text" name="EMAIL"> </br>

<p>Endereço:</p>
<input type="text" name="ENDERECO"> </br>
<br><br>

<input type="submit" value="Cadastrar"> </br>


</form>
<form name="formulario" method="POST" action="menu.php">
<input type="submit" value="Voltar para o menu"> </br> 
</form>






//<?php
//include 'conectabdproduto.php';



//$data = $my_Db_Connection->query("SELECT * FROM cadastro_produtos")->fetchAll();
 

//foreach ($data as $row) {
//echo "<tr><td>".$row['CODIGO']."</td>
//<td>".$row['TIPO']."</td>
//<td>".$row['COR']."</td>";
//?>

//<?php

//}

//?>

</table>
</body>
</html>