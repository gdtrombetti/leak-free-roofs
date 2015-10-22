<?php
include 'header.php';
include 'class-lf-queries.php';
$lf_query = new LF_queries( $conn );

$inputs = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
echo "<br/><br/>";
extract($inputs);
var_dump($inputs);
		$subject_h = "An order for the contractor book!";
		$message_h = "Hello processesor we have recieved an order: 
						Name: " . $fName .;
		$headers_h .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers_h .= "From: Contractor Books";


		$subject_c = "Contractor's Book Order!";
		$message_c = "Hello " . $fName . " we have recieved your order!  We need a couple days for processing,  we will send you an email once we send out your book!";
		$headers_c .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers_c .= "From: Contractor Books";
		if (@mail( "gdtrombetti@gmail.com", $subject_c, $message_c, $headers_c)) {
			?>
			<div class="container">
				<div class="page-header" id="banner">
					<div class="row">
						<div class="jumbotron">
							Thank You For Your Order!  You will be receiving a confirmation email momentarily.
						</div>
					</div>
				</div>
			</div>
			<?php
		} else {
			?>
			<div class="container">
				<div class="page-header" id="banner">
					<div class="row">
						<div class="jumbotron">
							Sorry for the inconveniece but the confirmation email was not properly sent to you, please email us directly at contractorsbook@gmail.com.
						</div>
					</div>
				</div>
			</div>
			<?php
		}
