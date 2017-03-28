<?php
	require_once('auth.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/basestyle.css">
		<link rel="stylesheet" type="text/css" href="style/pure.css">
		<link href="style/popup.css" rel="stylesheet" type="text/css" media="all" />
		<link href="style/signup.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/popup.js"> </script>
		<script type="text/javascript" src="js/script.js"></script>
		<title> Rent Home </title>
	</head>
	<body>
		<div class="header" align=center>
			<div class="pure-g-r homebody">
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=left><h2><a href="home.php">Home Page</a></h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h1>What do you want to sell?</h1></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2>Welcome <?php echo $_SESSION['NAME']; ?></h2></div></div>

				<div class="pure-u-1-3"></div>			
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=center><h2>Choose your type</h2></div></div>
				<div class="pure-u-1-3"><div class="pure-u-1-1" align=right><h2><a href="logout2.php">Logout</a></h2></div></div>			
			</div>
		</div>

		<div class='pure-g-r citybody'>
		<?php
		$con= mysqli_connect("localhost","root","");
		if (!$con)
		  die('Could not connect: ' . mysqli_error());
		mysqli_select_db($con, "ecell");
		$query="SELECT * FROM city";
		$result=mysqli_query($con, $query) or die(mysqli_error());
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='pure-u-1-3'>
				<div class='pure-u-1-1 cityname white' align=center>".$row['cityname']."</div>
				<div class='pure-u-1-1'><a href='".$row['cityid']."' data-variable='".$row['cityname']."' class='topopup'><img class='cityimg' src='images/city/".strtolower($row['cityname']).".jpg'/></a></div>
			</div>";
		} 			
		?>
		</div>


    <div id="toPopup">

        <div class="close"></div>
       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content"> <!--your content start-->
			<div class="modalcontainer-body">

<div class='row'>
<form class='span7 regform' method='post' action="addhome.php" enctype='multipart/form-data'><div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='6b336f6784444d49630b348f761d7ca6' />
</div><fieldset>
<div class='row clearfix '><label class='span3'>Type</label><div class='span4'><div id="cityout"></div></div></div>
<div class='row clearfix '><label class='span3' for='price'>
                      Price
                    </label>
                    
<div class='span4'><input name="price" maxlength="30" autocapitalize="on" autocorrect="off" type="text" class="required" id="price" /></div></div>
<div class='row clearfix '><label class='span3'>Products</label>
<div class='span4'><input name="rooms" maxlength="30" autocapitalize="on" autocorrect="off" type="text" class="required" id="rooms" /></div></div>

<div class='row clearfix '><label class='span3'>Description</label>
<div class='span4'><input name="desc" maxlength="50" autocapitalize="on" autocorrect="off" type="text" class="required" id="secs" /></div></div>

<div class='row clearfix '><label class='span3'>Detailed Description</label>
<div class='span4'><input name="ldesc" maxlength="1000" autocapitalize="on" autocorrect="off" type="text" class="required" id="secs" /></div></div>

<label>Image 1<input name="homepic" type="file" id="homepic" /></label>
<input type="hidden" id="cityid1" name="cityid" value='' />

<label>Image 2<input name="homepics" type="file" id="homepics" /></label>

<label>Image 3<input name="homepicss" type="file" id="homepicss" /></label>


<div class='pull-right'><input type='submit' class='btn primary wide' value='Upload &raquo;' /></div>
</fieldset>
</form></div></div>
        </div> <!--your content end-->

    </div> <!--toPopup end-->

	<div class="loader"></div>
   	<div id="backgroundPopup"></div>
</body>
</html>