<?php
		// get the values entered in the form
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$pnumber = $_POST['pnumber'];

		echo ("Hello ". "$fname "." $lname "."!"."<br> Your phone number is $pnumber");
?>
