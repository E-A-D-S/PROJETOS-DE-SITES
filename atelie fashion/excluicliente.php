<HTML>
<HEAD>
 <TITLE>Excluir clientes</TITLE>
</HEAD>
<BODY>
<?php

 

include 'conectabd.php';

$CPF=$_POST['CPF'];





$my_Insert_Statement =
$my_Db_Connection->prepare("delete from cadastro_cliente where CPF=:CPF");



$my_Insert_Statement->bindParam(CPF, $CPF);

if ($my_Insert_Statement->execute()) {
  echo "<br>Registro Excluido com Sucesso";

 
} else
{
  echo "NÃO Excluiu";
}

?>

<br>
<a href='clientes.php'>    <<< Voltar >>> </a>
</BODY>
</HTML>