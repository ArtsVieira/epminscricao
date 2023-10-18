<?php
include_once '../utils/config.php';
require_once '../dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;


//Pegar ID url
$id = $_GET['id'];

$file1="";
$file2="";
$file3="";

$sql = "SELECT * FROM registrations where id=".$id;

$query = $pdo->prepare($sql);
$query->execute();

while ($linha = $query->fetch(PDO::FETCH_ASSOC)) { 
    if($linha['file1'] != ""){
        $file1=$linha['file1'];
    } 
    if($linha['file2'] != ""){
        $file2=$linha['file2'];
    }  
    if($linha['file3'] != ""){
        $file3=$linha['file3'];
    }                            
    $nome = $linha['name'];
    $html_pdf = '<html>
    <head>
    <style>
        body { 
            font-size:20pt;
        }    
        table {
            border-style: solid;
            border-width: 0px;
            border-color: black;
            border-top: 0px;
            width:100%;
            border-spacing:0px;
        }
        tr {border-style: solid;
            border-width: 1px;
            border-color: black;
            border-spacing:0px;
        }
        td {border-style: solid;
            border-width: 1px;
            border-color: black;
            border-spacing:0px;
            font-size:10pt;
            height:50px;
        }
    </style>        
    </head>
    <body>
    <center><b>Inscrição No. '.$id.'/'.substr($linha['created_at'],0,4).'</b></center><br><br><br>
    <table>
        <tr>
            <td colspan="3">
            <b>Nome Completo: </b>'.$linha['name'].'
            </td>
        </tr>        
        <tr>
            <td colspan="3">
                <b>Nome do Pai: </b>'.$linha['father_name'].'
            </td>
        </tr>        
        <tr>
            <td colspan="3">
            <b>Nome da Mãe: </b>'.$linha['mother_name'].'
        </tr>        
        <tr>
            <td colspan="3">
            <b>Data de nascimento: </b>'.$linha['birth_date'].'
            </td>
        </tr>        
        <tr>
            <td colspan="3">
            <b>Naturalidade: </b>'.$linha['place_of_birth_city'] . '/' . $linha['place_of_birth_state'].'
            </td>
        </tr>    
        <tr>
            <td colspan="2">
            <b>Numero RG: </b>'.$linha['rg_num'].'/'.$linha['rg_state'].'
            </td>
            <td>
            <b>Orgão Emissor: </b>'.$linha['rg_emissor'] .'
            </td>            
        </tr> 
        <tr>
            <td colspan="3">
            <b>CPF: </b>'.$linha['cpf'] .'
            </td>
        </tr>    
        <tr>
            <td colspan="3">
            <b>Endereço - rua, no, complemento: </b>'.$linha['address'] .'
            </td>
        </tr>         
        <tr>
            <td colspan="2">
            <b>Bairro: </b>'.$linha['country'].'
            </td>
            <td>
            <b>Cidade: </b>'.$linha['city'] .'
            </td>            
        </tr>                        
        <tr>
            <td>
            <b>CEP: </b>'.$linha['zipcode'].'
            </td>
            <td>
            <b>UF: </b>'.$linha['state'] .'
            </td>            
            <td>
            <b>Telefone: </b>'.$linha['phone'] .'
            </td>            
        </tr> 
        <tr>
            <td colspan="3">
            <b>e-mail: </b>'.$linha['email'] .'
            </td>
        </tr>    
        <tr>
            <td colspan="3">
            <b>Idade: </b>'.$linha['age'] .'
            </td>
        </tr>    
        <tr>
            <td colspan="3">
            <b>Nível de escolaridade: </b>'.$linha['education_level'] .'
            </td>
        </tr>   
        <tr>
            <td colspan="2">
            <b>Altura: </b>'.$linha['height'].'
            </td>
            <td>
            <b>Cor dos olhos: </b>'.$linha['eye_color'] .'
            </td>            
        </tr>                                                        
    </body></html>';    
 }



//$html_pdf="TESTE";


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html_pdf);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();


$nome_pdf ='ficha_inscricao_'.$id.'.pdf';
$caminho_pdf = 'pdf/';
$caminho_pdf_nome = 'pdf/'.$nome_pdf;

$file = file_put_contents($caminho_pdf_nome, $dompdf->output());

$zip = new ZipArchive();

$nome_zip = md5(time());

$path=$_SERVER['DOCUMENT_ROOT'].'/admin/zip/';
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}

$caminho_arquivo_zip = 'zip/'.$nome_zip.'.zip';

if($zip->open($caminho_arquivo_zip, \ZipArchive::CREATE)){ 

    $zip->addFile($caminho_pdf.$nome_pdf,$nome_pdf);
    //echo $zip->filename;
    
    if($file1 != ""){
        $zip->addFile($caminho_pdf.$file1,$file1);
    } 
    if($file2 != ""){
        $zip->addFile($caminho_pdf.$file2,$file2);
    }  
    if($file3 != ""){
        $zip->addFile($caminho_pdf.$file3,$file3);
    }                            

    $zip->close();

}

//echo $nome_zip;


//echo $caminho_arquivo_zip;
//echo $nome_zip.'.zip';
if (file_exists($caminho_arquivo_zip)){

    header("Content-Type: application/zip;");
    header('Content-Disposition: attachement; filename="'.$nome_zip.'.zip"');
    readfile($caminho_arquivo_zip);
    
}



?>