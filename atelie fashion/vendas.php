<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title> ESTOQUE ATUAL</title>
	<style>
body {
	background-color: #EE82EE;
		

}
</style>
</head>
<body>


<b><center>ESTOQUE ATUAL</center></b> <br>

<table border ='1' style= "width:100%"> 
<tr>
<th>CODIGO</th>
<th>TIPO</th>
<th>COR</th>
<th>TAMANHO</th>
<th>QUANTIDADE</th>
<th>MODELO</th>
<th>MARCA</th>
<th>PRECO</th>

</tr>



<?php
include 'conectabd.php';



$data = $my_Db_Connection->query("SELECT * FROM cadastro_produtos")->fetchAll();
 

foreach ($data as $row) {
echo "<tr> 
<td>".$row['CODIGO']."</td>
<td>".$row['TIPO']."</td>
<td>".$row['COR']."</td>
<td>".$row['TAMANHO']."</td>
<td>".$row['QUANTIDADE']."</td>
<td>".$row['MODELO']."</td>
<td>".$row['MARCA']."</td>
<td>".$row['PRECO']."</td>
";

?> 
<td>
      <form name="Excluir" method="POST" action="venderproduto.php">
        <input type='text' name='CODIGO' value=''>
        <input type='submit' name='BOTAOVENDER' value=' VENDER'>
      
    </form>
</td></tr>

<?php
    }
?>




</table>
</body>
</html>