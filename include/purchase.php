<!doctype html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> CSWDO - Purchase Request Form </title>
		<link rel="stylesheet" href="../css/normalize.css" />
		<link rel="stylesheet" href="../css/foundation.css" />
		<link rel="stylesheet" href="../css/custom.css" />
		<script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../js/float_box.js"></script>
		<script type="text/javascript">
			function printpage() {
	        //Get the print button and put it into a variable
	        var printButton1 = document.getElementById("printpagebutton1");
	        var printButton2 = document.getElementById("printpagebutton2");
	        //Set the print button visibility to 'hidden' 
	        printButton1.style.visibility = 'hidden';
	        printButton2.style.visibility = 'hidden';
	        //Print the page content
	        window.print()
	        //Set the print button to 'visible' again 
	        //[Delete this line if you want it to stay hidden after printing]
	        printButton1.style.visibility = 'visible';
	        printButton2.style.visibility = 'visible';
			   }
		</script>
	</head>

	<body>
		<div class="scroll-to-top">
			<button id="printpagebutton1" type="button" onclick="printpage()" class="medium success round cambria span16"><img src="../img/print.png" height="30px" width="30px" class="icon_print"/>Print</button><br/>
			<button id="printpagebutton2" type="button" onclick="history.go(-1);" class="medium alert round cambria span16"><img src="../img/cancel.png" height="30px" width="30px" class="icon_cancel"/>Back</button>
		</div>

		<form method="GET" action="disbursement_voucher_form.php">
			<section class="row">
				<section class="large-12edit columns">
					<p id="right_side">Annex B</p>
				</section>
			</section>

			<section class="row" id="printPage" border="1px">
				<section class="row">
					<section class="large-12edit columns borderbottom">
						<img id="logo" src="../img/official_seal.jpg"/>
						<h4 class="print_header">
							<span id="title_republic" class="span14">Republic of the Philippines <br/> Provincial Government of Surigao del Sur</span> <br/> <span id="title_city" class="span18">City of Bislig</span>
						</h4>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-9edit columns borderbottom height1">
							<center class="balancer1"><h2 class="span26 cambria">DISBURSEMENT VOUCHER</h2></center>
						</section>

						<section class="large-3edit columns borderbottom borderleft height1">
							<span class="span12">No.</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer2">Mode of<br/>Payement</p>
						</section>

						<section class="large-11edit columns borderbottom borderleft height2">
							<ul class="linear_nav2">
								<li><label><img src="../img/box.gif" class="checkbox_payment"/><span class="span14">Check</span></label></li>
								<li><label><img src="../img/box.gif" class="checkbox_payment"/><span class="span14">Cash</span></label></li>
								<li><label><img src="../img/box.gif" class="checkbox_payment"/><span class="span14">Others</span></label></li>
							</ul>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Payee</p>
						</section>

						<section class="large-7edit columns borderbottom borderleft height2">
							<p class="span14 balancer4 bold uppercase"><?php echo $_POST["payee"]; ?></p>
						</section>

						<section class="large-2edit columns borderbottom borderleft height2">
							<span class="span11">TIN/Employee No.</span>
						</section>

						<section class="large-2edit columns borderbottom borderleft height2">
							<span class="span10">Obligation Request No.</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height4">
							<p class="span12 balancer5">Address</p>
						</section>

						<section class="large-7edit columns borderbottom borderleft height4">
							<p class="span14 bold balancer6">Bislig City</p>
						</section>

						<section class="large-4edit columns">
							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height3">
									<span class="span11"><center>Responsibility Center</center></span>
								</section>
							</section>

							<section class="large-6edit columns borderbottom borderleft height1">
								<span class="span11">Office/Unit/Project</span>
							</section>

							<section class="large-6edit columns borderbottom borderleft height1">
								<span class="span11">Code</span>
							</section>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-9edit columns borderbottom height5">
							<span class="span14 bold"><center class="balancer7">Explanation</center></span>
						</section>

						<section class="large-3edit columns borderbottom borderleft height5">
							<span class="span14 bold"><center class="balancer7">Amount</center></span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-9edit columns borderbottom height6">
							<p class="span14 bold balancer8"><?php echo $_POST["explanation"]; ?></p>
						</section>

						<section class="large-3edit columns borderbottom borderleft height6">
							<p><center class="bold span14 balancer9">P&nbsp;<?php echo $_POST["amount"]; ?></center></p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1half columns borderbottom height7">
							<span class="span14 bold"><center class="balancer10">A</center></span>
						</section>

						<section class="large-5half columns borderbottom borderleft height7">
							<p class="span14 bold balancer10">Certified</p>
						</section>

						<section class="large-1half columns borderbottom borderleft height7">
							<span class="span14 bold"><center class="balancer10">B</center></span>
						</section>

						<section class="large-5half columns borderbottom borderleft height7">
							<p class="span14 bold balancer10">Certified</p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1half columns borderbottom height8">
							<ul class="span11 lists">
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
							</ul>
						</section>

						<section class="large-5half columns borderbottom height8">
							<ul class="span11 lists">
								<li>Allotment obligated for the purpose as indicated above</li>
								<li>Supporting documents complete</li>
							</ul>
						</section>

						<section class="large-1half columns borderbottom borderleft height8">
							<ul class="span11 lists">
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
							</ul>
						</section>

						<section class="large-5half columns borderbottom height8">
							<ul class="span11 lists">
								<li><span>Funds available</span></li>
							</ul>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Signature</p>
						</section>

						<section class="large-5edit columns borderbottom borderleft height2">
							
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<p class="span12 balancer3">Signature</p>
						</section>

						<section class="large-5edit columns borderbottom borderleft height2">
							
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer2">Printed<br/>Name</p>
						</section>

						<section class="large-4half columns borderbottom borderleft height2">
							<p class="bold span14 balancer11 uppercase">Raquel L. Bautista</p>
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<span class="span12">Date</span>
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<p class="span12 balancer2">Printed<br/>Name</p>
						</section>

						<section class="large-4half columns borderbottom borderleft height2">
							<center><p class="bold span14 balancer11 uppercase">Rebecca M. Aleta</p></center>
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<span class="span12">Date</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height12">
							<p class="span12 balancer3">Position</p>
						</section>

						<section class="large-5edit columns">
							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 bold uppercase balancer16">City Accountant</p></center>
								</section>

								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 balancer16">Head, Accounting Head/Authorized Representative</p></center>
								</section>
							</section>
						</section>

						<section class="large-1edit columns borderbottom borderleft height12">
							<p class="span12 balancer3">Position</p>
						</section>

						<section class="large-5edit columns">
							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 bold uppercase balancer16">ICO - City Treasurer</p></center>
								</section>
							</section>

							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 balancer16">Treasurer/Authorized Representative</p></center>
								</section>
							</section>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1half columns borderbottom height7">
							<span class="span14 bold"><center class="balancer10">C</center></span>
						</section>

						<section class="large-5half columns borderbottom borderleft height7">
							<p class="span14 bold balancer10">Approved Payment</p>
						</section>

						<section class="large-1half columns borderbottom borderleft height7">
							<span class="span14 bold"><center class="balancer10">D</center></span>
						</section>

						<section class="large-5half columns borderbottom borderleft height7">
							<p class="span14 bold balancer10">Approved Payment</p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Signature</p>
						</section>

						<section class="large-5edit columns borderbottom borderleft height2">
							
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<p class="span12 balancer3">Check No.</p>
						</section>

						<section class="large-4half columns borderbottom borderleft height2">
							<span class="span12">Bank Name</span>
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<span class="span12">Date</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height4">
							<p class="span12 balancer12">Printed<br/>Name</p>
						</section>

						<section class="large-4half columns borderbottom borderleft height4">
							<p class="balancer13 bold span14 uppercase">Librado C. Navarro</p>
						</section>

						<section class="large-1edit columns borderbottom borderleft height4">
							<span class="span12">Date</span>
						</section>

						<section class="large-1edit columns borderbottom borderleft height4">
							<section class="row">
								<section class="large-12edit columns borderbottom height10">
									<p class="span12 balancer14">Signature</p>
								</section>

								<section class="large-12edit columns height11">
									<p class="span12 balancer15">Printed Name</p>
								</section>
							</section>
						</section>

						<section class="large-4half columns borderbottom borderleft height4"><!-- for splitting -->
							<section class="row">
								<section class="large-12edit columns borderbottom height10">
									<span class="span12">&nbsp;</span>
								</section>

								<section class="large-12edit columns height11">
									<center><p class="bold span14 balancer16 uppercase"><?php echo $_POST["payee"]; ?></p></center>
								</section>
							</section>
						</section>

						<section class="large-1edit columns borderbottom borderleft height4">
							<span class="span12">Date</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height12">
							<p class="span12 balancer3">Position</p>
						</section>

						<section class="large-5edit columns">
							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 bold uppercase balancer16">City Mayor</p></center>
								</section>

								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 balancer16">Agency Head/Authorized Representative</p></center>
								</section>
							</section>
						</section>

						<section class="large-3edit columns borderbottom borderleft height12">
							<span class="span12">OR/Other Documents</span>
						</section>

						<section class="large-2half columns borderbottom borderleft height12">
							<span class="span12">JEV</span>
						</section>

						<section class="large-1edit columns borderbottom borderleft height12">
							<span class="span12">Date</span>
						</section>
					</section>
				</section>
						<span class="fine"><?php include 'digitized_forms.php' ?></span>
			</section>
		</form>
	</body>
</html>