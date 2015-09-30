<?php 
	include("../includes/connect.php");
	if(isset($_POST['confirm'])){
		$login = $_SESSION['login'];
		$newName = $_POST['name'];
		
		print $_POST['gender'];
		$newAge = $_POST['age'];
		$query = "UPDATE  users SET name = '$newName', sex = '$gender' WHERE  name = '$login'";
		if(mysql_query($query)){
			$_SESSION['login'] = $login;
			print $_POST['gender'];
		}
	}
	if(isset($_GET['out'])){
		$_SESSION['check'] = FALSE;
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
		if(!$_SESSION['check']) /*  ПРОВЕРКА РЕГИСТРАЦИИ ВОШЕДШЕГО */	echo '<script type="text/javascript">window.location.href="signInUp.php"</script>'; // если вошел не авторизованный чел его перенаправит на индекс 
			else{
				print'
					<div id="navigation">
						<div class="nav_menu">
							<ul id="menu">
								<li id="first_li">
									<a href="../index.php"><div>Дом<span>дом, любимый дом!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="../pages/kitchen.php">Кухня</a></li>
									</ul>
								</li>
								<li id="first_li">
									<a href="#"><div>Развлечения<span>все веселье тут!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="../pages/cinema.php">Кинотеатр</a></li>
										<li><a href="../pages/zoo.php">Зоопарк</a></li>
									</ul>
								</li>
								<li id="first_li">
									<a href="#"><div>Менюшка<span>и тут можно написать</span></div></a>
								</li>
							</ul>
						</div>
						
						<div class="user_stat">
							<div class="user_data">
								<div class="left_pos"><br><div class="login">'.$_SESSION["login"].'</div>
								<div class="user_money">money</div></div>
								<div class="right_pos">
									<div id="user_nav">
									<img src="../image/user_no_photo_big.png">
											<div id="down_menu">
												<div class="triangle"></div>
												<ul>
													<li><a href="../pages/users_settings.php">Настройки</a></li>
													<li><a href="../includes/out.php?out">Выход</a></li>
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
						<tr><td> Имя <td><input type="text" name="name" /></td></tr>
						<tr><td> Пол </td><td>
						<div id="gender"><button value="male" id="male"><img src="../image/male.png"></button>
						<button type="button" value="female" id="female"><img src="../image/female.png"></button></div>
						</td></tr>
						<tr><td></td><td><input type="submit" name="confirm" value="Сохранить"></td></tr>
						</table>
						</form>
						</div>
					</div>
					<div id="account_settings" style="display:none;">
						<form method="post" id="account_settings">
							<intput type="text" name="userName" value=""/>
						</form>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div id="footer">Footer</div>';					 
			}
		?>
	</body>
</html>