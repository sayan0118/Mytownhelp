<?php
//require_once 'session.php';
    $showAlert = false;  
	$showError = false;  
	$exists=false; 
	
	$servername = "localhost";  
	$username = ""*******";"*******";3303_sayanp";  
	$password = ""*******";"; 
	$database = ""*******";"; 
	

// Create a connection  
	     $conn = mysqli_connect($servername,  
         $username, $password, $database); 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $zipcode = $_POST['zip-code'];
        
        $sql = "SELECT * FROM community_request WHERE Request_zipcode= '$zipcode'";
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
  <title>Help Request Details </title>
  <link rel="stylesheet" type="text/css" href="helpdetails.css">
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

    <table class="styled-table" width="100%"> 
	<tr> 
		<th colspan="5"><h3>Community Help Requests</h3></th> 
    </tr>    
		<tr> 
			  <th> Request ID </th> 
			  <th> Request Date </th>
			  <th> Requestor Name </th> 
			  <th> Request Details </th> 
			  <th> Contact </th> 
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		    <?php $fullname = $rows['Request_fname'] . ' '  . $rows['Request_lname']  ?>
		    <?php $requestnum = $requestnum + 1  ?>
		    <?php $missingto = "true"  ?>
    		<tr> 
        		<td><?php echo $requestnum; ?></td> 
        		<td><?php echo $rows['Request_dt']; ?></td> 
        		<td><?php echo $fullname; ?></td> 
        		<td><?php echo $rows['Request_detail']; ?></td> 
        		
				<td>
				<form action="testmail.php" method="post"> 
					<input type="hidden" id="postId" name="contactemail" value= <?php echo $rows['Request_email']; ?>>
					<input type="hidden" id="postId" name="missingto" value= <?php echo $missingto; ?>>
					<button type="submit">Contact</button>  
				</form> 
			</td>
    		</tr> 
	       
	       <?php 
               } 
            ?>  

</table>
</body>
</html>