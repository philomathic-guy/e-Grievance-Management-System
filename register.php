<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  
</head>
<body>

<div class="register_account">
          	<div class="wrap">
    	      <h1 class="formtitle">Registration form</h1>
    	      <div class="errorbox"></div>
    	      <form action="reg.php" method="post">
    			
		   			 <div>Name<span class="asterisk">*</span>:<input type="name" name="name" required></div>
		   			<div>Branch:<span class="asterisk">*</span>
		   			 	<select name="branch">
			                <option value="Select Branch" selected="true" style="display:none;">Select Branch</option>
			                <option value="Computer Engineering">Computer Engineering</option>
			                <option value="BCOM">BCOM</option>
			                <option value="B.A">B.A</option>
			                <option value="IT Engineering">IT Engineering</option>
			            </select>
			        </div>
		   			 <div>College<span class="asterisk">*</span>:<input type="name" name="college" required></div>
					 <div>Contact Number<span class="asterisk">*</span>:<input type="text" name="contact"  pattern="\d{3}\d{3}\d{4}" required></div>
		   			 <div>Email ID<span class="asterisk">*</span>:<input type="email" name="email" required></div>
		   			 <div>Username<span class="asterisk">*</span>: <input type="name" name="username" required></div>
		   			 <div>Password<span class="asterisk">*</span>:<input type="password" name="password" required></div>
		    	
		    <div>
		    	 <button class="grey">Register</button>
		         <!--p class="terms">By clicking 'Register' you agree to the <a href="#">Terms &amp; Conditions</a>.</p-->
		    </div>
		    <div class="clear"></div>
		    </form>
    	  </div> 
</div>
</body>
</html>