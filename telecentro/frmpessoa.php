<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">

	<head>
		<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
		<script type='text/javascript' src='js/cep.js'></script>
		
		

		<script>

			   $('#idade').val(idade);

		/*// O código abaixo calcula se a idade do visitante está entre 18 e 70 anos e, caso não esteja, bloqueia o acesso.
		if (idade >= 18 && idade <= 70){
			alert("Tens "+idade+" anos, est\u00e1s dentro das regras e obter\u00e1s acesso!");
		} else {
			if(idade < 18){
				var alerta = "Tens menos de 18 anos (tens "+idade+" ano[s]) e n\u00e3o obter\u00e1s acesso";
			} else if (idade > 70){
				var alerta = "Tens mais de 70 anos (tens "+idade+" ano[s]) e n\u00e3o obter\u00e1s acesso";
			}
			alert(alerta);
		
		} */
				

			function _MostraCampo(bool)
			{

			if (bool) {
			document.getElementById("nmconjuge").style.display = "";
			document.getElementById("profissaoconjuge").style.display = "";
			document.getElementById("dtnascconjuge").style.display = "";
			document.getElementById("labelnmconjuge").style.display = "";
			document.getElementById("labelprofissaoconjuge").style.display = "";
			document.getElementById("labeldtnascconjuge").style.display = "";


			} else {
			document.getElementById("nmconjuge").style.display = "none";
			document.getElementById("profissaoconjuge").style.display = "none";
			document.getElementById("dtnascconjuge").style.display = "none";
			document.getElementById("labelnmconjuge").style.display = "none";
			document.getElementById("labelprofissaoconjuge").style.display = "none";
			document.getElementById("labeldtnascconjuge").style.display = "none";
			}

			}
		</script>
		<script type="text/javascript">
			

		</script>

		<style type="text/css">

		 #icone{
		 	padding-left: 3px;
		 	padding-top: 2.2em;
		 }
			
		</style>

	</head>
	
	<body>

	    <div id="wrapper">
	        <div id="page-wrapper">
	        	<div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <h1 class="page-header">
	                            Cadastro de Pessoas<small>  </small>
	                        </h1>
	                        <ol class="breadcrumb">
	                            <li class="">
	                                pagina inicial
	                            </li>
					<li class="">
	                                   tela de pessoas
	                            </li>
					<li class="active">
	                                 cadastrar Pessoas
	                            </li>
	                        </ol>
	                    </div>
	                </div>

	                <div class="container-fluid">
	                	<div class="row">
	                		<section>
	                			<div class="wizard">
	                				<!-- parte das fases -->
									<div class="wizard-inner">
										<div class="connecting-line"></div>
										<ul class="nav nav-tabs" role="tablist">

											<li role="presentation" class="active">
												<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Identificação Pessoal">
													<span class="round-tab">
														<i class="glyphicon glyphicon-folder-open"></i>
													</span>
												</a>
											</li>

											<li role="presentation" class="disabled">
												<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Dados Complementares">
													<span class="round-tab">
														<i class="glyphicon glyphicon-pencil"></i>
													</span>
												</a>
											</li>
											<li role="presentation" class="disabled">
												<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Área Familiar">
													<span class="round-tab">
														<i class="glyphicon glyphicon-picture"></i>
													</span>
												</a>
											</li>
										</ul>
									</div> <!-- fim do wizard-inner -->	
	               						
									<form role="form" method = "POST" id="formulario" enctype="multipart/form-data" name="formulario">
										<div class="tab-content">
											<div class="tab-pane active" role="tabpanel" id="step1">
												<div class="step33">
													<h5><strong>Indentificação Pessoal</strong></h5>
											 		
											 		<hr>
													
													<div class="row mar_ned">
													
													</div>

													<div class="row">
														<div class="form-group  col-md-4 col-md-offset-1">
															<label>Nome</label>
															<input type="text" class="form-control" name="nomepessoa" placeholder="Nome da Pessoa"/>
														</div>

														<div class="form-group col-md-3">
												  	  		
												  	  		<label style="padding-top: 2em;">Sexo:</label>
															
															<label class="radio-inline">
																<input type="radio" name="optradio" value="M">Masculino
															</label>
															
															<label class="radio-inline">
																<input type="radio" name="optradio" value="F">Feminino
															</label><br/>
												  	  	</div>
							  						</div> <br/>

							  						<div class="row">

							  									
												  	  	
												  	  	<div class="form-group col-md-3 col-md-offset-1 ">
												  	  		<label>Data de Nascimento</label>
												  	  		<input type="date" class="form-control" id="data_nascimento"   name="dtnascimento" placeholder="data de nascimento"/>
												  	  	</div>
								  
													  	<div class="form-group col-md-1 ">
													  	  	<label>Idade</label>
													  	  	<input type="text" class="form-control"  id="idade"  name="idadepessoa" placeholder="idade"/>
												  	  	</div>
								  
													  	<div class="form-group col-md-2 col-md-offset-1">
													  		<label>Estado Civil</label>
																<select class="form-control" name="estado_civil">
																	<option>Selecione</option>
																				
																	<?php 

																		// busca o estado civil do banco

																	 	$query = mysql_query ("select * FROM tb_estcivil");
																	 
																	 	while($res=mysql_fetch_array($query)){
																		 
																		 echo "<option value='{$res["CDESTCIVIL"]}'>{$res["NMESTCIVIL"]}</option>";
																		 
																		}
																 
																	?>
																						
																</select><br>
												  	  	</div>
									
														<div class="form-group col-md-2 ">
													  		<label>Responsável</label>
															<select class="form-control" name="responsavel">
																<option>Selecione</option>
																	
																<?php 
																	// Busca os dados do responsavel do banco
																 	$query = mysql_query ("select * FROM tb_graupar");
																 
																 	while($res=mysql_fetch_array($query)){
																	 
																	 echo "<option value='{$res["CDGRAUPAR"]}'>{$res["DSGRAUPAR"]}</option>";
																	 
																	}
															 
																?>
																					
															</select><br> 	
														</div>
															<div id="icone" class="form-group col-md-1">
															<a data-toggle="modal" data-target="#responsavel-modal" class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a>  
																<!-- Modal cidade-->
																<div class="modal fade" id="responsavel-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<h4 class="modal-title" id="modalLabel">Adicionar Responsável</h4>
																			</div>
																			
																			<div class="modal-body">
																				<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_graupar.php">
																					<fieldset>
																						<div class="form-group">
																							<label class="control-label col-sm-4" for="nome">Grau Parentesco:</label> <font color="red">*</font>
																							<div class="col-sm-4">
																							  <input type="text"  class="form-control" name="graupar" id="graupar" placeholder="Grau Parentesco" required> 
																							</div>
																						</div>
																					</fieldset>
																																							
																			
																					<div class="modal-footer">
																						
																						<button type="submit" class="btn btn-success">Cadastrar</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div> <!-- /.modal -->
														</div>

														
													</div>

													<div class="row">
														<div class="form-group col-md-4 col-md-offset-1">
															<label>Naturalidade</label>
																<select class="form-control" name="naturalidade">
																<option>Selecione</option>
																	
																<?php 
																	// Busca os dados do responsavel do banco
																 	$query = mysql_query ("select * FROM tb_cidade");
																 
																 	while($res=mysql_fetch_array($query)){
																	 
																	 echo "<option value='{$res["CDCIDADE"]}'>{$res["NMCIDADE"]}</option>";
																	 
																	}
															 
																?>
																					
															</select><br> 
														</div>

														<div id="icone" class="form-group col-md-1">
															<a data-toggle="modal" data-target="#cidade-modal" class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a>  
																<!-- Modal cidade-->
																<div class="modal fade" id="cidade-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<h4 class="modal-title" id="modalLabel">Adicionar Cidade</h4>
																			</div>
																			
																			<div class="modal-body">
																				<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_cidade.php">
																					<fieldset>
																						<div class="form-group">
																							<label class="control-label col-sm-2" for="nome">Cidade:</label> <font color="red">*</font>
																							<div class="col-sm-4">
																							  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required> 
																							</div>
																						</div>
																						<div class="form-group">
																							<label class="control-label col-sm-2" for="nome">Estado:</label> <font color="red">*</font>
																							<div class="col-sm-2">
																							  <input type="text" class="form-control" name="uf" id="uf" placeholder="Estado" required> 
																							</div>
																						</div>
																					</fieldset>
																																							
																			
																					<div class="modal-footer">
																						
																						<button type="submit" class="btn btn-success">Cadastrar</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div> <!-- /.modal -->
														</div>

														<div class="form-group col-md-2 ">
															<label>Telefone</label>
															<input type="text" class="form-control" name="telefone" placeholder="(xx)xxxx-xxxx">
														</div>

														<div class="form-group col-md-2 ">
															<label>Celular</label>
															<input type="tet" class="form-control" name="celular" placeholder="(xx)xxxxx-xxxx">
														</div>
													</div>

													<h5><strong>Documentos</strong></h5>
											 		
											 		<hr>
													
													<div class="row mar_ned">
													
													</div>
													<div class="row">
													    <div class="form-group col-md-3 col-md-offset-1">
														  	<label>RG</label>
														  	<input type="text" class="form-control"  name="rg" placeholder="Identidade">
													  	</div>
														
													    <div class="form-group col-md-1 col-md-offset-1">
														  	<label>Org.Exp</label>
														   	<input type="text" class="form-control" name="orgexp">
													  	</div>
													  	  
													  	<div class="form-group col-md-2 col-md-offset-1">
														  	<label>CPF</label>
															<input type="text" class="form-control" name="cpf" placeholder="xxx.xxx.xxx.xx">
													    </div>
													</div>	

													<div class="row">

													 	<div class="form-group col-md-3 col-md-offset-1">
														  	<label>Nº do Titulo</label>
														  	<input type="text" class="form-control"  name="titulo" placeholder="Título Eleitoral">
													  	</div>

													  	<div class="form-group col-md-3 col-md-offset-1">
														  	<label>Carteira de Trabalho</label>
														  	<input type="text" class="form-control"  name="carteiratrab" placeholder="Carteira de Trabalho">
													  	</div>

													</div>
												</div> <!-- fim step 33-->
												
												<ul class="list-inline pull-right">
													<li><input type="button" name="next1" class="btn btn-primary next-step" value="Próximo"></li>
												</ul>
											</div> <!-- fim tap-pane -->

											<div class="tab-pane" role="tabpanel" id="step2">
												<div class="step33">
													<h5><strong> Dados Complementares</strong></h5>
														
													<hr>
														<strong> Endereço</strong></h5>
													<div class="row mar_ned">

													</div>

													<div class ="row">
													    <div class="form-group col-md-4 col-md-offset-1 ">
														    <label>Cep</label>
															<input type="text" class="form-control"  id="cep" name="cep" placeholder="Cep"/>
														</div>
													</div>

													<div class="row">
														<div class="form-group col-md-2 col-md-offset-1">
														  	<label>Rua</label>
														   	<input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
												  	  	</div>

												  	  	<div class="form-group col-md-1  ">
														   	<label>Nº</label>
														   	<input type="text" class="form-control" name="numcasa">
													  	</div>
													 	
													 	<div class="form-group col-md-1 ">
														   	<label>Compl.</label>
														   	<input type="text" class="form-control" name="complemento">
													  	</div>
													</div><br/>

													<div class="row">
														<div class="form-group col-md-2 col-md-offset-1 ">
													  	  	<label>Bairro</label>
													  	  	<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
												  	  	</div>

												  	  	<div class="form-group col-md-2 ">
													  	  	<label>Cidade</label>
													  	  	<input type="text" class="form-control"  id="cidade" name="cidade" placeholder="Cidade">
												  	  	</div>

												  	  	<div class="form-group col-md-1 ">
													  	  	<label>Estado</label>
													  	  	<input type="text" class="form-control"  id="estado" name="estado" >
												  	  	</div>
													</div>

													<h5><strong>Ecolaridade</strong></h5>
											 		
											 		<hr>
													
													<div class="row mar_ned">
													
													</div>

													<div class="row">
														<div class="form-group col-md-3 col-md-offset-1">
														  	
														  	<label>Escola que Estuda</label>
																<select class="form-control" name="naturalidade">
																<option>Selecione</option>
																	
																<?php 
																	// Busca os dados do responsavel do banco
																 	$query = mysql_query ("select * FROM tb_Escola");
																 
																 	while($res=mysql_fetch_array($query)){
																	 
																	 echo "<option value='{$res["CDESCOLA"]}'>{$res["NMESCOLA"]}</option>";
																	 
																	}
															 
																?>
																					
															</select><br>
													  	</div>

													  	<div  id="icone" class="form-group col-md-1">
															<a data-toggle="modal" data-target="#escola-modal" class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a>  
																<!-- Modal -->
																<div class="modal fade" id="escola-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<h4 class="modal-title" id="modalLabel">Adicionar Escola</h4>
																			</div>
																			
																			<div class="modal-body">
																				<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_escola.php">
																					<fieldset>
																						<div class="form-group">
																							<label class="control-label col-sm-2" for="nome">Escola:</label> <font color="red">*</font>
																							<div class="col-sm-4">
																							  <input type="text" class="form-control" name="escola" id="escola" placeholder="Escola" required> 
																							</div>
																						</div>
																					</fieldset>
																				
																			
																			
																					<div class="modal-footer">
																						
																						<button type="submit" class="btn btn-success">Cadastrar</button>
																						
																					</div>
																				</form>
																		  	</div>
																		</div>
																	</div>
																</div> <!-- /.modal -->
														</div>
														  
														<div class="form-group col-md-1 ">
														  	<label>Serie/periodo</label>
														  	<input type="text" class="form-control" name="serie">
													    </div>
													</div>

													<div class="row">
														<div class="form-group col-md-2 col-md-offset-1">
														  	<label>Ensino</label>
																		
															<select class="form-control" name="ensino">
																<option>Selecione</option>
																					
																<?php 
																	$query = mysql_query ("select * FROM tb_escolaridade");
																					 
																	while($res=mysql_fetch_array($query)){
																						 
																	 echo "<option value='{$res["CDESOLARIDADE"]}'>{$res["DSESCOLARIDADE"]}</option>";
																						 
																	}
																					 
																?>
															<select><br>
													  	</div>

													  	<div id="icone" class="form-group col-md-1">
															<a data-toggle="modal" data-target="#escolaridade-modal" class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a>  
																<!-- Modal -->
																<div class="modal fade" id="escolaridade-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<h4 class="modal-title" id="modalLabel">Adicionar Ensino</h4>
																			</div>
																			
																			<div class="modal-body">
																				<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_ensino.php">
																					<fieldset>
																						<div class="form-group">
																							<label class="control-label col-sm-2" for="nome">Ensino:</label> <font color="red">*</font>
																							<div class="col-sm-4">
																							  <input type="text" class="form-control" name="ensino" id="ensino" placeholder="Ensino" required> 
																							</div>
																						</div>
																					</fieldset>
		
																			
																					<div class="modal-footer">
																						
																						<button type="submit" class="btn btn-success">Cadastrar</button>
																						
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div> <!-- /.modal -->
														</div>

													  	<div class="form-group col-md-2 ">

														  	<label>Turno</label>
																		
															<select class="form-control" name="turno">
																<option>Selecione</option>
																<option value="1">Matutino</option>
																<option value="2">Vespertino</option>
																<option value="3">Noturno</option>
																<option value="4">Integral</option>		
		
															<select><br>
												  		</div>

													  	<div class="form-group col-md-2 ">
														  	
														  	<label>Situação</label>
														  	<input type="text" class="form-control" name="situacao">				
													  	</div>
													</div>
	
												</div>	
												<ul class="list-inline pull-right">
													<li><input type="button" name="prev" class="btn btn-primary prev-step" value="Voltar"></li>
													<li><input type="button" name="next2" class="btn btn-primary next-step" value="Próximo"></li>
												</ul>
											</div> <!-- fim step2 -->

											<div class="tab-pane" role="tabpanel" id="step3">
												<div class="step33">
													<h5><strong> Área Familiar</strong></h5>
													<hr>

													<div class="row">
												  	 
												  	    <div class="form-group col-md-3 col-md-offset-1">
													  	  	<label>Pai</label>
													  	  	<input type="text" class="form-control"  name="nomepai" placeholder="Nome do Pai">
												  	    </div>
													  
													    <div class="form-group col-md-2 ">
													  	  	<label>Profissão</label>
																		
															<select class="form-control" name="profissao">
																<option>Selecione</option>
																					
																<?php 
																	$query = mysql_query ("select * FROM tb_profissao");
																					 
																	while($res=mysql_fetch_array($query)){
																						 
																	 echo "<option value='{$res["CDPROF"]}'>{$res["NMPROF"]}</option>";
																						 
																	}
																					 
																?>
															<select><br>
												  	    </div>

												  	      	<div id="icone" class="form-group col-md-1">
															<a data-toggle="modal" data-target="#profissao-modal" class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a>  
																<!-- Modal -->
																<div class="modal fade" id="profissao-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<h4 class="modal-title" id="modalLabel">Adicionar Profissão</h4>
																			</div>
																			
																			<div class="modal-body">
																				<form class="form-horizontal" role="form" method = "POST" action = "processa/proc_cad_profissao.php">
																					<fieldset>
																						<div class="form-group">
																							<label class="control-label col-sm-2" for="nome">Profissão:</label> <font color="red">*</font>
																							<div class="col-sm-4">
																							  <input type="text" class="form-control" name="profissao" id="profissao" placeholder="Profissão" required> 
																							</div>
																						</div>
																					</fieldset>
																				
																			
																			
																					<div class="modal-footer">
																						
																						<button type="submit" class="btn btn-success">Cadastrar</button>
																						
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div> <!-- /.modal -->
															</div>
												  	  
												  	    <div class="form-group col-md-2 ">
													  	  	<label>Data de Nascimento</label>
													  	  	<input type="date" class="form-control" name="dtnascimentopai">
												  	    </div>
													</div>

													<div class="row">
						  	  							
						  	  							<div class="form-group col-md-3 col-md-offset-1">
							  	  							<label>Mãe</label>
							  	  							<input type="text" class="form-control"  name="nomemae" placeholder="Nome da Mae">
						  	  							</div>
													  	
													  	<div class="form-group col-md-2 ">
													  	  	<label>Profissão</label>
																		
															<select class="form-control" name="profissao">
																<option>Selecione</option>
																					
																<?php 
																	$query = mysql_query ("select * FROM tb_profissao");
																					 
																	while($res=mysql_fetch_array($query)){
																						 
																	 echo "<option value='{$res["CDPROF"]}'>{$res["NMPROF"]}</option>";
																						 
																	}
																					 
																?>
															<select><br>
												  	    </div>
												  	  	
												  	  	<div class="form-group col-md-2 ">
													  	  	<label>Data de Nascimento</label>
													  	  	<input type="date" class="form-control" name="dtnascimentomae">
												  	  	</div>
													</div>

													<div class="row">
						  	  							<div class="form-group col-md-3 col-md-offset-1">
													  	  	<label style="padding-top: 1em;">Casado(a):</label>

															<label class="radio-inline"> 
																<input type="radio" name="casado(a)"  checked onclick="_MostraCampo(true);" value="sim" >Sim
															</label>
															
															<label class="radio-inline">
																<input type="radio" name="casado(a)"  onclick="_MostraCampo(false);" value="nao">Não
															</label><br>
						  	  							</div>
							  							
													</div>

													<div class="row">
						  	  							
						  	  							<div class="form-group col-md-3 col-md-offset-1">
							  	  							<label id="labelnmconjuge">Conjuge</label>
							  	  							<input type="text" class="form-control" id="nmconjuge" name="nmconjuge" placeholder="Nome do Conjuge">
						  	  							</div>
													  	
													  	<div class="form-group col-md-2 ">
													  	  	<label id="labelprofissaoconjuge">Profissão</label>
																		
															<select class="form-control" id="profissaoconjuge" name="profissao">
																<option>Selecione</option>
																					
																<?php 
																	$query = mysql_query ("select * FROM tb_profissao");
																					 
																	while($res=mysql_fetch_array($query)){
																						 
																	 echo "<option value='{$res["CDPROF"]}'>{$res["NMPROF"]}</option>";
																						 
																	}
																					 
																?>
															<select><br>
												  	    </div>
												  	  	
												  	  	<div class="form-group col-md-2 ">
													  	  	<label id="labeldtnascconjuge">Data de Nascimento</label>
													  	  	<input type="date" class="form-control" id="dtnascconjuge" name="dtnascconjuge">
												  	  	</div>
													</div>
												</div><!-- fim step3 -->

												<ul class="list-inline pull-right">
													<li><input type="button" name="prev" class="btn btn-primary prev-step" value="Voltar"></li>
													<li><input type="submit" name="next" class="btn btn-primary next-step" value="Concluir e Salvar"></li>
												</ul>
											</div>
										</div><!-- fim tab-content -->
									</form>
	                			</div>   			
	                		</section>
	                	</div> <!-- /.div row formulario -->
	                </div>    <!-- /.container-fluid  formulario -->
	            </div><!-- /.container-fluid -->
			</div><!-- /#page-wrapper -->
	    </div><!-- /#wrapper -->

	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <script src = "js/formulario.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <script src="js/plugins/morris/raphael.min.js"></script>
	    <script src="js/plugins/morris/morris.min.js"></script>
	    <script src="js/plugins/morris/morris-data.js"></script>	
	    	<script>
	    	$('#data_nascimento').on('keyup',function(){
				
				var data = new Date();

				var dia     = data.getDate();           // 1-31
				var dia_sem = data.getDay();            // 0-6 (zero=domingo)
				var mes     = data.getMonth();          // 0-11 (zero=janeiro)
				var ano2    = data.getYear();           // 2 dígitos
				var ano4    = data.getFullYear();       // 4 dígitos
				var hora    = data.getHours();          // 0-23
				var min     = data.getMinutes();        // 0-59
				var seg     = data.getSeconds();        // 0-59
				var mseg    = data.getMilliseconds();   // 0-999
				var tz      = data.getTimezoneOffset(); // em minutos



			    if($(this).length < 10){return;}
			    else{// Não executa a função caso a data digitada não esteja no formato indicado

				    var anoNascParts = $(this).split('/');
				    var idade = ano4 - anoNascParts[0];
				 
				    //se mês atual for menor que o nascimento,não faz aniversario ainda.
				    if (mes < anoNascParts[1]){
				        idade--;
				    } else {
				        //se tiver no mes do nasc,verificar o dia
				        if (mes <= anoNascParts[1]){
				            if (dia < anoNascParts[2]){
				                //se a data atual for menor que o dia de nascimento,quer dizer que ele ainda não fez aniversario
				                idade--;
				            }
				        }
			    	}

			    	 $('#idade').val(idade);
			});
	    </script>

	</body>

</html>
