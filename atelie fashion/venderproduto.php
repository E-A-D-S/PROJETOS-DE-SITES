<HTML>
<HEAD>
 <TITLE>Excluir produtos</TITLE>
</HEAD>
<BODY>
<?php

 

include 'conectabd.php';

$Codigo=$_POST['CODIGO'];





$my_Insert_Statement =
$my_Db_Connection->prepare("update cadastro_produtos SET QUANTIDADE=QUANTIDADE -1 WHERE CODIGO =:CODIGO ");



$my_Insert_Statement->bindParam(CODIGO, $Codigo);

if ($my_Insert_Statement->execute()) {
  echo "<br>Venda efetuada com Sucesso";

 
} else
{
  echo "NÃO deu";
}

?>

<br>
<a href='estoque.php'>    <<< Voltar >>> </a>
</BODY>
</HTML>