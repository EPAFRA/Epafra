<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn=== false) {
  die("ERROR:Connection failed" . $conn_connect_error);
}


$sql="SELECT *FROM registration WHERE first_name ='enock'"
$result= mysqli_query($conn,$sql)
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		echo "Registration number:",$row['regno'].
        echo"first name:",$row['fname'],
        echo"middle name:",$row['mname'],
        echo"last name:",$row['lname'],
        echo "email:",$row['email'],
        echo "nationality:",$row['nationality'],
        echo "Date of birth:",$row['dob'];
	}
	mysqli_free_result($result)
} else {
echo "0 result";}
}
	mysqli_error($conn)
mysqli_close($conn);
?>