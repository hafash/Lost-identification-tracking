
<html>
<head>
<style>
body{
background-color:#aaa;
}
.container{
background-color:whitesmoke;
box-shadow:1px 1px 2px 1px gray;
padding:80px 8px 20px 38px;
width:50%;
margin:auto;
	
}
.txt{
width:30%;
height:7%;
border-radius:05px;
padding:20px 15px 20px 15px;
margin:5px 5px 5px 5px;
}
select{
width:30%;
border:2px solid black;
border-radius:0px;
box-shadow:0px 0px 0px 0px gray;
padding:0px px 0px px;
}
label
{
text-align:left;
padding:20px;
margin-top:10px;
margin-bottom:10px;
text-transform:uppercase;
}
footer{
background-color:#green;
padding:20px;
color:white;
}
	table
	{
		position: fixed;
		margin-top:  -12px;

	}
</style>
<link rel="stylesheet"type="text/css"href="profile form.css">
</head>
<body>
<form action="profile.php"method="POST">
<table border="0"width="100%"height="10%"bgcolor="white" cellspacing="1px">
<tr>
<th width="200"><a href="home.html">BACK</a></th>
<th width="200"><a href="SERVICES.html">SERVICES</a></th>
<th width="200"><a href="about us.html">ABOUT US</a></th>
<th width="200"><a href="help.html">HELP</a></th>
<th width="200"><a href="language.html">LANGUAGE</a><th> 
<th width="200"><a href="admin.html">ADMIN LOGIN</a></th>
</a>
</p>
</table>


<div class="fm">

<div class="container">
	  <center><h1><u><b> Declaration Form<br></u></b>:
		  Affter filled this form you will be able <br/>
		  to search your ID if it is in our system.</h1></center>
<lable for="fname"><a>First name</a></lable>
 <br\>
 <br/>
 <input type="text"id="fname"name="fname" maxlength="14" required>
 <br/>
 <br/>
  <lable for="lname"> <a>Last name</a></lable>
  <br/>
   <input type="text"id="lname"name="lname" maxlength="16" required>
   <br>
   <br>
   <lable for="dob">date of birth:</labl>
   <br>
   <input type="date" id="date of birth" name="dob">
   <br/>
   <br/>
  
   <label style="idno" for="id">YOUR IDnº:</label><br\>
   <br/>
   <input type="text" id="number" name="idno" required><br>
   <br>
   <br/>
  <label for="cars">Choose LOST IDENTIFICATION:</label>
	<br/>
  <select name="ids" id="IDs">
    <option value="ID card">ID card</option>
    <option value="Driving permit">Driving permit</option>
    <option value="Land Certificate">Land Certificate</option>
    <option value="Passport">Passport</option>
	  <option value="Diploma Certificate">Diploma Certificate</option>
  </select>
   <br/>
   <br/>
   <lable for="ldno"><a> Lost Identification nº</a></lable><br\>
   <br/>
   <input type="text;number"value=""name="ldno" maxlength="22"required><br/>
   <br>
    <p><U>SELECT YOU GENDER:</U></p>
<input type="radio"name="sex" value="MALE"><BR\>
<label for="sex">Male</label><br>
<input type="radio" name="sex" value="FEMALE">
<label for="sex">Female</label>
<br><br/>

</select><br><br>
<div class ="form-control">
 <label>Nationality:</label><br>
            <select name=dropbox>
                <option value="rwanda" selected>Rwanda</option>
            </select>
			<br/>
			<br/>
            <label>Provence:</label><br>
            <select name="slct1" id="slct1" onchange="populate('slct1','slct2')">
                <option value=""></option>
                <option value="western">Western</option>
                <option value="eastern">Eastern</option>
                <option value="southern">Southern</option>
                <option value="northern">Northern</option>
				<option value="kigali city">Kigali city</option>
            </select>
			<br/>
