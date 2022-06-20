<!DOCTYPE html>
<html>
<head>
<style>
.heading{
background-color:darkblue;
opacity:1;
}
.heading{
background-color:darkblue;
opacity:1;
}
    .heading h1
  {
  float:left;
   margin-right:618px;
 
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
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 24%;
}

div.gallery:hover {
  border: 1px solid #777;
  box-shadow:3px 3px 5px #555;
}

div.gallery img {
  width: 100%;
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
div.teachingstaff{
 margin: 8px;
  border: 1px groove #ccc;
  width:97%;
  align:center;
  padding-right:20px;
  }
  div.teachingstaff:hover{
    border: 1px solid #777;
  box-shadow:3px 3px 5px #555;
  }
  
  div.teachingstaff img {
  width: 100%;
  height: 50%;
}
div.nonteachingstaff{
 margin: 20px;
  border: 1px solid #ccc;
  width:95%;
  align:center;
  padding-right:20px;
  }
   div.nonteachingstaff:hover{
    border: 1px solid #777;
  box-shadow:3px 3px 5px 3px #555;
  }
  
  div.nonteachingstaff img {
  width: 100%;
  height: 50%;
}
.footer{
background-color:#555;
text-align:center;
padding:5px 10px;
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
<a href="about.php">about</a>
<a href="login.php">register</a>
<a href="AlumniLogin.php">alumni</a>
<a class="active" href="">staff</a>
<a href="contact.php">contacts</a>
</div>
<h1> MEET ALJS FAMILY</h1>
<p>
A school is ultimately a reflection of its staff, both teachers and support staff. At ALJS we are blessed with an exceptionally dedicated and friendly team of people who help to make the school a home away from home, where the welfare of pupils is our first priority.<br>Dominic Bushiru, the School Principal, in particular, all our teaching staff, with one or two exceptions, has qualified teacher status gained in the Tanzania, and often with many years of teaching experience. Most teachers have been working at ALJS from the start. In selecting teachers we place emphasis on moral values as well as competence.
<br>
We are fortunate to have a dedicated team that is committed to helping students achieve their full academic potential whilst at the same time cultivating integrity and good moral character. Staff development is actively encouraged through on-going professional training and the quality of teaching is regularly monitored to ensure that high standards are maintained.
 </p>
 
<h2>ALJS teaching staff</h2>
<div class="gallery">
  <a target="_blank" href="LYMO.jpg">
    <img src="LYMO.jpg" alt="Heads of ALJS" width="600" height="600">
  </a>
  <div class="desc">Rev. Godrick Lyimo and Rev.James Domney<br> Heads of ALJS</div>
</div>

<div class="gallery">
  <a target="_blank" href="bursar.jpg">
    <img src="bursar.jpg" alt="School Principal" width="600" height="400">
  </a>
  <div class="desc">Mr Dominic Bushiru <br> School Principal</div>
</div>

<div class="gallery">
  <a target="_blank" href="hillary kombe.jpeg">
    <img src="hillary kombe.jpeg" alt="Discipline Teacher" width="600" height="40px">
  </a>
  <div class="desc">MR.HILLARY KOMBE <br> Discipline Teacher</div>
</div>

<div class="gallery">
  <a target="_blank" href="DEPARTMENT.jpg">
    <img src="DEPARTMENT.jpg" alt="Science and maths department" width="auto" height="auto">
  </a>
  <div class="desc"> Science and Mathematics department Teachers</div>
</div>
<div class="teachingstaff">
  <a target="_blank" href="NOL_5284-768x513.jpg">
    <img src="NOL_5284-768x513.jpg" alt="ALJS other Teaching staff" width="auto" height="auto">
  </a>
  <div class="desc">Egile teachers<br> ALJS other Teaching staff</div>
</div>
<h2>ALJS non teaching Staff</h2>
<div class="nonteachingstaff">
  <a target="_blank" href="non teaching.jpg">
    <img src="non teaching.jpg" alt="Mountains" width="auto" height="auto">
  </a>
  <div class="desc">Egile members<br> ALJS Non Teaching staff</div>
</div>
<div class="footer">
<a href="file:///C:/Users/UESR/Desktop/ENOCK/html/contact%20.html"><input type= "button" value="GET IN TOUCH" ></a></p>
</div>
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_image_gallery by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 17:10:17 GMT -->
</html>