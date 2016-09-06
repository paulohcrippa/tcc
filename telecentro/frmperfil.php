<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">

<style type="text/css">
	
</style>





<body>

    <div id="wrapper">
		
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Perfil<small>  </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="glyphicon glyphicon-menu-right"></i> Página inicial
                            </li>
							<li class="">
                                <i class="glyphicon glyphicon-menu-right"></i> Perfils
                            </li>
							<li class="active">
                                <i class="glyphicon glyphicon-menu-right"></i> Cadastrar Perfils
                            </li>
                        </ol>
                    </div>
                </div>
				<div class="col-sm-12">
    

        </div></br></br>
                <!-- /.row -->  
					<div class="row">
						<div class="col-xs-12 col-md-12"">
							<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_perfil.php">
									<fieldset>
										<legend>campos com <font color="red">*</font> obrigatórios</legend>
										 <div class="form-group">
											<label class="control-label col-sm-2" for="nome">Perfil:</label> <font color="red">*</font>
											<div class="col-sm-4">
											  <input type="text" class="form-control" name="nomeperfil" id="perfil" placeholder="Nome Perfil" required> 
											</div>
										  </div>
										  <div class="form-group">
												<label class="control-label col-sm-2" for="Descrição">Descrição:</label>
												<div class="col-sm-4">
											 	 <textarea class="form-control" rows="3" name="descricao" id="descricao"></textarea>
											 	</div>
											</div>
										 
										  	<div class="form-group"> 
												<div class="col-sm-offset-2 col-sm-10">
											  		<button type="submit" class="btn btn-success">Cadastrar</button>
											  	</div>
											</div>
									</fieldset>
							</form>
							
							
						</div>
						
					</div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	
 
 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
	<script>

</script>

</body>

</html>
