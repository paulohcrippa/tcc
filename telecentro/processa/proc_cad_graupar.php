<?php
	session_start();
	include_once("../login/seguranca.php");
	include_once("../login/conexao.php");
	
	$responsavel			 = $_POST["graupar"];
	
	
	$query = mysql_query("INSERT INTO tb_graupar(DSGRAUPAR)VALUES 
	('$responsavel')");
	
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
								alert(\"Responsável já cadastrado.\");
							</script>
							
						";
						
						
					}
					
					
					
					else{
						
						echo
						"
							<META HTTP-EQUIV=REFRESH CONTENT = '0; URL= 
							http://localhost/telecentro/principal.php?link=6'>
							<script type=\"text/javascript\">
								alert(\"Responsável cadastrado com sucesso.\");
							</script>
							
						";
						
					}
					
			?>

</body>
</html>