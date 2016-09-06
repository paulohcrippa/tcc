
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
                            Tela de Pessoas<small> lista de pessoas cadastrados </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="glyphicon glyphicon-menu-right"></i> pagina inicial
                            </li>
							<li class="active">
                                <i class="glyphicon glyphicon-menu-right"></i> tela de Pessoas
                            </li>
                        </ol>
                    </div>
                </div>
				<div class="col-sm-12">
            
            
                <a class="btn btn-success" href="principal.php?link=6"><span class="glyphicon glyphicon-plus"></span> Novo</a>
          

        </div></br></br>
                <!-- /.row -->  
					<div class="row">
						<div class="col-xs-12 col-md-12"">
							<table class = " table ">
									<thead>
										<tr>
											<th width= "80" aling="center">Nº de Cadastro</th>
											<th width="290" aling="center"><span class="style9"><b>Nome</b></span></th>
											<th width="130" aling="center"><span class="style9"><b>Contato</b></span></th>
											<th width="110" aling="center"><span class="style9"><b>Estado Civil</b></span></th>     
											<th width="" aling="center"><span class="style9"><b>RG/CPF</b></span></th>                                                
											<th width="90" aling="center"><span class="style9"><b>Cad Único</b></span></th>
											<th width="" aling="center"><span class="style9"><b>Bolsa Familia</b></span></th>
											<th width="" aling="center"><span class="style9"><b>Açoes</b></span></th>
										</tr>
									</thead>
								<tbody>
								
								
									
											
											
											<tr>
											<td>23  </td>
											<td> paulo Henrique Souza Grippa</td>
											<td> (31)985137523</td>
											<td> solteiro</td>
											<td> 111.111.111.11</td>
											<td> sim</td>
											<td> sim</td> 
											
											<td> 
											
													 <a class='btn btn-xs btn-primary' href=''>
														 <type='button' class="glyphicon glyphicon-eye-open"/>
													 </a> 
													 
													 <a class='btn btn-xs btn-warning'  href=''>
														<type = 'button'  class='glyphicon glyphicon-pencil'/>
													 </a>
													 
													 <a class='btn btn-xs btn-danger' href=''>
														<type='' class='glyphicon glyphicon-trash'/>
													 </a> 
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
	
	<script>

 $(document).ready(function(event) {

    $('.table').on("click", ".delete", function(event) {



        event.preventDefault();
        var codigousuario = $(this).attr('data-codigousuario')
        var row = $(this).parents("td").parents('tr');

        $.confirm ({
            text: "Deseja excluir este usuário?",
            confirm: function (button) {


                    $.post("exclui/excluiusuario.php",{codigousuario: codigousuario, funcao: "Excluir"}, function(data){
                                 pattern =  /errocodigo/g;
                                if( pattern.test(data) ){
                                    bootbox.alert("Este usuário contém uma ou mais permissões, não será possível excluir!");
                                }else{
                                    $("#linha"+codigousuario).remove();
                                    var box = bootbox.alert("Usuário excluído com sucesso!");
                                    setTimeout(function() {
                                            box.modal('hide');
                                      }, 3000);
                                }
                    });
            },
            cancel: function(button) {
                // nothing to do
            },
            confirmButton: "Sim",
            cancelButton: "Não",
            post: true,
            confirmButtonClass: "btn-primary",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal

          });
        });

 });
 </script> 
 
 

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

</html>
