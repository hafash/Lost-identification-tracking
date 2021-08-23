<?php
session_start();

if(isset($_POST['continue']))
{
	$us=$_POST['username'];
	
		$p=$_POST['password'];
	
		

$conn=mysqli_connect('localhost','root','','policedatabase');
}
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT* FROM admincheck WHERE username='$us' and '$p'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) 
{
while($row=mysqli_fetch_assoc($result))
{
	if($p==$row['password'])
	{
		$_SESSION['uname']=$row['username'];
		header("Location:login.html");
		exit();
	}
	else
	{
    echo 'WRONG PASSWORD!';
   exit();
	}
}
}
?>