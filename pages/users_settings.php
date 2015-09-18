<?php 
	include("../includes/connect.php")
?>
<html>
	<head>
		<title>Settings</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
	</head>
	<body>
		<p> Settings <br/> </p>
		<?php
			if($_SESSION['check'] = TRUE){
				print
					"<table>
						<tr><td> First name </td><td>".$_SESSION['user_name']."</td></tr>
						<tr><td> Last name </td><td>".$_SESSION['user_name']."</td></tr>
						<tr><td> Age </td><td>".$_SESSION['user_name']."</td></tr>
						<tr><td> Sex </td><td>".$_SESSION['user_name']."</td></tr>
						<tr><td> Skil color </td><td>".$_SESSION['user_name']."</td></tr>
						<tr><td> Hair length </td><td>".$_SESSION['user_name']."</td></tr>
					 </table>";
				print "<a href='../index.php'>Main page</a>";					 
			}
		?>
	</body>
</html>