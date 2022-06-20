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
<a  href="New home.php">Home</a>
<a href="about.php">about</a>
<a href="login.php">register</a>
<a class="active" href="">alumni</a>
<a href="staff.php">staff</a>
<a href="contact.php">contacts</a>
</div>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="alumni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Aname=$_POST['aname'];
$yoe= $_POST['yoe'];
$Gd=$_POST['Gd'];
$Ename=$_POST['ename'];
$Gname=$_POST['gname'];
$ftr=$_POST['ftr'];
$Division=$_POST['div'];
$Occupation=$_POST['occupation'];
$address=$_POST['address'];
$email=$_POST['email'];
$pnum=$_POST['pnum'];
$password=$_POST['password1'];

$sql="INSERT INTO myAlumni(Alumni_name,Year_of_Enrolment,Year_of_Graduation,HDE,HDG,Famous_Teacher,Division,Current_Occupation,Address,Email,Mobile_Number,Password)
VALUES('$Aname' ,'$yoe', '$Gd', '$Ename' ,'$Gname', '$ftr','$Division','$Occupation','$address','$email', '$pnum', '$password')";

if ($conn->query($sql) === TRUE) {
  $sql = "SELECT * FROM myAlumni";
$result = $conn->query($sql);
$link='Alumni.php';
if ($result->num_rows > 0){
	echo "<h1><center>Alumni List</center></h1>";
	echo "<table style='border:1px solid black;'><tr><th>Aname</th><th>year of enrolment</th><th>year of graduation</th><th>Division</th><th>Current occupation</th><th>address</th><th>E-mail</th><th>Mobile Number</th></tr>";
  // output data of each row

		 while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Alumni_name"]."</td><td>".$row["Year_of_Enrolment"]." </td><td>".$row["Year_of_Graduation"]."</td><td>".$row["Division"]."</td><td>".$row["Current_Occupation"]."</td><td>".$row["Address"]."</td><td>".$row["Email"]."</td><td>".$row["Mobile_Number"]."</td></tr>";
  }
  echo "</table>";
  echo "<button > <a href='".$link."'> add alumni </a></button>";
} else {
  echo "0 results";
}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>