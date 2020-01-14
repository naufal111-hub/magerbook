<?php
require ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lupa password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
<section class="login-content">

	<div class="container-login100" style="background-image: url('images/buku.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form action="proses_pass.php" name="forgot" method="post" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Forgot Password
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username"  required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" id="newPassword" name="password" placeholder="New Password" id="password"  required>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm Password">
					<input class="input100" type="password" id="confirmPassword" name="conpas" placeholder="Confirm Password" id="confirmpassword"  required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button  type="submit" name="ganti" class="login100-form-btn" >
						Ganti
					</button>
				</div>

				<div class="text-center  p-t-57 p-b-20">
					<a href="index.php" class="txt2 hov1">
						Kembali
					</a>
				</div>
			</form>

			
		</div>
</section>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		function validatePassword(){
			var currentPassword, newPassword, confirmPassword, output = true;
			newPassword = document.frmChange.newPassword;
			confirmPassword = document.frmChange.confirmPassword;

			if(!newPassword.value){
				newPassword.focus();
				document.getElementById("newPassword").innerHTML = "required";
				output = false;
			} else if(!confirmPassword.value){
				confirmPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "required";
				output = false;
			} if (newPassword.value != confirmPassword.value) {
				newPassword.value = "";
				confirmPassword.value = "";
				newPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "not same";
				output = false;
			}return output;
		}
	</script>
	

</body>
</html>