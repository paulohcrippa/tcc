<?php
	session_start();
	include_once("../login/seguranca.php");
	include_once("../login/conexao.php");
	
	$cidade			 = $_POST["cidade"];
	$estado			 = $_POST["estado"];
	
	
	
	$query = mysql_query("INSERT INTO tb_cidade(NMCIDADE,UF)VALUES 
	('$cidade','$estado')");
	
	?>
	<!DOCTYPE html>
	
	<html lang="pt-br" >
		<head>
			<meta charset="utf-8">
		</head>
		
	 <body>
				<?php
					
					
					if(mysql_errno()== 1062){
						
						echo
						"
							
							<META HTTP-EQUIV=REFRESH CONTENT = '0; URL= 
							http://localhost/telecentro/principal.php?link=6'>
							<script type=\"text/javascript\">
								alert(\"Cidade e estado já cadastrado.\");
							</script>
							
						";
						
						
					}
					
					
					
					else{
						
						echo
						"
							<META HTTP-EQUIV=REFRESH CONTENT = '0; URL= 
							http://localhost/telecentro/principal.php?link=6'>
							<script type=\"text/javascript\">
								alert(\"Cidade e Estado cadastrado com sucesso.\");
							</script>
							
						";
						
					}
					
			?>

</body>
</html>