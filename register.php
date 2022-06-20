<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname=$_POST['fname'];
$mname= $_POST['mname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$dob=$_POST['dob'];
$file=$_POST['file'];
$email=$_POST['email'];
$pnum=$_POST['pnum'];
$password1=$_POST['password1'];
$saccount=$_POST['saccount'];
$link='Alumni.php';
$sql="INSERT INTO Newregister(first_name,Middle_name,Last_name,Username,Dob,file,email,Phonenumber,Password1,saccount)
VALUES('$fname' ,'$mname', '$lname', '$uname' ,'$dob', '$file','$email', '$pnum', '$password1' ,'$saccount')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<a href='".$link."'> view more </a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>