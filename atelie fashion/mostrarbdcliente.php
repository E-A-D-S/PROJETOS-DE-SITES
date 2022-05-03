<HTML>
<HEAD>
<TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php

include 'conectabd.php';

$CODIGO = $_POST['CODIGO'];



$my_Update_Statement =$my_Db_Connection->prepare("UPDATE cadastro_produtos SET QUANTIDADE=QUANTIDADE -1 WHERE CODIGO =$CODIGO ");





if ($my_Update_Statement->execute())

{
echo("<h2>Venda concluida</h2>");
}
else
{
echo ("venda não foi concluida");
}
 
?>
</BODY>
</HTML>