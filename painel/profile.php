<?php 

include 'header.php'; 
include '_select_nivel.php';

?>

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
									<li class="breadcrumb-item active">Profile</li>
								</ol>
								<div class="clearfix"></div>
							</div>



						</div>
					</div>

					<!-- download -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="far fa-user"></i> Profile details</h3>
								</div>

								<div class="card-body">

									<form action="edit_user.php" method="post" enctype="multipart/form-data">

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Mail</label>
													<input class="form-control" name="id" type="number" value='<?php echo $id?>' style='display: none' />
													<input class="form-control" name="mail" type="text" value="<?php echo $mailHeader?>"  required />
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label>Name</label>
													<input class="form-control" name="name" type="text" value="<?php echo $name?>" autocomplete='off' required />
													
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Tel</label>
													<input class="form-control phone_with_ddd" value="<?php echo $tel?>" name="tel" id="celular" type="text"  required />
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label>CNPJ</label>
													<input class="form-control cnpj" name="cnpj" value="<?php echo $cnpj?>" type="text" required />
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-lg-12">
												<hr>
												<button type="submit" class="btn btn-primary btn-block">Edit profile</button>
											</div>
										</div>

									</form>

								</div>
								<!-- end card-body -->
								
							</div>
							<!-- end card -->

						</div>
						<!-- end col -->



						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="far fa-file-image"></i> Avatar</h3>
								</div>

								<div class="card-body text-center">

									<div class="row">
										<div class="col-lg-12">
											<img alt="avatar" class="img-fluid" src="images/profile/<?php echo $image. '.jpg'?>">
										</div>
									</div>

									<div class="row">
										<form action="insert_image.php" method="post" enctype="multipart/form-data">
										
												<div class="form-group">
													<input class="form-control" name="id" type="number" value='<?php echo $id?>' style='display: none' />
													<br>
													<center>
													<input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
													</center>
												</div>
											
											<div class="col-lg-12">
												<button type="submit" class="btn btn-info btn-block mt-3">Change avatar</button>
											</div>
										</form>
									</div>

								</div>
								<!-- end card-body -->

							</div>
							<!-- end card -->

						</div>
						<!-- end col -->


					</div>

					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9" style="margin-top: -100px">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="far fa-user"></i> Reset Password</h3>
							</div>

							<div class="card-body">


								<form action="edit_password.php" method="post" enctype="multipart/form-data">


									<div class="row">
										
										<div class="col-lg-4">
											<div class="form-group">
												<label>Current Password</label>
												<input class="form-control" name="current_password" type="password" id="current_password" />
											</div>
										</div>
										
										<div class="col-lg-4">
											<div class="form-group">
												<label>New Password</label>
												<input class="form-control" name="new_password" type="password" id="password" />
												<input class="form-control" name="id" type="number" value="<?php echo $id?>" style='display: none' />
											</div>
										</div>

										<div class="col-lg-4">
											<div class="form-group">
												<label>Repeat Password</label>
												<input class="form-control" name="password2" type="password" id="confirm_password" />
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-lg-12">
											<hr>
											<button type="submit" class="btn btn-danger btn-block">Edit Password</button>
										</div>
									</div>

								</form>

							</div>
							<!-- end card-body -->

						</div>
						<!-- end card -->

					</div>
					<!-- end col -->


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