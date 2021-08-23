<?php
   include("pconnect.php");
   
   $r = "DELETE FROM pofficer WHERE ID =".$_GET['ID'];
   $dx = mysqli_query($conn, $r);
   if(!$dx){
    echo "<html>
    <head>
    <style type=\"text/css\">
  h1 {color: red;
  text-align:center;
  margin-left:50px;
  margin-top:200px;
  
  }
    body {background-color: white; 
  
    
    }
    @keyframes hey {
        0%   {background-color: yellow;
            animation-duration: 5s;}
        25%  {background-color: yellow;}
        50%  {background-color: blue;}
        100% {background-color: green;}
      }
      .hey{
       
        animation-name:removed;
        animation-duration: 2s;
      }
 
   </div>
  
    </body>
    </html>";
  
  
    }
  
  
  else
  {
  echo "<html>
  <head>
  <style type=\"text/css\">
  h1 {color: red;
  text-align:center;
  margin-left:50px;
  margin-top:200px;
  
  }
was removed
  </body>
  </html>";
  
  
 }
 
   
?>
