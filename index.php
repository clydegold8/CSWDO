<!doctype html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CSWDO - Forms </title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/main.css" />
		<!-- nka cdn ni brad need ug internet arun mu gawas para ni sa icon na aku gi gamit -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/foundation.tab.js"></script>
		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body>
	<div id="container">
   		<div id="header">
   			<!-- Changed design for mobile friendly UI -->
		<div class="off-canvas-wrap" data-offcanvas>
		  <div class="inner-wrap">
		    <nav class="tab-bar">
		      <section class="left-small">
		        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		      </section>
  				<div class="right tab-bar-section">CSWDO Forms Manager v1</div>
			 
		    </nav>

		    <aside class="left-off-canvas-menu">
		    <!-- Form Options -->
		      <ul class="off-canvas-list tabs vertical" data-tab>
		       	<li><label>CSWDO Forms</label></li>
			  	<li class="active"><a href="#obligation_request">Obligation Request <span class="round label label-bx">7 Copies</span></a></li>
			  	<li class=""><a href="#disbursement_voucher">Disbursement Voucher <span class="round label label-bx">5 copies</span></a></li>
			  	<li class=""><a href="#purchase_request">Purchase Request <span class="round label label-bx">6 copies</span></a></li>
			 </ul>
		    </aside>
		    <section class="main-section">
		      <!-- content goes here -->
		      <section class="row">
					<section class="tabs-content">
						<section class="content active" id="obligation_request">
							<section class="row">
								<?php include 'include/obligation_request_form.php' ?>
							</section>
						</section>

						<section class="content" id="disbursement_voucher">
							<section class="row">
								<?php include 'include/disbursement_voucher_form.php' ?>
							</section>
						</section>

						<section class="content" id="purchase_request">
							<section class="row">
								<?php include 'include/purchase_request_form.php' ?>
							</section>
						</section>
					</section>
				</section>
		    </section>
		  <a class="exit-off-canvas"></a>
		  </div>
		</div>
   		</div>
   		<div id="body"></div>
   		<div id="footer" class="text-center">
		  <!-- Footer n Shit -->
			<footer>
				<span class="app-name"><small><b>CSWDO Forms Manager v1</b></small></span><br/>
				<span class="contributors"><small><i class="fa fa-copyright"></i> <a target="_blank" href="https://www.facebook.com/100812CM">clydegold8</a> & <a target="_blank" href="https://www.facebook.com/pallesiem.casteel">Turquato</a></small></span><br/>
				<span class="sub-txt"><small>All Rights Reserved 2015</small></span>
			</footer>
   		</div>
	</div>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
	  	<script src="js/foundation/foundation.abide.js"></script>
	  	<script src="js/foundation/foundation.alert.js"></script>

		<script>
		$(document).foundation();
		</script>
	</body>
</html>