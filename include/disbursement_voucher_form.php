<section class="large-12 medium-12 columns">
					<hr/>
					<form data-abide method="POST" action="include/disbursement.php">
						<section class="row">
							<section class="large-12 medium-12 columns">
								<input type="text" class="bold txt" name="head_value" value="DISBURSEMENT VOUCHER" disabled />
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
								<label>Address</label>
								<input type="text" class="bold" name="address" id="address" value="Bislig City" disabled/>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Explanation</label>
								<textarea id="explanation" required="Alpha" name="explanation" placeholder="Explanation"></textarea>
								<small class="error">Explanation Required</small>
							</section>
						</section>

						<section class="row">
							<section class="large-12 medium-12 columns">
								<label>Amount</label>
								<input class="bold" type="text" name="amount" required="integer" placeholder="Amount"/>
								<small class="error">Amount in Figures</small>
							</section>
						</section>
						<hr/>
						<center>
							<?php include 'review_btn.php' ?>
						</center>
					</form>
				</section>