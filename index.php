<?php 
	session_start();
	if(isset($_POST["out"])){
			unset($_SESSON['name']);
			$_SESSION['check'] = false;
			session_unset();
			session_destroy();
	}
?>
<html>
	<head>
		<title>Tutorial</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<?php
			if($_SESSION['check']){
				echo $_SESSION["user_name"];
				echo "<form  method='post' action=''>
				<input type='submit' name='out' value='OUT'>
			  </form>";
			}
			else
				printf('
						<a href="pages/signInUp.php?infor=%s">Sign In</a> <br/> or <br/> 
						<a href="pages/signInUp.php?infor=%s">Sign up</a>',
						signin,signup);
				echo "Hello agein!<br/>";
			}
			else
				echo "<a href='pages/other.php'>Sign In</a>";
		?>
		
	</body>
</html>

