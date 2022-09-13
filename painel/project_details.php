<?php 
include 'header.php';
include 'conexao/conexao.php';
?>

<script>
	$(function(){
		$('#nivelModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-nivel') 
			
			var modal = $(this)
			modal.find('.modal-title').text('Payment Code: ' + recipient)
			modal.find('#recipient-id-nivel').val(recipient)
			
			
		});

	});
</script>

<script>
	$(function(){
		$('#invoiceModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-nivel') 
			
			var modal = $(this)
			modal.find('.modal-title').text('Payment Code: ' + recipient)
			modal.find('#recipient-id-nivel').val(recipient)
			
			
		});

	});
</script>

<script>
	$(function(){
		$('#deleteModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-delete') 
			var recipient2 = button.data('id-payment')
			var modal = $(this)
			modal.find('.modal-title').text('Delete Code: ' + recipient)
			modal.find('#recipient-id-delete').val(recipient)
			modal.find('#recipient-id-payment').val(recipient2)
			
		});

	});
</script>
<script>
	$(function(){
		$('#deleteModal2').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-delete') 
			var recipient2 = button.data('id-payment')
			var modal = $(this)
			modal.find('.modal-title').text('Delete Code: ' + recipient)
			modal.find('#recipient-id-delete').val(recipient)
			modal.find('#recipient-id-payment').val(recipient2)
			
		});

	});
</script>
<script>
	$(function(){
		$('#editModal').on('show.bs.modal', function (event) {
			//atribuindo os data-name (name)
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-nivel') 
			var recipient2 = button.data('id-date')
			var recipient3 = button.data('id-payment')

			
			
			var modal = $(this)
			//insere os valores dentro dos inputs pelo id 
			modal.find('.modal-title').text('Verification Code ' + recipient)
			modal.find('#recipient-id').val(recipient)
			modal.find('#recipient-date').val(recipient2)
			modal.find('#recipient-payment').val(recipient3)
			

			
		});

	});
