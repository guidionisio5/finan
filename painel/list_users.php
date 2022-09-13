<?php 

include 'header.php';
include 'conexao/conexao.php';

?>


<script>
	$(function(){
		$('#editModal').on('show.bs.modal', function (event) {
			//atribuindo os data-name (name)
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-mail') 
			
			
			
			var modal = $(this)
			//insere os valores dentro dos inputs pelo id 
			modal.find('.modal-title').text('Verification Code ' + recipient)
			modal.find('#recipient-mail').val(recipient)

			
		});

	});
</script>

<script>
	$(function(){
		$('#deleteModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-mail') 
			var recipient2 = button.data('id-nivel')
			var modal = $(this)
			modal.find('.modal-title').text('Delete Code: ' + recipient)
			modal.find('#recipient-mail-delete').val(recipient)
			modal.find('#recipient-nivel-delete').val(recipient2)
			
		});

	});
</script>
<script>
	$(function(){
		$('#nivelModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-nivel') 
			
			var modal = $(this)
			modal.find('.modal-title').text('Nivel Code: ' + recipient)
			modal.find('#recipient-id-nivel').val(recipient)
			
			
		});

	});
</script>


<body class="adminbody">
	

	<div id="main">

		<!-- top bar navigation -->
		<?php include 'topbar.php' ?>
		<!-- End Navigation -->

		<?php include 'menu.php'; ?>

		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">

					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Dashboard</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Home</li>
									<li class="breadcrumb-item active">List Users</li>
								</ol>
								<div class="clearfix"></div>
							</div>



						</div>
					</div>

					<!-- download -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
					
						
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="far fa-check-square"></i> List Users</h3>
							</div>

							<div class="card-body">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card mb-3">
										

										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-bordered table-hover display" style="width:100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>User level</th>
													
																<th>Action</th>
									
														</tr>
													</thead>
													<tbody>
														<?php 

															$sql = "SELECT * FROM usuario";
																$search = mysqli_query($conexao,$sql);	

																while($array = mysqli_fetch_array($search)) {
																	
																	$id = $array['id'];
																	$mail = $array['mail'];
																	// $password = $array['password'];
																	$nivel = $array['id_user_nivel'];

																	
														?>
															<tr>
																<td><?php echo $mail ?></td>
																<td><?php echo $nivel ?></td>

																	<td>
																		<button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal" data-id-mail="<?php echo $mail?>"><i class="fas fa-user-edit"></i></button>

																	</button>


																		<button type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#deleteModal" data-id-mail="<?php echo $mail?>" data-id-nivel="<?php echo $nivel?>"><i class="fas fa-user-minus"></i></button>

																		<button type="button" class="btn btn-primary" title="Nivel" data-toggle="modal" data-target="#nivelModal" data-id-nivel="<?php echo $nivel?>" ><i class="fas fa-user-plus"></i></button> 
																	

																	
																</td>
															
														</tr>

														<!-- Edit Modal -->
														



														
															</div>




														<?php } ?>
													</tbody>
												</table>
											</div>
											<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">New message</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<form action="_edit_user.php?=id<?php echo $id?>" method="post">
																	
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">E-Mail</label>
																				<input type="text" class="form-control" id="recipient-mail"  name="mail">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Current Password</label>
																				<input type="text" class="form-control" id="current_password"  name="current_password">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">New Password</label>
																				<input type="text" class="form-control" id="password"  name="password">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Confirm Password</label>
																				<input type="text" class="form-control" id="confirm-password"  name="confirm_password">
																			</div>
																			
																			

																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-primary">Change</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
											<!-- Delete Modal -->
														<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">New message</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<form action="delete_user.php" method="post">
																			<div class="form-group">
																				<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
																				<label for="message-text" class="col-form-label">E-Mail</label>
																				<input type="text" class="form-control" id="recipient-mail-delete" readonly name="id">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">User level</label>
																				<input type="text" class="form-control" id="recipient-nivel-delete" readonly name="name">
																			</div>


																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-danger">Delete</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
															<!-- Nivel Modal -->
															<div class="modal fade" id="nivelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">New message</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<form action="edit_nivel.php" method="post">
																				<div class="form-group">
																					<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
																					<label for="message-text" class="col-form-label">Current level</label>
																					<input type="text" class="form-control" id="recipient-id-nivel" readonly name="id">
																				</div>
																				<div class="form-group">
																					<label for="exampleFormControlSelect1">New level</label>
																					<select class="form-control" id="exampleFormControlSelect1" name="nivel">
																						
																					</select>
																				</div>


																			</div>
																			<div class="modal-footer">
																				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																				<button type="submit" class="btn btn-primary">Change</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
											<!-- end table-responsive-->

										</div>
										<!-- end card-body-->

									</div>
									<!-- end card-->

								</div>

							</div>
						</div><!-- end card-->
					</div>

				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->



		</div>
		<!-- END content-page -->

		<script type="text/javascript">
						$(".telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
					</script>
					<?php include 'footer.php' ?>

					<script type="text/javascript">
						$(document).ready(function() {
							$('#example').DataTable( { } );
						} );
					</script>
		<script type="text/javascript">
			var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

			function validatePassword(){
  			 	if(password.value != confirm_password) {
    				confirm_password.setCustomValidity("Senhas diferentes");
  				}else{
    				confirm_password.setCustomValidity('');
  				}

  				if(password.value == '' || confirm_password.value == ''){
    				confirm_password.setCustomValidity("Por favor, coloque a senha");
  				}else{
    				confirm_password.setCustomValidity('');
  				}
 
			}

				password.onchange = validatePassword;
				confirm_password.onkeyup = validatePassword;
				</script>
