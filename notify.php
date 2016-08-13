<?php

session_start();
$con=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("mu") or die ("Cannot connect to database");
$i=$_GET["i"];
$query = mysql_query("Select * from pending_complaints where complaint_no='".$i."'");
while($row = mysql_fetch_array($query))
	{
		if($row['category']=="cat1")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR Results,Pre Exam' where complaint_no='".$i."'");	
		}
		else if($row['category']=="cat2")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR Results,Arts' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat3")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR Results,Commerce' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat4")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR Results,Science & Engg.' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat5")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR Results,Law & Mgmt.' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat6")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR–Marks & certificates' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat7")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR-UMIC' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat8")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR-Photocopy' where complaint_no='".$i."'");	
		}
		if($row['category']=="cat9")
		{
		$query = mysql_query("Update pending_complaints set time=NOW() where complaint_no='".$i."'");
		$query1 = mysql_query("Update pending_complaints set status='AR-Revaluations' where complaint_no='".$i."'");	
		}
	}

header("Location:view.php");

?>