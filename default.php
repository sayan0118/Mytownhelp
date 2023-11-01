<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Town Help Network</title>
  <style>
    body {
     background-image: url(Kindness.jpg);
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-position: center;
     background-size: cover;
     font-family:'Trebuchet MS';
     color: rgb(34, 1, 21);
    }

 
/*Div Fonts */

    div.a {
  font-size: 15px;
  color: yellow;
}

div.b {
    font-size: 15px;
  color: aqua;
}

div.c {
  font-size: 150%;
  font-style:normal;
  font-family:'Trebuchet MS';
  text-align: center;
  color: aliceblue;
  bottom:0px;  
}
div.d {
            
            background-color:transparent;
            margin: 2px;
            font-size: 25px;
            font-family:'Trebuchet MS';
            
        }


.one,
.two
{
  font-size: 400%;
  font-style:normal;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-align: center;
  color: #0a0106;
  color: rgb(34, 1, 21);
  top:50%;
}


.join{
font-style:normal;
font-family:'Trebuchet MS';
text-align: center;
color: rgb(241, 247, 247);
top: 30px;
}


.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color:#333;
  font-family:'Trebuchet MS';
  font-size:x-large;
  color:pink        
            
} 

/* Green */
.button2 {background-color: #008CBA;} /* Blue */
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
  font-family:'Trebuchet MS';
 
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16 px;
  font-family:'Trebuchet MS';
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav img {
    float: left;
    color: #f8afaf;
    margin-top: 0%;
    top: 0%;
    height: 4rem;
    width: 20rem;
    vertical-align: top;
  }
  
   </style>
</head>

<body>
    
    <div class="topnav">
      <a href="contactus.php">Contact</a>
      <a href="volsignup.php">Get Involved</a>
      <a href="Services.html">Services</a>
      <a href="aboutust.html">About</a>
      <a class="active" href="https://mytownhelp.net">Home</a>
    </div>

    <br><br>
    
     <div class="two">Our Town, Our People, & Our Community</div>
     <br>

    <table align="center">
      <tr>
        <td>
          <div class="join">                
              <button class="button button1" onclick="window.location.href='Services.html';" >Let's help each other & spread the kindness</button>
          </div>
        </td>
      </tr>
    </table>


</body>
</html>