<?php 
	session_start();
?>
<html>
	<head>
		<title>Tutorial</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
	<center><br><br><form  method="post" action="">
				<table>
					<tr><td><input type="text" name="login" placeholder="Name" required/></td></tr>
					<tr><td><input type="password" name="password" placeholder="Password" required/></td></tr>
					<tr><td><input type="submit" name="auth" value="ENTER"></td></tr>
				</table>
			  </form></center>
<?php
	$_SESSION['check'] = TRUE;
	echo "<a href='../index.php'>Back</a>";
?>
	</body>
</html>