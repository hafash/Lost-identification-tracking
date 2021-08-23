<?php

	$username=$_POST["username"];
$password=$_POST["user_code"];
		

$conn= new MySQLi('localhost','root','','policedatabase');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	
	$stmt=$conn->prepare("select * from usercheck where username=? AND user_code=? ");
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		
		
	
			header("location:../myproject/user1panel.html");
	
}
	else{
		echo "<h1>username or password you entered is not correct check well and
	<h2>";
		
		echo "<h1><a href=user.html>try again</A><h2>";
		
	}
}


?>