<?php

$conn= mysqli_connect('localhost','root','','policedatabase');

if (!$conn) {
  die("Connection failed: " . mysqli_error());
}
if(isset($_POST['submit'])){
	$pl=$_POST['user_name'];
		$rcn=$_POST['user_code'];

		$date=$_POST['inst'];
	
		$pname=$_POST['lcs'];
	
		$pc=$_POST['ema'];
$sql = "INSERT INTO usercheck (username,user_code,institution,location,email) VALUES ('$pl','$rcn','$date','$pname','$pc');";
	$res=mysqli_query($conn, $sql);
}
	
if ($res==true) {
	echo "data was sent Successfully thank you";
//  echo "<a href=police.php>back on form<br/></a>"; 
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>