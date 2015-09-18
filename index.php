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
		<title>English-go</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
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
						<div id="sign_form"><div class="signtext"><a href="pages/signInUp.php?infor=%s">Sign In</a> <br/> or <br/> 
						<a href="pages/signInUp.php?infor=%s">Sign up</a></div> </div>',
						signin,signup);
		?>
		
	</body>
</html>

