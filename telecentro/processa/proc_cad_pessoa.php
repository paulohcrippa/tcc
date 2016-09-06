<?php
	session_start();
	include_once("../login/seguranca.php");
	include_once("../login/conexao.php");
	
	$nomepessoa 	= $_POST["nomepessoa"];
	$optradio		= $_POST["optradio"];
	$dtnascimento   = $_POST["dtnascimento"];
	$estado_civil   = $_POST["estado_civil"];
	$responsavel	= $_POST["responsavel"];
	$naturalidade	= $_POST["naturalidade"];
	$telefone		= $_POST["telefone"];
	$celular		= $_POST["celular"];
	$rg             = $_POST["rg"];
	$orgexp         = $_POST["orgexp"];
	$cpf            = $_POST["cpf"]; 
	$titulo         = $_POST["titulo"];
	$carteiratrab   = $_POST["carteiratrab"];

	//Dados do endereco e escolar

	$cep   			= $_POST["cep"];
	$rua            = $_POST["rua"];
	$numcasa        = $_POST["numcasa"];
	$complemento    = $_POST["complemento"];
	$bairro         = $_POST["bairro"];
	$cidade         = $_POST["cidade"];
	$estado         = $_POST["estado"];
	$escola         = $_POST["escola"];
	$serie          = $_POST["serie"];
	$ensino         = $_POST["ensino"];
	$turno          = $_POST["turno"];
	$situação       = $_POST["situacao"];


		
	

			$query = mysql_query("INSERT INTO tb_pessoa(NMPESSOA,SEXO,DTNASC,NUTITULO,NUCT,CPF,RG,ORGEXP,CDESTCIVIL,FONERES,FONECEL,CEP,CDCIDADE,CDNATURALIDADE,CDBAIRRO,CDRUA,NUMRES,
				COMPLEMENTO,NMPAI,CDPROFPAI,DTNASCPAI,NMMAE,CDPROFMAE,DTNASCMAE,NMCONJUGE,CDPROFCONJUGE,DTNASCCONJUGE,CDESCOLARIDADE,CDESCOLA,TURNO,SERIE,SITUACAO,CDUSUARIO )VALUES (NOW())");

			
					
					if(mysql_affected_rows() != 0){
						
						echo
						"
							
							<META HTTP-EQUIV=REFRESH CONTENT = '0; URL= 
							http://localhost/telecentro/principal.php?link=5'>
							<script type=\"text/javascript\">
								alert(\"Pessoa Cadastrada com sucesso.\");
							</script>
							
						";
						
						
					}
					
					else{
						
						echo
						"
							<META HTTP-EQUIV=REFRESH CONTENT = '0; URL= 
							http://localhost/telecentro/principal.php?link=5'>
							<script type=\"text/javascript\">
								alert(\"Pessoa não cadastrada.\");
							</script>
							
						";
			
						
					}
		
	
	?>
	<!DOCTYPE html>
	
	<html lang="pt-br" >
		<head>
			<meta charset="utf-8">
		</head>
		
	 <body>
				
</body>
</html>