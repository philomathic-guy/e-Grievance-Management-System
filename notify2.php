<?php

session_start();
$con=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("mu") or die ("Cannot connect to database");
$i=$_GET["i"];
$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
$query1 = mysql_query("Update pending_complaints set status='DR' where complaint_no='".$i."'");

header("Location:view.php")
?>