<?php 
	include("../includes/connect.php")
?>
<html>
	<head>
		<title>Settings</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
	</head>
	<body><!-- wadwad -->
		<div id="settings"><p> Settings <br/> </p>
		<?php
			if($_SESSION['check'] = TRUE){
				print
					"<table><form  method='post' action=''>
						<tr><td> First name </td><td><input type='text' name='last_name' required/></td></tr>
						<tr><td> Last name </td><td><input type='text' name='age' required/></td></tr>
						<tr><td> Age </td><td><input type='text' name='age' required/></td></tr>
						<tr><td> Sex </td><td>
						<span class='toggle-bg'>
						<input type='radio' name='toggle' value='Male'>
						<input type='radio' name='toggle' value='Female'>
						<span class='switch'></span></span></td></tr>
						<tr><td> Skil color </td><td><input type='range' id='slider' min='0' max='120' step='20' value='0'/></td></tr>
						<tr><td> Hair length </td><td><input type='range' id='slider' min='0' max='120' step='20' value='0'/></td></tr>
					 </form></table>";
				print "<a href='../index.php'>Main page</a></div>";					 
			}
		?>
	</body>
</html>