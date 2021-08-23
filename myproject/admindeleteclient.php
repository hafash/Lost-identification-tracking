<?php
   include("profile.php");

   
	$conn= new MySQLi('localhost','root','','policedatabase');
   $id= "DELETE FROM userprofile WHERE ID=".$_GET['ID'];
   $dx = mysqli_query($conn, $id);

   if(!$dx){
    echo "Client not deleted";
   }

  else
  {
  echo "Client  deleted";
  

 } 
?>
