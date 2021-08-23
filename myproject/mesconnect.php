<?php

if(isset($_POST['send']))
{
$dat=$_POST['d'];
$namr=$_POST['nam'];
$nmer=$_POST['no'];
$em=$_POST['email'];
$mes=$_POST['mesg'];
$s1=$_POST['slct1'];
$s2=$_POST['slct2'];
$s3=$_POST['slct3'];
$s4=$_POST['slct4'];
$s5=$_POST['slct5'];
	
	
$conn= new MySQLi('localhost','root','','policedatabase');

if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO message (date,names,phone_no,email,message,provence,district,sector,cell,village)
VALUES ('$dat','$namr','$nmer','$em','$mes','$s1','$s2','$s3','$s4','$s5')";

if (mysqli_query($conn, $sql)) {
	echo "data was sent Successfully thank you";
  echo "<a href=messages.php>back<br/></a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>