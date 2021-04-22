<?php
	
	define("BASE_URL","http://localhost/templatingdemo/");

	function getURL($s = null) {
		if($s == null)
			return BASE_URL;

		return BASE_URL . $s;
	}

?>