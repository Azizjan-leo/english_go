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
  session_start();
	$_SESSION['check'] = TRUE;
	echo "<a href='../index.php'>Back</a>";
?>
	</body>
</html>