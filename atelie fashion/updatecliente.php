<HTML>
<HEAD>
 <TITLE>update</TITLE>
</HEAD>
<BODY>
<?php

 

include 'conectabd.php';

//variavel de ambiente é a que tem o dolar
$Cpf = $_POST['CPF'];
$Nome = $_POST['NOME'];
$Telefone = $_POST['TELEFONE'];
$Email = $_POST['EMAIL'];
$Endereco = $_POST['ENDERECO'];


$my_Insert_Statement = $my_Db_Connection->prepare("update cadastro_cliente set CPF=:Cpf, NOME=:Nome, TELEFONE=:Telefone, EMAIL=:Email, ENDERECO=:Endereco where CPF=:Cpf");
// BD=:pdo
$my_Insert_Statement->bindParam(Cpf, $Cpf);
$my_Insert_Statement->bindParam(Nome, $Nome);
$my_Insert_Statement->bindParam(Telefone, $Telefone);
$my_Insert_Statement->bindParam(Email, $Email);
$my_Insert_Statement->bindParam(Endereco, $Endereco);
// o primeiro tem que ta igual o do PDO(prepare), o segundo é a variavel de ambiente.


if ($my_Insert_Statement->execute()) {
  echo "<br>Registro UPDATE  com Sucesso updateproduto.php";

 
} else
{
  echo "NÃO ALTEROU";
}

?>

<br>
<a href='clientes.php'>    <<< Voltar >>> </a>
</BODY>
</HTML>