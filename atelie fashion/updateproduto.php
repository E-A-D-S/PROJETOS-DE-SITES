<HTML>
<HEAD>
 <TITLE>update</TITLE>
</HEAD>
<BODY>
<?php

 

include 'conectabd.php';

//variavel de ambiente é a que tem o dolar
$CODIGO = $_POST['CODIGO'];
$TIPO = $_POST['TIPO'];
$COR = $_POST['COR'];
$TAMANHO = $_POST['TAMANHO'];
$QUANTIDADE = $_POST['QUANTIDADE'];
$MODELO = $_POST['MODELO'];
$MARCA = $_POST['MARCA'];
$PRECO = $_POST['PRECO'];






$my_Insert_Statement = $my_Db_Connection->prepare("update cadastro_produtos set CODIGO=:CODIGO, TIPO=:TIPO, COR=:COR, TAMANHO=:TAMANHO, QUANTIDADE=:QUANTIDADE, MODELO=:MODELO, MARCA=:MARCA, PRECO=:PRECO where CODIGO=:CODIGO");
// BD=:pdo
$my_Insert_Statement->bindParam(CODIGO, $CODIGO);
$my_Insert_Statement->bindParam(TIPO, $TIPO);
$my_Insert_Statement->bindParam(COR, $COR);
$my_Insert_Statement->bindParam(TAMANHO, $TAMANHO);
$my_Insert_Statement->bindParam(QUANTIDADE, $QUANTIDADE);
// o primeiro tem que ta igual o do PDO(prepare), o segundo é a variavel de ambiente.
$my_Insert_Statement->bindParam(MODELO, $MODELO);
$my_Insert_Statement->bindParam(MARCA, $MARCA);
$my_Insert_Statement->bindParam(PRECO, $PRECO);


if ($my_Insert_Statement->execute()) {
  echo "<br>Registro UPDATE  com Sucesso updateproduto.php";

 
} else
{
  echo "NÃO ALTEROU";
}

?>

<br>
<a href='estoque.php'>    <<< Voltar >>> </a>
</BODY>
</HTML>