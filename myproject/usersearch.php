<!doctype html>
<html>
<head>
<title>SEARCH DATA FROM database</title>
<style type="text/css">
body
	{
background-color: lightslategray;	
		margin-top: 100PX;
		}

.container
	{
width:10;
height:5%;
front-size:22%
padding:0px;	
	}
	input[type="text"]
	{
		background-color:white;
		height: 25px;
	}
	select
	{
			height: 30px;
	}
	input[type="submit"]
	{
		height: 30px;
		width: 90px
	}
	table
	{
		border-color:white;
		
	}
	select{
		hover:blue;
	}
	button{

		background-color: yellow;
		font-size: 23px;
	}
	input[type="submit"]
	{
		background-color:#9FE2BF;
		height: 40px;
		padding: 20px;
		text-overflow: clip;
	}
	table.th
	{
		border-color:red;
		background-color: yellow;
		
	}
</style>

</head>
	<body>
		<p><b>here you are able to delete </b> </p>
<center>
<div class="container">
<form action="" method="POST">
	
<input type="text" name="id" class="btn" placeholder="Retype your lost ID no"/><br/>
<input type="submit" name="search" class="btn" value="search"/>
</form>
	<br><br>
	<br><br>

	<?php $connection=mysqli_connect('localhost','root','','policedatabase');
	if(isset($_POST['search']))
	{
	 
	  $idno=$_POST['id'];
		
	  $sql="SELECT* FROM pofficer WHERE idno='$idno'";
	  $result=mysqli_query($connection,$sql);
	  if(mysqli_num_rows($result)<1)
	  {
		  echo "<b>ID no you entered is not available in database </b>";
	  }
		else
		{
			echo"<b>pay and pick up your ID<b>";
			
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>Date</th>
	              <th>Place_name</th>	
	              <th>Location</th>
				  <th>name of Owner ID</th>
				  <th>lost ID_name</th>
	              <th>lost ID_no</th>
	              <th>Email_address</th>
	              <th>Phone_no</th>
			
			<th colspan="3" bgcolor="green"> action </th>';
			echo '</tr> ';
			
			
				
			while($row=mysqli_fetch_assoc($result))
			{?>
				
				<tr>
				<td><?php echo $row['date']?></td>
			<td><?php echo $row['pname']?></td>
				<td><?php echo $row['location'] ?></td>
				<td><?php echo $row['pcode'] ?></td>
				<td><?php echo $row['idname'] ?></td>
				<td><?php echo $row['idno'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['pno'] ?></td>
				<td><a href="delete.php?id=<?php echo $row['ID']?>" onclick="return confirm('Are you sure to delete this row?')">Delete</a></td>
			<?php }
		}
	}
	?>
	
 
	 
</div>
</center>
</body>
	 <button type="submit" bgcolor="green" name="continue"><a href="user1panel.html"><b>BACK</b></a></button>
</html>
 