<?php 
include 'database.php';
date_default_timezone_set( 'UTC' );
class LF_queries {
	var $db_conn;
	public function __construct( $conn ) {
		$this->db_conn = $conn;
	}
	function add_billing_information() {
		$now = date('Y-m-d');
		$stmt = $this->db_conn->prepare("INSERT INTO orders (user_name, user_pass, user_email ,user_date, user_level) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param( 'ssssi', $user_name, $user_pass, $user_email, $now, $user_level );
		$stmt->execute();
		if ( $stmt == true) {
			echo 'Successfully registered. You can now <a href="signin.php">sign in</a> and start posting!';
		} else {
		echo 'Something went wrong while registering. Please try again later.';
			echo mysql_error();
		}
	}
}