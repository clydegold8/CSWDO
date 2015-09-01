<script type="text/javascript">
	function particularsCheck() {
	    if (document.getElementById('wagesCheck').checked) {
	        document.getElementById('ifWages').style.display = 'block';
	        document.getElementById('signatory1Check').style.display = 'block';
	        document.getElementById('signatory2Check').style.display = 'block';
	        document.getElementById('ifReimbursement').style.display = 'none';
	    }
	    else if (document.getElementById('reimbursementCheck').checked) {
	        document.getElementById('ifWages').style.display = 'none';
	        document.getElementById('signatory1Check').style.display = 'none';
	        document.getElementById('signatory2Check').style.display = 'none';
	        document.getElementById('ifReimbursement').style.display = 'block';
		}
	}

</script>

<section class="large-12 medium-12 columns">
					<hr/>
					<form data-abide method="POST" name="myForm" action="include/obligation.php">
						<section class="row">
							<section class="large-12 medium-12 columns">
								<input type="text" class="bold txt" name="head_value" value="OBLIGATION REQUEST" disabled />
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Payee</label>
								<input type="text" required="Alpha" name="payee" class="bold" placeholder="Payee"/>
								<small class="error">Please enter a Payee</small>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Office</label>
								<input type="text" required="Alpha" name="office" class="bold" placeholder="" value="CSWDO" disabled/>
								<small class="error">Please specify an Office</small>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Address</label>
								<input type="text" class="bold" name="address" id="address" value="Bislig City" disabled/>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Select Particulars</label>
								<input type="radio" onclick="javascript:particularsCheck();" id="wagesCheck" name="particulars"/><label class="bold" for="wages">Wages</label>
								<input type="radio" onclick="javascript:particularsCheck();" id="reimbursementCheck"  name="particulars"/><label class="bold" for="reimbursement">Reimbursement</label>
								<small class="error">Select Particulars</small>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Particulars</label>
								<textarea id="particulars" required="Alpha" name="explanation" placeholder="Particulars"></textarea>
								<small class="error">Particulars Required</small>
							</section>
						</section>

						<section class="row" id="ifWages" style="display:none">
							<section class="large-6 medium-6 columns">
								<section class="large-12 medium-12 columns">
									<label>Charges for Wages</label>
									<select class="bold" type="text" name="Charges" id="wageCharge" required/>
										<option>&nbsp;</option>
										<option value="Support to 4P's Mayors Office - MOOE 4P's">4P's</option>
										<option value="General Fund - Other Services">Admin</option>
										<option value="Support to BUB Program">BUB</option>
										<option value="Supplemental Budget #3 CY 2014">CORE</option>
										<option value="Support to Day Care Workers">Day Care Center</option>
										<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Drop-In Center</option>
										<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Home for Girls</option>
										<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">LCPC</option>
										<option value="General Fund - Other Services">Resource Center</option>
										<option value="SEA-K-Wages">SEA-K</option>
										<option value="10 Womens Welfare Program - Other Services">Womens</option>
									</select>
									<small class="error">Specify Charges</small>
								</section>
							</section>

							<section class="large-6 medium-6 columns" id="signatory1Check" style="display:none">
								<section class="large-12 medium-12 columns">
									<label>Signatory 1</label>
									<select class="bold" type="text" name="signatory1" required="Alpha"/>
										<option>&nbsp;</option>
										<option value="Letecia M. Yu, RSW">Letecia M. Yu</option>
										<option value="Librado C. Navarro">Librado Navarro</option>
										<option value="">Engr. Jovino Requina</option>
									</select>
									<small class="error">Select Signatory</small>
								</section>
							</section>
						</section>

						<section class="row" id="signatory2Check" style="display:none">
							<section class="large-6 medium-6 columns">
								<section class="large-12 medium-12 columns">
									&nbsp;
								</section>
							</section>

							<section class="large-6 medium-6 columns">
								<section class="large-12 medium-12 columns">
									<label>Signatory 2</label>
									<select class="bold" type="text" name="signatory2" required="Alpha"/>
										<option>&nbsp;</option>
										<option value="Letecia M. Yu, RSW">Letecia M. Yu</option>
										<option value="Librado C. Navarro">Librado Navarro</option>
										<option value="">Engr. Jovino Requina</option>
									</select>
								</section>
							</section>
						</section>

						<section class="row" id="ifReimbursement" style="display:none">
							<section class="large-6 medium-6 columns">
								<label>Charges for Reimbursement(s)</label>
								<select class="bold" type="text" name="Charges" id="wageCharge" required/>
									<option>&nbsp;</option>
									<option value="Support to 4P's Mayors Office - MOOE 4P's">4P's</option>
									<option value="General Fund - Other Services">Admin</option>
									<option value="Support to BUB Program">BUB</option>
									<option value="Supplemental Budget #3 CY 2014">CORE</option>
									<option value="Support to Day Care Workers">Day Care Center</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Drop-In Center</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">Home for Girls</option>
									<option value="1% RA 9344 - Support to Local Council for the Protection of Children Prevention Program Support to LCPC - 969">LCPC</option>
									<option value="General Fund - Other Services">Resource Center</option>
									<option value="SEA-K-Wages">SEA-K</option>
									<option value="10 Womens Welfare Program - Other Services">Womens</option>
								</select>
								<small class="error">Specify Charges</small>
							</section>

							<section class="large-6 medium-6 columns">
								<label>Signatory</label>
								<select class="bold" type="text" name="signatory3" required="Alpha"/>
									<option>&nbsp;</option>
									<option value="Letecia M. Yu, RSW">Letecia M. Yu</option>
									<option value="Librado C. Navarro">Librado Navarro</option>
									<option value="">Engr. Jovino Requina</option>
								</select>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<section class="large-12 medium-12 columns">
									<label>Amount</label>
									<input class="bold" type="integer" name="amount" required placeholder="Amount"/>
									<small class="error">Amount in Figures</small>
								</section>
							</section>
						</section>
						<hr/>
						<center>
							<?php include 'review_btn.php' ?>
						</center>
					</form>
</section>