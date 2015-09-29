<?php 
	include("../includes/connect.php");
	if(isset($_POST['confirm'])){
		$userName = $_SESSION['user_name'];
		$newLastName = $_POST['last_name'];
		$newFirstName = $_POST['first_name'];
		$gender = ($_POST['gender'] == 'Female' ? true : false);
		$newAge = $_POST['age'];
		$query = "UPDATE  users SET name = '$newFirstName', last_name = '$newLastName', age = '$newAge', sex = '$gender' WHERE  name = '$userName'";
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
		<?php
			if($_SESSION['check'] = TRUE){
				print'
					<div id="navigation">
						<div class="nav_menu">
							<ul id="menu">
								<li>
									<a href="../index.php"><div>Дом<span>дом, любимый дом!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="../pages/kitchen.php">Кухня</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><div>Развлечения<span>все веселье тут!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="../pages/cinema.php">Кинотеатр</a></li>
										<li><a href="../pages/zoo.php">Зоопарк</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><div>Менюшка<span>и тут можно написать</span></div></a>
								</li>
							</ul>
						</div>
						
						<div class="user_stat">
							<div class="user_data">
								<div class="left_pos"><br><div class="user_name">'.$_SESSION["user_name"].'</div>
								<div class="user_money">money</div></div>
								<div class="right_pos">
									<div id="user_nav">
									<img src="../image/user_no_photo_big.png">
											<div id="down_menu">
												<div class="triangle"></div>
												<ul>
													<li><a href="../pages/users_settings.php">Настройки</a></li>
													<li><a href="?out">Выход</a></li>
												</ul>
											</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
			<div id="content">
				<div id="left_menu">
					<ul class="menu_bar">
						<li id="menu_man_settings" onClick="HideShowContent(\'man_settings\', \'account_settings\', \'menu_man_settings\', \'menu_account_settings\')""><img src="../image/user_setting.png"></li>
						<li id="menu_account_settings" onClick="HideShowContent(\'account_settings\', \'man_settings\', \'menu_account_settings\', \'menu_man_settings\')"><img src="../image/settings.png"></li>
					</ul>
				</div>
				<div id="right_content">
					<div id="man_settings" style="display:block;">
						<div id="gen_set">
						<form  method="post" action=""><table>
						<tr><td> Имя </td><td><input type="text" name="name" required/></td></tr>
						<tr><td> Пол </td><td><div class="gender">
							<input type="checkbox" name="gender" class="gender-checkbox" id="mygender" checked>
							<label class="gender-label" for="mygender">
								<span class="gender-inner"></span>
								<span class="gender-switch"></span>
							</label>
						</div></tr></td>
						<tr><td></td><td><input type="submit" name="confirm" value="Сохранить"></td></tr>
						</table>
						</form>
						</div>
					</div>
					<div id="account_settings" style="display:none;">2</div>
				</div>
				<div class="clear"></div>
			</div>
			<div id="footer">Footer</div>';					 
			}
		?>
	</body>
</html>