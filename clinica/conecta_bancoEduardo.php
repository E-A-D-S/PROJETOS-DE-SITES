<?php
/* Script que vai ser sempre chamado com inlude na hora de conectar com o banco */

$conec = mysqli_connect("localhost", "root", "");
 // $conec = vari�vel que vai conectar no MySQL
 // MYSQL_CONNECT = php + mysqL
// localhot local do Banco
// root usuario de acesso ao banco
// "" --> senha de acesso ao banco (xampp / wamP) LOCAL SENHA VAZIA

if ($conec) {
  $bco = mysqli_select_db($conec,"cliente");  
  // $ bco variavel que vai selecionar o banco
  if ($bco) {
    $conectou = 1 ;
  } else {
    echo "Banco de dados petshopcapivara NÃO encontrado !!!" ; // testa a conex�o no Banco
  }
} else {
  echo "Erro Durante a conexão !!!!" ; // testa a conec MySQL
}
//garantir uso UTF8
$result = mysqli_set_charset($conec,"utf8");

?>