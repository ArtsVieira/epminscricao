<?php

// Incluir arquivo de configuração
require_once "utils/config.php";
require_once "utils/funcoes.php";
//echo $_SERVER['DOCUMENT_ROOT'];
//echo realpath(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) );
//echo $_SERVER["REQUEST_METHOD"];

//$passo = trim($_GET['passos']);
// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $passo = "PASSO1";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar nova senha
    //if(empty(trim($_POST["new_password"]))){
    //    $new_password_err = "Por favor insira a nova senha.";     
    //} elseif(strlen(trim($_POST["new_password"])) < 6){
    //    $new_password_err = "A senha deve ter pelo menos 6 caracteres.";
    //} else{
    //    $new_password = trim($_POST["new_password"]);
    //}

    // Validar e confirmar a senha
    //if(empty(trim($_POST["confirm_password"]))){
    //    $confirm_password_err = "Por favor, confirme a senha.";
    //} else{
    //    $confirm_password = trim($_POST["confirm_password"]);
    //    if(empty($new_password_err) && ($new_password != $confirm_password)){
    //        $confirm_password_err = "A senha não confere.";
    //    }
    // }

    $passo = trim($_POST['passos']);
    //echo $passo;
    if ($passo == "PASSO1") {
        $passo = "PASSO2";
    } elseif ($passo == "PASSO2") {
        $passo = "PASSO3";
        $name = trim($_POST["name"]);
        $father_name = trim($_POST['father_name']);
        $mother_name = trim($_POST['mother_name']);
        $birth_date = date('Y-m-d', strtotime(trim($_POST['birth_date'])));
        //        echo $birth_date;

        $place_of_birth_city = trim($_POST['place_of_birth_city']);
        $place_of_birth_state = trim($_POST['place_of_birth_state']);
        $rg_num = trim($_POST['rg_num']);
        $rg_state = trim($_POST['rg_state']);
        $rg_emissor = trim($_POST['rg_emissor']);
        $cpf = trim($_POST['cpf']);
        $address = trim($_POST['address']);
        $country = trim($_POST['country']);
        $city = trim($_POST['city']);
        $zipcode = trim($_POST['zipcode']);
        $state = trim($_POST['state']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $education_level = trim($_POST['education_level']);
        $age = trim($_POST['age']);
        $height = trim($_POST['height']);
        $eye_color = trim($_POST['eye_color']);
        //echo '<input type="hidden" id="passos" name="passos" value="PASSO3">';  

        $filename1 = "";
        $filename2 = "";
        $filename3 = "";
        //echo $_SERVER['DOCUMENT_ROOT'];
        //$diretorioBase = 'C:\work\php\forminsc\admin\pdf\\';
        $diretorioBase = $_SERVER['DOCUMENT_ROOT'];
        $i = 0;
        foreach ($_FILES["arquivos"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $i++;
                $tmp_name = $_FILES["arquivos"]["tmp_name"][$key];
                // basename() pode prevenir ataques de percorrer o sistema de arquivos,
                // mas mais validações são necessárias
                $filename = basename($_FILES["arquivos"]["name"][$key]);
                move_uploaded_file($tmp_name, $diretorioBase . $filename);
                if ($i == 1) {
                    $filename1 = $filename;
                } elseif ($i == 2) {
                    $filename2 = $filename;
                } elseif ($i == 3) {
                    $filename3 = $filename;
                }
                //echo $tmp_name;
            }
        }

    } elseif ($passo == "PASSO3") {
        $passo = "PASSO4";
        $name = trim($_POST["name_confirmed"]);
        $father_name = trim($_POST['father_name_confirmed']);
        $mother_name = trim($_POST['mother_name_confirmed']);
        $birth_date = trim($_POST['birth_date_confirmed']); //date('Y-m-d', strtotime(trim($_POST['birth_date_confirmed'])));
        //echo $birth_date;

        $place_of_birth_city = trim($_POST['place_of_birth_city_confirmed']);
        $place_of_birth_state = trim($_POST['place_of_birth_state_confirmed']);
        //echo $place_of_birth_state;
        $rg_num = trim($_POST['rg_num_confirmed']);
        $rg_state = trim($_POST['rg_state_confirmed']);
        $rg_emissor = trim($_POST['rg_emissor_confirmed']);
        $cpf = trim($_POST['cpf_confirmed']);
        $address = trim($_POST['address_confirmed']);
        $country = trim($_POST['country_confirmed']);
        $city = trim($_POST['city_confirmed']);
        $zipcode = trim($_POST['zipcode_confirmed']);
        $state = trim($_POST['state_confirmed']);
        $phone = trim($_POST['phone_confirmed']);
        $email = trim($_POST['email_confirmed']);
        $education_level = trim($_POST['education_level_confirmed']);
        $age = trim($_POST['age_confirmed']);
        $height = trim($_POST['height_confirmed']);
        $eye_color = trim($_POST['eye_color_confirmed']);
        //echo $_SERVER['DOCUMENT_ROOT']; 


        $created_at = date('Y-m-d H:i:s');
        //echo $created_at;

        $filename1 = trim($_POST["filename1_confirmed"]);
        $filename2 = trim($_POST["filename2_confirmed"]);
        $filename3 = trim($_POST["filename3_confirmed"]);

        //$diretorioBase = 'C:\work\php\forminsc\admin\pdf\\';
        /*
        $i = 0;
        foreach ($_FILES["arquivos"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $i++;
                $tmp_name = $_FILES["arquivos"]["tmp_name"][$key];
                // basename() pode prevenir ataques de percorrer o sistema de arquivos,
                // mas mais validações são necessárias
                $filename = basename($_FILES["arquivos"]["name"][$key]);
                move_uploaded_file($tmp_name, $diretorioBase . $filename);
                if ($i == 1) {
                    $filename1 = '/admin/pdf/' . $filename;
                } elseif ($i == 2) {
                    $filename2 = '/admin/pdf/' . $filename;
                } elseif ($i == 3) {
                    $filename3 = '/admin/pdf/' . $filename;
                }
                //echo $tmp_name;
            }
        }        
        */
        // Verifique os erros de entrada antes de atualizar o banco de dados

        if (!empty($name)) {

            // Prepare uma declaração de atualização
            //$sql = "UPDATE users SET password = :password WHERE id = :id";
            $sql = "INSERT INTO forminsc.registrations
                    (id, name, father_name, mother_name, birth_date, place_of_birth_city, place_of_birth_state, rg_num, rg_state, rg_emissor, cpf, address, 
                    country, city, zipcode, state, phone, email, education_level, age, height, eye_color,created_at,file1,file2,file3)
                    VALUES(0, :name, :father_name, :mother_name, :birth_date, :place_of_birth_city, :place_of_birth_state, :rg_num,:rg_state, :rg_emissor, :cpf, :address, 
                    :country, :city, :zipcode, :state, :phone, :email, :education_level, :age, :height, :eye_color,:created_at,:file1,:file2,:file3)";

            if ($stmt = $pdo->prepare($sql)) {
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":name", $name, PDO::PARAM_STR);
                $stmt->bindParam(":father_name", $father_name, PDO::PARAM_STR);
                $stmt->bindParam(":mother_name", $mother_name, PDO::PARAM_STR);
                $stmt->bindParam(":birth_date", $birth_date);
                $stmt->bindParam(":place_of_birth_city", $place_of_birth_city, PDO::PARAM_STR);
                $stmt->bindParam(":place_of_birth_state", $place_of_birth_state, PDO::PARAM_STR);
                $stmt->bindParam(":rg_num", $rg_num, PDO::PARAM_INT);
                $stmt->bindParam(":rg_state", $rg_state, PDO::PARAM_STR);
                $stmt->bindParam(":rg_emissor", $rg_emissor, PDO::PARAM_STR);
                $stmt->bindParam(":cpf", $cpf, PDO::PARAM_INT);
                $stmt->bindParam(":address", $address, PDO::PARAM_STR);
                $stmt->bindParam(":country", $country, PDO::PARAM_STR);
                $stmt->bindParam(":city", $city, PDO::PARAM_STR);

                $stmt->bindParam(":zipcode", $zipcode, PDO::PARAM_STR);
                $stmt->bindParam(":state", $state, PDO::PARAM_STR);
                $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->bindParam(":education_level", $education_level, PDO::PARAM_STR);
                $stmt->bindParam(":age", $age, PDO::PARAM_INT);
                $altura = str_replace(',','.',$height);
                $stmt->bindParam(":height", $altura);
                $stmt->bindParam(":eye_color", $eye_color, PDO::PARAM_STR);
                $stmt->bindParam(":file1", $filename1, PDO::PARAM_STR);
                $stmt->bindParam(":file2", $filename2, PDO::PARAM_STR);
                $stmt->bindParam(":file3", $filename3, PDO::PARAM_STR);

                //Data criação Registro
                $stmt->bindParam(":created_at", $created_at);

                // Tente executar a declaração preparada
                if ($stmt->execute()) {
                    //echo "CADASTRO_CORRETO";
                    $ultimoid = $pdo->lastInsertId();
                    //echo $ultimoid;
                    //exit();
                } else {
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }

        // Fechar conexão
        unset($pdo);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    require_once "utils/config.php";
    echo $bootstrap;
    ?>

    <link rel="stylesheet" type="text/css" href="/css/print.css" media="print" />

    <title>Inscrição</title>
    <style>
        .wrapper {
            width: 360px;
            padding: 20px;
        }

        .tituloBrancoNegrito {
            color: white
        }
    </style>
    <script type="text/javascript">
/*
        app.use(function(req, res, next) {
            res.header("Access-Control-Allow-Origin", "*");
            res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
            next();
        });        
*/
        window.onload = function () {
            window.scrollTo(0, 0);
        };

        function goBack() {
            history.back();
            //location.href = "#";
            window.scrollTo(0, 0);
        }
        const handlePhone = (event) => {
            let input = event.target
            input.value = phoneMask(input.value)
        }

        const phoneMask = (value) => {
            if (!value) return ""
            value = value.replace(/\D/g, '')
            value = value.replace(/(\d{2})(\d)/, "($1) $2")
            value = value.replace(/(\d)(\d{4})$/, "$1-$2")
            return value
        }

        $(document).ready(function () {

            $("#zipcode").focusout(function () {
                //Início do Comando AJAX
                $.ajax({
                    //O campo URL diz o caminho de onde virá os dados
                    //É importante concatenar o valor digitado no CEP
                    url: 'https://viacep.com.br/ws/' + $(this).val() + '/json',
                    //Aqui você deve preencher o tipo de dados que será lido,
                    //no caso, estamos lendo JSON.
                    dataType: 'json',
                    //SUCESS é referente a função que será executada caso
                    //ele consiga ler a fonte de dados com sucesso.
                    //O parâmetro dentro da função se refere ao nome da variável
                    //que você vai dar para ler esse objeto.
                    success: function (resposta) {
                        //Agora basta definir os valores que você deseja preencher
                        //automaticamente nos campos acima.
                        $("#address").val(resposta.logradouro);
                        //$("#complemento").val(resposta.complemento);
                        $("#country").val(resposta.bairro);
                        $("#city").val(resposta.localidade);
                        $("#state").val(resposta.uf);
                        //Vamos incluir para que o Número seja focado automaticamente
                        //melhorando a experiência do usuário
                        $("#address").focus();
                    }
                });
            });
        });


    </script>
</head>

<body>

    <form action="registration.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="passos" name="passos" value="<?php echo $passo ?>">
        <input type="hidden" id="name_confirmed" name="name_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $name;
        } ?>">
        <input type="hidden" id="father_name_confirmed" name="father_name_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $father_name;
        } ?>">
        <input type="hidden" id="mother_name_confirmed" name="mother_name_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $mother_name;
        } ?>">
        <input type="hidden" id="birth_date_confirmed" name="birth_date_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $birth_date;
        } ?>">
        <input type="hidden" id="place_of_birth_city_confirmed" name="place_of_birth_city_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $place_of_birth_city;
        } ?>">
        <input type="hidden" id="place_of_birth_state_confirmed" name="place_of_birth_state_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $place_of_birth_state;
        } ?>">
        <input type="hidden" id="rg_num_confirmed" name="rg_num_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $rg_num;
        } ?>">
        <input type="hidden" id="rg_state_confirmed" name="rg_state_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $rg_state;
        } ?>">
        <input type="hidden" id="rg_emissor_confirmed" name="rg_emissor_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $rg_emissor;
        } ?>">
        <input type="hidden" id="cpf_confirmed" name="cpf_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $cpf;
        } ?>">
        <input type="hidden" id="address_confirmed" name="address_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $address;
        } ?>">
        <input type="hidden" id="country_confirmed" name="country_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $country;
        } ?>">
        <input type="hidden" id="city_confirmed" name="city_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $city;
        } ?>">
        <input type="hidden" id="zipcode_confirmed" name="zipcode_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $zipcode;
        } ?>">
        <input type="hidden" id="state_confirmed" name="state_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $state;
        } ?>">
        <input type="hidden" id="phone_confirmed" name="phone_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $phone;
        } ?>">
        <input type="hidden" id="email_confirmed" name="email_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $email;
        } ?>">
        <input type="hidden" id="education_level_confirmed" name="education_level_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $education_level;
        } ?>">
        <input type="hidden" id="age_confirmed" name="age_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $age;
        } ?>">
        <input type="hidden" id="height_confirmed" name="height_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $height;
        } ?>">
        <input type="hidden" id="eye_color_confirmed" name="eye_color_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $eye_color;
        } ?>">

        <input type="hidden" id="filename1_confirmed" name="filename1_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $filename1;
        } ?>">
        <input type="hidden" id="filename2_confirmed" name="filename2_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $filename2;
        } ?>">
        <input type="hidden" id="filename3_confirmed" name="filename3_confirmed" value="<?php if ($passo == "PASSO3") {
            echo $filename3;
        } ?>">

        <input type="hidden" id="id" name="id" value="<?php if ($passo == "PASSO3") {
            echo $ultimoid;
        } ?>">        

        <div class="container-fluid">
            <div class="row justify-content-center">
                <table width="100%" border="0" align="center" cellspacing="0">
                    <tbody>
                        <tr>
                            <td width="20%" border="0" bgcolor="#161E4E"></td>
                            <td width="60%" border="0" bgcolor="#161E4E">
                                <div align="center">
                                    <p class="style1"><span class="tituloBrancoNegrito">PROVAR 2023/2024</span><br>
                                        <br>
                                        <span class="tituloBrancoNegrito">TRANSFERÊNCIA - 3ª Fase</span>
                                    </p>
                                </div>
                            </td>
                            <td width="20%" border="0" bgcolor="#161E4E"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cabecalho">
                <div class="row justify-content-center">
                    <div class="col text-center" <?php if ($passo == "PASSO1") {
                        echo 'style="background-color:lightgoldenrodyellow"';
                    } ?>>
                        INSTRUÇÕES
                    </div>
                    <div class="col text-center" <?php if ($passo == "PASSO2") {
                        echo 'style="background-color:lightgoldenrodyellow"';
                    } ?>>
                        PREENCHIMENTO DO FORMULÁRIO DE INSCRIÇÃO

                    </div>
                    <div class="col text-center" <?php if ($passo == "PASSO3") {
                        echo 'style="background-color:lightgoldenrodyellow"';
                    } ?>>
                        CONFIRMAÇÃO DOS DADOS

                    </div>
                    <div class="col text-center" <?php if ($passo == "PASSO4") {
                        echo 'style="background-color:lightgoldenrodyellow"';
                    } ?>>
                        FIM DO PROCESSO DE INSCRIÇÃO

                    </div>
                </div>
            </div>

            <div class="Parte1" <?php if ($passo != "PASSO1") {
                echo 'style="display:none"';
            } ?>>
                <div class="row justify-content-center cab_cad">
                    <div class="col-9 text-center">
                        Antes de efetuar a sua inscrição, leia as instruções abaixo:
                    </div>
                </div>
                <br>
                <div class="row texto_inicial">
                    <div class="col-12">
                        <p>
                            • Preencha atentamente o Formulário de Inscrição;
                            <p />
                        <p>
                            • A barra acima indica o andamento processo. Sua inscrição só será enviada após a
                            confirmação dos dados, quando você estiver na tela "Fim do Processo de Inscrição";
                            <p />
                        <p>
                            • Os dados informados pelo candidato no formulário de inscrição, como nome completo, CPF e
                            data de nascimento, deverão corresponder aos dados que constam na base de dados oficial da
                            Receita Federal, sendo que a relação das inscrições homologadas será divulgada com o nome
                            vinculado ao CPF informado no ato da inscrição. Para consultar as informações que constam na
                            base de dados da Receita Federal, o candidato poderá acessar o link
                            https://servicos.receita.fazenda.gov.br/Servicos/CPF/ConsultaSituacao/ConsultaPublica.asp.
                            <p />
                        <p>
                            • Quando concluir a inscrição, imprima uma via do Formulário de Inscrição e do Boleto de
                            Pagamento;
                            <p />
                        <p>
                            • Efetue o pagamento do boleto (R$ 160,00) até o final do expediente bancário do dia 31 de
                            outubro de 2023;
                            <p />
                        <p>
                            • O Comprovante de Ensalamento será disponibilizado a partir do dia 04 de dezembro de 2023.
                            Este documento deve ser impresso pelo candidato, pois constitui documento necessário para
                            acesso aos locais de prova;
                            <p />
                        <p>
                            • As provas serão realizadas no dia 10 de dezembro de 2023, no turno da tarde.
                            <p />
                        <p>

                            Para habilitar-se a vaga, o estudante ou a estudante deve:
                            <p />
                        <p>
                            Possuir registro acadêmico ativo em outra instituição de ensino superior, nacional ou
                            estrangeira;
                            <p />
                        <p>
                            Encontrar-se matriculado ou com o curso trancado em outra instituição de ensino superior
                            nacional ou estrangeira em curso afim ao curso desejado na UFPR;
                            <p />
                        <p>
                            Não possuir, a qualquer tempo, registro acadêmico na UFPR cancelado por ultrapassar o prazo
                            máximo para integralização curricular (jubilamento);
                            <p />
                        <p>
                            Não possuir períodos de trancamento na instituição de origem que, somados, resultem em um
                            período igual ou superior a três anos ou seis semestres letivos;
                            <p />
                        <p>
                            Ter obtido aprovação ou equivalência em todas as disciplinas previstas na matriz curricular
                            do curso da instituição de origem para o primeiro ano ou para o primeiro e segundo
                            períodos/semestres; e,
                            <p />
                        <p>
                            Não ter ultrapassado, no curso da sua instituição de origem, o tempo relativo aos períodos
                            estipulados no Anexo II do Edital n.º 57/2023, descontados os períodos de trancamento.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center cab_cad">
                    <div class="col text-center">
                        <div class="btn-group d-inline">
                            <input type="submit" name="submit" class="btn btn-secondary btn-sm"
                                value="Iniciar Preenchimento do Formulário">
                        </div>
                    </div>
                </div>
            </div>
            <div class="Parte2" <?php if ($passo != 'PASSO2') {
                echo 'style="display:none"';
            } ?>>
                <div class="row justify-content-center cab_cad text-center">
                    <div class="col-12">
                        Dados Pessoais do Candidato
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="form-group">
                        <div class="col-12">
                            <label>Nome Completo</label>
                        </div>
                        <div class="col-12">
                            <input type="input" name="name" class="form-control form-control-sm" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>                      
                        </div>                      
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="form-group">
                        <div class="col-12">
                            <label>Nome do Pai</label>
                        </div>
                        <div class="col-12">
                            <input type="input" name="father_name" class="form-control form-control-sm" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="form-group">
                        <div class="col-12">
                            <label>Nome da Mãe</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="input" name="mother_name" class="form-control form-control-sm" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm mb-2">
                        <div class="col-12">
                            <label>Data de Nascimento</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="date" class="form-control form-control-sm" name="birth_date" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm mb-2">
                        <div class="col-12">
                            <label>Naturalidade (Cidade)</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="input" class="form-control form-control-sm" name="place_of_birth_city" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                        <div class="col-12">
                            <label>Naturalidade (UF)</label>
                        </div>
                        <!--<input type="input" class="form-control form-control-sm" name="place_of_birth_state"  >-->
                        <select class="form-control form-control-sm" name="place_of_birth_state" <?php if ($passo == 'PASSO2') {
                            echo 'required="true"';
                        } ?>>
                            <?php SelectOpEstadosEmissor() ?>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm mb-2">
                        <div class="col-12">
                            <label>RG</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="input" class="form-control form-control-sm d-inline" name="rg_num" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                        <div class="col-12">
                            <label>UF</label>
                        </div>
                        <div class="col-sm-12">
                            <!--<input type="input" class="form-control form-control-sm d-inline" name="rg_state"  >-->
                            <select class="form-control form-control-sm" name="rg_state">
                                <?php SelectOpEstadosEmissor() ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label>Emissor</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="input" class="form-control form-control-sm d-inline" name="rg_emissor" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm mb-2">
                        <div class="col-12">
                            <label>CPF</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="input" class="form-control form-control-sm" name="cpf" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>CEP</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" id="zipcode" name="zipcode" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Endereço</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" id="address" name="address" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Bairro</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" id="country" name="country" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Cidade</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" id="city" name="city" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Estado</label>
                        </div>
                        <div class="col-12">
                            <!--<input type="input" class="form-control form-control-sm" name="state"  >-->
                            <select class="form-control form-control-sm" id="state" name="state" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                                <?php SelectOpEstados() ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Telefone</label>
                        </div>
                        <div class="col-12">
                            <input type="tel" class="form-control form-control-sm" name="phone" maxlength="15"
                                onkeyup="handlePhone(event)" <?php if ($passo == 'PASSO2') {
                                    echo 'required="true"';
                                } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>e-mail</label>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control form-control-sm" name="email"
                                data-inputmask="'alias': 'email'" <?php if ($passo == 'PASSO2') {
                                    echo 'required="true"';
                                } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Nível de Escolaridade</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" name="education_level" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Idade</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" name="age" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Altura</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" name="height" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <div class="input-group-sm">
                        <div class="col-12">
                            <label>Cor dos olhos</label>
                        </div>
                        <div class="col-12">
                            <input type="input" class="form-control form-control-sm" name="eye_color" <?php if ($passo == 'PASSO2') {
                                echo 'required="true"';
                            } ?>>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center linha_cad">
                    <p>
                        Arquivos PDF
                    </p>
                    <div class="input-group-sm">

                        <input name="arquivos[]" class="input-file" type="file" accept="application/pdf">
                        <input name="arquivos[]" class="input-file" type="file" accept="application/pdf">
                        <input name="arquivos[]" class="input-file" type="file" accept="application/pdf">
                    </div>
                    <p></p>
                </div>
                <div class="row justify-content-center cab_cad" style="background-color: lightblue;">
                    <div class="col text-center">
                        <div class="btn-group d-inline">
                            <input type="submit" name="Submit" class="btn btn-secondary btn-sm" value="Continuar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="Parte3" <?php if ($passo != 'PASSO3') { echo 'style="display:none"'; } ?>>
                <div class="row justify-content-center cab_cad">
                    <div class="col-9 text-center">
                        Confirme os dados abaixo:
                    </div>
                </div>
                <div class="row cab_confirm">
                    <?php
                    echo '<div class="row linha_confirma" style="border-top: 1px;"><div class="col-6 col-md-3">Nome Completo:</div><div class="col-6 col-md-8">' . $name . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Nome do Pai: </div><div class="col-6 col-md-8">' . $father_name . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Nome da Mãe: </div><div class="col-6 col-md-8">' . $mother_name . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Data de Nascimento: </div><div class="col-6 col-md-8">' . $birth_date . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Naturalidade (Cidade/UF): </div><div class="col-6 col-md-8">' . $place_of_birth_city . '/' . $place_of_birth_state . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">RG (Número/UF/Emissor): </div><div class="col-6 col-md-8">' . $rg_num . '/' . $rg_state . '/' . $rg_emissor . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">CPF: </div><div class="col-6 col-md-8">' . $cpf . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Endereço: </div><div class="col-6 col-md-8">' . $address . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Bairro: </div><div class="col-6 col-md-8">' . $country . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Cidade/UF: </div><div class="col-6 col-md-8">' . $city . '/' . $state . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">CEP: </div><div class="col-6 col-md-8">' . $zipcode . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Telefone: </div><div class="col-6 col-md-8">' . $phone . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">E-mail: </div><div class="col-6 col-md-8">' . $email . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Nível de Escolaridade : </div><div class="col-6 col-md-8">' . $education_level . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Idade: </div><div class="col-6 col-md-8">' . $age . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Altura: </div><div class="col-6 col-md-8">' . $height . '</div></div>';
                    echo '<div class="row linha_confirma"><div class="col-6 col-md-3">Cor dos Olhos: </div><div class="col-6 col-md-8">' . $eye_color . '</div></div>';
                    ?>
                    <br>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php if ($passo == 'PASSO3') {
                            echo 'required="true"';
                        } ?>>
                        <label class="form-check-label" for="flexCheckDefault">
                            Concordo com todas as normas e condições do Edital xx/202x, estando ciente de que minha
                            documentação apresentada deverá comprovar todas as exigências do Edital, do contrário
                            perderei a
                            vaga independente de classificação (ver Edital n.o xx/202x);
                        </label>
                    </div>
                </div>
                <div class="row justify-content-center cab_cad">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-secondary btn-sm" name="Submit" value="Confirmar Inscrição">
                        <input type="button" class="btn btn-secondary btn-sm" onclick="goBack();" value="Voltar">
                    </div>
                </div>
            </div>
            <div class="Parte4" <?php if ($passo != 'PASSO4') { echo 'style="display:none"'; } ?>>
                <div class="row justify-content-center cab_cad" ">
                    <div class="col-9 text-center">
                        Inscrição Confirmada
                        <br>
                    </div>
                </div>
                <br>
                <br>
                <div class="row text-center">
                <div class="col text-center">
                    Confirmação de Inscrição - Inscrição Nº <?php echo $ultimoid?>/2023
                    </div>
                </div>
                <br>
                <br>
                <div class="row text-center">
                <div class="col text-center">
                    Nome: <?php echo $name?>
                </div>
                    </div>
                <div class="row text-center">
                    <div class="col text-center">
                        CPF: <?php echo $cpf?>
                    </div>    
                </div>
                <br>
                <br>
                <div class="row justify-content-center cab_cad">
                    <div class="col text-center">
                    <input type="button" class="btn btn-secondary btn-sm hidden-print" onclick="window.print();" value="Imprimir">   
                    </div>
                </div>
            </div>


    </form>
</body>

</html>

<?php
