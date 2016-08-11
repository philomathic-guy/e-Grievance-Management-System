<?php
session_start();
mysql_connect("localhost", "root", "") or die (mysql_error());
    mysql_select_db("mu") or die ("Cannot connect to database"); 
    $query = mysql_query("Update user set `password`='".$_POST['password']."' WHERE `username`='".$_GET['username']."'"); 
    
header("Location:index.php");


?>