<?php

if(isset($_POST['submit']))
{
		$date=$_POST['date'];
	
		$pname=$_POST['place'];
	
		$pc=$_POST['pcode'];
	
		$pl=$_POST['address'];
	
		$rcn=$_POST['idname'];
	
		$rno=$_POST['idno'];
	
		$pe=$_POST['email'];
	
		$pno=$_POST['pno'];
		

$conn= new MySQLi('localhost','root','','policedatabase');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO pofficer(date,pname,pcode,location,idname,idno,email,pno)
VALUES ('$date','$pname','$pc','$pl','$rcn','$rno','$pe','$pno')";

if (mysqli_query($conn, $sql)) {
	echo "data was sent Successfully thank you";
  echo "<a href=police.php>back on form<br/></a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>