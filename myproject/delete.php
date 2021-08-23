<?php
$connection=mysqli_connect('localhost','root','','policedatabase');
$id=$_GET['id'];
$sql="DELETE FROM pofficer where ID=".$id;
mysqli_query($connection, $sql);
header("Location: usersearch.php")
?>