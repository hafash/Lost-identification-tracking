<?php
$connection=mysqli_connect('localhost','root','','policedatabase');
$id=$_GET['id'];
$sql="DELETE FROM userprofile where ID=".$id;
mysqli_query($connection, $sql);
header("Location: displayprofile.php")
?>