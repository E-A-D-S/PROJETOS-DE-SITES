<HTML>
<HEAD>
 <TITLE>Excluir produtos</TITLE>
</HEAD>
<BODY>
<?php

 

include 'conectabd.php';

$Codigo=$_POST['CODIGO'];





$my_Insert_Statement =
$my_Db_Connection->prepare("delete from cadastro_produtos where CODIGO=:CODIGO");



$my_Insert_Statement->bindParam(CODIGO, $Codigo);

if ($my_Insert_Statement->execute()) {
  echo "<br>Registro Excluido com Sucesso";

 
} else
{
  echo "NÃO Excluiu";
}

?>

<br>
<a href='estoque.php'>    <<< Voltar >>> </a>
</BODY>
</HTML>