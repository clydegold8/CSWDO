<section class="large-12 medium-12 columns">
					<hr/>
					<h3 class="custom_header">PPMP</h3>
					<hr/>
					<form id="ppmp_form">
						<section class="row">
							<section class="large-8 medium-8 columns">
								<input type="text" class="bold" value="DISBURSEMENT VOUCHER" disabled />
							</section>

							<section class="large-4 medium-4 columns">
								<input type="text" placeholder="DISBURSEMENT VOUCHER NO." disabled />
							</section>
						</section>
						<hr/>
						<section class="row">
							<section class="large-1 medium-1 columns">
								<label>Payee</label>
							</section>

							<section class="large-5 medium-5 columns">
								<select id="payee">
									<option value="null"> </option>
									<option value="bcwd">Bislig City Water District</option>
									<option value="surseco">Surseco I</option>
								</select>
							</section>

							<section class="large-3 medium-3 columns">
								<section class="row collapse">
									<section class="small-12 columns">
										<input type="text" placeholder="TIN/Employee No." disabled />
									</section>
								</section>
							</section>

							<section class="large-3 medium-3 columns">
								<section class="row collapse">
									<section class="small-12 columns">
										<input type="text" placeholder="Obligation Request No." disabled />
									</section>
								</section>
							</section>
						</section>
						<hr/>
						<section class="row">
							<section class="large-1 medium-1 columns">
								<label>Address</label>
							</section>

							<section class="large-5 medium-5 columns">
								<input type="text" class="bold" id="address" value="Bislig City" disabled/>
							</section>

							<section class="large-3 medium-3 columns">
								<input type="text" placeholder="Office/Unit/Project" disabled />
							</section>

							<section class="large-3 medium-3 columns">
								<input type="text" placeholder="Code" disabled />
							</section>
						</section>
						<hr/>
						<section class="row">
							<section class="large-8 columns">
								<textarea id="explanation" placeholder="Explanation"></textarea>
							</section>

							<section class="large-4 columns">
								<input type="text" class="bold" id="amount" placeholder="Amount" />
							</section>
						</section>
						<hr/>
						<button class="button success" type="submit">Print Form</button>
					</form>
				</section>