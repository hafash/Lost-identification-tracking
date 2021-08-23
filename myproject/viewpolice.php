<?php



$conn= new MySQLi('localhost','root','','policedatabase');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
$sql = "SELECT * FROM pofficer";
$result = mysqli_query($conn, $sql);
}
echo"date"."pname"."pcode"."location"."idname"."idno"."email"."pno";


// echo "<table border=1 ><tr><td width=2% > " . "<b>Leader id</B>". " </td><td width=4% > " . "<b>Names</B>". " </td><td width=4% >" . "<b>College</B>". "</td><td width=3%> "."<b>Designation</b>"."</td><td width=2%> "."<b>Faculity</b>"."</td><td width=3%> "."<b>Telephone</b>"."</td><td width=3%> "."<b>email</b>"."</td></tr></table>";
	  

//if (mysqli_num_rows($result) > 0) {
  // output data of each row
 // while($row = mysqli_fetch_assoc($result)) {
	  
	  
  //  echo "<table border=1 ><tr><td width=2% > " . $row["l_id"]. " </td><td width=4%> " . $row["Names"]. " </td><td width=4%>" . $row["College"]. "</td><td width=3%> " . $row["Designation"]. "</td><td width=2%> " . $row["Faculity"]. "</td><td width=3%>" . $row["Telephone"]. "</td><td width=3%>" . $row["email"]. "</td></tr></table>";
	  
	 
 // }
//}// else {
//  echo "0 results";
//}

mysqli_close($conn);
 echo "<a href=home.html>Log out</a>";
?>