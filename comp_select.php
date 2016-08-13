<html>
<?php
    session_start();
    if($_SESSION['username']){ // checks if the user is logged in  
    }
    else{
        header("location: index.php"); // redirects if user is not logged in
    }
?>
<head>
<title>GMS for MU</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  

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

<div class="register_account">
            <div class="wrap">

<form action="lodge_comp.php" method="post">
	<select name="course" required>
		<option value="Select course" style="display:none">Select course</option>
  		<option value="Technology">Technology</option>
		  <option value="Arts">Arts</option>
		  <option value="Commerce">Commerce</option>
  </select><br>

<select name="sem" required>
<option value="Select current semester" style="display:none">Select current semester</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
   <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select><br>

<input type="text" name="seat_no" placeholder="Enter seat number" required/><br>

<select name="complaint" id="complaint" required>
  <option value="Select complaint" style="display:none">Select Grievance</option>
  <optgroup label="Results(Pre-examination Activities)">
    <option value="cat1,Enrollment for Examinations–Not Done">Enrollment for Examinations–Not Done</option>
    <option value="cat1,Receipt not generated (Form filled / Payment Paid)">Receipt not generated (Form filled / Payment Paid)</option>
    <option value="cat1,Hall ticket not generated / Received">Hall ticket not generated / Received</option>
    <option value="cat1,My Seating arrangement not done">My Seating arrangement not done</option>
    <option value="cat1,Colleges not allowing for examination due to attendance">Colleges not allowing for examination due to attendance</option>
    <option value="cat1,Examination Centre change request">Examination Centre change request</option>
    <option value="cat1,To modify the Examination form / wrong information filled">To modify the Examination form / wrong information filled</option>
    <option value="cat1,Papers overlapped (same day/two papers)">Papers overlapped (same day/two papers)</option>
  </optgroup>
  <optgroup label="Results(Arts and Fine arts faculty)">
    <option value="cat2,My Results not declared - Arts and Fine Arts Faculty">My Results not declared - Arts and Fine Arts Faculty</option>
    <option value="cat2,RLE papers given but results not amended">RLE papers given but results not amended</option>
    <option value="cat2,RLE amended but current results not declared">RLE amended but current results not declared</option>
    <option value="cat2,RLE amended but current results not declared">RLE amended but current results not declared</option>
  </optgroup>
  <optgroup label="Results(Commerce faculty)">
    <option value="cat3,My Results not declared - Commerce Faculty">My Results not declared - Commerce Faculty</option>
    <option value="cat3,RLE papers given but results not amended">RLE papers given but results not amended</option>
    <option value="cat3,RLE amended but current results not declared">RLE amended but current results not declared</option>
    <option value="cat3,RLE amended but current results not declared">RLE amended but current results not declared</option>
  </optgroup>
  <optgroup label="Results(Science and Engg. Faculty)">
    <option value="cat4,My Results not declared - Science and Engg. Faculty">My Results not declared - Science and Engg. Faculty</option>
    <option value="cat4,RLE papers given but results not amended">RLE papers given but results not amended</option>
    <option value="cat4,RLE amended but current results not declared">RLE amended but current results not declared</option>
    <option value="cat4,RLE amended but current results not declared">RLE amended but current results not declared</option>
  </optgroup>
  <optgroup label="Results(Law and Mgmt. Faculty)">
    <option value="cat5,Results not declared - Law and Mgmt. Faculty">Results not declared - Law and Mgmt. Faculty</option>
    <option value="cat5,RLE papers given but results not amended">RLE papers given but results not amended</option>
    <option value="cat5,RLE amended but current results not declared">RLE amended but current results not declared</option>
    <option value="cat5,RLE amended but current results not declared">RLE amended but current results not declared</option>
  </optgroup>
  <optgroup label="Marks and certificates">
    <option value="cat6,Mark sheet not received (original)">Mark sheet not received (original)</option>
    <option value="cat6,Mark sheet depicts wrong marks">Mark sheet depicts wrong marks</option>
    <option value="cat6,Old mark sheet submitted but not amended">Old mark sheet submitted but not amended</option>
    <option value="cat6,Name or seat no or college name wrong on mark sheet">Name or seat no or college name wrong on mark sheet</option>
    <option value="cat6,Name/ Seat No./ College name wrong on degree certificate">Name/ Seat No./ College name wrong on degree certificate</option>
    <option value="cat6,Degree certificate not received">Degree certificate not received</option>
    <option value="cat6,Duplicate mark sheet not received">Duplicate mark sheet not received</option>
    <option value="cat6,Duplicate degree certificate not received">Duplicate degree certificate not received</option>
    <option value="cat6,Verification of mark sheet not done">Verification of mark sheet not done</option>
    <option value="cat6,Verification of degree certificate not done">Verification of degree certificate not done</option>
    <option value="cat6,Mark sheet not received">Mark sheet not received</option>
  </optgroup>
  <optgroup label="Unfair Means Inquiry Cell">
    <option value="cat7,My Results kept on hold due to UMIC">My Results kept on hold due to UMIC</option>
    <option value="cat7,Did not get reply regarding UMIC">Did not get reply regarding UMIC</option>
    <option value="cat7,I Was not heard by UMI committee">I Was not heard by UMI committee</option>
  </optgroup>
  <optgroup label="Photocopy">
    <option value="cat8,Did not get my photocopy">Did not get my photocopy</option>
    <option value="cat8,Photocopy not legible">Photocopy not legible</option>
    <option value="cat8,Its not my Photocopy">Its not my Photocopy</option>
    <option value="cat8,Grievance for (a) un assessed part not redressed">Grievance for (a) un assessed part not redressed</option>
    <option value="cat8,Grievance for (b) Totaling error not redressed">Grievance for (b) Totaling error not redressed</option>
  </optgroup>
  <optgroup label="Revaluations">
    <option value="cat9,Revaluation Result not declared">Revaluation Result not declared</option>
    <option value="cat9,Results not amended after Revaluation">Results not amended after Revaluation</option>
    <option value="cat9,RLE not cleared due to Revaluation">RLE not cleared due to Revaluation</option>
    <option value="cat9,RLE cleared but current result not amended">RLE cleared but current result not amended</option>
  </optgroup>


</select>
  



<br><br>
<div class="button1">
<input type="submit" name="comp_submit" value="Submit">
</div>
</form>
<div class="button1">
<a href="logout.php"><input type="submit" name="logout" value="Logout"></a>
</div>
</div>
</div>
</body>
</html>
