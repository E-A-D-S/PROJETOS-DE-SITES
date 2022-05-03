<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title> MEUS CLIENTES</title>
	<style>
body {
	background-color: #EE82EE;
		

}
</style>
</head>
<body>

<b><center>MEUS CLIENTES</center></b> <br>

<table border ='1' style= "width:100%"> 
<tr>
<th>CPF</th>
<th>NOME</th>
<th>TELEFONE</th>
<th>EMAIL</th>
<th>ENDERECO</th>


</tr>



<?php
include 'conectabd.php';



$data = $my_Db_Connection->query("SELECT * FROM cadastro_cliente")->fetchAll();
 

foreach ($data as $row) {
echo "<tr> 
<td>".$row['CPF']."</td>
<td>".$row['NOME']."</td>
<td>".$row['TELEFONE']."</td>
<td>".$row['EMAIL']."</td>
<td>".$row['ENDERECO']."</td>

";

?>
<td>
    <form name="Altera" method="POST" action="alteracliente.php">
       <input type='hidden' name='CPF' value='<?php echo $row['CPF']?>'>
       <input type='image' src='lapis.jpg' width='30' height='30'> </td>
    </form>
</td>
<td>
      <form name="Excluir" method="POST" action="excluicliente.php">
       <input type='Hidden' name='CPF' value='<?php echo $row['CPF']?>'>
       <input type='image' src='excluir.png' width='30' height='30'> </td>
    </form>
</td></tr>
<?php
    }
?>
<br>



</table>

<br>
<a href = 'cadastroclientes.php'>     <<< Cadastrar clientes >>> </a>
<br>
<a href = 'menu.php'>     <<< Voltar >>> </a>
</body>
</html>