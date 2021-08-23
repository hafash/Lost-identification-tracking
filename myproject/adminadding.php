 
<html>
	<head>
	<title>
		add user on our web site
		</title>
	
	</head>
	
<body bgcolor="9EAB99">
 <p>
	   <label>add user here</label>
 <img src="user1.jpg" alt="no pic" style="margin-left:46%">
 <form action="adminaddingconnect.php" method="POST" align="center">
	  <label>institution</label><br/>
   <input type="text" name="inst"  maxlength="30" required>
   <br>
	  <label>location</label><br/>
   <input type="text" name="lcs"  maxlength="30" required>
   <br>
	   <label>their email address</label><br/>
   <input type="text" name="ema"  maxlength="30" required>
   <br>
   <label>user name</label><br/>
   <input type="text" name="user_name"  maxlength="10" required>
   <br>
	 
    <label> user code:</label><br/>
	<input type="password" name="user_code"  maxlength="10" required>
	<br>
  
	 <input type="submit"  value="submit">
  </form>
   </p>
	</html>