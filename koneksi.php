<?php
$host = "localhost";
$userhost = "root";
$passhost = "";
$dbname = "b_crud";

$db = new mysqli($host, $userhost, $passhost, $db_name);

mysql_connect("$host","$userhost","$passhost")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");
?>