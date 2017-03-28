<?php
require_once('auth.php');
if(!isset($_POST['submit']))
{
session_regenerate_id();
$_SESSION['type']=$_GET['type'];
$_SESSION['hid']=$_GET['hid'];
$_SESSION['cid']=$_GET['cityid'];
session_write_close();
}
?>
<?php

if(isset($_POST['submit'])) 
{

	$con=mysqli_connect("localhost","root","");

		if (!$con)
		  {
		  die('Could not connect: ' . mysqli_error());
		  }

		mysqli_select_db($con, "ecell");
$uid=$_SESSION['ID'];

$type=$_SESSION['type'];
$cid=$_SESSION['cid'];
$hid=$_SESSION['hid'];

if($_GET['success']==1)
{

if($type=='hotel')
{

$sql="INSERT INTO travelinfo(userid,cityvisitid,hotelid,homeid) VALUES('$uid','$cid','$hid',0)";
mysqli_query($con, $sql);

}

if($type=='home')
{
$sql="INSERT INTO travelinfo(userid,cityvisitid,hotelid,homeid) VALUES('$uid','$cid',0,'$hid')";
mysqli_query($con, $sql);
			
}
header("location: booking-success.html");
			exit();
}
}
?>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="style/basestyle.css">
		<link rel="stylesheet" type="text/css" href="style/pure.css">
		<link rel="stylesheet" type="text/css" href="style/signup.css">
				<link href="style/popup.css" rel="stylesheet" type="text/css" media="all" />
				<script type="text/javascript" src="js/popup.js"> </script>
		<script type="text/javascript" src="js/script.js"></script>
		<title>Booking &raquo; Second hand products </title>
	

<script language="javascript" type="text/javascript" src="js/datetimepicker.js">

</script>

</head>
<body>
<div class='container-fluid'><div class="content nohead grid">
<a href="" title="AdroKart Home"><div id="brandlarge">
<h1>AdroKart</h1><p></p></div></a><!-- Modal Container --><div class="modalcontainer thinbase login"><div class="modalcontainer-header">
<h3><CENTER>Check out the description</CENTER></h3></div><div class="modalcontainer-body">
<div id = "info">
    <div class="portlet-body">
     <?php
     include('temp.php');
     ?>
     </div>
 </div>
<form action="<?php echo $_SERVER['PHP_SELF'].'?success=1'	; ?>" method='post'>
<div style='display:none'>

<input type='hidden' name='csrfmiddlewaretoken' value='6b336f6784444d49630b348f761d7ca6' /></div><fieldset><!-- Field --><div class="clearfix ">
<br>
	  		</div><!-- /row --><!-- Field -->
<div class="clearfix " style="margin-bottom:0">
<br>
	  		</div><!-- /row --><!-- Field -->
<div class="clearfix " style="margin-bottom:0">
<br>
<input type="submit" value="Book" name="submit">
</div><!-- /row --></fieldset><!-- /modalcontainer --><div class="center">
    </div></form></div></div>
	<?php if($_GET['success']==0)
	echo '<div id="topopup1">
        <div class="close"></div>
       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content"> <!--your content start-->
					<h1 align="center"> <a href="travel.php"></a></h1>
        </div> <!--your content end-->
    </div> <!--toPopup end-->

	<div class="loader"></div>
   	<div id="backgroundPopup"></div>';
	?>
</body>
    <script   type="text/javascript" src="js/sign.js" charset="utf-8"></script>
	  		
	  	


</body>
</html>
