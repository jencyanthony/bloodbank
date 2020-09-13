<html>
	<head>
		<title>Blood Bank Managament System</title>
		<meta charset="utf-8">
	</head>
	<body text="black" onload="window.alert('Page is sucessfully loaded');"
onunload="window.alert('page is not loaded');" bgcolor="lightblue">
		<figure>
			<img src="E:\desk wall\donate1.png" height="150" width="250">
			<figcaption>
				<B>Blood Bank India</B>
			</figcaption>
		</figure>
<script>
function myFunction() {
  var x = document.getElementById("name");
  x.value = x.value.toUpperCase();
}

function print()
{
	window.alert("Successfully registered");
}

function uppperFunction() {
  var y = document.getElementById("mail");
  y.value = y.value.toLowerCase();
}

function myblur(x) {
  x.style.background = "red";
}
</script>
		<h1><center>
			<font color="red"> Register as a Blood Donor</font>
		</center></h1>
		<!--<form action="F:\SEM_5\web\my assignment -II\homepage.html" method ="get">-->
		<form action="registered.php" method="post">
		<label>
			<fieldset><br>
				<legend><font color="red">Login Information</font></legend>
				<label>Name: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input name="name" type="text" id="name" autofocus="on" onblur="myFunction()"><br><br></label>
				<label>Password: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="password"><br><br></label>
				<label>Email: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="email" id="mail" placeholder=name@domain.com required><br><br></label>
				<label>Confirm Password: &nbsp &nbsp &nbsp &nbsp<input type="password"><br><br></label>
			</fieldset><br><br>
		</label>
		<fieldset><br>
				<legend><font color="red">Donor Information:</font></legend>
		<div>
		<label>
			<label>Gender: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="radio" name="button" value="male">Male
			<input type="radio" name="button" value="female">Female</label>
		<br><br>
			<label>Age: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="number" name="age" min="17" max="100"></label>
		<br><br>
			<label>Blood Group: &nbsp &nbsp &nbsp &nbsp &nbsp
			<select name="group" onfocus="myblur(this)">
				<option value="1">B+</option>
				<option value="2">B-</option>
				<option value="3">0+</option>
				<option value="4">0-</option>
				<option value="5">AB+</option>
				<option value="6">AB-</option>
				<option value="7">A+</option>
				<option value="8">A-</option>
			  </select></label>
		<br><br>
			<label>Date of Birth: &nbsp &nbsp &nbsp &nbsp &nbsp 
			<input type="date"></label>
		<br><br>
		</label>
		</div>
		</fieldset><br><br>
		<fieldset><br>
			<legend><font color="red">Contact Information</font></legend>
			<label>Residence No: &nbsp &nbsp &nbsp 
			<input type="tel">&nbsp &nbsp &nbsp &nbsp </label>
			<label>Mobile No:&nbsp &nbsp &nbsp &nbsp 
			<input type="tel" placeholder="##########"pattern="\d{10}"><br><br></label>
			<label>City:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<input type="text" >&nbsp &nbsp &nbsp &nbsp </label>
			<label>Address: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<input type="textarea" width="30" height="25"></label>
			</fieldset><br><br><label>
		<input type="checkbox" name="1" required>
		I have read the Eligibility Criteria and confirm that I am eligible to donate blood.<br></label>
		<label><input type="checkbox" name="2" required>
		I agree to the Terms and Conditions and consent to have my contact and donor information published to the potential blood recipients.<br><br><br>
		</label>
		<label>
		<center><input type="submit" name="Register" value="Register" onclick="window.alert('Successfully Registered');" ></center>
		</label>
		</form>
		<br>
		<a href="F:\SEM_5\web\my assignment -II\homepage.html"><h4>BACK</h4></a><br>
	</body>
</html>