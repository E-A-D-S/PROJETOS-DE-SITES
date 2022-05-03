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
<form name="formulario" method="POST" action="dados_consulta.php">
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
<th>NOME DO PACIENTE</th>
<th>TIPO DE TRATAMENTO</th>
<th>DATA DA CONSULTA</th>
<th>HORÁRIO DA CONSULTA</th>
<th>FORMA DE PAGAMENTO</th>
<th>VALOR</th>
<?php

if (empty($_POST['nome'])){
	$busca='';
}
else
$busca= $_POST['nome'];

$data = $my_Db_Connection->query("SELECT * FROM cadastro_clinica WHERE upper (NOME_PACIENTE) like upper('%$busca%')
	                                                             or upper(TIPO_TRATAMENTO)  LIKE upper('%$busca%')
	                                                             OR upper (DATA_CONSULTA) like upper('%$busca%') 
	                                                             or upper (HORARIO_CONSULTA) like upper('%$busca%')
	                                                             OR upper (FORMA_PAGAMENTO) like upper('%$busca%')
	                                                             or upper (VALOR_CONSULTA) like upper('%$busca%')")->fetchAll();


//$Count = rowCount($data);
//var_dump($Count);


//echo "linhas ".$count;

foreach ($data as $row) {
echo "<tr><td>".$row['NOME_PACIENTE']."</td><td>".$row['TIPO_TRATAMENTO']."</td><td>".$row['DATA_CONSULTA'].
"</td><td>".$row['HORARIO_CONSULTA']."</td><td>".$row['FORMA_PAGAMENTO']."</td><td>".$row['VALOR_CONSULTA']."</td></tr>";
 }       


?>

</table>
</body>
</html>