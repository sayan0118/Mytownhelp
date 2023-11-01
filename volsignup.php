<?php

$showAlert = false;  
$showError = false;  
$exists=false; 

$servername = ""*******";";  
$username = ""*******";";  
$password = ""*******";"; 
$database = ""*******";"; 

// Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 

if($_SERVER["REQUEST_METHOD"] == "POST") { 
       
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];      
    $usrname = $_POST['email'];
    $zipcd = $_POST['zip-code'];
    $paswd = $_POST['member-pswd'];
    $rptpaswd = $_POST['psw-repeat'];
    $phone = $_POST['phone'];
    $comsvc = $_POST['phone'];
    $teaching = $_POST['teaching'];
    $charity = $_POST['charity'];
    $uxgraphic = $_POST['uxgraphic'];
    $fundraise = $_POST['fundraise'];
    $intall = $_POST['all'];
    $emailsubscrb = $_POST['subscribe'];
    $signupdate = date("Y-m-d H:i:s");

    
    $sql = "Select * from community_users where member_username='$usrname'"; 
    
    $result = mysqli_query($conn, $sql); 
    
    $num = mysqli_num_rows($result);
   
    
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 0) { 
    //  $sql = "INSERT INTO community_users (member_fname, member_lname, member_username, member_zipcode, member_contact, //member_comsvc, member_teaching, member_charity, member_uxgraphic, member_fundraise, member_intall, member_signup_date)
          //      VALUES ('$firstname', '$lastname', '$usrname', '$zipcd', '$phone', '$comsvc', '$teaching', '$charity', //'$uxgraphic', '$fundraise', '$intall', '$signupdate')";

     $sql = "INSERT INTO community_users (member_fname, member_lname, member_username, member_zipcode, member_contact, member_comsvc, member_teaching, member_charity, member_uxgraphic, member_fundraise, member_all, member_email_subscrb,member_signup_date)
            VALUES ('$firstname', '$lastname', '$usrname', '$zipcd', '$phone', '$comsvc', '$teaching', '$charity', '$uxgraphic', '$fundraise', '$intall', '$emailsubscrb', '$signupdate' )";
                  

            $result = mysqli_query($conn, $sql); 
            
            if ($result) { 
                $showAlert = true;  
                         } 
        };
    
    if($num>0)  
        { 
             $exists="E-mail address is already in our community network";  
        }
}

?> 

<!doctype html> 
    
<html lang="en"> 
  
<head>     
    <meta charset="utf-8">  
    <meta name="viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- Bootstrap CSS  
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity= "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="volsignup.css">  
    
    <title>Get Involved</title>   
</head> 
<body> 
    
<?php 
    
    if($showAlert) { 
    
        echo '<div class="success"> 
    
            <strong>Thank you for joining our community network </strong></div>';  
    }; 
    
    
    if($showError) { 
    
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert">  
        <strong>Error!</strong> '. $showError.'
     </div> ';  
   } 
        
    if($exists) { 
        echo ' <div class="error"> 
        <strong>Error!</strong> '. $exists.'
         
       </div> ';  
     } 
   
?> 

<!--  
</body>  
</html> 

<!DOCTYPE html>
<html> -->
    <html>
    <style>

    </style>
  <body>

  <div class="topnav">
      <a href="contactus.php">Contact</a>
      <a class="active" href="volsignup.php">Get Involved</a>
      <a href="Services.html">Services</a>
      <a href="aboutust.html">About</a>
      <a href="https://mytownhelp.net">Home</a>
    </div>

<div class="header0">
<h2>Please help us to help you!!</h2><br>
<h2>Provide the following information and join as a community member or a volunteer </h2>
</div>


<div class="header2">
    <h2">Sign Up Form</h2>
</div>

<form action="volsignup.php" method="post">
    
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

    <div class="selectinterest">
        <label>
            <input type="checkbox" checked="checked" name="subscribe" value = "Y" style="margin-bottom:15px"> Subscribe to E-mail notifications
        </label>
    </div>

    <div class="selectinterest">
        <label> <b>Area(s) of Volunteer Interest </b></label> <br> <br>
    </div>
        

    <div class="selectinterest">
            <input type="checkbox" name="comsvc" value="Y" style="margin-bottom:5px"> Community Service <br>
            <input type="checkbox" name="teaching" value="Y" style="margin-bottom:5px"> Teaching <br>
            <input type="checkbox" name="charity" value="Y" style="margin-bottom:5px"> Charity <br>
            <input type="checkbox" name="uxgraphic" value="Y" style="margin-bottom:5px"> UX/Graphic Designer <br>
            <input type="checkbox" name="fundraise" value="Y" style="margin-bottom:5px"> Organizing Fundraising Drives <br>
            <input type="checkbox" name="all" checked="checked" value="Y" style="margin-bottom:5px"> All of the Above <br>    
    </div>
   
    <div class="clearfix">
        <button type="submit" nameclass="signupbtn" name="signup-btn">Submit</button>
    </div>
    
</form>
</body>
</html>
