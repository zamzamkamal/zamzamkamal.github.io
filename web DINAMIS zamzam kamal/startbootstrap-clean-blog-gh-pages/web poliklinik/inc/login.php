<?php
@session_start();
include "koneksi.php";
if (@!$_SESSION['username']) 
 {
	if (@$_SESSION['type_user'] =="Admin") {header("location:../admin/index.php");}
	elseif (@$_SESSION['type_user'] =="Kasir") {header("location:../kasir/index.php");}
	elseif (@$_SESSION['type_user'] =="Dokter") {header("location:../dokter/index.php");}
	elseif (@$_SESSION['type_user'] =="Pendaftar") {header("location:../pendaftar/index.php");}		
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>| Login User |</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../image/klinik satuy parah.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('../Login/images/.........');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

					
	<form action="cek_login.php" class="form-signin" method="post">
			<center><h4><font face="forte"> Sign In user to poliklinik
   			<a href="http://instagram.com/zamzam_kamal">@Zamzam_Kamal</a>.</p></font></h4></center><br>
      
<br>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>
<br>
				<div class="container-login100-form-btn">
					<input type="submit" class="login100-form-btn" name="masuk" value="login">				
				</div>
<br>
<br>				
				<center>
   					<a href="../index.php"><b><p><font face="forte"> <---- back to web</a></p></font>
				</center>

				</div>

						
					</a>
			</div>

						
					</form>
				

		

			
		</div>
	</div>



	   <!-- Footer -->
   
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
             <p> &copy; copyright 2019 | <i class="glyphicon glyphicon-star"></i> by <a href="http://instagram.com/zamzam_kamal">Zamzam Kamal</a>.</p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Footer -->

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/bootstrap/js/popper.js"></script>
	<script src="../Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Login/js/main.js"></script>

</body>
</html>