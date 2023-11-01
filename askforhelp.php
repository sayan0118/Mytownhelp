<?php

$showAlert = false;  
$showError = false;  
$exists=false; 

$servername = "localhost";  
$username = ""*******";";  
$password = ""*******";"; 
$database = "*******"; 
// Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 

if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    // Include file which makes the 
    // Database Connection. 
//    include 'dbconnect.php';    
    
     
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];      
    $useremail = $_POST['email'];
    $phonenum = $_POST['phone'];
    $zipcd = $_POST['zip-code'];
    $rqstdtl = $_POST['request']; 
    $current_date = date("Y-m-d H:i:s");
    

       $sql = "INSERT INTO community_request (Request_fname, Request_lname, Request_email, Request_phone, Request_detail, Request_zipcode, Request_dt)
                  VALUES ('$firstname', '$lastname', '$useremail', '$phonenum', '$rqstdtl', '$zipcd', '$current_date' )";
    
            $result = mysqli_query($conn, $sql); 
    //
      $sql2 = "Select member_username, member_fname from community_users where member_email_subscrb = 'Y'";
      $result2 = mysqli_query($conn, $sql2);
    //  echo "Database selected email will start now";
      $c = 1;
      $num = mysqli_num_rows($result2);
    //  echo 'Number of records selected';
    //  echo $num;
       
      $message = 'Dear Community Member,';
      $message .= "\n";
      $message .= $firstname; 
      $message .= ' has submitted a help request ';
      $message .= ' ';
      $message .= '" ';
      $message .= $rqstdtl;
      $message .= '" ';
      $message .= '. ';
      $message .= "\n";
      $message .= "\n";
      $message .= 'Please visit https://mytownhelp.net/howcanihelp.php to view the request and extend a helping hand if you could. Thank you ';
      
      $message .= "\n";
      $message .= "\n";
      $message .= 'Your Town Community Help. If you see a need, take the lead';
       
       while($row = mysqli_fetch_array($result2))
         {
   //         echo $row['member_username'];
    //        $c =$c+1;
            $to = $row['member_username'];
            $subject = 'A Help request has been submitted';
            $from = 'admin@mytownhelp.net';
            $headers = "From:" . $from;
            
    //        $headers .= "MIME-Version: 1.0\r\n";
    //        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
               
    /*      $message = '<html><body>';
            $message .= "Our community member "  .$row['member_fname'];
            $message .= " has submitted a help request";
            $message .= '<br>';
            $message .= $rqstdtl;
            $message .= '<br>';
            $message .= "Please visit our portal and contact " .$row['member_fname'];
            $message .= "if you can offer any help";
            $message .= '<br>';
            $message .= "Thank you";
            $message .= '<br>';
            $message .= "Our Town, Our Community and Our People";
            $message .= "</table>";
            $message .= "</body></html>"; */
            
            if(mail($to,$subject,$message, $headers)) {
                   //    echo "Your message has been sent";
                    } else {
                        echo "The email message was not sent due to some error";
                    }
         }
         
    //        $headers = "From:  example@gmail.com";
    //           $headers .= "MIME-Version: 1.0\r\n";
    //           $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    //        $headers .= "CC: example@gmail.com\r\n";
            
            if ($result) { 
                $showAlert = true;
      /*          $to= $useremail;
                
                while($row = mysqli_fetch_array($result2))
                         {
                            ini_set( 'display_errors', 1 );
                            error_reporting( E_ERROR );
                            echo "sending ".$cmember_username."</br>";
                            $c =$c+1;
                            $to = $row['member_username'];
                            $subject = 'Test Succcess';
                            $from = 'admin@mytownhelp.net';
                            $message= 'Sayan has Requested for a Hair Cut for free. Is there any barber available?';
                            $headers = "From:" . $from;
                            
                            if(mail($to,$subject,$message, $headers)) {
                                       echo "Your message has been sent";
                                    } else {
                                        echo "The email message was not sent due to some error";
                                    }
                             }      */
                        }
        
            else {  
                $showError = "Something went Wrong";  
                } 
              }
?>

<!DOCTYPE html>
<html lang="en"> 

<head>
  <title>Ask for Help</title>
  <link rel="stylesheet" type="text/css" href="askforhelp.css">
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php 
    
    if($showAlert) { 
    
        echo '<div class="success"> 
                    Your Request has been submitted!!!.  
               </div>';  
    }; 
    
    
    if($showError) { 
    
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert">  
        <strong>Error!</strong> '. $showError.'
     </div> ';  
   }  
?>

   <div class="topnav">
      <a href="contactus.php">Contact</a>
      <a href="volsignup.php">Get Involved</a>
      <a class="active" href="Services.html">Services</a>
      <a href="aboutust.html">About</a>
      <a href="https://mytownhelp.net">Home</a>
    </div>


  <div class="header">
        <h2>Ask For Help</h2>
  </div>
   
  <form action="askforhelp.php" method="post">
        
        <div class="input-group">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="First Name" required>
        </div>
        
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="input-group">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Phone#" required>
        </div>

        <div class="input-group">
            <label>Zip Code</label>
            <input type="text" name="zip-code" placeholder="Five Digit Zip Code" required>
        </div>

        <div class="input-group2">
            <label>What Help Do You Need?</label>
            <input type="text" name="request" placeholder="e.g. Need a ride to T-Station" required>
        </div>
        
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ok, to contact me by phone or email
        </label>

        <div class="clearfix">
            <button type="submit" nameclass="signupbtn" name="signup-btn">Submit</button>
        </div>
  </form>
</body>
</html>