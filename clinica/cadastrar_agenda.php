<HTML>
<HEAD>
<TITLE>New Document</TITLE>
</HEAD>
<BODY>
 <?php
include 'conecta_banco.php';
// Set the variables for the person we want to add to the database
ECHO $NOME =$_POST['NOME_PACIENTE'];
ECHO $TRATAMENTO = $_POST['TIPO_TRATAMENTO'];
ECHO $DATA = $_POST['DATA_CONSULTA'];
ECHO $HORARIO = $_POST['HORARIO_CONSULTA'];
ECHO $PAGAMENTO = $_POST['FORMA_PAGAMENTO'];
ECHO $VALOR = $_POST['VALOR_CONSULTA'];
// Here we create a variable that calls the prepare() method of the database object
// The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name
$my_Insert_Statement =$my_Db_Connection->prepare("INSERT INTO cadastro_clinica (NOME_PACIENTE, TIPO_TRATAMENTO, DATA_CONSULTA,HORARIO_CONSULTA, FORMA_PAGAMENTO, VALOR_CONSULTA) VALUES (:NOME,:TRATAMENTO,:DATA,:HORARIO,:PAGAMENTO, :VALOR)");
// Now we tell the script which variable each placeholder actually refers to using the bindParam() method
// First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
$my_Insert_Statement->bindParam(NOME, $NOME);
$my_Insert_Statement->bindParam(TRATAMENTO, $TRATAMENTO);
$my_Insert_Statement->bindParam(DATA, $DATA);
$my_Insert_Statement->bindParam(HORARIO,$HORARIO);
$my_Insert_Statement->bindParam(PAGAMENTO, $PAGAMENTO);
$my_Insert_Statement->bindParam(VALOR, $VALOR);
// Execute the query using the data we just defined
// The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
if ($my_Insert_Statement->execute()) {
echo "New record created successfully";
} else {
echo "Unable to create record";
}
// At this point you can change the data of the variables and execute again to add more data to the database
//$first_Name = "John";
//$last_Name = "Smith";
//$email = "john.smith@email.com";
//$my_Insert_Statement->execute();
// Execute again now that the variables have changed
//if ($my_Insert_Statement->execute()) {
// echo "New record created successfully";
//} else {
// echo "Unable to create record";
//}

?>
</BODY>
</HTML>