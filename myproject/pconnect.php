<?php
$servername="localhost";
$username="root";
$password="";
$dbname="policedatabase";
$conn=mysqli_connect('localhost','root','','policedatabase');

	if(isset($_POST['submit']))
	{
		$date=$_POST['date'];
	
		$pname=$_POST['psname'];
	
		$pc=$_POST['pcode'];
	
		$pl=$_POST['location'];
	
		$rcn=$_POST['ridname'];
	
		$rno=$_POST['ridno'];
	
		$pe=$_POST['pemail'];
	
		$pno=$_POST['phoneno'];
		
		$sql="insert into pofficer( date,,pname,pcode,location,idname,idno,email,pno) values('$date','$pname','$pc','$pl','$rcn','$rno','$pe',$pno);";		
}
echo 'ok';
?>