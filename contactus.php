<?php
ini_set( 'display_errors', 1 );

$showform = false;
$sendemail = false;

error_reporting( E_ERROR );
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $sendemail = true;
        
        
        if ($sendemail) { 
        
                $from = $_POST['contactemail'];
//                $to= $_POST['recipnt'];
                $to= "admin@mytownhelp.net";
                $subject = $_POST['subject'];
                $message= $_POST['message'];
                $headers = "From:" . $from;
                
        if(mail($to,$subject,$message, $headers)) {
            //    echo "Your message has been sent";
        } else {
            // echo "The email message was not sent due to some error";
        }
    }
        
    }
        ?>

<!doctype html> 
    
<html lang="en"> 
  
<head>     
    <meta charset="utf-8">  
    <meta name="viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" type="text/css" href="contactus.css">  

    <title>Contact Us</title>   
</head> 
<body> 

    <div class="topnav">
      <a class="active" href="contactus.html">Contact</a>
      <a href="volsignup.php">Get Involved</a>
      <a  href="Services.html">Services</a>
      <a href="aboutust.html">About</a>
      <a href="https://mytownhelp.net">Home</a>
    </div>
 

    <br> <br>

<form method="POST" action="contactus.php">

    <div class="input-group">
            <label>Your Name</label>
            <input type="text" name="name" id="name" required>
    </div>
    
    <div class="input-group">
        <label>Your E-mail</label>
        <input type="text" name="contactemail" id="name" required>
    </div>

    <div class="input-group">
        <label>Subject</label>
        <input type="text" name="subject" id="name" required>
    </div>

    <div class="input-group2">
        <label>Message</label>
        <input type="text" name="message" id="name" required>
    </div>
    <input type="submit" value="Send">
</form>
</body>
</html>