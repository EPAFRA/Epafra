<!DOCtype html>
<html>
<head>
<meta charset="UTF-8">
<title>forms</title>
<style type="text/css">
.heading{
background-color:darkblue;
opacity:1;
}
  .heading h1
  {
  float:left;
   margin-right:615px;
 
  }
  .logo img{
  float:left;
  width:100px;
  height:100px;
 
  }
  .heading::after
  {
  content:" ";
  clear:both;
  display:table;
  }
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  position:sticky;
  top:0px;
  z-index:10;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #4CAF50;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
 .navbar a {
    float: none;
    display: block;
  }
}
.myform{
background-color:lightblue;
}
form {
  border: 2px solid black; 
  margin:0px 500px;
  background-color:lightgrey;
  background-image:
}
label{
padding:3px 6px;
display:inline-block;
text-shadow:3px 3px 5px black
h1{
padding-left:40px;
}
input{
	border:none;
	border-bottom:1px solid red;
	border-radius:5px;
   background:black;
   padding:10px;
   width:100%;
}
#fhead{
margin-left:40%;
}
.block{
	border:1px groove black;
	background-color:white;
	border-radius:5px;
	
}
</style>   
<script>
function fformvalidation()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!(email.value.match(mailformat)))
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}

		}
</script>    
</head>
<body bgcolor=""  >
<div class="heading">
<h1 style="text-align:center;color:rgba(200,255,150,0.9);float:left;">AGAPE LUTHERAN JUNIOR SEMINARY</h1>
<div class="logo">
<img alt="paris" src="agapelogo.jpeg" >
</div>
</div>
<div class="navbar">
<a  href="index.html">Home</a>
<a href="about.php">about</a>
<a href="login.php">register</a>
<a class="active" href="">alumni</a>
<a href="staff.php">staff</a>
<a href="contact.php">contacts</a>
</div>
<div  class="myform">
<h1  style="text-align:center;">REGISTRATION FORM</h1>  
<form action="myAlumni.php" name="formz" onsubmit="return fformvalidation()" method="post">
<div class="block">
<label for="aname">Alumni name</label>
<br/>
<input type="text" name="aname" id="fname" placeholder="enter last name" >
</div>
<br/>
<div class="block">
<label for="yoe">Year of enrolment</label>
<select name="yoe">
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
</select>
</div>
<br/>
<div class="block">
<label for="Gd"> Graduation year</label>
<select name="Gd">
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
</select>
</div>
<br/>
<div class="block">
<label for="ename">Headmaster's name <br> during enrolment</label>
<select name="ename">
<option value="Mamuya">Mamuya</option>
<option value="Maimu">Maimu</option>
<option value="Rwechungura">Rwechungura</option>
<option value="Kishozi">Kishozi</option>
<option value="Lyimo">Lyimo</option>
<option value="Kokubesya">Kokubesya</option>
<option value="Komba">Komba</option>
<option value="Bumbuli">Bumbuli</option>
</select>
<br/>
<label for="gname">during Graduation</label>
<select name="gname">
<option value="Mamuya">Mamuya</option>
<option value="Maimu">Maimu</option>
<option value="Rwechungura">Rwechungura</option>
<option value="Kishozi">Kishozi</option>
<option value="Lyimo">Lyimo</option>
<option value="Kokubesya">Kokubesya</option>
<option value="Komba">Komba</option>
<option value="Bumbuli">Bumbuli</option>
</select>
</div>
<br/>
<div class="block">
<label for="ftr">Famous teacher during Graduation</label>
<br/>
<input type="text" name="ftr" id="ftr" placeholder="enter last name">
</div>
<br/>
<div id="block">
Division:
<select name="div">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
<br/>
<br/>
<div class="block">
<label for="occupation">current occupation</label>
<br/>
<input type="text" name="occupation" id="occupation" placeholder="enter  current">
</div>
<br/>
<div class="block">
<label for="address"> address:</label>
<input type="text" name="address" id="address" maxlength="8 characters" placeholder="maximum 8 characters" >
</div>
<br/>
<div class="block">
<label for="email" >   E-mail</label>
<br/>
<input type="text" name="email" id="email" placeholder="example@domain.com" onload="document.formz.email.focus()">
</div>
<br/>
<div class="block">
<label for="pnum">    mobile number</label>
<br/>
<input type="text" name="pnum"padding-left id="pnum" placeholder=" enter Phone number">
</div>
<br/>
<div class="block">
<label for="age"> passsword:</label>
<br/>
<input type="password" name="password1" id="password1" maxlength="8 characters" placeholder="maximum 8 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div>
<br/>
<br/>
<input type="submit" value="Submit" onclick="ValidateEmail(document.formz.email)" onsubmit="alumniRetrive.php">
<input type="reset" value="reset">
</form>
</div>
</body>
</html>