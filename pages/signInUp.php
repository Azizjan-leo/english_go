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
				mysql_query("INSERT INTO users VALUES('','$login','','$password','','')") or die(mysql_error());
				$_SESSION["check"] = TRUE;
				$_SESSION["user_name"] = $login;
				$_SESSION["user_id"] = (SELECT id FROM users WHERE name = $login);
				$user_id = $_SESSION["user_id"];
				mysql_query("INSERT INTO users_settings VALUES('user_id','','','')") or die(mysql_error());
				echo "Welcome to Tht LenguaSity, ".$login."!<br>";
			}
			else
				echo "Choose another name";
			
=======
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
<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
=======
		<link rel="stylesheet" type="text/css" href="../style.css">
>>>>>>> ac0ecd1755a3065e433ebcce471f064cc1c08f13
		<script>
		//Проверка на совпадение паролей с помощью получения данных через id элемента.
			function checkPass () 
			{ 
				with (document) 
				getElementById ('info').innerHTML = (getElementById ('pass').value != getElementById ('passch').value) ? 
				'PASSWORDS MISMACH' : ''; 
			}
		</script>
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
					<tr><td><input type='password' id='pass' name='password' placeholder='Password' required/></td></tr>
					<tr><td><input type='password' id='passch' onchange='checkPass ()' name='r_password' placeholder='Repeat password' required/><br></td></tr>
					<tr><td><b style='color: red' id='info'></b></tr></td>
					<tr><td><input type='submit' name='signUp' value='ENTER'></td></tr>
				</table>
			  </form></center></div></div>";
			}
		}
	if($_SESSION['check'] == TRUE)
		echo "<a href='../index.php'>Back</a>";
?>
	</body>
</html>