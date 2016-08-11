<html>
<head>
<title>MU</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />

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
							$tname="user";
							$name =  $_POST["name"];
							$branch =  $_POST["branch"];
							$college =  $_POST["college"];
							$password =  $_POST["password"];
							$email =  $_POST["email"];
							$username =  $_POST["username"];
							$contact =  $_POST["contact"];

							$sql1 = "SELECT name FROM $tname WHERE username = '$username' ";
							 $result = $conn->query($sql1);
					  		 if ($result->num_rows == 0) {


							$sql = "INSERT INTO $tname 
VALUES ('$username', '$password', '$email','$name','$branch','$college','$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Registeration Successfull";
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
echo 'Username already taken, register with a new username by clicking <a href="register.php">here</a>';
$conn->close();
							?>
<
</body>
</html>