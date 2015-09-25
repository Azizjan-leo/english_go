<?php 

	include("../includes/connect.php");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>English-go</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<script src="../scripts/scripts.js"></script>

	</head>
	
	<body>
	
		<?php
			
			if(!$_SESSION['check'])
				echo '<script type="text/javascript">window.location.href="signInUp.php"</script>'; // если вошел не авторизованный чел его перенаправит на индекс
			else{
				print '
					<div id="navigation">
						<div class="nav_menu">
							<ul id="menu">
								<li>
									<a href="../index.php"><div>Дом<span>дом, любимый дом!</span></div></a>
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
				<div id="gen_content">';			
					echo '<div id="video_form" style="display:none;"><center><br><br><form method="POST" enctype="multipart/form-data"><table>
							<fieldset>
							<tr><td><input type="file" name="load[]" multiple accept="video/*" required/></td></tr>
							<tr><td><input type="text" name="title" placeholder="| NAME" required/></td></tr>
							<tr><td><input type="submit" name="send-request" value="Upload" /></td></tr>
						</table></fieldset></form></center></div>';
				if($_SESSION['check']){
					print '<center>
						<br> <button onclick="HideShow(\'video_form\'); return false">Upload new video</button>
						</center>';
				}
				function Uploading($files){
					for($i = 0; $i < count($files['name']); $i++){
						move_uploaded_file($files['tmp_name'][$i], 'unloaded_videos/'.$files['name']); 
						$t = $_POST["title"];
						$f = $files['name'][$i];
						$query="INSERT INTO `videos` VALUES(NULL,'".$f."','".$t."',NULL,NULL)";
						mysql_query( $query ) or die(mysql_error());
					}	
				}
				if(isset($_POST['send-request']))
					Uploading($_FILES['load']);	
				$result = mysql_query("SELECT * FROM videos ORDER By id DESC") or die(mysql_error());
				$data = mysql_fetch_array($result);
				if($data!=0){
					do{
						printf('
							<div class="video">
								<h1>%s</h1>
								<video height="400" width="600" controls="controls" poster="">
									<source src="unloaded_videos/%s">
								</video>
							</div><br/><p>%s</p>
							',$data["title"],$data["name"],$data["date"]);
					}
					while($data = mysql_fetch_array($result));
				}
			}
				///////////////////////////////////////////////////////////////////////////
				
			print '<input type="submit" name="out" value="Out">
				</div>
				</div>
				<div id="footer">Footer</div>
				';
				
			
				
		?>
		
	</body>
</html>