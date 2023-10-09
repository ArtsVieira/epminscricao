<?php
// Inicialize a sessão
session_start();
date_default_timezone_set('America/Sao_Paulo');

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once "../utils/config.php";
    echo $bootstrap;
    ?>
    <title>Painel Administrador</title>
    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body style='background-color:lightsteelblue'>
    <div class="wrapper container d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center">
            <h3 class="">Oi, <b>
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </b>. Bem vindo ao nosso site.</h3>

            <h3 class="">Lista de Inscrições<h3>
        </div>

    <?php


    # Limita o número de registros a serem mostrados por página
    $limite = 5;

    # Se pg não existe atribui 1 a variável pg
    $pg = (isset($_GET['pg'])) ? (int) $_GET['pg'] : 1;

    # Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
    $inicio = ($pg * $limite) - $limite;

    # seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
    $sql = "SELECT * FROM registrations ORDER BY id desc LIMIT " . $inicio . ", " . $limite;

    try {

        $query = $pdo->prepare($sql);
        $query->execute();

    } catch (PDOexception $error_sql) {

        echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

    }
    echo '<table class="table">
    <tr>
    <th>Inscrição</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Data Cadastro</th>
    <th>#</th>
    </tr>';
    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) { 
        $date  = strtotime($linha['created_at']);
        $date_formated = date('d/m/Y H:i:s',$date);
        ?>
            <tr>
                <td>
                    <?= $linha['id'].'/'.substr($linha['created_at'],0,4) ?>
                </td>
                <td>
                    <?= $linha['name'] ?>
                </td>
                <td>
                    <?= $linha['cpf'] ?>
                </td>
                <td>
                    <?= $date_formated ?>
                </td>
                <td>
                <a href=<?= "zip_download.php?id=".$linha['id'] ?>>
                <img src="../assets/icons8-zip-48.png" style="width:32px;height:32px;">
                </a>
                </td>
                                
            </tr>

        <?php }
    echo '</table>';
    # seleciona o total de registros  
    $sql_Total = 'SELECT id FROM registrations';

    try {

        $query_Total = $pdo->prepare($sql_Total);
        $query_Total->execute();

        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);

        # conta quantos registros tem no banco de dados
        $query_count = $query_Total->rowCount();

        # calcula o total de paginas a serem exibidas
        $qtdPag = ceil($query_count / $limite);

    } catch (PDOexception $error_Total) {

        echo 'Erro ao retornar os Dados. ' . $error_Total->getMessage();

    }

    # Cria os links para navegação das paginas
    //echo "<div class='relax h30'></div>";
    # echo '<a href="busca?pg=1">PRIMEIRA PÁGINA</a>&nbsp;';
    echo '<ul id="paginacao">';
    echo '<a class="anterior" href="/admin/welcome.php?pg=1">Anterior</a>&nbsp;';

    if ($qtdPag > 1 && $pg <= $qtdPag) {

        for ($i = 1; $i <= $qtdPag; $i++) {

            if ($i == $pg) {

                echo "<a class='ativo'>" . $i . "</a>&nbsp;";

            } else {

                echo "<a href='/admin/welcome.php?pg=$i'>" . $i . "</a>&nbsp; ";

            }

        }

    }

    echo "<a class='proxima' href='/admin/welcome.php?pg=$qtdPag'>Próxima</a>";

    ?>
    <br>   <br>   <br>
                <p>
                <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
                <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
            </p>
            </div>        
</body>

</html>