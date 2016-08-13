<html>
<head>
<title>MU GMS</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  

</head>
<body>
<!--  Header Start  -->
		
		<div class="header-top">
	 	<div class="wrapheader"> 
		<a href="index.php"><img class="logo" src="images/logo.jpg" alt=""/></a>
	    <div class="cssmenu">
		   <h1 class="toptext" >Grievance Management System</h1>
		</div>
		<div class="clear"></div>
		</div>
		</div><hr>
<!-- Header End -->
 			
<?php

$i=$_GET["i"];
$con=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("mu") or die ("Cannot connect to database");

$query = mysql_query("SELECT * from `pending_complaints` where `complaint_no`='$i'");
$row = mysql_fetch_array($query);


?>

  <form method="post" action="">
  	<div id="box" class="year">
  	<div id="complaint_title">
<h2><b>GRIEVANCE</b></h2>
</div>
<div id="comp">
<?php echo "" .$row["complaint"]. "";?>
</div>
<div id="complaint_title">
<br><b>REPLY</b>
</div>
<textarea class="textarea" columns='100' rows='6' placeholder='Please enter the reply' name='reply' required></textarea><br><br>
<div class="button2"><button class="grey" style="width:30%" name="submit">SUBMIT</button></div>
</div>
  </form>
  </body>
  <?php



function enter()
{
$i=$_GET["i"];

$query = mysql_query("SELECT * from `pending_complaints` where `complaint_no`='$i'");
$row = mysql_fetch_array($query);
	
$user=$row['username'];
$conn = new mysqli('localhost', 'root', '', 'mu');
$sql="DELETE from `pending_complaints` where `complaint_no`='$i'";
$conn->query($sql);
mysql_fetch_array($query);

$sm=$row["semester"];
$sn=$row["seat_no"];
$course=$row["course"];
$comp=$row["complaint"];
$reply=$_POST["reply"];
$year=$row['year'];
$month=$row['month'];


$sql1 = "INSERT INTO `attended_complaints` VALUES ('$i', '$user','$sm','$sn','$course','$year','$month','$comp','$reply')";
$conn->query($sql1);
$row = mysql_fetch_array($query);

header("Location:view.php");
}

if(isset($_POST['submit']) && isset($_POST['reply']))
{
   enter();
} 
?>


