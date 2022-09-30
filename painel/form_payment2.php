<?php include 'header.php'; ?>

<body class="adminbody">
	

	<div id="main">

		<!-- top bar navigation -->
		<?php include 'topbar.php' ?>
		<!-- End Navigation -->

		<?php include 'menu.php'; ?>

		<div class="content-page">
			<div class="content">

				<div class="container-fluid">

					<!-- Start content -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card mb-3">


							<div class="card-body">
								<div class="card-header">
								<h3><i class="far fa-check-square"></i> List Payments</h3>
							</div>
								<div class="table-responsive">
									<table id="example2" class="table table-bordered table-hover display" style="width:100%">
										<thead>
											<tr>
												<th>Code</th>

												<th>Date End</th>
												<th>Payment</th>
												
												<th>Status</th>
												<th>OBS</th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody>
											<?php 
											
												include 'conexao/conexao.php';
												$data1 = $_POST['data1'];
												$data2 = $_POST['data2'];
												
												$sql = "SELECT * FROM payment WHERE dateend BETWEEN '$data1' AND '$data2' AND STATUS = 'Pedente' ORDER BY dateend";
												$search = mysqli_query($conexao,$sql);

												while($array = mysqli_fetch_array($search)) {
													$id = $array['id'];
													
													$code = $array['code'];
													$payment = $array['payment'];
													$dateend = $array['dateend'];
													$status = $array['status'];
													$obs = $array['obs'];

											?>
												<tr>
													<td><?php echo $code?></td>
													<td><?php echo $dateend?></td>
													<td><?php echo $payment?></td>
													<td><?php echo $status?></td>
													<td><?php echo $obs?></td>
													<td><a role="button" href="project_details.php?code=<?php echo $code?>" class="btn btn-primary" title="Details" target='_blank'><i class="fas fa-eye"></i></a></td>







												</tr>
												
											<?php } ?>
					




										</div>





									</tbody>
								</table>
							</div>


							
							
							

							

						</div>
						<!-- end card-body-->



					</div>
					<!-- end card-->
					<!-- END content -->
				</div>
			</div>
		</div>
		<!-- END content-page -->

		<?php include 'footer.php' ?>

		