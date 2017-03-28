<?php
	require_once('auth.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/basestyle.css">
		<link rel="stylesheet" type="text/css" href="style/pure.css">
		<link rel="stylesheet" type="text/css" href="style/signup.css">
		<title><?php echo $_GET['name']; ?> &raquo; Products</title>
	</head>
	<body>
		<div class="header" align=center>
		<div class="pure-g-r homebody">
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=left><h2><a href="home.php">Home Page</a></h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h1>Available <!--hotels and --> second hand <?php echo $_GET['name']; ?></h1></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2>Welcome <?php echo $_SESSION['NAME']; ?></h2></div></div>
				
				<div class="pure-u-1-3"></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h2>Please choose the product you would like to buy</h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2><a href="logout2.php">Logout</a></h2></div></div>			
			</div>	
		</div>
		<!--
		<h1><div class="white">Warehouses</div></h1>
		<div class="pure-g-r hotelbody">
		-->
		<?php
		/*
		$con=new mysqli("localhost","root","");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysqli_select_db($con, "ecell");
		$cid=$_GET['id'];
		$query="SELECT * FROM hotel WHERE cityid=".$cid."";
		
		$result=mysqli_query($con, $query) or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)){			
			echo '<div class="pure-u-1-2 hotelname">
				<div class="pure-u-1-1 white"><img class="hotelimg" src="images/hotel/'.$row['hotelid'].'.jpg"/></div>
				<div class="pure-u-1-2 white"><h1><div class="white"> '.$row['hotelname'].'</div></h1></div><div class="pure-u-1-2 white"><h2><div class="white">CHAIN: '.$row['chain'].'</div></h2></div>
				<div class="pure-u-1-2 white"><div style="color:#00b0ff !important; display:inline-block !important; line-height:24px !important; font-size: 24px; font-weight: bold;">&#8377;'.$row['price'].' </div> <div style="font-size:18px;">Per Day</div></div><div class="pure-u-1-2 white"><div class="rating-star-'.$row['rating'].'"></div></div>
				<div class="pure-u-1-1 white" style="margin-left:184px !important;"><a href="book.php?type=hotel&hid='.$row['hotelid'].'&cityid='.$cid.'&success=0"><input type="button" value="Yes this is where I want to book my storage" /></a></div>		
			</div>'; 
			
		}
		*/
		?>
		<!--
		</div>	
		
			<br>
			<hr>
		--><h1><div class="white">Products for you</div></h1>
		<div class="pure-g-r homebody">
			<?php
		
		$con=new mysqli("localhost","root","");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysqli_select_db($con, "ecell");
		$cid=$_GET['id'];
		$query="SELECT * FROM home WHERE cityid=".$cid."";
		$result=mysqli_query($con, $query) or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result))
		{
			echo '<div class="pure-u-1-2 homename">
				<div class="pure-u-1-1 white"><img class="homeimg" src="images/home/'.$row['homeid'].'.jpg"/></div>
				<div class="pure-u-1-1 white"><h2><div class="white">Brief Description:     	 '.$row['description'].'</div><h2></div>
				<div class="pure-u-1-2 white"><div style="color:#00b0ff !important; display:inline-block !important; line-height:24px !important; font-size: 24px; font-weight: bold;">&#8377;'.$row['price'].' </div><div style="font-size:18px;"></div> </div>
				<div class="pure-u-1-1" style="margin-left:184px;"><a href="book.php?type=home&hid='.$row['homeid'].'&cityid='.$cid.'&success=0"><input type="button" value="View Product details" /></a></div>				
				<br/>
			</div>';
		}
		?>	
		</div>
	</body>
</html>