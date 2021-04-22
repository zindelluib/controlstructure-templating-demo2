<?php require "includes/config.php"?>

<?php
	function getHead($title){
		echo '<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">';
		echo "<title>$title</title>";
		echo '<link rel="stylesheet" type="text/css" href="' . getURL("css/box.css")  . '"';
		echo '</head>
		<body>
		<div id="container">';

	}
?>