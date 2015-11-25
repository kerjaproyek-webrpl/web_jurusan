<?php 
	if(!isset($_SESSION['user']) && !isset($_SESSION['level'])){
		header("Location: http://my21.io/web_jurusan/?page=admin");
	} else {
		header("Location: pages/administrator/");
	}
 ?>