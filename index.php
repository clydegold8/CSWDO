<!doctype html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CSWDO - Forms </title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<script src="js/foundation.tab.js"></script>
		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body>
		<section class="top row">
			<section class="large-4 medium-4 columns">
				<section class="row">
					<?php include 'include/navigation.php' ?>	
				</section>
			</section>
			
			<section class="large-8 medium-8 columns">
				<section class="row">
					<section class="tabs-content">
						<section class="content active" id="panel11">
							<section class="row">
								<?php include 'include/obligation_request_form.php' ?>
							</section>
						</section>

						<section class="content" id="panel21">
							<section class="row">
								<?php include 'include/disbursement_voucher_form.php' ?>
							</section>
						</section>

						<section class="content" id="panel31">
							<section class="row">
								<?php include 'include/purchase_request_form.php' ?>
							</section>
						</section>
					</section>
				</section>
			</section>
		</section>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
	  	<script src="js/foundation/foundation.abide.js"></script>
	  	<script src="js/foundation/foundation.alert.js"></script>

		<script>
		$(document).foundation();
		</script>
	</body>
</html>