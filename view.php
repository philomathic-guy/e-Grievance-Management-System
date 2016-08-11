<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".reply").click(function() {
				window.location.href="logic.php?i="+(this.id);
});
			$(".notify").click(function() {
				window.location.href="notify.php?i="+(this.id);
});
			$(".notify2").click(function() {
				window.location.href="notify2.php?i="+(this.id);
});
});
	</script>
</head>
<body>

<!-- HEADER START -->
<div class="header-top">
  <div class="wrapheader"> 
    <a href="index.php"><img class="logo" src="images/logo.jpg" alt=""/></a>
    <div class="cssmenu">
       <h1 class="toptext" >Grievance Management System</h1>
    </div>
    <div class="clear"></div>
  </div>
</div>
<hr>
<!-- HEADER END -->

	<div class="button2">
		<a href="update.php"><input type="submit" name="Refresh" value="Refresh"></a><br><br>
	</div>
	<?php
	session_start();
	$con=mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("mu") or die ("Cannot connect to database");
	$un=$_SESSION["username"];
	$table="pending_complaints";
	$query = mysql_query("Select * from $table where status='$un'");
	echo "<table>
            <tr>
            <th>Course</th>
            <th>Semester</th>
            <th>Seat Number</th>
            <th>Grievance</th>
            <th></th>
			</tr>";
	while($row = mysql_fetch_array($query))
	{
	$x=explode(" ",$row['status']);
	if($x[0]=='AR' )
	{
	echo "<tr>";
	echo "<td>" .$row['course']."</td>";
	echo "<td>" .$row['semester']. "</td>";
	echo "<td>" .$row['seat_no']. "</td>";	
	echo "<td>" .$row['complaint']. "</td>";
	
	echo '<td><button class="reply" id= "'.$row['complaint_no'].'">REPLY</button></td>';
	echo "</tr>";
	}
	else if($x[0]=='CC' || $x[0]=='DR'){
		echo "<tr>";
	echo "<td>" .$row['course']."</td>";
	echo "<td>" .$row['semester']. "</td>";
	echo "<td>" .$row['seat_no']. "</td>";	
	echo "<td style='border-right:1px solid #4682B4;'>" .$row['complaint']. "</td>";
	echo '<td><button class="notify" id= "'.$row['complaint_no'].'">NOTIFY AR</button></td>';
	echo "</tr>";
	}
	
        else
	{
		echo "<tr>";
	echo "<td>" .$row['course']."</td>";
	echo "<td>" .$row['semester']. "</td>";
	echo "<td>" .$row['seat_no']. "</td>";	
	echo "<td style='border-right:1px solid #4682B4;'>" .$row['complaint']. "</td>";
	echo '<td><button class="notify2" id= "'.$row['complaint_no'].'">NOTIFY DR</button></td>';
	echo "</tr>";
	}
	}
	echo "</table>";
	?>
	<div class="button2">
	<?php 

	if ($un=='VC')
	echo '<a href="res.php"><input type="submit" name="View Report" value="View Report"></a><br><br>';
	
	?>
	<a href="logout.php"><input type="submit" name="logout" value="Logout"></a></body>
	</div>
</html>
