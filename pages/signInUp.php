<?php 
	session_start();
	include("../includes/connect.php");
	
	if(isset($_POST["signUp"])){
		$password = $_POST["password"];
		$r_password = $_POST["r_password"];
		if($password == $r_password){
			$login = $_POST["login"];
			mysql_query("INSERT INTO users VALUES('','$login','','$password','','')") or die(mysql_error());
			$_SESSION["check"] = TRUE;
			$_SESSION["user_name"] = $login;
			echo "Welcome to Tht LenguaSity, ".$login."!<br>";
		}
		else
			echo "Password must be equals!";
	}
	if(isset($_POST["auth"])){
		$e_login = $_POST["login"];
		$e_password = $_POST["password"];
		echo $user_data["password"], $user_data['login'];
		$query = mysql_query("SELECT * FROM users WHERE name = '$e_login'");
		$user_data = mysql_fetch_array($query);
			if($user_data["password"] == $e_password){	
			$_SESSION["user_name"] = $user_data["name"];
			$_SESSION["check"] = TRUE;
			echo "We are happy to see you agein, ".$_SESSION['user_name']."!<br>";
		}
		else 
			echo "Wrong login or password";
	}
?>
<html>
	<head>
		<title>Tutorial</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
	<?php
		if(isset($_GET["infor"])){
			$inFor = $_GET["infor"];
			if($inFor == signin && !$_SESSION["check"]){
				echo "<center><br><br><form  method='post' action=''>
				<table>
					<tr><td><input type='text' name='login' placeholder='Name' required/></td></tr>
					<tr><td><input type='password' name='password' placeholder='Password' required/></td></tr>
					<tr><td><input type='submit' name='auth' value='ENTER'></td></tr>
				</table>
			  </form></center>";
			}
			elseif($inFor == signup && !$_SESSION["check"]){
				echo "<center><br><br><form  method='post' action=''>
				<table>
					<tr><td><input type='text' name='login' placeholder='Name' required/></td></tr>
					<tr><td><input type='password' name='password' placeholder='Password' required/></td></tr>
					<tr><td><input type='password' name='r_password' placeholder='Repite Password' required/></td></tr>
					<tr><td><input type='submit' name='signUp' value='ENTER'></td></tr>
				</table>
			  </form></center>";
			}
		}
	if($_SESSION['check'] == TRUE)
		echo "<a href='../index.php'>Back</a>";
?>
	</body>
</html>