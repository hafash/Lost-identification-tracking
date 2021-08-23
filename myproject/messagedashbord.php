write a message here.
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

<th bgcolor="#DAF7A6">DATE</th>
	<br/><br/>
<th bgcolor="#DAF7A6">Message<br/> FROM</th>
	<th bgcolor="#DAF7A6">Message</th>
	<th colspan="3" bgcolor="#DAF7A6"> action </th>

</tr>
<?php
$conn=mysqli_connect("localhost","root","","policedatabase");
include('umuhuza.php');

$sql = "SELECT * FROM message";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["date"]. "</td><td>" . $row["names"] ."</td><td>" . $row["message"]."</td>"  
	?>

		<td bgcolor="gray"><a href="productdetails.php?id="<?php echo $row['id'];?>"> Reply </a></td><br/>
		<td bgcolor="#FFC300"><a href="deletemsg.php?id="<?php echo $row['id'];?>"> delete </a></td>

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
			<button type="submit" bgcolor="green" name="continue"><a href="login.html"><b>BACK</b></a></button>
			</center></a>