
<?php
require_once('auth.php');
$con=mysqli_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"ecell");
//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}

$price1=$_POST['price'];
$rooms=$_POST['rooms'];
$des=$_POST['desc'];
$ldes = $_POST['ldesc']
$oid=$_SESSION['ID'];
$cid=$_POST['cityid'];
$maxi=mysqli_query($con,"SELECT MAX(homeid) FROM home");
$max1=mysqli_fetch_assoc($maxi);
$fn=$max1['MAX(homeid)']+1;
$name = $_FILES["homepic"]["name"];
$arraay = explode(".", $name);
$ext = end($arraay);
 //$info = pathinfo($_FILES['homepic']['name']);
 //$ext = $info['extension']; // get the extension of the file
 //$path_parts['extension'];
 $newname = $fn.'.'.$ext; 
 echo $newname;
 $target = 'images/home/'.$newname;
 move_uploaded_file( $_FILES['homepic']['tmp_name'], $target);


$s2="INSERT INTO home(ownerid,price,description,longdescription,capacity,cityid,imgurl) VALUES('$oid','$price1','$des','$ldes','$rooms','$cid','$target')";
//FOR MEMBERS WHO ARE SIGNING UP
if(!mysqli_query($con,$s2))
{
 die('error'.mysqli_error($con));
}
	echo "DONE";
	header( 'Location: home.php?comm=added' );
  //exit();

mysql_close($con);

?>
