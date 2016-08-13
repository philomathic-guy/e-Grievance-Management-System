<?php

session_start();
$con=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("mu") or die ("Cannot connect to database");

$date=date('Y-m-d H:i:s');
$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=7 AND DATEDIFF(NOW(),time)<14 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='DR' where complaint_no= '".$row['complaint_no']."'");

$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=14 AND DATEDIFF(NOW(),time)<21 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='CC' where complaint_no= '".$row['complaint_no']."'");

$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=21 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='VC' where complaint_no= '".$row['complaint_no']."'");


header("Location:view.php")

?>