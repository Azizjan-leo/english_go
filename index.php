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
			if(!$_SESSION['check']){
				printf('
						<div id="sign_form"><div class="signtext"><a href="pages/signInUp.php?infor=%s">Sign In</a> <br/> or <br/> 
						<a href="pages/signInUp.php?infor=%s">Sign up</a></div> </div>',
						signin,signup);
			}
			else{
				echo $_SESSION["user_name"];
				print '<form  method="post">
				<input type="submit" name="out" value="OUT">
				</form>
				<a href="pages/kitchen.php">Kitchen</a><br/>
				<a href="pages/zoo.php">Zoo</a><br/>
				<a href="pages/cinema.php">Cinema</a><br/>';
			  
			}
				
		?>
		
	</body>
</html>

