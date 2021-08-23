you can modifying your input right now.
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

<table style="width:100%; border=2" bgcolor="lightblue">
<th bgcolor="#DAF7A6">ID</th>
<th bgcolor="#DAF7A6">DATE</th>
	<br/><br/>
<th bgcolor="#DAF7A6">FROM</th>
<th bgcolor="#DAF7A6">owner ID</th>
<th bgcolor="#DAF7A6">LOCATION</th>
<th bgcolor="#DAF7A6">LOST ID NAME</th>
	<th bgcolor="#DAF7A6">LOST ID NO</th>
	<th bgcolor="#DAF7A6"> EMAIL_Address</th>
	<th bgcolor="#DAF7A6">PHONE NO</th>
	<th colspan="3" bgcolor="#DAF7A6"> action </th>

</tr>
<?php
$conn=mysqli_connect("localhost","root","","policedatabase");
include('umuhuza.php');

$sql = "SELECT * FROM pofficer";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["ID"]. "</td><td>" . $row["date"]. "</td><td>" . $row["pname"] . "</td><td>" 
. $row["pcode"]. "</td><td>" . $row["location"]. "</td><td>" . $row["idname"]. "</td><td>" . $row["idno"]. "</td><td>" . $row["email"]. "</td><td>" . $row["pno"]. "</td>"  
	?>
		
		
		<td bgcolor="#FFC300"><a href="userdashboarddelete.php?ID=<?php echo $row['ID'];?>"> delete </a></td>

		
			
			
	<?php
		"<br/></tr>";
}
} 
		 else
		 { 
			 echo "0 results";
		 }
$conn->close();
?>
</table>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
	<center>		
			<button type="submit" bgcolor="green" name="continue"><a href="user1panel.html"><b>BACK</b></a></button>
			</center></a>