</script>
<script>
	$(function(){
		$('#editModal2').on('show.bs.modal', function (event) {
			//atribuindo os data-name (name)
			var button = $(event.relatedTarget) 
			var recipient = button.data('id-nivel') 
			var recipient2 = button.data('id-service')
			var recipient3 = button.data('id-paytotal')
			var recipient4 = button.data('id-npay')
			var recipient5 = button.data('id-dateend')

			
			
			var modal = $(this)
			//insere os valores dentro dos inputs pelo id 
			modal.find('.modal-title').text('Verification Code ' + recipient)
			modal.find('#recipient-id').val(recipient)
			modal.find('#recipient-service').val(recipient2)
			modal.find('#recipient-payment').val(recipient3)
			modal.find('#recipient-npay').val(recipient4)
			modal.find('#recipient-dateend').val(recipient5)
			

			
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
								<h3><i class="far fa-check-square"></i> List Projects</h3>
							</div>

							<div class="card-body">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card mb-3">
										

										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-bordered table-hover display" style="width:100%">
													<thead>
														<tr>
															<th>Code</th>
															<th>Client</th>
															<th>Service</th>
															<th>Date End</th>
															<th>Payment Total</th>
															<th>Payment Parts</th>
															<th>Action</th>
															
															
														</tr>
													</thead>
													<tbody>
														<?php
														$code = $_GET['code'];
														$sql = "SELECT * FROM project WHERE code=$code";
														$search = mysqli_query($conexao,$sql);

														while($array = mysqli_fetch_array($search)) {
															$id = $array['id'];
															$code = $array['code'];
															$client = $array['client'];
															$service = $array['service'];
															$npayments = $array['npayments'];
															$dateend = $array['dateend'];
															$paytotal = $array['paytotal'];
															$contract = $array['contract'];
										
														?>
															<tr>
																<td><?php echo $code ?></td>
																<td><?php echo $client ?></td>
																<td><?php echo $service ?></td>
																<td><?php echo $dateend ?></td>
																<td><?php echo $paytotal ?></td>
																<td><?php echo $npayments . ' payments' ?></td>
																<td>
																	<button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal2" 
																	data-id-nivel="<?php echo $code ?>" 
																	data-id-service='<?php echo $service ?>'
																	data-id-npay="<?php echo $npayments ?>" 
																	data-id-paytotal='<?php echo $paytotal ?>'
																	data-id-dateend='<?php echo $dateend ?>'>
																	
																	<i class="fas fa-edit"></i></button> 

																	<button type="button" class="btn btn-danger" title="Edit" data-toggle="modal" data-target="#deleteModal2" data-id-delete="<?php echo $code ?>" data-id-payment='<?php echo $paytotal ?>' ><i class="fas fa-times"></i></button> 
																</td>
																

															</tr>
														<?php
															}															
														?>	
													</div>
												</tbody>
											</table>
										</div>
										
										<div class="modal fade" id="editModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">New message</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form action="edit_project.php" method="post">
															<div class="form-group">
																<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
																<label for="message-text" class="col-form-label">Code</label>
																<input type="text" class="form-control" id="recipient-id" readonly name="id">
																
															</div>
															<div class="form-group">

																<label for="message-text" class="col-form-label">Service</label>
																<input type="text" class="form-control" id="recipient-service" name="service">
															</div>
															<div class="form-group">

																<label for="message-text" class="col-form-label">Date</label>
																<input type="date" class="form-control" id="recipient-dateend"  name="date" value="">
															</div>
															<div class="form-group">

																<label for="message-text" class="col-form-label">Payment Total</label>
																<input type="text" class="form-control money" id="recipient-payment"  name="value" >
															</div>
															<div class="form-group">

																<label for="message-text" class="col-form-label">Payment Parts</label>
																<input type="number" class="form-control" id="recipient-npay"  name="npay" value="" >
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


										<div class="modal fade" id="deleteModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">New message</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form action="delete_project.php" method="post">
															<div class="form-group">
																<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
																<label for="message-text" class="col-form-label">Code</label>
																<input type="text" class="form-control" id="recipient-id-delete" readonly name="id">
																<input type="text" class="form-control" name="code" value="" style='display: none'>
															</div>
															<div class="form-group">

																<label for="message-text" class="col-form-label">Value</label>
																<input type="text" class="form-control" id="recipient-id-payment" readonly name="value">
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

									</div>
									<!-- end card-body-->


								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card mb-3">


									<div class="card-body">
										<div class="table-responsive">
											<table id="example2" class="table table-bordered table-hover display" style="width:100%">
												<thead>
													<tr>
														<th>Code</th>

														<th>Date End</th>
														<th>Payment</th>
														<th>Receipt</th>
														<th>Invoice</th>
														<th>Status</th>
														<th>OBS</th>
														<th>Action</th>

													</tr>
												</thead>
												<tbody>
													
														<tr>
															<td></td>
															<td></td>
															<td></td>
															<td>
															


																	<a href=" role='button' class='btn btn-success' target="_blank"><i class="fas fa-receipt"></i></a>
															
															</td>
															<td>
															


																	<a href="" role='button' class='btn btn-success' target="_blank"><i class="fas fa-file-invoice-dollar"></i></a>
															
															</td>
															<td></td>
															<td></td>







															<td>
																<button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal" data-id-nivel="" data-id-date='' data-id-payment=''><i class="fas fa-edit"></i></button> 
																<button type="button" class="btn btn-primary" title="Recibo" data-toggle="modal" data-target="#nivelModal" data-id-nivel="" ><i class="fas fa-receipt"></i></button> 
																<button type="button" class="btn btn-success" title="Nota Fiscal" data-toggle="modal" data-target="#invoiceModal" data-id-nivel="" ><i class="fas fa-file-invoice-dollar"></i></button> 
																<button type="button" class="btn btn-danger" title="Edit" data-toggle="modal" data-target="#deleteModal" data-id-delete="" data-id-payment='' ><i class="fas fa-times"></i></button> 





															</td>

														</tr>



												</div>





											</tbody>
										</table>
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
													<form action="insert_recibo.php" method="post" enctype='multipart/form-data'>
														<div class="form-group">
															<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
															<label for="message-text" class="col-form-label">Code</label>
															<input type="text" class="form-control" id="recipient-id-nivel" readonly name="id">
															<input type="text" class="form-control" name="code" value="" style='display: none'>
														</div>
														
														<div class="form-group">
															<label for="exampleFormControlFile1">Recibo</label>
															<input type="file" class="form-control-file" name="recibo" id="exampleFormControlFile1">
														</div>
														


													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>

									<!-- invoice Modal -->
									<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">New message</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="insert_invoice.php" method="post" enctype='multipart/form-data'>
														<div class="form-group">
															<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
															<label for="message-text" class="col-form-label">Code</label>
															<input type="text" class="form-control" id="recipient-id-nivel" readonly name="id">
															<input type="text" class="form-control" name="code" value="" style='display: none'>
														</div>
														
														<div class="form-group">
															<label for="exampleFormControlFile1">Nota Fiscal</label>
															<input type="file" class="form-control-file" name="recibo" id="exampleFormControlFile1">
														</div>
														


													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>

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
													<form action="delete_payment.php" method="post">
														<div class="form-group">
															<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
															<label for="message-text" class="col-form-label">Code</label>
															<input type="text" class="form-control" id="recipient-id-delete" readonly name="id">
															<input type="text" class="form-control" name="code" value="" style='display: none'>
														</div>
														<div class="form-group">

															<label for="message-text" class="col-form-label">Value</label>
															<input type="text" class="form-control" id="recipient-id-payment" readonly name="value">
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
													<form action="edit_payment.php" method="post">
														<div class="form-group">
															<!-- <input type="text" class="form-control" id="recipient-id" style="display: none">-->
															<label for="message-text" class="col-form-label">Code</label>
															<input type="text" class="form-control" id="recipient-id" readonly name="id">
															<input type="text" class="form-control" name="code" value="" style='display: none'>
														</div>
														<div class="form-group">

															<label for="message-text" class="col-form-label">Date</label>
															<input type="date" class="form-control" id="recipient-date"  name="date" value="">
														</div>
														<div class="form-group">

															<label for="message-text" class="col-form-label">Value</label>
															<input type="text" class="form-control money" id="recipient-payment"  name="value">
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


							<div class="table-responsive">
								<table id="exemplo3" class="table table-bordered table-hover display" style="width:100%">
									<thead>
										<tr>
											<th>Code</th>

											<th>Task</th>
											<th>Status</th>

											<th>Action</th>

										</tr>
									</thead>
									<tbody>
										
											<tr>
												<td></td>
												<td></td>
												<td></td>




												<td>


													<a href="check_task.php?id=&code=" role='button' class="btn btn-primary"><i class="fas fa-check"></i></a>



												</td>

											</tr>



									</div>





								</tbody>
							</table>
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
						$("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
						$('.date').mask('00/00/0000');
						$('.time').mask('00:00:00');
						$('.date_time').mask('00/00/0000 00:00:00');
						$('.cep').mask('00000-000');
						$('.phone').mask('0000-0000');
						$('.phone_with_ddd').mask('(00) 0000-0000');
						$('.phone_us').mask('(000) 000-0000');
						$('.mixed').mask('AAA 000-S0S');
						$('.cpf').mask('000.000.000-00', {reverse: true});
						$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
						$('.money').mask('000.000.000.000.000,00', {reverse: true});
						$('.money2').mask("#.##0,00", {reverse: true});
						$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
							translation: {
								'Z': {
									pattern: /[0-9]/, optional: true
								}
							}
						});
						$('.ip_address').mask('099.099.099.099');
						$('.percent').mask('##0,00%', {reverse: true});
						$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
						$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
						$('.fallback').mask("00r00r0000", {
							translation: {
								'r': {
									pattern: /[\/]/,
									fallback: '/'
								},
								placeholder: "__/__/____"
							}
						});
						$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
					</script>
					<script type="text/javascript">
						$(".telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
					</script>
					<?php include 'footer.php' ?>

					<script type="text/javascript">
						$(document).ready(function() {
							$('#example').DataTable( {
								"paging":   false,
								"ordering": false,
								"info":     false
							} );
						} );
					</script>
					<script type="text/javascript">
						$(document).ready(function() {
							$('#example2').DataTable( {
								"paging":   false,
								"ordering": false,
								"info":     false
							} );
						} );
					</script>

					
					
