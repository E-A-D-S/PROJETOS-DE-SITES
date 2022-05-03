<?php
$servername = "localhost";
$database = "atelie_fashion";
$username = "root";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";

$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
$my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
} catch (PDOException $error) {
echo 'Connection error: ' . $error->getMessage();
}
//echo "Alteração autorizada";
?>