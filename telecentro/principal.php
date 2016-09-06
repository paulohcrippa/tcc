<?php 
	session_start();

	include_once("login/seguranca.php");
	include_once("login/conexao.php");
?>

<!DOCTYPE html>
<html>
    
		<head>
			<meta charset="utf-8">
			<meta http-equiv="Content-Type"  content="text/html">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Painel Administrativo">
			<meta name="author" content="Paulo/Tayane">

			<title>CTC - Administrativo</title>

	</script>
	
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Customização CSS -->
			<link href="css/sb-admin.css" rel="stylesheet">

			<!-- Morris Charts CSS -->
			<link href="css/plugins/morris.css" rel="stylesheet">
			
			<link href="css/formulario.css" rel="stylesheet">
			
			<!-- Customização de Fontes -->
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			
			<!-- DataTables CSS -->
			<link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

			<!-- DataTables Responsive CSS -->
			<link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

			<link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="imagens/favicon/android-icon-192x192.png">

		</head>
    <body>
  
         
         
         <?php  
            
			include_once ("menu_adm.php");
            
            @$link = $_GET["link"]; 
                   
            $pag[1] = "listausuarios.php";
			$pag[2] = "frmusuario.php";
			$pag[3] = "administrativo.php";
			$pag[4] = "editarusuario.php";
			$pag[5] = "listapessoas.php";
			$pag[6] = "frmpessoa.php";
			$pag[7] = "visual_usuario.php";
			$pag[8] = "listatendimentos.php";
			$pag[9] = "listaperfil.php";
			$pag[10] = "frmperfil.php";

            

            if (!empty ($link)) //Se a variavel link n&atilde;o estiver vazia
            {
                if (file_exists($pag[$link])) //se o arquivo existir 
                {
                    include $pag[$link]; // inclua o arquivo
                }

                else
                {
                    
                    include_once "principal.php";
                }
            }
            
            else
            {
                include_once "principal.php";
            }
            
            
        ?>
         
   
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-6">
                        <!--<img src="imgs/bg_index.png" class="img-responsive" alt="Imagem Responsiva">-->
                    </div>
             
                </div>
            </div>
        </div>
        
    </body>
</html>