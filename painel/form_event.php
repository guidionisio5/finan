<?php include 'header.php'; ?>

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
									<li class="breadcrumb-item active">Add Contacts</li>
								</ol>
								<div class="clearfix"></div>
							</div>



						</div>
					</div>

					<!-- download -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="far fa-check-square"></i> Form Event</h3>
							</div>

							<div class="card-body">
								<?php

								if(isset($_GET['msg'])) {?>
									<div class="alert alert-success" role="alert">
										Evento Adicionado com sucesso! 
									</div>
								<?php }	?>
								<form action="_insert_event.php" method="post">
									
									<div class="form-group">
										<label for="exampleInputEmail1">Título</label>
										<input type="text" class="form-control" id="exampleInputNumber1" name = "titulo" required autocomplete="off">
										
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">Type</label>
										<select class="form-control" id="exampleFormControlSelect1" name="type">
												<option>Reunião</option>
												<option>Atividade</option>
												<option>Evento</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Hour</label>
										<input type="time"  class="form-control"  name="hour" required autocomplete="off">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Date</label>
										<input type="date" class="form-control" name="dateevent" required autocomplete="off">
									</div>
									
									<div style="text-align: right">
										<button type="submit" class="btn btn-block btn-dark">Submit</button>
									</div>
								</form>

							</div>
						</div><!-- end card-->
					</div>






				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->

		</div>
		<!-- END content-page -->

		<?php include 'footer.php' ?>

		<script type="text/javascript">
			var password = document.getElementById("password")
			, confirm_password = document.getElementById("confirm_password");

			function validatePassword(){
				if(password.value != confirm_password.value) {
					confirm_password.setCustomValidity("Senhas diferentes!");
				} else {
					confirm_password.setCustomValidity('');
				}
			}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>