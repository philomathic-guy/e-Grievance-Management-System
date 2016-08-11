<?php
    //Print '<script>alert("Entered checkforgot!");</script>';
    session_start();
    $username = mysql_real_escape_string($_POST['user']);
    $emailid = mysql_real_escape_string($_POST['email']);
    //echo $username;
    $bool = true;
    mysql_connect("localhost", "root", "") or die (mysql_error());
    mysql_select_db("mu") or die ("Cannot connect to database"); 
    $query = mysql_query("Select * from user WHERE username='$username' and email='$emailid'"); 
    $exists = mysql_num_rows($query); 
    
    if($exists > 0)
    {
        $row=mysql_fetch_array($query);
        //Load PHPMailer dependencies
        require_once 'PHPMailerAutoload.php';
        require_once 'class.phpmailer.php';
        require_once 'class.smtp.php';

        /* CONFIGURATION */
        $crendentials = array(
            'email'     => 'mumbaiuniversity.cms@gmail.com',    //Your GMail address
            'password'  => 'mumbai123cms'               //Your GMail password
            );

        /* SPECIFIC TO GMAIL SMTP */
        $smtp = array(

        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => $crendentials['email'],
        'password' => $crendentials['password'],
        'secure' => 'tls' //SSL or TLS

        );

        /* TO, SUBJECT, CONTENT */
        $to         = $row['email']; //The 'To' field
        $subject    = 'Forgot Password Request for Grievance Management System MU';
        $content    = 'Hello, '.$row["name"].'<br>Visit the following link to reset your password:<br><a href="localhost/MU/changepass.php?username='.$row["username"].'">Reset Password</a><br>Regards,<br>GMS MU Team.';
        $SESSION['username']=$row['username'];


        $mailer = new PHPMailer();

        //SMTP Configuration
        $mailer->isSMTP();
        $mailer->SMTPAuth   = true; //We need to authenticate
        $mailer->Host       = $smtp['host'];
        $mailer->Port       = $smtp['port'];
        $mailer->Username   = $smtp['username'];
        $mailer->Password   = $smtp['password'];
        $mailer->SMTPSecure = $smtp['secure']; 

        //Now, send mail :
        //From - To :
        $mailer->From       = $crendentials['email'];
        $mailer->FromName   = 'GMS MU Team'; //Optional
        $mailer->addAddress($to);  // Add a recipient

        //Subject - Body :
        $mailer->Subject        = $subject;
        $mailer->Body           = $content;
        $mailer->isHTML(true); //Mail body contains HTML tags

        //Check if mail is sent :
        if(!$mailer->send()) {
            //. $mailer->ErrorInfo
            echo '<script>alert("Error sending mail : ")</script>';
        } else {
            echo "<script>alert('Message sent! Check your email!');</script>";
	
        }
    }  

    else
    {
        echo "<script>alert('User does not exist');</script>";
    }
   header("Location:index.php");
    mysql_close();
?>
