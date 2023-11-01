
<!DOCTYPE html>
<html>
<head>
  <title>How Can I Help </title>
  <link rel="stylesheet" type="text/css" href="freestuff.css">
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
        <h2>Enter your town zip Code</h2>
  </div>
   
   
  <form action="freestuffdtl.php" method="post">
        
        <div class="input-group">
            <input type="text" name="zip-code" placeholder="Five digit zip code" required>
        </div>
        
        <div class="clearfix">
            <button type="submit" nameclass="signupbtn" name="post-btn" value="post">Post</button>
            <button type="submit" nameclass="signupbtn" name="browse-btn" value="browse">Browse</button>
            
        </div>
  </form>
  
  <br> <br>
  
</body>
</html>