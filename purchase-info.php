<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
			  <h1 id="forms">Contact Information</h1>
			</div>
		</div>
	</div>
<div class="row">
	<form class="form-horizontal" method="post" action="purchase-info-landing.php">
		<div class="col-lg-12">
			<div class="well bs-component">
				<fieldset>
					<div class="form-group">
						<div class="form-group">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label"><u>Full Name*</u></label>
								<div class="col-lg-8">
									<input type="text" size="20" name="fName" class="form-control" id="inputFirst" placeholder="First Name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="col-lg-2 control-label"><u>Email*</u></label>
								<div class="col-lg-8">
									<input type="text" size="20" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress1" class="col-lg-2 control-label"><u>Address 1*</u></label>
								<div class="col-lg-8">
									<input type="text" size="40" name="address1" class="form-control" id="inputAddress1" placeholder="" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress2" class="col-lg-2 control-label"><u>Address 2</u></label>
								<div class="col-lg-8">
									<input type="text" size="40" name="address2" class="form-control" id="inputAddress2" placeholder="">
									<label for="inputAdress" class="col-lg-2 control-label">Apartment, suite, unit, bulding, floor, etc.</label>
								</div>
							</div>
							<div class="form-group">
								<label for="inputCity" class="col-lg-2 control-label"><u>City*</u></label>
								<div class="col-lg-8">
									<input type="text" size="40" name="city" class="form-control" id="inputCity" placeholder="City" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputProvince" class="col-lg-2 control-label"><u>State*</u></label>
								<div class="col-lg-8">
									<input type="text" size="40" name="state" class="form-control" id="inputState" placeholder="State" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputZip" class="col-lg-2 control-label"><u>ZIP*</u></label>
								<div class="col-lg-8">
									<input type="text" size="40" name="zip" class="form-control" id="inputZip" placeholder="ZIP" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputCountry" class="col-lg-2 control-label"><u>Country*</u></label>
								<div class="col-lg-8">
									<select name="country" class="form-control" id="country-select">
										<option>United States</option>
									</select>
									<div class="row">
										<h2>What home imporvement projects are you planning next?</h2>
										</div>
										<div class="row">
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="improvements[]" value="Roofing" >
														Roofing
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="improvements[]" value="Windows/Doors">
														Windows/Doors
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="improvements[]" value="Siding">
														Siding
												</label>
											</div>
											<div class="checkbox-inline">
												<label>
													<input type="checkbox" name="improvements[]" value="Kitchen">
														Kitchen
												</label>
											</div>
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="improvements[]" value="Bath">
													Bath
											</label>
										</div>
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="improvements[]" value="Deck">
													Deck
											</label>
										</div>
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="improvements[]" value="Basement">
													Basement
											</label>
										</div>
										<div class="checkbox-inline">
											<label>
												<input type="checkbox" name="improvements[]" value="Other">
													Other
											</label>
										</div>
									</div>
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-offset-5 col-sm-9">
								<br/>
								<input class="btn btn-primary btn-lg" type="submit" value="Place Order!"/>
							</div>
					</div>
				</fieldset>
			</div>
		</div>
	</form>
</div>
</div>
