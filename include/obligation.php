<!doctype html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CSWDO - Disbursement Voucher Form </title>
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
					<p id="right_side">Annex A</p>
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
							<center class="balancer1"><h2 class="span26 cambria">OBLIGATION REQUEST</h2></center>
						</section>

						<section class="large-3edit columns borderbottom borderleft height1">
							<span class="span12">No.</span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Payee</p>
						</section>

						<section class="large-11edit columns borderbottom borderleft height2">
							<p class="span14 balancer4 bold uppercase"><?php echo $_POST["payee"]; ?></p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Office</p>
						</section>

						<section class="large-11edit columns borderbottom borderleft height2">
							<p class="span14 balancer4 bold uppercase">CSWDO</p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height2">
							<p class="span12 balancer3">Address</p>
						</section>

						<section class="large-11edit columns borderbottom borderleft height2">
							<p class="span14 balancer4 bold uppercase">Bislig City</p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-2edit columns borderbottom height13">
							<span class="span10"><center class="balancer7">Responsibility Center</center></span>
						</section>

						<section class="large-6edit columns borderbottom borderleft height13">
							<span class="span14 bold"><center class="balancer7">Explanation</center></span>
						</section>

						<section class="large-1mod columns borderbottom borderleft height13">
							<span class="span12 bold"><center class="balancer7">F.P.P</center></span>
						</section>

						<section class="large-1mod columns borderbottom borderleft height13">
							<span class="span12 bold"><center class="balancer17">Account<br/>Code</center></span>
						</section>

						<section class="large-2edit columns borderbottom borderleft height13">
							<span class="span14 bold"><center class="balancer7">Amount</center></span>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-2edit columns height15">
							&nbsp;
						</section>

						<section class="large-6edit columns borderleft height15">
							<p class="span14 bold balancer18"><?php echo $_POST["explanation"]; ?></p>
						</section>

						<section class="large-1mod columns borderleft height15">
							&nbsp;
						</section>

						<section class="large-1mod columns borderleft height15">
							&nbsp;
						</section>

						<section class="large-2edit columns borderleft height15">
							<p><center class="bold span14 balancer9">P&nbsp;<?php echo $_POST["amount"]; ?></center></p>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-2edit columns height2">
							&nbsp;
						</section>

						<section class="large-6edit columns borderleft height2">
							<p class="span14 bold balancer18">Charges<br/><br/><?php echo $_POST["Charges"]; ?></p>
						</section>

						<section class="large-1mod columns borderleft height2">
							&nbsp;
						</section>

						<section class="large-1mod columns borderleft height2">
							&nbsp;
						</section>

						<section class="large-2edit columns borderleft height2">
							&nbsp;
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-2edit columns borderbottom height2">
							&nbsp;
						</section>

						<section class="large-6edit columns borderbottom borderleft height2">
							<p class="span14 bold balancer18">Charges<br/><br/><?php echo $_POST["signatory1"]; ?></p>
						</section>

						<section class="large-1mod columns borderbottom borderleft height2">
							&nbsp;
						</section>

						<section class="large-1mod columns borderbottom borderleft height2">
							&nbsp;
						</section>

						<section class="large-2edit columns borderbottom borderleft height2">
							&nbsp;
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-8edit columns borderbottom height13">
							&nbsp;
						</section>

						<section class="large-2edit columns borderbottom height13">
							<span class="span14 bold"><center class="balancer7">Total</center></span>
						</section>

						<section class="large-2edit columns borderbottom borderleft height13">
							<span class="span14 bold"><center class="balancer7">P&nbsp;<?php echo $_POST["amount"]; ?></center></span>
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
						<section class="large-1half columns borderbottom height14">
							<ul class="span11 lists2">
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
							</ul>
						</section>

						<section class="large-5half columns borderbottom height14">
							<ul class="span11 lists">
								<li>Charges to appropriation/allotment, necessary, lawful and under my direct supervision</li>
								<li>Supporting documents valid, proper and legal</li>
							</ul>
						</section>

						<section class="large-1half columns borderbottom borderleft height14">
							<ul class="span11 lists">
								<li><img src="../img/box.gif" class="checkbox_certified"/></li>
							</ul>
						</section>

						<section class="large-5half columns borderbottom height14">
							<ul class="span11 lists">
								<li><span>Existence of available appropriation</span></li>
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

						<section class="large-5edit columns borderbottom borderleft height2">
							<center><p class="bold span14 balancer11 uppercase"><?php echo $_POST["signatory2"]; ?></p></center>
						</section>

						<section class="large-1edit columns borderbottom borderleft height2">
							<p class="span12 balancer2">Printed<br/>Name</p>
						</section>

						<section class="large-5edit columns borderbottom borderleft height2">
							<center><p class="bold span14 balancer11 uppercase">RENEFREDO G. CAMBA, CPA</p></center>
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
									<center><p class="span11 bold uppercase balancer16">City Budget Officer</p></center>
								</section>
							</section>

							<section class="row">
								<section class="large-12edit columns borderbottom borderleft height9">
									<center><p class="span11 balancer16">Head, Budget Unit/Authorized Representative</p></center>
								</section>
							</section>
						</section>
					</section>
				</section>

				<section class="row">
					<section class="large-12edit columns">
						<section class="large-1edit columns borderbottom height7">
							<span class="span12"><center class="balancer10">Date</center></span>
						</section>

						<section class="large-5edit columns borderbottom borderleft height7">
							&nbsp;
						</section>

						<section class="large-1edit columns borderbottom borderleft height7">
							<span class="span12"><center class="balancer10">Date</center></span>
						</section>

						<section class="large-5edit columns borderbottom borderleft height7">
							&nbsp;
						</section>
					</section>
				</section>
						<span class="fine"><?php include 'digitized_forms.php' ?></span>
			</section>
		</form>
	</body>
</html>