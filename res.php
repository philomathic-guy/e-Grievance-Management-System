<!DOCTYPE>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  

	<title>REPORT</title>
	<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function() {
	
				var x=document.getElementById("year").value();
				alert(x);
				//window.location.href="res1.php?i="+x;
});
});
	</script>
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
 	<div class="year">		
	<form action="result.php" method="POST">
	SELECT YEAR : 
	<select name="year" required>
		<option value="Select year" style="display:none">Select year</option>
  		<option value="2014">2014</option>
		  <option value="2015">2015</option>
		  <option value="2016">2016</option>
  </select><br>
  <div class="button3">
  <input type="submit" value="SUBMIT" name="submit">
</div>
</div>
</form>
</div>
	

	
</body>
</html>