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
        $username = $_POST['uname'];  
        $password = $_POST['psw'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($conn, $username);  
            $password = mysqli_real_escape_string($conn, $password);  
          
            $sql = "SELECT * FROM Newregister WHERE Username = '$username' AND Password1 = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
			$link='alumniRetrive.php';
             $user='staff.php'; 
            if($count == 1){  
                echo "<h1><center> Login successful </center></h1>";
                    echo "<button><a href='".$link."' style='text-decoration:none;'> alumni? </a></button>";	
 echo "<button><a href='".$user."' style='text-decoration:none;'> Normal user? </a></button>";					
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  