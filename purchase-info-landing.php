<?php
include 'class-lf-queries.php';
$lf_query = new LF_queries( $conn );
$inputs = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
extract($inputs);

foreach ( $improvements as $key => $value ) {
	$email_improvements .= " ," . $value;
}
		$subject_h = "An order for the contractor book!";
		$message_h = "Hello processor we have recieved an order: 
						<ul>
							<li> <b>Name:</b> " . $fName . "</li>
							<li> <b>Email:</b> " . $email . "</li>
							<li> <b>Address:</b> " . $address1 ." ". $address2 ."</li>
							<li> <b>City:</b> " . $city . "</li>
							<li> <b>State:</b> " . $state . "</li>
							<li> <b>Zip: </b> " . $zip . "</li>
							<li> <b>Country: </b> " . $country . "</li>
						</ul>
						And their next improvement projects are" . $email_improvements;
		$headers_h .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers_h .= "From: Contractor Books";
		mail( "gdtrombetti@gmail.com", $subject_h, $message_h, $headers_h);

		$subject_c = "Contractor's Book Order!";
		$message_c = "Hello " . $fName . " we have recieved your order!  We need a couple days for processing,  we will send you an email once we have sent out your book! <br/> Thank You! <br/> The Contractor Book Team";
		$headers_c .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers_c .= "From: Contractor Books";
		if (@mail( "gdtrombetti@gmail.com", $subject_c, $message_c, $headers_c)) {
			header('location: thankyoupage.php');
		}
