<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<title>Altera Produto</title>
<body>

<?php

include 'conectabd.php';
$Codigo =$_POST['CODIGO'];


//echo $SQL="SELECT * FROM cadastro_produtos where CODIGO=$Codigo";
$data = $my_Db_Connection->query("SELECT *FROM cadastro_produtos where CODIGO=$Codigo")->fetchAll();


foreach ($data as $row) {


?>
<form name="formulario" method="POST" action="updateproduto.php">

Código
<input type="text" name="CODIGO" value="<?php echo $Codigo;  ?>" > </br>
Tipo
<input type="text" name="TIPO" value="<?php echo $row['TIPO'];  ?>" > </br>
Cor
<input type="text" name="COR" value="<?php echo $row['COR'];  ?>"  > </br>
Tamanho
<input type="text" name="TAMANHO" value="<?php echo $row['TAMANHO'];  ?>" > </br>
Quantidade
<input type="text" name="QUANTIDADE" value="<?php echo $row['QUANTIDADE'];  ?>" > </br>
Modelo
<input type="text" name="MODELO" value="<?php echo $row['MODELO'];  ?>" > </br>
Marca
<input type="text" name="MARCA" value="<?php echo $row['MARCA'];  ?>" > </br>
Preco
<input type="text" name="PRECO" value="<?php echo $row['PRECO'];  ?>" > </br>


<input type="submit" value="Enviar"> </br>
</form>

<?php
}
?>
<br>
<hr size='3' color='Blue'>



<br>
<a href='cadastro_produtos.php'>    <<< Voltar/Cancelar >>> </a>





</body>
</html>