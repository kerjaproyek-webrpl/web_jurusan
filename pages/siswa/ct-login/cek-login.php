<?php

if(!isset($_SESSION['nis']) && !isset($_SESSION['level'])){
	header("Location: http://my21.io/web_jurusan/?page=siswa");
} else {
	header("Location: http://my21.io/web_jurusan/pages/administrator");
}

// echo $_SESSION['nis'];