<br/>
            <label>District:</label>
			<br/>
            <select name="slct2" id="slct2" onchange="populate1(this.id,'slct3')"></select>
			<br/>
							<br/
			<label>Sectors:</label><br>
            <select name="slct3" id="slct3" onchange="populate2(this.id,'slct4')" ></select>
			<br/>
							<br/
	       <label>cells:</label><br>
			<select name="slct4" id="slct4" onchange="populate3(this.id,'slct5')"></select>
			<br/>
							<br/
			<label>villages:</label><br>
			<select name="slct5" id="slct5"></select>
               <script >
                   function populate(s1,s2){
          var s1= document.getElementById(s1);
          var s2=document.getElementById(s2);
          s2.innerHTML="";
          
          if(s1.value=="western")
		  
		          {
              var optionArray = ["|","karongi|Karongi","ngororero|Ngororero","nyabihu|Nyabihu","nyamasheke|Nyamasheke","rubavu|Rubavu","rusizi|Rusizi","rutsiro|Rutsiro"];
                 }
					   
          else if(s1.value=="eastern")
		            {
              var optionArray = ["|","nyagatare|Nyagatare","gatsibo|Gatsibo","kayonza|Kayonza","rwamagana|Rwamagana","kirehe|Kirehe","ngoma|Ngoma","bugesera|Bugesera"];
                     }
          else if(s1.value=="southern")
		              {
              var optionArray = ["|","kamonyi|Kamonyi","muhanga|Muhanga","ruhango|Ruhango","nyanza|Nyanza","gisagara|Gisagara","nyamagabe|Nyamagabe","nyaruguru|Nyaruguru"];
                    }
          else if(s1.value=="northern")
		           {
              var optionArray = ["|","musanze|Musanze","burera|Burera","gakenke|Gakenke","rurindo|Rurindo","gicumbi|Gicumbi"];
                 }
		  else if(s1.value=="kigali city")
		              {
              var optionArray = ["|","nyarugenge|Nyarugenge","gasabo|Gasabo","kicukiro|Kicukiro"];
                    }
          for(var option in optionArray)
		           {
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s2.options.add( newOption);
                              }
                            }
		        function populate1(s3,s4){
          var s3= document.getElementById(s3);
          var s4=document.getElementById(s4);
          s4.innerHTML="";
          
          if(s3.value=="karongi")
		           {
              var optionArray = ["|","gishyita|Gishyita", "bwishyura|Bwishyura", "gishari|Gishari", "gitesi|Gitesi","mubuga|Mubuga", "murambi|Murambi", "murundi|Murundi", "mutuntu|Mutuntu", "rubengera|Rubengera","rugabano|Rugabano", "ruganda|Ruganda", "rwankuba|Rwankuba", "twumba|Twumba"];
          }
          else if(s3.value=="ngororero")
		                {
              var optionArray = ["|","kabaya|Kabaya", "bwira|Bwira", "gatumba|Gatumba", "hindiro|Hindiro", "kageyo|kageyo","kavumu|kavumu", "matyazo|Matyazo", "muhanda|Muhanda", "muhororo|Muhororo","ndaro|Ndaro", "ngororero|Ngororero", "nyange|Nyange", "sovu|Sovu"];
          }
          else if(s3.value=="nyabihu")
		             {
           var optionArray = ["|","bigogwe|Bigogwe", "kabatwa|Kabatwa", "jenda|Jenda", "jomba|Jomba","mukamira|Mukamira","muringa|Muringa","rambura|Rambura","kintobo|Kintobo","karago|Karago","shyira|Shyira","rugera|Rugera","rurembo|Rurembo"];
         }
          else if(s3.value=="nyamasheke")
		                   {
            var optionArray = ["|","kanjongo|Kanjongo", "bushekeri|Bushekeri", "cyato|Cyato", "kagano|Kagano","karambi|Karambi", "karengera|Karengera", "kilimbi|Kilimbi", "macuba|Macuba","mahembe|Mahembe", "rangiro|Rangiro", "ruharambuge|Ruharambuge", "shangi|shangi"];
         }
		 else if(s3.value=="rubavu")
		                 {
            var optionArray = ["|","gisenyi|Gisenyi", "rubavu|Rubavu", "busasamana|Busasamana", "rugerero|Rugerero","bugeshyi|Bugeshyi","mudende|Mudende","kanzenze|Kanzenze","nyakiliba|Nyakiliba","cyanzarwe|Cyanzarwe","nyamyumba|Nyamyumba","kanama|Kanama","nyundo|Nyundo"];
          }
		  else if(s3.value=="rusizi")
		                {
            var optionArray = ["|","nkombo|Nkombo", "bugarama|Bugarama", "butare|Butare", "bweyeye|Bweyeye","gikundamvura|Gikundamvura", "gashonga|Gashonga", "giheke|Giheke", "gihundwe|Gihundwe","gitambi|Gitambi", "kamembe|Kamembe", "muganza|Muganza", "mururu|Mururu","nkanka|Nkanka", "nkungu|Nkungu", "nyakabuye|Nyakabuye", "nyakarenzo|Nyakarenzo", "nzahaha|Nzahaha", "rwimbogo|Rwimbogo"];
          }
		  else if(s3.value=="rutsiro")
		                   {
            var optionArray = ["|","kivumu|Kivumu", "kigeyo|Kigeyo", "nyabirasi|Nyabirasi"," boneza|Boneza", "musasa|Musasa", "mushonyi|Mushonyi", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
          }
		  else if(s3.value=="nyarugenge")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "gitega|Gitega", "mageragere|Mageragere", "nyakabanda|Nyakabanda", "rwezamenyo|Rwezamenyo"];
                    }
		  else if(s3.value=="gasabo")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "gitega|Gitega", "mageragere|Mageragere", "nyakabanda|Nyakabanda", "rwezamenyo|Rwezamenyo"];
                    }
		  else if(s3.value=="kicukiro")
		                       {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                   }
		  else if(s3.value=="musanze")
		                       {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                         }
		  else if(s3.value=="burera")
		                    {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                      }
		  else if(s3.value=="gakenke")
		                     {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }
		  else if(s3.value=="rurindo")
		                  {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                      }
		  else if(s3.value=="gicumbi")
		                  {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                      }
		  else if(s3.value=="nyagatare")
		                      {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                     }
		  else if(s3.value=="gatsibo")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                    }
		  else if(s3.value=="kayonza")
		               {
            var optionArray = ["|","Mukarange|Mukarange", "Kabarondo|Kabarondo", "Nyamirama|Nyamirama"," kabare|kabare", "murundi|murundi", "kageyo|kageyo", "ndego|ndego", "Rwinkwavu|Rwinkwavu", "Ruramira|Ruramira", "Gahini|Gahini", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                         }
		  else if(s3.value=="rwamagana") 
                   		  {           
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                          }
		  else if(s3.value=="kirehe")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                        }
		  else if(s3.value=="ngoma")
		                {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                         }
		  else if(s3.value=="bugesera")
		                      {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                           }
		  else if(s3.value=="kamonyi")
		                {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                      }
		  else if(s3.value=="muhanga")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                             }
		  else if(s3.value=="ruhango")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                      }
		  else if(s3.value=="nyanza")
		                 {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                         }
		  else if(s3.value=="huye")
		                   {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                              }
		  else if(s3.value=="gisagara")
		                     {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                         }
		  else if(s3.value=="nyamagabe")
		                   {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                        }
		  else if(s3.value=="nyaruguru")
		                   {
            var optionArray = ["|","nyarugenge|Nyarugenge", "muhima|Muhima", "nyamirambo|Nyamirambo"," kimisagara|Kimisagara", "kanyinya|Kanyinya", "kigali|Kigali", "ruhango|Ruhango", "murunda|Murunda", "gihango|Gihango", "mushubati|Mushubati", "manihira|Manihira", "mukura|Mukura", "rusebeyaRusebeya"];
                       }
          for(var option in optionArray)
		        {
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s4.options.add(newOption);
			  console.log(s3.value);
          }
          }
		        function populate2(s5,s6){
          var s5= document.getElementById(s5);
          var s6=document.getElementById(s6);
          s6.innerHTML="";
          if(s5.value=="bigogwe"){
              var optionArray = ["|","kijote|Kijote","rega|Rega","arusha|Arusha","muhe|Muhe","kora|Kora","basumba|Basumba"];
          }
					
          else if(s5.value=="kabatwa"){
            var optionArray = ["|","ngando|Ngando","gihorwe|Gihorwe","gasoro|GASORO","karambi|KARAMBI","nyabubare|NYABUBARE","nyagapfizi|NYAGAPFIZI","rugarama|RUGARAMA"];
         }
          else if(s5.value=="jenda"){
             var optionArray = ["|","gasiza|Gasiza","kareba|Kareba","kamucuzi|KAMUCUZI","nyabitare|NYABITARE","rurenda|RURENDA","rusisiro|RUSISIRO"];
          }
         else if(s5.value=="mukamira"){
            var optionArray = ["|","kanyove|Kanyove","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
        }
		else if(s5.value=="rambura"){
           var optionArray = ["|","nyundo|Nyundo","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="karago"){
           var optionArray = ["|","kadahenda|Kadahenda","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="jomba"){
           var optionArray = ["|","nyamitanzi|Nyamitanzi","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="rurembo"){
           var optionArray = ["|","murambi|Murambi","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="muringa"){
           var optionArray = ["|","rwantobo|Rwantobo","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="kintobo"){
           var optionArray = ["|","gatovu|Gatovu","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="rugera"){
           var optionArray = ["|","gakoro|Gakoro","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 else if(s5.value=="shyira"){
           var optionArray = ["|","mpinga|Mpinga","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		 
		 
		 else if(s5.value=="Mukarange")
		        {
              var optionArray = ["|","Bwiza|Bwiza","Nyagatovu|Nyagatovu","Kayonza cntre|Kayonza centre","muhe|Muhe","kora|Kora","basumba|Basumba"];
          }
		 
		 else if(s5.value=="Kabarondo")
		         {
            var optionArray = ["|","nganza|Nganza","gihorwe|Gihorwe","gasoro|GASORO","karambi|KARAMBI","nyabubare|NYABUBARE","nyagapfizi|NYAGAPFIZI","rugarama|RUGARAMA"];
				 }
					else if(s5.value=="kavumu")
						{
							var optionArray=["|","rugeshi|rugeshi","tetero|tetero","gatovu|gatovu"];
						}
		 
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s6.options.add( newOption);
          }
          }
		        function populate3(s7,s8){
          var s7= document.getElementById(s7);
          var s8=document.getElementById(s8);
          s8.innerHTML="";
          
          if(s7.value=="kijote"){
              var optionArray = ["|","busasamana|Busasamana","bikingi|Bikingi","kabaya|Kabaya","gasiza|Gasiza","gatagara|Gatagara","zihari|Zihari","bukinanyana|Bukinanyana","shaba|Shaba","kazuba|Kazuba","kijote|Kijote"];
          }
					
         else if(s7.value=="rega"){
            var optionArray = ["|","kariyeri|Kariyeri"];
         }
         else if(s7.value=="arusha"){
            var optionArray = ["|","kabaya|Kabaya","kabeza|KABEZA","kamucuzi|KAMUCUZI","nyabitare|NYABITARE","rurenda|RURENDA","rusisiro|RUSISIRO"];
          }
          else if(s7.value=="kora"){
              var optionArray = ["|","kageri|Kageri","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
         }
		  else if(s7.value=="basumba"){
             var optionArray = ["|","rukore|Rukore","ngoma ii|NGOMA II","ngoma iii|NGOMA III","ngoma iv|NGOMA IV","ngoma v|NGOMA V","ngoma vi|NGOMA VI"];
          }
					else if(s7.value=="Bwiza")
						{
			var optionArray=["|","Kinyemera|Kinyemera","Karambarara|Karambarara","Abemeramahoro|Abemeramahoro"];				
							
						}
					
					else if(s7.value=="rugeshi")
						{
		var optionArray=["|","karunda|karunda","mwiyanike|mwiyanike","gasumo|gasumo"];		
						}
					
					else if(s7.value=="tetero")
						{
							var optionArray=["|","gatsibo|gatsibo","bayi|bayi","ruheraheri|ruheraheri","mizingo|mizingo"];
						}
					
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s8.options.add( newOption);
          }
          }
              </script>
    <br/>
	<p><U>PLEASE ENTER CONTACTS DETAILS:</U></p>
 <lable style="margin-right:40px" for="Mail">E-MAIL</lable>
 <br\>
 <br/>
 <input type="text"name="Mail"maxlength="50"required>
 <br>
 <br>
  <lable for="phone">phone number</lable>
  <br/><br\>
 <input type="text"name="phone"maxlength="12"required>
 <br\><br>
 <lable for="phone">OR</lable>
 <br\> <br/>
 <input type="text"name="phone"maxlength="12"required>
 <br/><br/>
<a href="searchdata.php"><input type="submit" value="NEXT" name="NEXT"></a>
</form>
</div>
</body>
</html>
 