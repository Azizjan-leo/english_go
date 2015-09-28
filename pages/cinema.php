<?php include("../includes/connect.php"); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>English-go</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<script src="../scripts/scripts.js"></script>

	</head>
	
	<body>
	
<?php if(!$_SESSION['check']) /*  ПРОВЕРКА РЕГИСТРАЦИИ ВОШЕДШЕГО */	echo '<script type="text/javascript">window.location.href="signInUp.php"</script>'; // если вошел не авторизованный чел его перенаправит на индекс ?>

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
								<div class="left_pos"><br><div class="user_name"><? echo $_SESSION["user_name"] ?></div>
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
				<?php
					printf('
							<ul><li><a href="cinema.php?genre=%s">Клипы</a></li>
								<li><a href="cinema.php?genre=%s">IT-video</a></li>
								<li><a href="cinema.php?genre=%s">Триллеры</a></li>
								<li><a href="cinema.php?genre=%s">Ужасы</a></li>
								<li><a href="cinema.php?genre=%s">Комедии</a></li>
								<li><a href="cinema.php?genre=%s">Другое</a></li></ul>',
								clip,it,triller,horror,comedy,other);
					
					if(isset($_GET["genre"])){
							$name = $_GET["genre"];
							include("view_videos/$name.php");
					}
				?>
		</div>
		<div id="footer">Footer</div>
	</body>
</html>