<!DOCTYPE.html>
<html>
<head>
<link style="stylesheet" href="css/all.css">
<style>
*{box-sizing:border-box;
padding:0px;
margin:0px;
color:white;
font-family:aerial;
}

body{

}
.heading{
background-color:darkblue;
opacity:1;
}
  .heading h1
  {
  float:left;
   margin-right:632px;
 
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
.bg-image4 {
  /* The image used */
  background-image: url("parade.jpg");
  background-repeat:repeat-x;
   margin-top:0%;
  /* Add the blur effect */
  filter: blur(0px);
  -webkit-filter: blur(0px);
  /* Full height */
  height:auto;
  

  /* Center and scale the image nicely */
  background-position: center;
}

/* Position text in the middle of the page/image */
.bg-text4 {
align:center;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0); /* Black w/opacity/see-through */
  color:white;
  font-weight: bold;
  transform: translate(-30%, 0%);
  border:none;
  margin-left:30%;
  top:50%;
  left:50%;
  z-index: 2;
  width: 100%;
  padding: 50px ;
  text-align: center;
}
.about{
color:black;
display:flex;
padding:10px;

}
.about h2{
text-align:center;
margin-bottom:10px;
border-bottom:1px groove black;
}

.left{
flex:1;
border:1px groove black;
padding:8px;
margin:10px;
text-align:justify;
}
.right{
flex:1;
border:1px groove black;
padding:8px;
margin:10px;
text-align:justify;
}

  .footer{
background-color:#555;
margin-left:0%;
text-align:center;
padding:1px 10px;
text-decoration:none;

}
input[type=button]{
 background-color: #45a049;
  color: white;
  display:inline-block;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button]:hover {
  background-color: #35424a;
  }
  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  color:#555;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  color:#555;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>

</head>
<body>


<div class="heading">
<h1 style="text-align:center;color:rgba(200,255,150,0.9);float:left;">AGAPE LUTHERAN JUNIOR SEMINARY</h1>
<div class="logo">
<img alt="paris" src="agapelogo.jpeg" >
</div>
</div>
<div class="navbar">
<a  href="index.html">Home</a>
<a class="active" href="">about</a>
<a href="login.php">register</a>
<a href="AlumniLogin.php">alumni</a>
<a href="staff.php">staff</a>
<a href="contact.php">contacts</a>
</div>

<div class="bg-image4">
<div class="bg-text4">
  <h2>ALJS</h2>
  <h1 style="font-size:50px">about us</h1>
  <p></p>
</div>
</div>
<div class="about">
<div class="left">
<h2 style="color:#555">Historical Background</h2>
<p style="color:black">
“Surely, I have a delightful inheritance.”
Agape Lutheran Junior Seminary started in year 1995. The seminary is owned by the ELCT Northern Diocese and enrolls students with Christianity backgrounds, those belonging to Christian Council of Tanzania (CCT)
Having moved from three different places, it finally settled in its “promise land” in 1998. It is Located at Mamba Mkolowony in Moshi Rural District about 40km from Moshi Town. Its about 3km from Marangu / Himo main road.
The school has a favourite weather of which pronounce helpful environment for students to study merrily. There are enough teachers and adequate reference textbooks kept in a reputable library. Moreover the school has Science laboratories for Chemistry, Physics, Biology and Computer laboratory.
</p>
<hr style="color:black;width:100%">
<h2 style="color:#555">performance review</h2>
<br>
Click to view<a href="Agape Lutheran Junior Seminary form FTNA results | matokeo ya kidato cha pili Agape Lutheran Junior Seminary" style="color:blue">Agape Lutheran Junior Seminary form FTNA results | matokeo ya kidato cha pili Agape Lutheran Junior Seminary</a>
<br>
Click to view <a href="Agape Lutheran Junior Seminary form Four results | matokeo ya kidato cha nne Agape Lutheran Junior Seminary" style="color:blue">Agape Lutheran Junior Seminary form Four results | matokeo ya kidato cha nne Agape Lutheran Junior Seminary</a>
<br>
Click to view <a href=" Agape Lutheran Junior Seminary form SIX results | matokeo ya kidato cha sita Agape Lutheran Junior Seminary" style="color:blue"> Agape Lutheran Junior Seminary form SIX results | matokeo ya kidato cha sita Agape Lutheran Junior Seminary</a>
</div>
<div class="right">
<h2 style="color:#555"> vision and ethos</h2> 
<p style="color:black">The intake of the school is intradenominational (christian seminary) and multi-cultural in character. The school is committed to the Tanzanian National Curriculum as provided by the Ministry of Education, culture and Vocational Education, and has two terms (semesters) January to June and July to December.

ALJS vision is to educate a woman who can work independently in society. Additional subjects and programs are therefore incorporated so as to attain excellence, and empowerment of women to ensure that they find active career paths, and aspire to be more than just housewives.

The subjects prescribed in the O level National Curriculum, that forms the foundation of teaching at ALJS, are Physics; Maths; Chemistry; Biology; English; Kiswahili; Geography; History and Civics.

The subjects are seen to be of immense practical value to students, and incorporated in the school curriculum as compulsory subjects are: Bible knowledge and Information and Communication Technology (ICT).

</p>
</div>
</div>
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Deviator?</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="agapelogo.jpeg" alt="AGAPE" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
	  <a href="file:///C:/Users/UESR/Desktop/ENOCK/html/register.html"><input type= "button" value="A GUEST?" ></a>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="footer">
<a href="registerform.php"><input type= "button" value="A GUEST?" ></a>

<a href="Login.php"><input type= "button" value="DEVIETOR?" ></a>
</div>
</body>
</html>