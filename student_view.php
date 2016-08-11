<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>  
<head>
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
</div>
        <div class="button3">
          <a href="comp_select.php"><input  type="submit" name="lodgecomp" value="Lodge New Complaint"></a>
        </div>
  <div id="heavyTable">
<?php
session_start();
$conn=new mysqli("localhost", "root", "","mu");
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              } 
              $user=$_SESSION['username'];

$table="pending_complaints";
$sql="SELECT * from $table where username ='$user'";
            $result = $conn->query($sql);
            $times = $result->num_rows;
            //echo "$times";
            $count=0;
             if($times==0);
            else {
            echo "
            <div class='title'><h2>PENDING GrievanceS</h2></div>
            <table>
            <tr>
            <th>Seat Number</th>
            <th>Grievance</th>
            <th>Status</th>
            </tr>";
            $itr = 0;
            $sum= 0;
            
            while($times > 0)
          {
                 
                 if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                  if($itr==$count)
                      echo "<tr>";
                    echo "<td>" .$row["seat_no"]. "</td>";
                      echo "<td>" .$row["complaint"]. "</td>";
                      echo "<td>" .$row["status"]. "</td>";

                     echo "</tr>";
                    $itr++;
                
                  }
              } 
            
        $count++;
        $times = $times - 1;
        }
        echo "</table>";

      }


$user=$_SESSION["username"];
$table="attended_complaints";
$sql="SELECT * from $table where username ='$user'";
            $result = $conn->query($sql);
            $times = $result->num_rows;
            $count=0;
            $itr = 0;
            if($times==0);
            else {
            echo "<div class='title'><h2>ATTENDED GrievanceS<h2></div>";
            echo "<table>
            <tr>
            <th>Seat number</th>
            <th>Grievance</th>
            <th>Reply</th>
            </tr>";
            
            while($times > 0)
          {
                 
                 if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                  //  $sum = $sum + $row["cost"];
                    if($itr==$count)
                     echo "<tr>";
                   echo "<td>" .$row["seat_no"]. "</td>";
                      echo "<td>" .$row["complaint"]. "</td>";
                      echo "<td>" .$row["reply"]. "</td>";

                     echo "</tr>";;
                    $itr++;
                
                  }
              } 
            
        $count++;
        $times = $times - 1;
        }
     
echo "</table>";
}
echo "<br><hr><br>";

?>
</div>
<br>
<div >
           <div  class="button2">
             <a href="logout.php"><input type="submit" name="logout" value="Logout"></a>
           </div>
</div>
</br>
</body>