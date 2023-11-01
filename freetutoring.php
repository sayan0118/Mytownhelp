<?php

$showAlert = false;  
$showError = false;  
$exists=false; 
$browserqst = false;

$servername = ""*******";";  
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
    $tutordetail = $_POST['tutordetail'];
    $current_date = date("Y-m-d H:i:s");
    

      $sql = "INSERT INTO Tutoring_interest(tut_name, tut_email, tut_detail, tut_post_dt, `tut_zipcode`)
              VALUES ('$fullname', '$useremail', '$tutordetail', '$current_date', '$userzip'  )";
    
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
  <title>Free Tutoring </title>
  <link rel="stylesheet" type="text/css" href="freetutoring1.css">
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
    
    if($showAlert) { 
    
        echo '<div class="success"> 
                    Your information has been accepted!!! Thank you
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


  <div class="row">
      <div class="column4" style="background-color:hsl(0, 41%, 95%);"> 
                <h2 class="">
                  Free Community Tutoring
                </h2>
                <br>
                <h3>
                  Coming Soon..
                </h3>
      </div>
      <div class="column5" style="background-color:#def7fc;">
            <p>Our Mission is to provide free tutoring to our community kids... Currently we are in process of collecting the information from our community members for further planning</p>
            <br><br>
              <p> If your kid need tutoring in any subject, kindly fill in the below information and we will stay in touch </p> <br>

      </div>
  </div>

  <div class="row">
    <div class="column3" style="background-color:hsl(26, 5%, 71%);"> </div>
  </div>
  
    <div class="row">
      <div class="column1" style="background-color:hsl(0, 41%, 95%);">
        <img class="card-img" src="shoolhouse.jpg">
      </div>
      <div class="column2" style="background-color:#def7fc;">
        <p> schoolhouse.world is another master piece from Khan Academy founders which provides free tutoring services to students of all ages</p>
        
      
        <br>
      <p>From the founder of schoolhouse <b>
          "We are a non-profit with the mission of connecting the world with free, peer-to-peer tutoring" </b></p>
          <br>
        <p> Visit <a href="https://schoolhouse.world"> schoolhouse</a>  to know more about this free tutoring service</p>
      </div>
    </div>
     
    <br>
    
    <form action="freetutoring.php" method="post">    

      <div class="input-group-label">
        <label class="label2"><u>Study Help Request Form </u></label>
      </div>

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
          <label>Provide study help need details </label>
          <input type="text" name="tutordetail" placeholder=" My 5th grader daughter needs geometry tutoring" required>
      </div>
      
      <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:5px"> Agree to receive email communication
      </label>

      <div class="clearfix">
          <button type="submit" nameclass="signupbtn" name="signup-btn">Submit</button> <br><br>
      </div>

      <label>
        PS:- We will not share your personal information with any outside organization.
      </label>
</form>

</body>
</html>