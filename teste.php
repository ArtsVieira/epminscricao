<html>

<body>
<table width="781" border="0" align="center" cellspacing="0">
  <tbody><tr>
    <td width="200" bgcolor="#161E4E"><img src="views/imagens/logo.jpg" width="193" height="138" alt=""></td>
    <td width="415" bgcolor="#161E4E"><div align="center">
      <p class="style1"><span class="tituloBrancoNegrito">PROVAR 2023/2024</span><br>
          <br>
        <span class="tituloBranco">TRANSFERÊNCIA - 3ª Fase</span></p>
      </div></td>
    <td width="160" bgcolor="#161E4E"><img src="views/imagens/logo-ufpr100.jpg" width="160" height="138" alt=""></td>
  </tr>
</tbody></table>
<table width="781" border="0" align="center" cellspacing="1">
  <tbody><tr>
    <td width="25%" class="tdPassosInativos"><div align="center" class="passosCinza">INSTRUÇÕES</div></td>
    <td width="25%" class="tdPassosAtivos"><div align="center" class="passosPreto">PREENCHIMENTO DO FORMULÁRIO DE INSCRIÇÃO </div></td>
    <td width="25%" class="tdPassosInativos"><div align="center" class="passosCinza">CONFIRMAÇÃO DOS DADOS</div></td>
    <td width="25%" class="tdPassosInativos"><div align="center" class="passosCinza">FIM DO PROCESSO DE INSCRIÇÃO </div></td>
  </tr>
  <tr>
    <td class="tdPassosInativos"><div align="center"><img src="views/imagens/ok_pequeno.png" alt="" title="Etapa Concluída" width="25" height="25"></div></td>
    <td class="tdPassosAtivos"><div align="center"><img src="views/imagens/seta_cima.png" width="25" height="25" alt=""><span class="observacaoCinza">Você está aqui! </span><img src="views/imagens/seta_cima.png" width="25" height="25" alt=""></div></td>
    <td colspan="2" class="tdPassosInativos"><div align="center" class="observacaoCinza">Passos restantes </div></td>
  </tr>
