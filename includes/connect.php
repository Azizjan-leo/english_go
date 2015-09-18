<?php
	session_start();
	header("content-type=text/html; charset=cp1251");
	mysql_connect ("localhost","root","") or die(mysql_error());
    mysql_select_db ("test")or die(mysql_error());
	mysql_query("SET NAMES utf8");
?>