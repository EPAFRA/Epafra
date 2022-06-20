<!DOCtype html>
<html>
<head>
<meta charset="UTF-8">
<title>forms</title>
<style type="text/css">
</style>
<script src="fformvalid.js"></script>
</head>
<body bgcolor="purple" align="center">
<h1 >REGISTRATION FORM</h1>

<form action="submit.php" name="formz" onsubmit="formvalidation()" method="post">
<label for="regno">Registration number:</label>
<input type="text" name="regno" id="regno" placeholder="enter last name">
<br/>
<label for="fname">first name</label>
<input type="text" name="fname" id="fname" placeholder="enter first name">
<br/>
<label for="mname">middle name</label>
<input type="text" name="mname" id="mname" placeholder="enter last name">
<br/>
<label for="lname">last name</label>
<input type="text" name="lname" id="lname" placeholder="enter last name">
<br/>
<br/>
<label for="email">   E-mail</label>
<input type="text" name="email" id="email" placeholder="example@domain.com">
<br/>
<label for="nationality">nationality</label>
<input type="text" name="nationality" id="nationality" maxlength="8 characters" placeholder="maximum 8 characters" required="true">
<br/>
<br/>
<label for="dob">Date of birth</label>
<input type="date" name="dob" id="dob" maxlength="dob" placeholder="maximum 8 characters" required="true">
<br/>
<br/>
<br/>
<label for="password1"> passsword:</label>
<input type="password" name="password1" id="password1" maxlength="8 characters" placeholder="maximum 8 characters">
<br/>
<br/>
<label for="password2"> re-enter passsword:</label>
<input type="password" name="password2" id="password2" maxlength="8 characters" placeholder="maximum 8 characters">
<br/>
<p>
submit botton:<input type="submit" value="Submit">
<br><br>
reset button:<input type="reset" value="reset">
</p>
</form>
</body>
</html>