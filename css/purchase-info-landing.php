<?php
include 'class-lf-queries.php';
require_once 'vendor/autoload.php';
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->IsSMTP();
$mail->Host = "relay-hosting.secureserver.net";
$mail->SMTPAuth = true;
$mail->Username = 'gdtrombetti@gmail.com';
$mail->Password = 'gdtrombettiorttal921';
$mail->Port = "465";
$mail->setFrom('admin@thecontractorbook.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('gdtrombetti@gmail.com', 'John Doe');
$mail->Subject = 'PHPMailer SMTP without auth test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


$lf_query = new LF_queries( $conn );
$inputs = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
extract($inputs);

/*foreach ( $improvements as $key => $value ) {
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
		mail( "gdtrombetti@gmail.com", $subject_h, $message_h, $headers_h, "From: admin@thecontractorbook.com");

		$subject_c = "Contractor's Book Order!";
		$message_c = "Hello " . $fName . " we have recieved your order!  We need a couple days for processing,  we will send you an email once we have sent out your book! <br/> Thank You! <br/> The Contractor Book Team";
		$headers_c .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		if (@mail( "gdtrombetti@gmail.com", $subject_c, $message_c, $headers_c, "From: admin@thecontractorbook.com")) {
			header('location: thankyoupage.php');
		}
	*/
