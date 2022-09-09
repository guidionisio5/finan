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
									<li class="breadcrumb-item active">Add Projects</li>
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
								<h3><i class="far fa-check-square"></i> Form Projects</h3>
							</div>

							<div class="card-body">
								<?php ?>

								<form action="_insert_project.php" method="post" enctype='multipart/form-data'>
									<div class="form-group">
										<label for="exampleInputEmail1">Code</label>
										<input type="text" value='<?php echo rand(1000,5000) ?>' class="form-control" name='code'  readonly>
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Client</label>
										<input type="text" class="form-control" name='client' id='exemplo3' required>
										
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Service</label>
										<input type="text"  class="form-control" placeholder="Service" name="service" required autocomplete="off">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Description</label>
										<textarea class="form-control" name="description" required></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Date of the conclusion</label>
										<input type="date" class="form-control" name="date" required>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Total R$</label>
										<input class="form-control money"  name="value" required>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Number of Payments</label>
										
											<input type="number" class="form-control"  name="parc" required>
															
										
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Obs:</label>
										<textarea class="form-control" name="obs" required>Valor de Entrada, observações e etc...</textarea>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Contract</label>
										<input type="file" class="form-control-file" id="exampleFormControlFile1" name="contract" required>
									</div>
									<div class="form-group">
										<label for="exampleFormControlFile1">Tasks</label>
										<div class="" id="dep">
											
												<input type="text" class="form-control"  id="tasks[]" name="tasks[]" required autocomplete='off'>
											
											<br>
											
												<button class="btn btn-primary" type="button" id="add_tasks">Add</button>
											
										</div>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
		<script type="text/javascript" src="js/jquery.easy-autocomplete.min.js"></script>
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
		<script type="text/javascript">
			$(document).ready(function() {

      //exemplo 03
      var options = {
        //arquivos com dados do json feito com json_encode
        url: "consultaAgenda.php",
          //valor a ser recuperado
          getValue: "name",
          //modo de listagem, buscar em toda lista
          list: {
          	match: {
          		enabled: true
          	}
          }


      };
      //aplicar ao id exemplo3
      $("#exemplo3").easyAutocomplete(options);
  });

</script>

<script type="text/javascript">
	$("#add_tasks").click(function() {
		var campos_novos = "<br><div class='dep_fc'><div style='margin-top: 5px;'><input type='text' class='form-control' id='tasks[]' name='tasks[]' required autocomplete='off'></div><div  id='dep_fc' style='margin-top: 5px;'><button class='btn btn-danger remove' type='button' >Remove</button></div></div>";
		$("#dep").append(campos_novos);
	});

	$(document).on('click', 'button.remove', function() {
		$(this).closest('div.dep_fc').remove();
	});
</script>



