<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
			  <h1 id="forms">Billing Address</h1>
			</div>
		</div>
	</div>
	<div class="row">
	<form method="post" action="purchase-info-landing.php">
		<div class="col-lg-6">
			<div class="well bs-component">
				<fieldset>
					<div class="form-group">
						<label for="inputName" class="col-lg-2 control-label"><u>Full Name</u></label>
						<div class="col-lg-10">
							<input type="text" size="20" name="fName" class="form-control" id="inputFirst" placeholder="First Name" required>
						</div>
						<label for="inputEmail" class="col-lg-2 control-label"><u>Email</u></label>
						<div class="col-lg-10">
							<input type="text" size="20" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
						</div>
						<label for="inputAddress1" class="col-lg-2 control-label"><u>Address 1</u></label>
						<div class="col-lg-10">
							<input type="text" size="40" name="address1" class="form-control" id="inputAddress1" placeholder="" required>
							<label for="inputAdress" class="col-lg-2 control-label">Street Address, P.O Box, company name, c/o</label>
						</div>
						<label for="inputAddress2" class="col-lg-2 control-label"><u>Address 2</u></label>
						<div class="col-lg-10">
							<input type="text" size="40" name="address2" class="form-control" id="inputAddress2" placeholder="">
							<label for="inputAdress" class="col-lg-2 control-label">Apartment, suite, unit, bulding, floor, etc.</label>
						</div>
						<label for="inputCity" class="col-lg-2 control-label"><u>City</u></label>
						<div class="col-lg-10">
							<input type="text" size="40" name="city" class="form-control" id="inputCity" placeholder="City" required>
						</div>
						<label for="inputProvince" class="col-lg-2 control-label"><u>Province/Region</u></label>
						<div class="col-lg-10">
							<input type="text" size="40" name="province" class="form-control" id="inputProvince" placeholder="Province/Region" required>
						</div>
						<label for="inputZip" class="col-lg-2 control-label"><u>ZIP</u></label>
						<div class="col-lg-10">
							<input type="text" size="40" name="province" class="form-control" id="inputZip" placeholder="ZIP" required>
						</div>
						<label for="inputCountry" class="col-lg-2 control-label"><u>Country</u></label>
						<div class="col-lg-10">
							<select class="form-control" id="country-select">
								<option>United States</option>
								<option>Canada</option>
								<option>Mexico</option>
							</select>
						</div>
						<legend>Payment</legend>

							<label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name" required>
							</div>

							<label class="col-sm-3 control-label" for="card-number">Card Number</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number" required>
							</div>

							<label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
							<div class="col-sm-9">
							  <div class="row">
								<div class="col-xs-3">
								  <select class="form-control col-sm-2" name="expiry-month" id="expiry-month" required>
									<option>Month</option>
									<option value="01">Jan (01)</option>
									<option value="02">Feb (02)</option>
									<option value="03">Mar (03)</option>
									<option value="04">Apr (04)</option>
									<option value="05">May (05)</option>
									<option value="06">June (06)</option>
									<option value="07">July (07)</option>
									<option value="08">Aug (08)</option>
									<option value="09">Sep (09)</option>
									<option value="10">Oct (10)</option>
									<option value="11">Nov (11)</option>
									<option value="12">Dec (12)</option>
								  </select>
								</div>
								<div class="col-xs-3">
								  <select class="form-control" name="expiry-year" required>
									<option value="13">2013</option>
									<option value="14">2014</option>
									<option value="15">2015</option>
									<option value="16">2016</option>
									<option value="17">2017</option>
									<option value="18">2018</option>
									<option value="19">2019</option>
									<option value="20">2020</option>
									<option value="21">2021</option>
									<option value="22">2022</option>
									<option value="23">2023</option>
								  </select>
								</div>
							  </div>
							</div>
						  </div>
							<label class="col-sm-3 control-label" for="cvv">Card CVV</label>
							<div class="col-sm-3">
							  <input type="text" class="form-control" name="cvv" id="cvv" required placeholder="Security Code">
							</div>

							<div class="col-sm-offset-5 col-sm-9">
								<br/>
								<input class="btn btn-primary btn-lg" type="submit" value="Purchase"/>
							</div>
					</div>
				</fieldset>
			</div>
		</div>
	</form>
</div>
