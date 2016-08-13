<html>
<head>
<title>GMS for MU</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>  

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
<?php
session_start();
$user=$_GET['username'];
echo "
<div class='forgot'>
  <form action='updatepass.php?username=".$user."' method='POST'>
    <br><br>
  <p><label> NEW-PASSWORD</label></p>
    <p><input type='password' placeholder='Enter your Password' name='password'></p><br>
    <div class='formsubmit'><p><input type='submit' value='Submit'></p></div>
  </form>
</div>
";
?>
</body>

</html>
