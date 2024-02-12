<!doctype html>
<html>
<head>
<title>pharmacy></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link  rel="stylesheet" href="aboutus.css">
</head>
<body>

<div class="navbar" style="height: 90px;margin-left:-5px" >
        <div class="links">
        <ul>
            <li><a href="index.php #home">Home</a></li>
         
            <li><a href="index.php #category">Categories</a></li>
            <li><a href="index.php #service">Services</a></li>
            <li><a href="index.php #aboutus.php" style="width:190px">About us</a></li>

        </ul>
        </div>

        <div class="search" style="margin-left:86px">
        <form action="">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit">Search</button>
        </form>
        </div>

        <div class="logs">
        
            <form action="login.php">
            <button class="btn">log in</button>
            </form>
                    
            <form action="signup.php">
            <button class="btn">sign up</button>
            </form>
        
        </div>
    </div>
<div style="margin-top:100px; padding : 50px">
<h1><b>ABOUT US</b></h1>
<div style="display:flex;">
  <img class="pic" src="https://us.123rf.com/450wm/wararat2599/wararat25992311/wararat2599231103676/218880985-a-pharmacy-store-pharmacist-and-medicine-concept-blurred-background.jpg?ver=6" alt="Flowers in Chania">
<pre class="txt">
 At pharmacy we are dedicated to providing
 high-quality pharmaceutical 
 services and products to our valued
 customers With years of experience in
 the industry, we have established 
 ourselves as a trusted and reliable source
 for all your medication needs.
</pre>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>