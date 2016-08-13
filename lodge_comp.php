<?php
//ini_set('max_execution_time', 120);
session_start();

$user=$_SESSION['username'];
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "mu";
							$con = new mysqli($servername, $username, $password, $dbname);
							if ($con->connect_error) {
    						die("Connection failed: " . $con->connect_error);
    					}
// $con = mysql_connect("localhost","root","");
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
//   }


// mysql_select_db('mu',$con);
if(isset($_POST['complaint']))
{
$comp1=explode(",", $_POST['complaint']);
$cat=$comp1[0];
$comp=$comp1[1];
if($cat=='cat1')
    $status="AR Results,Pre Exam";
else if($cat=='cat2')
    $status="AR Results,Arts";
else if($cat=='cat3')
    $status="AR Results,Commerce";
else if($cat=='cat4')
    $status="AR Results,Science & Engg.";
else if($cat=='cat5')
    $status="AR Results,Law & Mgmt.";
else if($cat=='cat6')
    $status="AR–Marks & certificates";
else if($cat=='cat7')
    $status="AR-UMIC";
else if($cat=='cat8')
    $status="AR-Photocopy";
else if($cat=='cat9')
    $status="AR-Revaluations";

echo $status;



$randomflag=true;
while($randomflag)
{$num = rand(1,1000);
$sql = "SELECT complaint_no from `pending_complaints`";
$result = $con->query($sql);
if($result->num_rows==0)
    $randomflag=false;
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($num==$row["complaint_no"])
        $randomflag=true;
    	else $randomflag=false;
    }}
}

$sem=$_POST["sem"];
$seat_no=$_POST["seat_no"];
$course=$_POST["course"];
date_default_timezone_set("Asia/Calcutta");
$time=date('Y-m-d H:i:s');
$year = date('Y', strtotime($time));
$month = date('m', strtotime($time));
$sql1 = "INSERT INTO `pending_complaints` VALUES ('$num','$user','$sem','$seat_no','$course','$comp','$cat','$time','$year','$month','$time','$status')";

if ($con->query($sql1) === TRUE) {

    header("Location:student_view.php");
} else {
    die('Error: ' . mysql_error());
}


}


?>