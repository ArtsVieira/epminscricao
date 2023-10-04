<?php
// Conecta-se com o MySQLs
require_once 'config.php';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username,

$password);

    echo "Conectado a $dbname em $host com sucesso.";

} catch (PDOException $pe) {

    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());

}

// Seleciona banco de dados
//mysql_select_db("noticias");
?>