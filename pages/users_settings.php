<?php 
	include("../includes/connect.php");
	if(isset($_POST['confirm'])){
		$userName = $_SESSION['user_name'];
		$newLastName = $_POST['last_name'];
		$newFirstName = $_POST['first_name'];
		$newAge = $_POST['age'];
		$query = "UPDATE  users SET name = '$newFirstName', last_name = '$newLastName', age = '$newAge' WHERE  name = '$userName'";
		if(mysql_query($query)){
			$_SESSION['user_name'] = $newFirstName;
			echo "Изменения внесены";
		}
	}
?>
<html>
	<head>
		<title>Settings</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<script src="../scripts/scripts.js"></script>
	</head>
	<body>
		<div id="settings"><p> Settings <br/> </p>
		<?php
			if($_SESSION['check'] = TRUE){
				print
					"<form  method='post' action=''><table>
						<tr><td> First name </td><td><input type='text' name='first_name' required/></td></tr>
						<tr><td> Last name </td><td><input type='text' name='last_name' required/></td></tr>
						<tr><td> Age </td><td><input type='text' name='age' required/></td></tr>
						<tr><td> Sex </td><td><table>
						<tr><td><b style='color: red' id='genderInfo'><img src='../image/male.png'></td>
						<td><span class='toggle-bg'>
						<input type='radio' name='toggle' id='gender' onClick='checkGender();' value='Male'>
						<input type='radio' name='toggle' id='gender' onClick='checkGender();' value='Female'>
						<span class='switch'></span></span></td></tr></table></td></tr>
						<tr><td> Skil color </td><td><input type='range' id='slider' min='0' max='120' step='20' value='0'/></td></tr>
						<tr><td> Hair length </td><td><input type='range' id='slider' min='0' max='120' step='20' value='0'/></td></tr>
						</table>
						<center><input type='submit' name='confirm' value='Сохранить'></center>
						</form>";
				print "<br><a href='../index.php'>Main page</a></div>";					 
			}
		?>
	</body>
</html>