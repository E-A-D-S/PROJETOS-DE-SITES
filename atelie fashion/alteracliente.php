<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<title>Altera Cliente</title>
<body>

<?php

include 'conectabd.php';
$CPF =$_POST['CPF'];


//echo $SQL="SELECT * FROM cadastro_produtos where CODIGO=$Codigo";
$data = $my_Db_Connection->query("SELECT *FROM cadastro_cliente where CPF=$CPF")->fetchAll();


foreach ($data as $row) {


?>
<form name="formulario" method="POST" action="updatecliente.php">

CPF
<input type="text" name="CPF" value="<?php echo $CPF;  ?>" > </br>
Nome
<input type="text" name="NOME" value="<?php echo $row['NOME'];  ?>" > </br>
Telefone
<input type="text" name="TELEFONE" value="<?php echo $row['TELEFONE'];  ?>"  > </br>
Email
<input type="text" name="EMAIL" value="<?php echo $row['EMAIL'];  ?>" > </br>
Endereço
<input type="text" name="ENDERECO" value="<?php echo $row['ENDERECO'];  ?>" > </br>


<input type="submit" value="Enviar"> </br>
</form>

<?php
}
?>
<br>
<hr size='3' color='Blue'>



<br>
<a href='clientes.php'>    <<< Voltar/Cancelar >>> </a>





</body>
</html>