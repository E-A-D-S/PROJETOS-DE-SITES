<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<title>Teste Orientado a Objeto</title>
<body text="orange blue">
	<style>

body {

background-image: url("http://wesco.com.br/wp-content/uploads/2015/03/10-dicas-principais-para-manter-uma-boca-saudavel-900x444.png");

background-repeat: no-repeat;

background-position: 200px 70px ;

}

</style> 
</body>	
  <center>
<form name="formulario" method="POST" action="consulta_dados.php">
<br><br><br><br><br><br><br>
<p>CLIENTE<p>
<input type="text" name="nome"><br><br>


<input type="submit" value="Enviar"><br><br>
<br>
</form>
<?php
include 'conecta_banco.php'
?>

<table border ='1'>
<tr>
<th>NOME</th>
<th>CPF</th>
<?php

if (empty($_POST['nome'])){
	$busca='';
}
else
$busca= $_POST['nome'];

$data = $my_Db_Connection->query("SELECT * FROM cadastro_cliente WHERE upper (NOME) like upper('%$busca%')")->fetchAll();


//$Count = rowCount($data);
//var_dump($Count);


//echo "linhas ".$count;

foreach ($data as $row) {
echo "<tr><td>".$row['NOME']."</td><td>". $row['CPF']."</td></tr>";
 }       

?>

</table>
</body>
</html>