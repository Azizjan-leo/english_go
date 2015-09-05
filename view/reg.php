<?php
	mysql_connect ("localhost","root","") or die(mysql_error());
	mysql_query("set names cp1251");
	mysql_query("set character_set_server=cp1251");
    mysql_select_db ("test")or die(mysql_error());
	
	if (isset($_POST['submit'])){
		$name = trim($_POST['rname']);
			$name = htmlspecialchars(stripslashes($name));		// HTML-tags deleting
		$login = trim($_POST['rlogin']);
			$login = htmlspecialchars(stripslashes($login));
		$password = trim($_POST['rpass']);
		$password_r = trim($_POST['rpass_r']);
		$email = trim($_POST['email']);
		
		$error = False; 	// Variable for errors
		
		if($password != $password_r){	// Passwords checking
				$error = TRUE;
				$error_text .= "<li><font color='red'>Passwords don't match!</font></li>";
		}
		else{
			if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$name)){	//	Name checking
				$error = TRUE;
				$error_text .= "<li><font color='red'>Make sure that the name contains from 2 to 30 characters and digits comprises</font></li>";
			}
			else{
				if (!preg_match("/^[a-z0-9]{2,20}$/i",$login)){		//Login checking
					$error = TRUE;
					$error_text .= "<li><font color='red'>Make sure that login has from 2 to 20 characters, and consists of Latin characters and digits</font></li>";
				}
				else{
					if (!preg_match("/^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i",$email)){	// E-Mail checking
						$error = TRUE;
						$error_text .= "<li><font color='red'>Wrong E-Mail. E-mail should like user@host.com</font></li>";
					}
					else{
						
						if( !empty( $_FILES['image']['name'] ) ) {
							  // Проверяем, что при загрузке не произошло ошибок
							  if ( $_FILES['image']['error'] == 0 ) {
								// Если файл загружен успешно, то проверяем - графический ли он
								if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
								  // Читаем содержимое файла
								  $image = file_get_contents( $_FILES['image']['tmp_name'] );
								  // Экранируем специальные символы в содержимом файла
								  $image = mysql_escape_string( $image );
								  // Формируем запрос на добавление файла в базу данных
								  mysql_query("INSERT INTO users VALUES('','$name','$login','$password','$email','".$image."')") or die(mysql_error());
								  // После чего остается только выполнить данный запрос к базе данных
								  mysql_query( $query );
								}
							  }
						}
						echo "<font color='green'>You log in =)</font>";
						}
						
				}
				
			}
		}
	}
?>
<center>
				<form id="register_form" name="register_form" enctype="multipart/form-data" method="post" action="">
					<table width="350" height="310"  align="center" cellpadding="0" cellspacing="0" bgcolor="#FFF">
						<tr>
							<td align="center"><input class="intext" type="text" name="rname" id="rname" placeholder="Name" required/></td>
						</tr>
						<tr>
							<td align="center"><input class="intext" type="text" name="rlogin" id="rlogin" placeholder="Login" required/></td>
						</tr>
						<tr>
							<td align="center"><input class="intext" type="password" name="rpass" id="rpass" placeholder="Password" required/>
						</td>
						</tr>
						<tr>
							<td align="center"><input class="intext"type="password" name="rpass_r" id="rpass_r" placeholder="Repeat password" required/></td>
						</tr>
						<tr>
							<td align="center"><input class="intext" type="text" name="email" id="email" placeholder="E-mail" required/></td>
						</tr>
						<tr>
							<td align="center">
								<div id="add_file" style="" onclick="document.getElementById('files').click();">Choose photo</div>
								<input type="file" id="files" name="image" style="visibility:hidden;" accept="image/*,image/jpeg" />
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input id="sign_in" type="submit" name="submit" value="Sign up" /></td>
						</tr>
					</table>
					<output id="list">
						<script src="js/script.js"></script>	
					</output>
				</form>
				
</center>
<?php
	if($error)
		echo $error_text;
?>
			