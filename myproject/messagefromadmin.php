  <html>
	  <head>
	  <title>
	  messages
	  </title>
		 <style>
			  input[type="submit"]{
				 background-color: green;
				  width: 60px;
				  height: 40px;
				  font-size: 20px;
			 }
		  input[type="text2"]
		  {
		
		height: 130px;
			  width:400px;
	       }
		  input[type="text"]
		  {
		
		height: 40px;
			  width:200px;
			 }
			 body{
				 margin-right: 0%;
				 background-color:white;
			 }
		  </style>
	  </head>
	  <body>
	 <form action="reply.php"method="POST">
			  
	<lable for="dob">date:</labl>
   <br>
   <input type="date" id="date" name="date">
   <br/>
	<label for="lname">message:</label><br/>
  <input type="text2" id="text" name="mesge" value="" placeholder="write your idea/comments about this platform here" required><br><br/>

  <input type="submit" value="reply" name="reply">
</form>
	  </body>
</html>