<?php 
	session_start();
?>
<html>
	<head>
		<title>Tutorial</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	
		<?php
			if($_SESSION['check']){
				echo "Hello agein!<br/>";
			}
			else
				echo "<a href='pages/other.php'>Sign In</a>";
		?>
	</body>
</html>