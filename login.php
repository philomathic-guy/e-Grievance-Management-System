<html>
<head>
  <title>LOGIN</title>
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
session_start();
$con=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("mu") or die ("Cannot connect to database");

$date=date('Y-m-d H:i:s');
$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=7 AND DATEDIFF(NOW(),time)<14 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='DR' where complaint_no= '".$row['complaint_no']."'");

$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=14 AND DATEDIFF(NOW(),time)<21 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='CC' where complaint_no= '".$row['complaint_no']."'");

$query = mysql_query("Select * from pending_complaints where DATEDIFF(NOW(),time) >=21 ");
while($row = mysql_fetch_array($query))
    mysql_query("Update pending_complaints set status='VC' where complaint_no= '".$row['complaint_no']."'");



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	 if(isset($_POST['username'])&&isset($_POST['password']))
          {
            if($_POST['username']!=NULL&&$_POST['password']!=NULL)
            {
              $un=$_POST['username'];
              $flag=1;
              $query=mysql_query("select * from `user`");
              while($row = mysql_fetch_array($query))
              {
                if($row[0]==$un)
                {
                  $flag=0;
                  break;
                }
              }
              if($flag==0)
              {
                if($row[1]==$_POST['password'])
				{
                 $_SESSION['username']=$row[0]; 
                 $x=explode(" ",$row[0]);
                 if($x[0]=="AR" || $_SESSION['username']=="DR" || $_SESSION['username']=="CC" || $_SESSION['username']=="VC" )
                    header("Location: view.php");
                 else
                  header("Location: student_view.php");
                }
                else
                {
                  echo "<span style='color:red'>Please enter the correct password</span>";
                }
              } 
              else
              {
              	echo "<span style='color:red'>Please enter a valid username</span>";
              }  

              }
          }
      }

?>
</body>
</html>