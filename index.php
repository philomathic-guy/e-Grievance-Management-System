<html>
<head>
<title>GMS for MU</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  

</head>
<body>
	<?php
	$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "mu";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
							} 
?>

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

       <div class="login">
          <div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Account Registeration For New Users.</h4>
					 
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Register"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				  <div class="login-title">
	           		<h4 class="title">Registered Users</h4>
					 <div class="comments-area">
						<form action="login.php" method="post">
							<p>
								<label>UserName</label>
								<span class="asterisk">*</span>
								<input type="text" name="username" value="" required>
							</p>
							<p>
								<label>Password</label>
								<span class="asterisk">*</span>
								<input name="password" type="password" value="" required>
							</p>
							<div>
								<p id="login-form-remember">
								<label><a href="forgot.php">Forget Your Password ? </a></label>
							 	</p>
							</div>
							<div class="formsubmit">
							<p>
								<input type="submit" value="Login">
							</p>
							</div>
						</form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
        	      
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>