<?php
	require_once('auth.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/basestyle.css">
		<link rel="stylesheet" type="text/css" href="style/pure.css">
		<link rel="stylesheet" type="text/css" href="style/signup.css">
		<title> Cities </title>
	</head>
	<body>
		<div class="header" align=center>
			<div class="pure-g-r homebody">
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=left><h2><a href="home.php">Home Page</a></h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h1>What do you want to buy?</h1></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2>Welcome <?php echo $_SESSION['NAME']; ?></h2></div></div>

				<div class="pure-u-1-3"></div>			
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h2>Choose your type</h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2><a href="logout2.php">Logout</a></h2></div></div>			
			</div>
		</div>
		<div class='pure-g-r citybody'>
		<?php
		$con=new mysqli("localhost","root","");
		if (!$con)
		  die('Could not connect: ' . mysqli_error());
		mysqli_select_db($con,"ecell");
		$query="SELECT * FROM city";
		$result=mysqli_query($con, $query) or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='pure-u-1-3'>
				<div class='pure-u-1-1 cityname white' align=center>".$row['cityname']."</div>
				<div class='pure-u-1-1'><a href='travel.php?id=".$row['cityid']."&name=".$row['cityname']."'><img class='cityimg' src='images/city/".strtolower($row['cityname']).".jpg'/></a></div>
			</div>";
		} 			
		?>
		</div>
	</body>
</html>