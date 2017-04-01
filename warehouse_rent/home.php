<?php
	require_once('auth.php');
	/*session_start();
	if(!isset($_SESSION['ID'])) {
		//echo "ok";
		header("location: signin.php");
		exit(0);
	}*/
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/basestyle.css">
		<link rel="stylesheet" type="text/css" href="style/pure.css">
		<link rel="stylesheet" type="text/css" href="style/signup.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title> AdroKart Home Page </title>
	</head>
	<body>
		<div class="header" align=center>
			<div class="pure-g-r homebody">
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=left><h2><a href="home.php">Home Page</a></h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h1>Welcome to AdroKart - Find Your Product</h1></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2>Welcome <a href="change.html"><?php echo $_SESSION['NAME']; ?></a></h2></div></div>
				
				<div class="pure-u-1-3"></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h2>So what do you want to do today?</h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2><a href="logout2.php">Logout</a></h2></div></div>			
			</div>
		</div>
		<div class="pure-g-r homebody">
			<div class="pure-u-1-2"><div class="pure-u-1-1"><a href="city.php"><img class="cityimg" src="images/homepage/plantrip.jpg"/></a></div></div>
			<div class="pure-u-1-2"><h2><div class="description">Looking for something to buy ? Well , you are at the right place then.<br> We present to you an array of items ranging from books to mobiles. You <br>just a click away from a fabulous shopping experience! </div></h2></div>
			<div class="pure-u-1-2"><h2><div class="description">Own a table fan or earphones which you dont require anymore but <br>it can be of use to someone else? You are just a click away from<br> being connected to your potential buyers ! </div></h2></div>
			<div class="pure-u-1-2"><div class="pure-u-1-1"><a href="comingsoon.html"><img class="cityimg" src="images/homepage/listhome.jpg"/></a></div></div>
			
			
			<div class="pure-u-1-2"><div class="pure-u-1-1"><a href="comingsoon.html"><img class="cityimg" src="images/homepage/viewincome.jpg"/></a></div></div>
			<div class="pure-u-1-2"><h2><div class="description"> </div></h2></div>
			<div class="pure-u-1-2"><h2><div class="description"> </div></h2></div>
			<div class="pure-u-1-2"><div class="pure-u-1-1"><a href="comingsoon.html"><img class="cityimg" src="images/homepage/viewhistory.jpg"/></a></div></div>
		</div>
		<div align=center class="footer white"><h2><div class="white"> Copyright &copy AdroKart</div></h2></div>
	</body>
</html>