<?php
    // localhost 
    
    $dbname = 'epminscricao';
    $host = 'localhost';
    $username = 'root'; //forminsc
    $password = 'Artdem10!'; //En|PS8rRTM6L{
/*
    $dbname = 'epminscricao';
    $host = 'mysql835.umbler.com';
    $username = 'epminscricao'; 
    $password = 'En|PS8rRTM6L{';        
*/

    date_default_timezone_set('America/Sao_Paulo');

    try {

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,
    
    $password);
    
        //echo "Conectado a $dbname em $host com sucesso.";
    
    } catch (PDOException $pe) {
    
        die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
    
    }


    $bootstrap = '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="css/theme.css">';
     
?>