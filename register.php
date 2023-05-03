<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div class="form-group">
		<label for="first_name">First Name*</label>
		<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required/>	
	</div>
	<div class="form-group">
		<label for="middle_name">Middle Name</label>
		<input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" />	
	</div>
	<div class="form-group">
		<label for="last_name">Last Name*</label>
		<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required/>	
	</div>
	<div class="form-group">
		<label for="email">Email Address*</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="email@address.com" required/>	
	</div>
	<div class="form-group">
		<label for="password">Password*</label>
		<input type="password" id="password" name="password" class="form-control" minlength="8" required/>	
	</div>
	<div class="form-group">
		<label for="confirm_password">Confirm Password*</label>
		<input type="password" id="confirm_password" name="confirm_password" class="form-control" required/>	
	</div>
	<div class="form-group">
		<label for="birthdate">Birthdate</label>
		<input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Birthdate" />	
	</div>
	<div class="form-group">
		<label for="gender">Gender</label> <br />
		<input type="radio" name="gender" id="male" value="male" /> <label for="male">Male</label><br />
		<input type="radio" name="gender" id="female" value="female" /> <label for="female">Female</label><br />
		<input type="radio" name="gender" id="other" value="other" /> <label for="other">Other</label><br />
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>	
	</div>
	<div class="form-group">
		<label for="contact_number">Contact Number</label>
		<input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact Number" />	
	</div>
	<button type="submit" class="btn btn-primary">Register User</button>
</form>

	<script>
		var password = document.getElementById("password")
  		, confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
  		if(password.value != confirm_password.value) {
    	confirm_password.setCustomValidity("Passwords Don't Match");
  		} else {
    	confirm_password.setCustomValidity('');
  		}
		}
		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
		</script>


</form>
</body>
</html>