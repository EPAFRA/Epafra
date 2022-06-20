 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysql($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  // output data of each row
 while($row=mysqli_fetch_assoc($result)){
		echo "Registration number:",$row['regno']."<br/>"."first name:".$row['fname']."<br/>". "middle name:".$row['mname']."<br/>". "last name:".$row['lname']. "\n\n\n" . "email:".$row['email']."<br/>"."nationality:".$row['nationality']."<br/>"."Date of birth:".$row['dob']."<br/>";
}		
} else {
  echo "0 results";
}
$conn->close();
?> 