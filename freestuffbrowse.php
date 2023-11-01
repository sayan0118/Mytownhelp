<?php
  $showAlert = false;  
	$showError = false;  
	$exists=false; 
	
	$servername = "localhost";  
	$username = ""*******";";  
	$password = ""*******";"; 
	$database = ""*******";"; 
	

// Create a connection  
	     $conn = mysqli_connect($servername,  
         $username, $password, $database); 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $zipcode = $_POST['zip-code'];
        
        $sql = "SELECT * FROM free_stuff WHERE `fstf_zipcode` = '$zipcode'";
        $result = mysqli_query($conn, $sql); 
        $num = mysqli_num_rows($result);
        
          if($num>0)  
        { 
              $requestnum=0;
                
        
        };
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Free Stuff details </title>
  <link rel="stylesheet" type="text/css" href="freestuffbrowse1.css">
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


     <div class="topnav">
      <a href="contactus.php">Contact</a>
      <a href="volsignup.php">Get Involved</a>
      <a class="active" href="Services.html">Services</a>
      <a href="aboutust.html">About</a>
      <a href="https://mytownhelp.net">Home</a>
    </div>

    <div class="header">
        <h3>Enter Zip Code</h3>
         <hr><br>
        <form action="freestuffbrowse.php" method="post">
        <input type="text" name="zip-code" placeholder="Enter your zip Code" style="left: 38%; width:40%;">
       
        <div class="clearfix">
            <button type="submit" nameclass="signupbtn" name="signup-btn">Submit</button>
        </div>
        </form>
    </div>

  

    <table class="styled-table" width="100%"> 
	<tr> 
		<th colspan="4"><h3>Free stuff posted by members</h3></th> 
    </tr>    
		<tr> 
			  <th> Posting Date </th> 
			  <th> Posted By </th> 
			  <th> Free Stuff Details </th> 
			  <th> Contact </th> 
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		    <?php $missingto = "true"  ?>
		    <?php $freestcontact = "true"  ?>
		    
		    
    		<tr> 
        		<td><?php echo $rows['fstf_post_dt']; ?></td> 
        		<td><?php echo $rows['fstf_name']; ?></td> 
        		<td><?php echo $rows['fstf_detail']; ?></td> 
        		<td>
        				<form class ="form2" action="freestuffcontact.php" method="post"> 
        					<input type="hidden" id="postId" name="contactemail" value= <?php echo $rows['fstf_email']; ?>>
        					<input type="hidden" id="postId" name="missingto" value= <?php echo $missingto; ?>>
        					<input type="hidden" id="postId" name="freestcontact" value= <?php echo $freestcontact; ?>>
        					<button nameclass="signupbtn2" type="submit">Contact</button>  
        				</form> 
		    	</td>
    		</tr> 
	       
	       <?php 
               } 
            ?>  

</table>
</body>
</html>