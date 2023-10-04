<?php
require_once 'utils/conexao.php';
echo $conn->getAttribute(PDO::ATTR_CLIENT_VERSION);
echo "TESTE";
?>