<?php
    $host = "localhost";
    $pass = "";
    $user = "root";
    $db = "db_web_jurusan";

    $conn = mysql_connect($host, $user, $pass);
    $select_db = mysql_select_db($db);
    if (!$conn) {
    	die("Koneksi Gagal : ".mysql_connect_error());
    }
?>
