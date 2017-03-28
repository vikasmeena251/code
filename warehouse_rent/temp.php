<?php 
	$con= mysqli_connect("localhost","root","");
		if (!$con)
		  die('Could not connect: ' . mysqli_error());
	mysqli_select_db($con, "ecell");
	$cid=$_GET['cityid'];
	$hid = $_GET['hid'];
		$query="SELECT * FROM home WHERE cityid=".$cid." AND homeid=".$hid."";
		$result=mysqli_query($con, $query) or die(mysqli_error($con));
		while($row = mysqli_fetch_assoc($result))
		{
			echo '<div class="pure-u-1-2 homename">
				<div class="pure-u-1-1 white"><img class="homeimg" src="images/home/'.$row['homeid'].'_2.jpg"/></div>
				<div class="pure-u-1-1 white"><img class="homeimg" src="images/home/'.$row['homeid'].'_3.jpg"/></div>
				
				<div class="pure-u-1-1 white"><h2><div >Long Description:     	 '.$row['longdescription'].'</div><h2></div>
			</div>';
		}


	#echo "<p>$row1['ldes']</p>";
	//echo "<img src=\"$row1['imgurl']\">";
	#echo "<img src=\"$row1['imgurls']\">";
	#echo "<img src=\"$row1['imgurlss']\">";
	#echo "hello";
?>