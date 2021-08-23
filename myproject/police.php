<!doctype html>
<html>
<head>

<title>filling the form</title>
	<style>
	body
	{
width:10;
height:5%;
front-size:22%
padding:0px;	
	}
	</style>
</head>

<body>
	<html>
<body bgcolor="#ABEBC6">
	<center>

<h2>Fill the FORM bellow  according to its requirements:</h2>

<form action="umuhuza.php" method="POST">
	<label for="name">Date:</label><br>
	<input type="date" name="date" value=""required>
	<br/>
	<br>
<label for="name">place_name/Department:</label><br>
<select name="place" id="address">
	<option>select your work here:</option>
    <option value="POLICE STATION OFFICER">POLICE STATION</option>
    <option value="BUS STATION">BUS STATION</option>
    <option value="MARKET REPRESENTER">MARKET REPRESENTERs</option>
  </select><br><br>
  <label for="name">Names of owner IDs:</label><br>
  <input type="text" id="text" name="pcode" value="" placeholder="write the names of  owner ID" required><br>
	<br/>

  <label for="name">Location/Where:</label><br/>
  <input type="text" id="address" name="address" placeholder="ENTER district-sector" value="" required><br><br/>
	
	<label for="name">lost ID name:</label><br>
	 <select name="idname" id="IDs">
    <option value="ID card">ID card</option>
    <option value="Driving permit">Driving permit</option>
    <option value="Land Certificate">Land Certificate</option>
    <option value="Passport">Passport</option>
		 <option value="Diploma Certificate">Diploma Certificate</option>
  </select>
	<br/><br/>
	<label for="name">lost ID id no:</label><br>
	
	<input type="text" id="fname" name="idno" value="" required>
	<br/><br/>
	<label for="name"> email address:</label><br/>
  <input type="email" id="email" name="email" value="" required><br><br/>
	<label for="lname">phone no:</label><br/>
  <input type="number" id="number" name="pno" value="" required>
	<br><br/>

  <input type="submit" value="Submit" name="submit">
</form> 
</center>
</body>
		
</html>
</body>
	<button type="submit" bgcolor="green" name="continue"><a href="user1panel.html"><b>BACK</b></a></button>
</html>
