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
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  position:sticky;
  top:0px;
  opacity:1;
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
.container{
background-color:rgba(60,60,60,0.3);
display:flex;
text-align:center;
position:relative;
}
.column{
display:flex;
margin-top:50px;
justify-content:space-between;
width:100%;
color:black;
}
.column1{
flex:40%;
margin-top:10px;
flex-direction:column;
align-items:center;
position:relative;
font-size:30;
border-radius:100px;
background-color:#4CAF50;
margin-left:10px;
}
.content .column1::before{
content:'';
position:absolute;
width:2px;
transform: translateY(-50%);
}
.column1 .details{
margin:14px;
text-align:center;
}
form{
background:black;
padding:10px;
margin:10px;
width:95%;
}
input{
border:none;
border-bottom:1px solid white;
border-radius:5px;
background:black;
padding:10px;
width:100%;
color:white;
}

.column1.details i{
font-size:30px;
font-weight:500;
}
.column1.details.text-one,
.column1.details.text-one{
font-size:14px;
}
column1.details.topic-text{
font-size:50px;
width:100%;
margin:12px 0px;
}
column1.details.topic{
font-size:30px;
font-weight:500;
}
.column2 a:link, a:visited{
background:none;
text-decoration:underline;
text-color:blue;
}
.column2 .input-box textarea{
width:100%;
input-type:text;
height:100%;
border:none;
outline:none;
border-radius:6px;
padding:0px 15px;
text-color:black;
} 
botton{
display:inline-block;
background:rgba(0,0,255,0.7);
border:1px solid rgba(0,0,255,0.7);
width:100%;
border-radius:5px;
padding:7px;
margin:10px 5px; 
}
input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color:black;
  }
  input[type=text],fname{
  width: 100%;
  padding: 12px;
  border: none;
  border-bottom:1px solid white;
  border-radius: 4px;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color:white;
  }
  input[type=submit] {
  background-color: rgba(0,0,255,0.7);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.bg-image4 {
  /* The image used */
  background-image: url("contact.jpg");
  background-repeat:repeat-x;
   margin-top:0%;
  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);
  /* Full height */
  height:auto;
  z-index:1;

  /* Center and scale the image nicely */
  background-position: center;
}

/* Position text in the middle of the page/image */
.bg-text4 {
align:center;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.3); /* Black w/opacity/see-through */
  color:white;
  font-weight: bold;
  transform: translate(-30%, 0%);
  border:none;
  margin-left:30%;
  top:50%;
  left:50%;
  z-index: 1;
  width: 100%;
  padding: 50px ;
  text-align: center;
}

</style>

</head>
<body>
<div class="heading">
<h1 style="text-align:center;color:rgba(200,255,150,0.9);float:left;">AGAPE LUTHERAN JUNIOR SEMINARY</h1>
<marquee direction="left" speed="50" behavior="slide"><h2 style="color:rgba(200,255,200,0.9);float:left;">A Beacon of Truth</h2></marquee>
</div>
<div class="navbar">
<a  href="index.html">Home</a>
<a href="about.php">about</a>
<a href="login.php">register</a>
<a  href="AlumniLogin.php">alumni</a>
<a href="staff.php">staff</a>
<a class="active"href="">contacts</a>
</div>
</div>
<div class="bg-image4">
<div class="bg-text4">
  <h2>ALJS</h2>
  <h1 style="font-size:50px">Contacts/location</h1>
  <p></p>
</div>
</div>
<div class="container">
<div class="column column1">
 <div class="address details">
    <i class="fas fa-map-maker-alt"></i>
	<i class="fa-solid fa-location-pin-lock"></i>
	<div class="topic"> address</div>
	<div class="text one"> Marangu Mamba </div>
	<div class="text two">Kilimanjaro-Tanzania</div>
</div>
 <div class="phone">
    <i class="fas fa-phone-alt"></i>
	<div class="topic"> contact</div>
	<div class="text one"> +255 658581495</div>
	<div class="text two"> +255 693331335</div>
</div>
<div class="email">
    <i class="fas fa-envelope"></i>
	<div class="topic"> Email</div>
	<div class="text one">p.0 Box 8882<br> Moshi</div>
	<div class="text two">ELECT_ALJS@gmail.com</div>
</div>
</div>
<div class="column column2" style="margin-top:-5px">
<form method="post" action="">
<h3>Send us a massage</h3>
<h4>send us a massage concerning anything</h4>
<input type="text" name="fname" placeholder="Full name">
<br><br>
<input type="email" name="email" placeholder="Email">
<br><br>
<div class="input-box massage-box">
    <textarea id="subject" name="subject" placeholder="enter your massage" style="height:200px"></textarea>
</div>
	
<br><br>
<input type="submit" value="Submit">
</form>
</div>
</div>
<div class="map">
<img src="map.png" style="margin-top:10px; width:100%;">
</div>
</body>
</html>