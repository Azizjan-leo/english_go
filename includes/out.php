<?
session_start();
if(isset($_GET["out"])){
			unset($_SESSON['name']);
			$_SESSION['check'] = FALSE;
			session_unset();
			session_destroy();
	}
?>
<script type="text/javascript">window.location.href="../pages/signInUp.php"</script>