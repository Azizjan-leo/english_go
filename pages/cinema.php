<?php
	include("../includes/connect.php");
?>
<html>
	<head>
		<title>LenguaSity</title>
	</head>
	<body>
		<?php
		$url = "../index.php";
			if(!$_SESSION['check'])
				echo '<script type="text/javascript">window.location.href="'.$url.'"</script>';
			else
				echo "bla bla bla";
		?>
	</body>
</html>