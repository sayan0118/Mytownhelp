<?php

$showAlert = false;  
$showError = false;  
$exists=false; 
$browserqst = false;

$servername = "localhost";  
$username = ""*******";";  
$password = ""*******";"; 
$database = ""*******";"; 
// Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 
         
if ($_SERVER["REQUEST_METHOD"] == "POST")  { 
     
    $postrqst = true;
    $fullname = $_POST['fname'];
    $useremail = $_POST['email'];
    $userzip = $_POST['zip-code'];
    $freestuffd = $_POST['freestuffd'];
    $current_date = date("Y-m-d H:i:s");
    

      $sql = "INSERT INTO free_stuff (fstf_name, fstf_email, fstf_detail, fstf_post_dt, `fstf_zipcode`)
              VALUES ('$fullname', '$useremail', '$freestuffd', '$current_date', '$userzip'  )";
    
            $result = mysqli_query($conn, $sql); 
    
            if ($result) { 
                $showAlert = true;  
                         } 
            else {  
                $showError = "Something went Wrong";  
                } 
              }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Free Stuff Posting Page </title>
        <link rel="stylesheet" type="text/css" href="freestuffpost.css">
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>

</style>
</head>
<body>

    <?php 
    
    if($showAlert) { 
    
        echo '<div class="success"> 
                    Your Message has been posted!!! Thank you
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

    
        <label class="label2">Post Your Free Stuff!!!</label> 
    
        <br> <br>

        <form action="freestuffpost.php" method="post">    

            <div class="input-group">
              <label>Name</label>
              <input type="text" name="fname" placeholder="John Doe" required>
            </div>

        
        <div class="input-group">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-group">
            <label>Zip Code</label>
            <input type="text" name="zip-code" placeholder="Five digit zipcode" required>
        </div>

        <div class="input-group2">
            <label>Provide free item details </label>
            <input type="text" name="freestuffd" placeholder=" Grade 4 Math workbooks, 4 packs of Crayon, Flowe Vase" required>
        </div>
        
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:5px"> It's Okay to contact me by phone or email
        </label>
        <div class="clearfix">
            <button type="submit" nameclass="signupbtn" name="signup-btn">Submit</button> <br><br>
        </div>
  </form>

</body>
</html>