</tbody></table>
<br>
<form action="index.php/Principal" method="post">
 <table width="781" border="0" align="center" cellspacing="1" class="fundoTabela">
  <tbody><tr>
    <td height="21" colspan="2" align="center">
            <div class="textoNegrito">Dados Pessoais do Candidato</div>    </td>
  </tr>
   <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Nome Completo: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
        <input name="PAR_NOME" type="text" id="PAR_NOME" size="41" maxlength="80" value="" class="texto"><br>&nbsp;<span class="observacaoCinza">&nbsp;Informe seu nome exatamente como cadastrado na <a href="https://servicos.receita.fazenda.gov.br/Servicos/CPF/ConsultaSituacao/ConsultaPublica.asp" target="_blank"> Receita Federal do Brasil</a></span></td>
  </tr>
    <tr>
    <td height="25" class="tdDescricao">&nbsp;• <span class="texto">Número do RG / UF do RG: </span></td>
    <td height="25" class="tdCampos">&nbsp;
      <input type="text" name="PAR_RG" id="PAR_RG" size="15" maxlength="15" value="" class="texto">
      &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
      <select name="PAR_UFRG" id="PAR_UFRG" class="texto">
                    <option value="">Selecione</option>
                    <option value="">&nbsp;</option>
                    <option value="AC">ACRE</option>
                    <option value="AL">ALAGOAS</option>
                    <option value="AP">AMAPA</option>
                    <option value="AM">AMAZONAS</option>
                    <option value="BA">BAHIA</option>
                    <option value="CE">CEARA</option>
                    <option value="DF">DISTRITO FEDERAL</option>
                    <option value="ES">ESPIRITO SANTO</option>
                    <option value="GO">GOIAS</option>
                    <option value="MA">MARANHÃO</option>
                    <option value="MT">MATO GROSSO</option>
                    <option value="MS">MATO GROSSO DO SUL</option>
                    <option value="MG">MINAS GERAIS</option>
                    <option value="PA">PARA</option>
                    <option value="PB">PARAIBA</option>
                    <option value="PR">PARANA</option>
                    <option value="PE">PERNAMBUCO</option>
                    <option value="PI">PIAUI</option>
                    <option value="RJ">RIO DE JANEIRO</option>
                    <option value="RN">RIO GRANDE DO NORTE</option>
                    <option value="RS">RIO GRANDE DO SUL</option>
                    <option value="RO">RONDONIA</option>
                    <option value="RR">RORAIMA</option>
                    <option value="SC">SANTA CATARINA</option>
                    <option value="SP">SAO PAULO</option>
                    <option value="SE">SERGIPE</option>
                    <option value="TO">TOCANTINS</option>
                    <option value="">&nbsp;</option>
                    <option value="AE">AERONÁUTICA</option>
                    <option value="CR">CONSELHO REGIONAL</option>
                    <option value="EX">EXÉRCITO</option>
                    <option value="MM">MARINHA</option>
                    <option value="PM">POLÍCIA MILITAR</option>
                    <option value="ET">FORA DO BRASIL</option>
        </select>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Órgão Emissor do RG: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
      <input name="PAR_ORGAO_EMISSOR_RG" type="text" id="PAR_ORGAO_EMISSOR_RG" size="15" maxlength="15" value="" class="texto"><span class="observacaoCinza">&nbsp;Ex: SSP </span>&nbsp;&nbsp; Data de emissão do RG: <input name="PAR_DATA_EMISSAO_RG" type="text" id="PAR_DATA_EMISSAO_RG" size="12" maxlength="10" value="" class="texto"><span class="observacaoCinza">&nbsp;Ex: 01/02/1999 </span> 
   </td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• N.º do C.P.F.: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
      <label>
      <input name="PAR_CPF" type="text" id="PAR_CPF" size="15" maxlength="14" value="" class="texto">
    </label><span class="observacaoCinza">&nbsp;Ex: 000.000.000-00 </span></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Autoidentificação de Gênero:</td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
     <label>
      <select name="PAR_SEXO" id="PAR_SEXO" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
      </select>
      </label></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Data de Nascimento: </td>
    <td width="70%" height="29" class="tdCampos">&nbsp;
    <input name="PAR_NASCIMENTO" type="text" id="PAR_NASCIMENTO" size="12" maxlength="10" value="" class="texto">
    <span class="observacaoCinza">&nbsp;Formato: DD/MM/AAAA </span></td>
  </tr> 
   <tr>
    <td height="25" class="tdDescricao">&nbsp;• <span class="texto">Cidade / UF de Nascimento: </span></td>
    <td height="25" class="tdCampos">&nbsp;
      <input type="text" name="PAR_CIDADE_NASC" id="PAR_CIDADE_NASC" size="30" maxlength="40" value="" class="texto">
      &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
      <select name="PAR_UF_NASC" id="PAR_UF_NASC" class="texto">
                    <option value="">Selecione</option>
                    <option value="">&nbsp;</option>
                    <option value="AC">ACRE</option>
                    <option value="AL">ALAGOAS</option>
                    <option value="AP">AMAPA</option>
                    <option value="AM">AMAZONAS</option>
                    <option value="BA">BAHIA</option>
                    <option value="CE">CEARA</option>
                    <option value="DF">DISTRITO FEDERAL</option>
                    <option value="ES">ESPIRITO SANTO</option>
                    <option value="GO">GOIAS</option>
                    <option value="MA">MARANHÃO</option>
                    <option value="MT">MATO GROSSO</option>
                    <option value="MS">MATO GROSSO DO SUL</option>
                    <option value="MG">MINAS GERAIS</option>
                    <option value="PA">PARA</option>
                    <option value="PB">PARAIBA</option>
                    <option value="PR">PARANA</option>
                    <option value="PE">PERNAMBUCO</option>
                    <option value="PI">PIAUI</option>
                    <option value="RJ">RIO DE JANEIRO</option>
                    <option value="RN">RIO GRANDE DO NORTE</option>
                    <option value="RS">RIO GRANDE DO SUL</option>
                    <option value="RO">RONDONIA</option>
                    <option value="RR">RORAIMA</option>
                    <option value="SC">SANTA CATARINA</option>
                    <option value="SP">SAO PAULO</option>
                    <option value="SE">SERGIPE</option>
                    <option value="TO">TOCANTINS</option>
                    <option value="">&nbsp;</option>
                    <option value="ET">FORA DO BRASIL</option>
        </select>&nbsp;&nbsp;</td>
  </tr> 
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;País de Nascimento: </td>
    <td width="70%" height="29" class="tdCampos">&nbsp;
    <input name="PAR_PAIS_NASC" type="text" id="PAR_PAIS_NASC" size="12" maxlength="15" value="BRASIL" class="texto">
    </td>
  </tr>
    <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Nacionalidade: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
    <input name="PAR_NACIONALIDADE" type="text" id="PAR_NACIONALIDADE" size="20" maxlength="20" value="" class="texto"><span class="observacaoCinza">&nbsp;Ex: Brasileira </span></td>
  </tr> 
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Nome do Pai: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
    <input name="PAR_PAI" type="text" id="PAR_PAI" size="41" maxlength="60" value="" class="texto"><span class="observacaoCinza">&nbsp; Opcional </span></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Nome da Mãe: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
    <input name="PAR_MAE" type="text" id="PAR_MAE" size="41" maxlength="60" value="" class="texto"></td>
  </tr>
   <tr>
    <td height="21" colspan="2" align="center"><div align="center">
      <div class="textoNegrito">Endereço para Correspondência</div>
    </div></td>
  </tr>
   <tr> 
   <td width="28%" class="tdDescricao">&nbsp;• CEP:</td>
   <td width="72%" height="28" class="tdCampos">&nbsp;&nbsp;<input type="text" name="PAR_CEP" id="PAR_CEP" size="10" maxlength="10" value="" class="texto"></td>
  </tr>  
  <tr> 
   <td width="28%" class="tdDescricao">&nbsp;• Rua:</td>
   <td width="72%" height="28" class="tdCampos">&nbsp;&nbsp;<input type="text" name="PAR_RUA" id="PAR_RUA" size="50" maxlength="50" value="" class="texto">&nbsp;&nbsp;&nbsp;Número: <input type="text" name="PAR_NUMERO" id="PAR_NUMERO" size="6" maxlength="6" value="" class="texto"></td>
  </tr>
  <tr> 
   <td width="28%" class="tdDescricao">&nbsp;• Complemento:</td>
   <td width="72%" height="28" class="tdCampos">&nbsp;&nbsp;<input type="text" name="PAR_COMPLEMENTO" id="PAR_COMPLEMENTO" size="20" maxlength="20" value="" class="texto">&nbsp;&nbsp;<span class="observacaoCinza">Opcional </span></td>
  </tr>
  <tr> 
   <td width="28%" class="tdDescricao">&nbsp;• Bairro:</td>
   <td width="72%" height="28" class="tdCampos">&nbsp;&nbsp;<input type="text" name="PAR_BAIRRO" id="PAR_BAIRRO" size="30" maxlength="30" value="" class="texto"></td>
  </tr>
  <tr> 
   <td width="28%" class="tdDescricao">&nbsp;• Cidade</td>
   <td width="72%" height="28" class="tdCampos">&nbsp;&nbsp;<input type="text" name="PAR_CIDADE" id="PAR_CIDADE" size="30" maxlength="30" value="" class="texto">
   &nbsp;&nbsp;UF: <select name="PAR_UF" id="PAR_UF" class="texto">
                    <option value="">Selecione</option>
                    <option value="">&nbsp;</option>
                    <option value="AC">ACRE</option>
                    <option value="AL">ALAGOAS</option>
                    <option value="AP">AMAPA</option>
                    <option value="AM">AMAZONAS</option>
                    <option value="BA">BAHIA</option>
                    <option value="CE">CEARA</option>
                    <option value="DF">DISTRITO FEDERAL</option>
                    <option value="ES">ESPIRITO SANTO</option>
                    <option value="GO">GOIAS</option>
                    <option value="MA">MARANHÃO</option>
                    <option value="MT">MATO GROSSO</option>
                    <option value="MS">MATO GROSSO DO SUL</option>
                    <option value="MG">MINAS GERAIS</option>
                    <option value="PA">PARA</option>
                    <option value="PB">PARAIBA</option>
                    <option value="PR">PARANA</option>
                    <option value="PE">PERNAMBUCO</option>
                    <option value="PI">PIAUI</option>
                    <option value="RJ">RIO DE JANEIRO</option>
                    <option value="RN">RIO GRANDE DO NORTE</option>
                    <option value="RS">RIO GRANDE DO SUL</option>
                    <option value="RO">RONDONIA</option>
                    <option value="RR">RORAIMA</option>
                    <option value="SC">SANTA CATARINA</option>
                    <option value="SP">SAO PAULO</option>
                    <option value="SE">SERGIPE</option>
                    <option value="TO">TOCANTINS</option>
                  </select>
           </td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Telefone Residencial: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
    <input name="PAR_RESIDENCIAL" type="text" id="PAR_RESIDENCIAL" size="15" maxlength="13" value="" class="texto">
    <span class="observacaoCinza">&nbsp;Ex: (00) 0000-0000 </span></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Telefone Celular: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
