<?php
include 'header.php';
include 'class-lf-queries.php';
$lf_query = new LF_queries( $conn );

$inputs = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
echo "<br/><br/>";
var_dump($inputs);
		$subject = "Contractor's Book Purchase!";
		$message = "Hello " . $fname . " we have recieved your purchase!  We need a couple days for processing,  we will send you an email once we send out your book!";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Contractor Books";
		if (@mail( "gdtrombetti@gmail.com", $subject, $message, $headers )) {
			?>
			<div class="container">
				<div class="page-header" id="banner">
					<div class="row">
						<div class="jumbotron">
							Thank You For Your Purchase!  You will be receiving a confirmation email momentarily.
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
