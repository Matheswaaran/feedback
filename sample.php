<?php
	include "php/includes/sessionUtils.php";
	
	$session = new sessionUtils();
	echo $session->encryptIt("123");
?>