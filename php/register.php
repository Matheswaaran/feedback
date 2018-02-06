<?php
	include "includes/config.php";
	include "includes/sessionUtils.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$reg_name= $_POST["reg_name"];
		$reg_email=$_POST["reg_email"];
		$reg_reg_num=$_POST["reg_reg_num"];
		$reg_year=$_POST["reg_year"];
		$reg_sec=$_POST["reg_sec"];
		$reg_password=$_POST["reg_password"];
		
		$register_query = "INSERT INTO users(`name`,`year`,`sec`,`email`,`password`,`regno`) VALUES ('$reg_name','$reg_year','$reg_sec','$reg_email','$reg_password')";
		
		$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE) or die("Cannot Connect...");
		
		if (mysqli_query($db,$register_query)){
			echo "SUCCESS";
		}else{
			echo "Register Error";
		}
	}
?>