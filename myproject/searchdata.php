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
</style>
	Retype your lost ID details as it is.
</head>
	<body>
<center>
<div class="container">
<form action="" method="POST">
	<label for="name"> </label>
	 <select name="idname" id="IDs">
		 <option>select your lost ID</option>
    <option value="ID card"><b>ID card</b></option>
    <option value="Driving permit"><b>Driving permit</b></option>
    <option value="Land Certificate"><b>Land Certificate</b></option>
    <option value="Passport">Passport</option>
		 <option value="Diploma Certificate">Diploma Certificate</option>
  </select><br><br>
<input type="text" name="id" class="btn" placeholder="Retype your lost ID no"/>
<input type="submit" name="search" class="btn" value="search"/>
</form>
	<br><br>
	<br><br>

	<?php $connection=mysqli_connect('localhost','root','','policedatabase');
	if(isset($_POST['search']))
	{
	  $idtype=$_POST['idname'];
	  $idno=$_POST['id'];
		
	  $sql="SELECT* FROM pofficer WHERE idno='$idno'";
	  $result=mysqli_query($connection,$sql);
	  if(mysqli_num_rows($result)<1)
	  {
		  echo "<b>Sorry the lost ID you're searching,now is not available in our Database.<br/> keep in searching late as possible!! </b>";
	  }
		else
		{
			echo"<b> Bellow is the full details of your lost ID<br/> call the phone given or write for them on email address provided.<br>thank you for using our website!!!</b><br/><br/></b><br/><br/>";
			
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>Date</th>
	              <th>Place_name</th>	
	              <th>Location</th>
				  <th>lost ID_name</th>
				  <th>Owner ID name</th>
	              <th>lost ID_no</th>
	              <th>Email_address</th>
	              <th>Phone_no</th>
			';
			echo '</tr>';
			
			while($row=mysqli_fetch_assoc($result))
			{
				
				echo '<tr>';
				echo '<td>'.$row['date'].'</td>';
				echo '<td>'.$row['pname'].'</td>';
				echo '<td>'.$row['location'].'</td>';
				echo '<td>'.$row['idname'].'</td>';
				echo '<td>'.$row['pcode'].'</td>';
				echo '<td>'.$row['idno'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['pno'].'</td>';
				
			}
		}
	}
	?>
	
 
	 
</div>
</center>
</body>
	 <b><a href=profileform.php><br/>CLICK here for<br/>back:</a></b>
</html>
 <b><a href=messages.php><br/>click here to <br/>write a message or comment<br/>:</a></b>
