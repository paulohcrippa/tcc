<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
	<body>
		<div id="wrapper">
			<div id="page-wrapper">
				<div class="container-fluid">
					<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"> Controle de Atendimentos<small> lista de Atendimentos cadastrados </small> </h1>
							<ol class="breadcrumb">
								<li class=""> Página Inicial </li>
								<li class="active">Controle Atendimento</li>
							</ol>
					</div>
				</div>
	
				<div class="col-sm-6 col-md-6">
					<a class="btn btn-success" href="principal.php?link=2"><span class="glyphicon glyphicon-plus"></span> Novo</a>
				</div>

				<div class="col-md-4 col-md-offset-2 ">
					<form class="navbar-form navbar-left" method="GET" action="pesquisar.php" role="search">
					  <div  class="form-group">
					    	<input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar">
					  </div>
					  	<button type="submit" class="btn btn-primary">Pesquisar</button>
					</form>
				</div>
					</br></br>
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<table class = " table ">
								<thead>
									<tr>
										<th width="" aling="center">Nº</th>
										<th width="" aling="center"><span class="style9"><b>Nome</b></span></th>
										<th width="" aling="center"><span class="style9"><b>Atividade Realizada</b></span></th>     
										<th width="" aling="center"><span class="style9"><b>Instrutor (a)</b></span></th>
										<th width="" aling="center"><span class="style9"><b>Ações</b></span></th>
									</tr>
								</thead>
								<tbody>			
									<tr>
										<td>001</td>
										<td>Aluno TESTE</td>
										<td>Trabalho escolar</td>
										<td>Tayane</td>
										<td><a class='btn btn-xs btn-primary' href=''><type='button' class="glyphicon glyphicon-eye-open"/></a> 
											<a class='btn btn-xs btn-warning' href=''><type ='button' class='glyphicon glyphicon-pencil'/></a>
											<a class='btn btn-xs btn-success' href=''><type='' class="glyphicon glyphicon-plus"/></a> 
										</td>
									</tr>	
								</tbody>
							</table>
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
				$(document).ready(function() {
					$('#example').dataTable();
				})
			</script>
		</body>
	</div>
</html>
