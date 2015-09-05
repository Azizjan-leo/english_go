<?php
	echo "hi";
    if (isset($_POST['submit'])){
		$name = trim($_POST['rname']);
		$login = trim($_POST['rlogin']);
		$password = trim($_POST['rpass']);
		$password_r = trim($_POST['rpass_r']);
		$email = trim($_POST['email']);
		$photo = $_POST['photo'];
		if($password == $password_r){
			
		}
		else{
			print "Passwords do not match";
		}
	}
?>