<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login MaBook</title>
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
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form action="proses_daftar.php" method="post" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Daftar
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Nama">
					<input class="input100" type="text" name="nama_user" placeholder="Nama">
					<span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan username">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate="Masukkan password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-25"> 
                    <select class="custom-select wrap-input100 border-0 input200" name="id_akses">
                        <option value="">Pilih Id Akses</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        
                    </select>
					<span class="focus-input100 "></span>
				</div>
                <br>
                <br>
				<div class="container-login100-form-btn">
					<input type="submit" name="submit" class="login100-form-btn">
                    </input>
				</div>
			</form>

			
		</div>
	</div>
	
	

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

</body>
</html>