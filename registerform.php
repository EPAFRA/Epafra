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
#fhead{
margin-left:40%;
}
@media screen and (max-width: 300px) {
  form {
     padding:0px;
	 margin:0px;
  }
  body{
     text-align:left;
  }
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
<a class="active"href="">register</a>
<a href="AlumniLogin.php">alumni</a>
<a href="staff.php">staff</a>
<a href="contact.php">contacts</a>
</div>
<div  class="myform">
<h1  style="text-align:center;">REGISTRATION FORM</h1>  
<form action="register.php" name="formz" onsubmit="return fformvalidation()" method="post">
<label for="fname">first name</label>
<br/>
<input type="text" name="fname" id="fname" placeholder="enter first name" >
<br/>
<label for="mname">middle name</label>
<br/>
<input type="text" name="mname" id="mname" placeholder="enter middle name">
<br/>
<label for="lname">last name</label>
<br/>
<input type="text" name="lname" id="lname" placeholder="enter last name">
<br/>
<label for="uname">username</label>
<br/>
<input type="text" name="uname" id="uname" placeholder="enter username" required="true">
<br/>
<label for="dob">date of birth</label>
<br/>
<input type="date" name="dob" padding-left id="dob" placeholder="enter ">
<br/>
<label for="file">upload your cv</label>
<input type="file" name="file" id="file" >
<br/>
<label for="email" >   E-mail</label>
<br/>
<input type="text" name="email" id="email" placeholder="example@domain.com" onload="document.formz.email.focus()">
<br/>
<label for="pnum">    mobile number</label>
<br/>
<input type="text" name="pnum"padding-left id="pnum" placeholder="enter age">
<br/>
<label for="age"> passsword:</label>
<br/>
<input type="password" name="password1" id="password1" maxlength="8 characters" placeholder="maximum 8 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<br/>
<br/>
<label for="saccount"> social media account:</label>
<input type="text" name="saccount" id="saccount" maxlength="8 characters" placeholder="maximum 8 characters" >
<br/>
<br/>
<input type="submit" value="Submit" onclick="ValidateEmail(document.formz.email)">
<input type="reset" value="reset">
</form>
</div>
</body>
</html>