<input name="PAR_CELULAR" type="text" id="PAR_CELULAR" size="15" maxlength="14" value="" class="texto">
<span class="observacaoCinza">&nbsp;Ex: (00) 0000-0000 ou (00) 0000-00000</span></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• Telefone Comercial: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
    <input name="PAR_COMERCIAL" type="text" id="PAR_COMERCIAL" size="15" maxlength="14" value="" class="texto">
    &nbsp;&nbsp;Ramal:
    <input name="PAR_RAMAL" type="text" id="PAR_RAMAL" size="5" maxlength="4" value="" class="texto">
    <span class="observacaoCinza">&nbsp;Informe o ramal sem pontos ou traços </span></td>
  </tr>
  <tr>
    <td height="28" colspan="2" class="tdDescricao"> &nbsp;&nbsp;&nbsp;<span class="observacaoCinza">Preencha pelo menos um dos telefones acima indicados. </span></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• E-mail: </td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
        <input name="PAR_EMAIL" type="text" id="PAR_EMAIL" size="50" maxlength="50" value="" class="texto"></td>
  </tr>
  <tr>
    <td height="21" colspan="2" align="center"><div align="center" class="style4">
      <div class="textoNegrito">Informações Para a Realização das Provas</div>
    </div></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;• É canhoto?</td>
    <td width="70%" height="28" class="tdCampos">&nbsp;
     <label>
      <select name="PAR_CANHOTO" id="PAR_CANHOTO" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="N">Não</option>
        <option value="S">Sim</option>
      </select>
      </label></td>
  </tr> 
  <!-- <tr>
    <td width="30%" height="39" class="tdDescricao">&nbsp;&bull; Necessidade Especial para <br />&nbsp;&nbsp; realiza&ccedil;&atilde;o das Provas: </td>
    <td width="70%" height="39" bgcolor="#F5E9EB" class="tdCampos">&nbsp;
      <select name="PAR_TIPO_NECESSIDADE" id="PAR_TIPO_NECESSIDADE" class="texto">
       <option value="">Selecione:</option>
                            <option value="0" >Não necessita de atendimento especial</option>
                            <option value="1" >Visual</option>
                            <option value="2" >Surdez</option>
                            <option value="3" >Surdocegueira</option>
                            <option value="4" >Física</option>
                            <option value="5" >Múltipla</option>
                            <option value="6" >Maternidade</option>
                            <option value="8" >Outros tipos de necessidades especiais</option>
                  </select></td>
  </tr>
  <tr id="trNecessidadeEspecial">
    <td height="39" class="tdDescricao" valign="middle">&nbsp;&bull; Se sim, indique o tipo:</td>
    <td height="39" valign="middle" class="tdCampos">&nbsp;
        <select name="PAR_NECESSIDADE_ESPECIAL" id="PAR_NECESSIDADE_ESPECIAL" class="texto">
        <option value="">Selecione:</option>
                  </select>
        <br />
      </td>
  </tr>
   <tr id="trProvaAmpliada">
    <td height="39" class="tdDescricao" valign="middle">&nbsp;&bull; Indique a Fonte e o Tamanho:</td>
    <td height="39" valign="middle" class="tdCampos">&nbsp; Fonte: <input type="text" name="PAR_FONTE" id="PAR_FONTE" size="20" maxlength="15" value="" class="texto" />  &nbsp;&nbsp;&nbsp;Tamanho: <input type="text" name="PAR_TAMANHO_FONTE" id="PAR_TAMANHO_FONTE" size="4" maxlength="2" value="" class="texto" />
      </td>
  </tr>
  <tr id="trObservacoes">
    <td height="39" class="tdDescricao" valign="middle">&nbsp;&bull; Observações Para Atendimento Especial:</td>
    <td height="39" valign="middle" class="tdCampos">&nbsp; <textarea name="PAR_OBSERVACOES" id="PAR_OBSERVACOES" cols="47" rows="3" class="texto"></textarea> 
      </td>
  </tr> -->
  <tr>
    <td height="21" colspan="2" align="center"><div align="center">
      <div class="textoNegrito">Condições de Inscrição do Candidato</div>
    </div></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Curso atual: </td>
    <td width="70%" height="34" class="tdCampos">
   
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Curso pretendido: </td>
    <td width="70%" height="42" class="tdCampos"><div id="descCursoPretendido"></div><input type="button" name="btnEscolherCurso" id="btnEscolherCurso" value="Selecionar Curso Desejado..." class="texto" disabled=""></td>
  </tr>
  <tr>
    <td height="35" width="30%" class="tdDescricao">&nbsp;• IES - Instituição de Ensino <br>&nbsp;&nbsp;&nbsp;Superior Atual: </td>
    <td height="35" width="70%" class="tdCampos">&nbsp;
        <input name="PAR_IES" type="text" id="PAR_IES" size="50" maxlength="50" value="" class="texto"></td>
  </tr>
  <tr>
    <td height="35" width="30%" class="tdDescricao">&nbsp;• Ano e Semestre de Ingresso no <br>&nbsp;&nbsp;&nbsp;Curso Atual: </td>
    <td height="35" width="70%" class="tdCampos">&nbsp;
        <select name="PAR_SEMESTRE_INGRESSO" id="PAR_SEMESTRE_INGRESSO" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="1">1º Semestre</option>
        <option value="2">2º Semestre</option>
      </select>&nbsp;&nbsp;de&nbsp;&nbsp;<input name="PAR_ANO_INGRESSO" type="text" id="PAR_ANO_INGRESSO" size="4" maxlength="4" value="" class="texto">
      <span class="observacaoCinza">Ex: 2008 </span></td>
  </tr>
  <tr>
    <td height="35" width="30%" class="tdDescricao">&nbsp;• Vínculo com a IES atual: </td>
    <td height="35" width="70%" class="tdCampos">&nbsp;
        <select name="PAR_VINCULO" id="PAR_VINCULO" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="M">Matriculado</option>
        <option value="T">Em Trancamento</option>
      </select><div id="mostraDataTrancamento">&nbsp;&nbsp;Se, em trancamento, desde quando:&nbsp;&nbsp;<input name="PAR_DATA_TRANCAMENTO" type="text" id="PAR_DATA_TRANCAMENTO" size="10" maxlength="10" value="" class="texto"><span class="observacaoCinza">&nbsp;Ex: 12/10/2007</span></div></td>
  </tr>
  <!--<tr>
    <td height="60" width="30%" class="tdDescricao">&nbsp;&bull; Carga horária no curso atual:<br />&nbsp;&nbsp;&nbsp;<span class="observacaoCinza">(Somente das disciplinas/ atividades<br />&nbsp;&nbsp;&nbsp; formativas e que estarão no seu<br />&nbsp;&nbsp;&nbsp;histórico escolar)</span></td>
    <td height="60" width="70%" class="tdCampos">&nbsp;
        <input name="PAR_CARGA_HORARIA" type="text" id="PAR_CARGA_HORARIA" size="5" maxlength="4" value=""class="texto"/><span class="observacaoCinza">&nbsp;Ex: 1200</span></td>
  </tr> -->
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Número de anos/semestres<br>&nbsp;&nbsp;&nbsp;realizados no curso atual: </td>
    <td width="70%" height="42" class="tdCampos"><label>
      &nbsp;
      <input name="PAR_ANO_SEMESTRE" type="text" id="PAR_ANO_SEMESTRE" size="3" maxlength="3" value="" class="texto">
    </label> &nbsp;ano(s) ou semestre(s)?
    <select name="PAR_TIPO_ANO_SEMESTRE" id="PAR_TIPO_ANO_SEMESTRE" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="A">Ano(s)</option>
        <option value="S">Semestre(s)</option>
      </select></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Já efetuou trancamentos em outros<br>&nbsp;&nbsp;&nbsp;anos/períodos do seu curso atual? </td>
    <td width="70%" height="42" class="tdCampos">&nbsp; 
    <select name="PAR_OUTROS_TRANCAMENTOS" id="PAR_OUTROS_TRANCAMENTOS" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="S">Sim</option>
        <option value="N">Não</option>
      </select><div id="outrosTrancamentos"><br>&nbsp;&nbsp;Se sim:<br><br>
      &nbsp;&nbsp;1º Trancamento: <input name="PAR_DATA_TRANCAMENTO1" type="text" id="PAR_DATA_TRANCAMENTO1" size="10" maxlength="10" value="" class="texto"><br>
      &nbsp;&nbsp;2º Trancamento: <input name="PAR_DATA_TRANCAMENTO2" type="text" id="PAR_DATA_TRANCAMENTO2" size="10" maxlength="10" value="" class="texto"><br>
      &nbsp;&nbsp;3º Trancamento: <input name="PAR_DATA_TRANCAMENTO3" type="text" id="PAR_DATA_TRANCAMENTO3" size="10" maxlength="10" value="" class="texto"><br><br>
      </div></td>
  </tr>
  <tr>
    <td width="30%" class="tdDescricao">&nbsp;•&nbsp;Modalidade de ingresso no curso<br>&nbsp;&nbsp;&nbsp;atual:</td>
    <td width="70%" height="42" class="tdCampos">&nbsp; 
    <select name="PAR_MODALIDADE_INGRESSO" id="PAR_MODALIDADE_INGRESSO" class="texto">
        <option value="">Selecione:</option>
        <option value="">&nbsp;</option>
        <option value="1">Vestibular</option>
        <option value="2">Entrevista</option>
        <option value="3">Transferência</option>
        <option value="4">Aproveitamento de Curso</option>
        <option value="5">Convênio Internacional</option>
        <option value="7">Matrícula</option>
        <option value="8">Outros</option>
      </select></td>
  </tr>
  <tr>
    <td height="29" colspan="2" class="tdCampos"><table width="90%" border="0" align="center">
      <tbody><tr>
        <td width="5%" height="49" align="center"><label>
          <input name="PAR_DECLARACAO1" type="checkbox" id="PAR_DECLARACAO1" value="S">
        </label></td>
        <td height="49">Concordo com todas as normas e condições do Edital 57/2023  da modalidade de Transferência do PROVAR 2023/2024, estando ciente de que minha documentação acadêmica deverá comprovar todas as exigências do Edital, pois do contrário perderei minha vaga independente de classificação nas provas. (ver Edital n.º 57/2023);</td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
<br>
<table width="781" border="0" align="center" cellspacing="0" class="fundoTabela">
  <tbody><tr>
    <td width="776" height="40" align="center">
      <input type="submit" name="Submit" value="Continuar">
      &nbsp;
      <input type="button" name="btnVoltarPasso01" id="btnVoltarPasso01" value="Voltar">      </td>
  </tr>
 </tbody></table>
 <input type="hidden" name="itemControladora" id="itemControladora" value="passo03">
 <input type="hidden" name="PAR_CURSO_DESEJADO" id="PAR_CURSO_DESEJADO" value="">
 <input type="hidden" name="PAR_TRANSACAO" id="PAR_TRANSACAO" value="4832">
 <input type="hidden" name="PAR_TIPO_NECESSIDADE" id="PAR_TIPO_NECESSIDADE" value="0">
 
 <div id="janelaCursoDesejado" title="Selecione o curso desejado:" style="display: none;"></div>
</form>


</body>

</html>