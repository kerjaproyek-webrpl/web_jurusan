<?php
    $host = "localhost";
    $pass = "";
    $user = "root";
    $db = "web_jurusan";

    mysql_connect($host, $pass, $user) or die ("Koneksi Gagal");
    mysql_select_db($db) or die ("Database tidak ada");

?>
