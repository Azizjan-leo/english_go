<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
	mysql_connect ("localhost","root","") or die(mysql_error());
    mysql_select_db ("test")or die(mysql_error());
	mysql_query("SET NAMES utf8");
?>