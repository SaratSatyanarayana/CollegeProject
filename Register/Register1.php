<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=1024">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form action="register.php" class="w3-container w3-card-4 w3-light-grey w3-text-yellow w3-margin" method="POST">
<?php include('errors.php'); ?>
<h2 class="w3-center">Register</h2>

<div class="w3-row-padding w3-section-border" style="width:150%">
<div class="w3-half">
 <select class="w3-select" name="option">
  <option value="" disabled selected>Salutation</option>
  <option value="1">Mr.</option>
  <option value="2">Mrs.</option>
  <option value="3">Miss.</option>
</select>
<div style="margin-top:2%"></div>
		<select class="w3-select" name="option">
			<option value="" disabled selected>Stream</option>
			<option value="1">B.tech</option>
			<option value="2">M.tech</option>
			<option value="3">MBA</option>
		</select>
</div>
<div class="w3-half">
  
  <div class="file-upload-content">
  <img class="file-upload-image" src="#" alt="Profile picture"/>
  </div>
  <div style="margin-top:4%"></div>
  <input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*">
  </div>
</div>




<div class="w3-row-padding w3-section">
    <div class="w3-half">
      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name" value="<?php echo $username; ?>">
    </div>
	    <div class="w3-half">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div class="w3-row-padding w3-section">
    <div class="w3-half">
      <input class="w3-input w3-border" name="Qualification" type="text" placeholder="Qualification">
    </div>
	    <div class="w3-half">
      <input class="w3-input w3-border" name="Designation" type="text" placeholder="Designation">
    </div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="<?php echo $email; ?>">
    </div>
	<div class="w3-half">
      <input class="w3-input w3-border" name="phone" type="number" placeholder="Mobile Number">
    </div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
      <input class="w3-input w3-border" name="Password_1" type="password" placeholder="Password">
    </div>
	<div class="w3-half">
      <input class="w3-input w3-border" name="Password_2" type="Password" placeholder="Confirm Password">
    </div>
</div>

<div class="w3-row-padding w3-section">
	<div class="w3-half">
      <input class="w3-input w3-border" name="Employee_Id" type="text" placeholder="Employee Id">
    </div>
	<div class="w3-half">
		<select class="w3-select" name="option">
			<option value="" disabled selected>Department</option>
			<option value="1">CSE</option>
			<option value="2">ECE</option>
			<option value="3">EEE</option>
			<option value="3">CIV</option>
			<option value="3">MECH</option>
			<option value="3">IT</option>
		</select>
    </div>

<div class="w3-row-padding w3-section-border" >
<button class="w3-button w3-block w3-section w3-yellow w3-ripple w3-padding" name="reg_user">Register</button>
</div>

<div class="w3-text-row">
<h4 class="w3-center w3-text-red">Already have an account?<a href="login.php" class="w3-text-yellow" style="text-decoration:none;">Login here!!</a></h4>
</div>
</div>
</form>

</body>
</html> 