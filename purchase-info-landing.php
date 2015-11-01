<?php
include 'class-lf-queries.php';
$lf_query = new LF_queries( $conn );
$inputs = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
extract($inputs);

if ( isset( $improvements) ) {
	foreach ( $improvements as $key => $value ) {
		$email_improvements .= ", " . $value;
	}
}
	$from_add = "admin@thecontractorbook.com"; 
	$to_add = "gdtrombetti@gmail.com";
	$subject = "Someone has ordered A contractor book!";
	$message = "Hello processor we have recieved an order: 
						<ul>
							<li> <b>Name:</b> " . $fName . "</li>
							<li> <b>Email:</b> " . $email . "</li>
							<li> <b>Address:</b> " . $address1 ." ". $address2 ."</li>
							<li> <b>City:</b> " . $city . "</li>
							<li> <b>State:</b> " . $state . "</li>
							<li> <b>Zip: </b> " . $zip . "</li>
							<li> <b>Country: </b> " . $country . "</li>
						</ul>";
	if ( isset ( $email_improvements ) ) {
		$message .= "And their next improvement projects are" . $email_improvements;
	} else {
		$message .= "And they do not have any upcoming improvement projects";
	}
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	if( mail( $to_add,$subject,$message,$headers ) ) 
	{
		$from_add_c = "contractor_book_order@thecontractorbook.com"; 
		$to_add_c = "gdtrombetti@gmail.com";
		$subject_c = "We have recieved your order for The Contractor Book";
		$message_c = "Hello ". $fName ." we have recieved your order please give us a couple days for processing.
						<br/>
						Thank you!
						<br/>
						The Contractor Book Team";
		$headers_c = "From: $from_add \r\n";
		$headers_c .= "Reply-To: $from_add_c \r\n";
		$headers_c .= "Return-Path: $from_add_c\r\n";
		$headers_c .= "X-Mailer: PHP \r\n";
		$headers_c .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		if ( mail( $to_add_c, $subject_c, $message_c, $headers_c) ) {
			header('location: thankyoupage.php');
		} else {
			header('location: failed-email.php');
		}
	}
	else
	{
		header('location: failed-email.php');
	}