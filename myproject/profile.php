<?php
	if(isset($_POST['NEXT']))
	{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$idno=$_POST['idno'];
$ids=$_POST['ids'];
$lidno=$_POST['ldno'];
$sex=$_POST['sex'];
$s1=$_POST['slct1'];
$s2=$_POST['slct2'];
$s3=$_POST['slct3'];
$s4=$_POST['slct4'];
$s5=$_POST['slct5'];
$email=$_POST['Mail'];
$pne=$_POST['phone'];
$pe=$_POST['phone'];
		
	$conn= new MySQLi('localhost','root','','policedatabase');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}	
$sql="INSERT INTO userprofile(F_NAME,L_NAME,DOB,ID_NO,ID_NAME,LOST_ID,GENDER,PROVENCE,DISTRICT,SECTOR,CELL,VILLAGE,E_MAIL,PHONE_NO,OTHER_NO) values('$fname','$lname','$dob','$idno','$ids','$lidno','$sex','$s1','$s2','$s3','$s4','$s5','$email','$pne','$pe')";
	
if (mysqli_query($conn, $sql)) {
	echo "last step:";

	
  echo "<b style='margin-left:300px;color:green;margin-top:300px;'><a href=searchdata.php> CLICK here for continue:</a></b>";
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
  echo "<b style='margin-left:300px;'><a href=profileform.php>BACK:</a></b>";
	
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

