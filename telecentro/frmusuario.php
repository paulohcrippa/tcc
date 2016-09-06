<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">



<body>

    <div id="wrapper">
		
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Usuários<small>  </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="glyphicon glyphicon-menu-right"></i> pagina inicial
                            </li>
							<li class="">
                                <i class="glyphicon glyphicon-menu-right"></i> tela de usuários
                            </li>
							<li class="active">
                                <i class="glyphicon glyphicon-menu-right"></i> cadastrar usuários
                            </li>
                        </ol>
                    </div>
                </div>
				<div class="col-sm-12">
    

        </div></br></br>
                <!-- /.row -->  
					<div class="row">
						<div class="col-xs-12 col-md-12"">
							<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_usuario.php">
									<fieldset>
										<legend>campos com <font color="red">*</font> obrigatórios</legend>
										 <div class="form-group">
											<label class="control-label col-sm-2" for="nome">Nome:</label> <font color="red">*</font>
											<div class="col-sm-4">
											  <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required> 
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="telefone">Telefone:</label>
											<div class="col-sm-3"> 
											  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX)xxxx-xxxx">
											</div>
										  </div>
										   <div class="form-group">
											<label class="control-label col-sm-2" for="celular">Celular:</label>
											<div class="col-sm-3"> 
											  <input type="text" class="form-control" id="celular" name="celular" placeholder="(XX)xxxxx-xxxx">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="Email">Email:</label>
											<div class="col-sm-3"> 
											  <input type="text" class="form-control" id="email" name="email">
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="usuario">Usuário:</label> <font color="red">*</font>
											<div class="col-sm-3"> 
											  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" required>
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="usuario">Senha:</label> <font color="red">*</font>
											<div class="col-sm-3"> 
											  <input type="password" class="form-control" id="senha" name="senha" placeholder="" required> 
											</div>
										  </div>
										  <div class="form-group">
											<label class="control-label col-sm-2" for="pefil"><font color="red">*</font> Nível de Acesso:</label> 
												 <div class="col-sm-3"> 
													<select class="form-control" name="perfil">
														<option>Selecione o Pefil</option>
															<?php 
																$query = mysql_query ("select * FROM tb_perfil");
																while($res=mysql_fetch_array($query)){
																	echo "<option value='{$res["CDPERFIL"]}'>{$res["NMPERFIL"]}</option>";
																}
															?>
													</select>
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
