<?php
$db_host = "localhost";
$db_name = "test";
$db_user = "root";
$db_password = '';

$db = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user,$db_password );
$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
