<?php 
	session_start();
	if(isset($_GET["out"])){
			unset($_SESSON['name']);
			$_SESSION['check'] = false;
			session_unset();
			session_destroy();
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				print '
					<div id="navigation">
						<div class="nav_menu">
							<ul id="menu">
								<li>
									<a href="index.php"><div>Дом<span>дом, любимый дом!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="pages/kitchen.php">Кухня</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><div>Развлечения<span>все веселье тут!</span></div></a>
									<ul id="gradient_bg">
										<li><a href="pages/cinema.php">Кинотеатр</a></li>
										<li><a href="pages/zoo.php">Зоопарк</a></li>
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
								<div class="right_pos"><div class="user_image"><img src="image/user_no_photo_big.png"></div></div>
							</div>
						</div>
						
					</div>
				<div id="content">
				<div id="gen_content">
					<a href="?out">Out</a>
				</div>
				</div>
				<div id="footer">Footer</div>
				';
				
			}
				
		?>
		
	</body>
</html>

