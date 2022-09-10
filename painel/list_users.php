<?php include 'header.php'; ?>


<script>
	$(function(){
		$('#editModal').on('show.bs.modal', function (event) {
			//atribuindo os data-name (name)
			var button = $(event.relatedTarget) 
			var recipient = button.data('id') 
			var recipient2 = button.data('name')
			var recipient3 = button.data('mail')
			var recipient4 = button.data('tel')
			
			
			
			var modal = $(this)
			//insere os valores dentro dos inputs pelo id 
			modal.find('.modal-title').text('Verification Code ' + recipient)
			modal.find('#recipient-id').val(recipient)
			modal.find('#recipient-name').val(recipient2)
			modal.find('#recipient-mail').val(recipient3)
			modal.find('#recipient-tel').val(recipient4)

			
		});

	});
</script>

<script>
	$(function(){
		$('#deleteModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-delete') 
			var recipient2 = button.data('name-delete')
			var modal = $(this)
			modal.find('.modal-title').text('Delete Code: ' + recipient)
			modal.find('#recipient-id-delete').val(recipient)
			modal.find('#recipient-name-delete').val(recipient2)
			
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
															<th>Telephone</th>
													
																<th>Action</th>
									
														</tr>
													</thead>
													<tbody>
														<?php 
															include 'conexao/conexao.php';

															$sql = "SELECT * FROM agenda";
																$search = mysqli_query($conexao,$sql);	

																while($array = mysqli_fetch_array($search)) {
																	
																	$id = $array['id'];
																	$name = $array['name'];
																	$phone = $array['telephone'];
																	
														?>
															<tr>
																<td><?php echo $name ?></td>
																<td><?php echo $phone ?></td>

																	<td>
																		<button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal" data-id="" data-name="" data-mail="" data-tel="" data-nivel=""><i class="fas fa-user-edit"></i></button>

																	</button>


																		<button type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#deleteModal" data-id-delete="" data-name-delete=""><i class="fas fa-user-minus"></i></button>

																		<button type="button" class="btn btn-primary" title="Nivel" data-toggle="modal" data-target="#nivelModal" data-id-nivel="" ><i class="fas fa-user-plus"></i></button> 
																	

																	
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
																		<form action="_edit_user.php" method="post">
																			<div class="form-group">
																				<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
																				<label for="message-text" class="col-form-label">Code</label>
																				<input type="text" class="form-control" id="recipient-id" readonly name="id">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Name</label>
																				<input type="text" class="form-control" id="recipient-name"  name="name">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Mail</label>
																				<input type="text" class="form-control" id="recipient-mail"  name="mail">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Telephone</label>
																				<input type="text" class="form-control telefone" id="recipient-tel"  name="tel">
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
																				<label for="message-text" class="col-form-label">Code</label>
																				<input type="text" class="form-control" id="recipient-id-delete" readonly name="id">
																			</div>
																			<div class="form-group">

																				<label for="message-text" class="col-form-label">Name</label>
																				<input type="text" class="form-control" id="recipient-name-delete" readonly name="name">
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
																					<label for="message-text" class="col-form-label">Code</label>
																					<input type="text" class="form-control" id="recipient-id-nivel" readonly name="id">
																				</div>
																				<div class="form-group">
																					<label for="exampleFormControlSelect1">Nível</label>
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
