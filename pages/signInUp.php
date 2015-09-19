<?php 
	session_start();
	include("../includes/connect.php");
	
	if(isset($_POST["signUp"])){
		$password = $_POST["password"];
		$r_password = $_POST["r_password"];
		if($password == $r_password){
			$login = $_POST["login"];
			
			$query = mysql_query("SELECT * FROM users WHERE name = '$login'");
			$user_data = mysql_fetch_array($query);
		
			if(!$user_data){
				$password = md5($password);
				mysql_query("INSERT INTO users VALUES('','$login','$password','','','','','')") or die(mysql_error());
				$_SESSION["check"] = TRUE;
				$_SESSION["user_name"] = $login;
				echo $user_id."<br>";
				echo "Welcome to Tht LenguaSity, ".$login."!<br>";
			}
			else
				echo "Choose another name";
			
		}
	}
	if(isset($_POST["auth"])){
		$e_login = $_POST["login"];
		$e_password = md5($_POST["password"]);
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
		<title>EnglishGo</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<script src="../scripts/scripts.js"></script>
	</head>
	<body>
	<?php
		if(isset($_GET["infor"])){
			$inFor = $_GET["infor"];
			if($inFor == signin && !$_SESSION["check"]){
				echo "<div id='sign'><div class='signtext'><center><form  method='post' action=''>
				<table>
					<tr><td><input type='text' name='login' placeholder='Name' required/></td></tr>
					<tr><td><input type='password' name='password' placeholder='Password' required/></td></tr>
					<tr><td><input type='submit' name='auth' value='ENTER'></td></tr>
				</table>
			  </form></center></div></div>";
			}
			elseif($inFor == signup && !$_SESSION["check"]){
				echo "<div id='sign'><div class='signtext'><center><form  method='post' action=''>
				<table>
					<tr><td><input type='text' name='login' placeholder='Name' required/></td></tr>
					<tr><td><input type='password' id='pass' onblur='checkPass()' name='password' placeholder='Password' required/></td></tr>
					<tr><td><input type='password' id='passch' onKeyUp='checkPass()' name='r_password' placeholder='Repeat password' required/><br></td>
					<td><b style='color: red' id='info'></b></td></tr>
					<tr><td><input type='submit' name='signUp' value='ENTER'></td></tr>
				</table>
			  </form></center></div></div>";
			}
		}
	if($_SESSION['check'] == TRUE){
		print
		"<script>window.location.href='users_settings.php';</script>";
	}
?>
	</body>
</html>