<?php
	include_once("config.php");
	include_once("models/session.mod.php");

	$c = "";
	$a = "";
	$id = "";

	if (!empty($_GET['c'])) {
		$c = $_GET['c'];
	}
	if (!empty($_GET['a'])) {
		$a = $_GET['a'];
	}
	if (!empty($_GET['id'])) {
		$id = (int)$_GET['id'];
	}

	if (file_exists(DIR_ROOT.'controllers/'. $c .'.php')) {
		include_once(DIR_ROOT.'controllers/'. $c .'.php');
	} else {
		include_once(DIR_ROOT.'controllers/404.php');
	}

	include_once("views/index.tpl.php");
?>

