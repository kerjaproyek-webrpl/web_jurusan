<?php
    $host = "localhost";
    $pass = "";
    $user = "root";
    $db = "webjur";

    mysql_connect($host, $pass, $user) or die ("Enarupes heb, RTO");
    mysql_select_db($db) or die ("Enarupes heb, database ora ono");

?>