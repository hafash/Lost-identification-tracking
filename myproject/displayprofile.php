
  <script>
	  
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<table style="width:100%; border=1" bgcolor="#DAF7A6 " >
<tr>
   <th>No</th>
    <th>Fname</th>
    <th>Lname</th> 
    <th>Date of Birth</th>
    <th>User id number</th>
    <th>Lost id name</th>
    <th>Lost id number</th>
    <th>Gender</th> 
    <th>Provence</th>
    <th>District</th>
    <th>Sector</th>
    <th>Cell</th>
    <th>Village</th>
    <th>Email</th>
    <th>Phone_no</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","policedatabase");
include('profile.php');

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["F_NAME"] . "</td><td>" . $row["L_NAME"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["ID_NO"]. "</td><td>" . $row["ID_NAME"]. "</td><td>" . $row["LOST_ID"]. 
	"</td><td>" . $row["GENDER"]."</td><td>" . $row["PROVENCE"]."</td><td>" . $row["DISTRICT"]."</td><td>" . $row["SECTOR"]."</td><td>" . $row["CELL"]."</td><td>" . $row["VILLAGE"]."</td><td>" . $row["E_MAIL"]."</td><td>" . $row["PHONE_NO"]."</td><td>" . $row["OTHER_NO"]."</td>"  
	?>
		
		<td><a href="admindeleteclient.php?ID=<?php echo $row['ID'];?>"> delete </a></td>

	<?php
		"<br/></tr>";
}
} 
		 else
		 { 
			 echo "";
		 }
$conn->close();
?>
</table>
			<button type="submit" bgcolor="green" name="continue"><a href="login.html"><b>BACK</b></a></button>
			</center></a>