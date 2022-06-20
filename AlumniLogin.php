<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
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

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
<a href="about.php">about</a>
<a href="login.php">register</a>
<a class="active" href="">alumni</a>
<a href="staff.php">staff</a>
<a href="contact.php">contacts</a>
</div>

<h2>Login Form</h2>

<form action="LoginRetrive.php" method="post">
  <div class="imgcontainer">
    <img src="agapelogo.jpeg" alt="AGAPE" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname"required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        
    <button type="submit" >Login</button>
	<a href="registerform.php"><input type= "button" value="A GUEST?" ></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 17:13:19 GMT -->
</html>