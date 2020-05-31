<?php 
	include('functions.php');
	include('user_reg_functions.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- login page css file -->
<link href="css/login-page.css" rel='stylesheet' type='text/css'/>
<!-- //login page css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/alphabet.js"></script>
 <!-- //js-->

<!-- Metis Menu -->
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body>
<div class="main-content">	
		<!-- main content start-->
			<div class="main-page login-page">
				<h1 class="login-header text-center"><b>ATU Industrial Liaison <br> Management System</b></h1>
				<h2 class="title1">Login</h2>

				<div class="widget-shado">
					<div class="login-body">
						<form method="post" action="login.php">
						
						<!-- PHP Code to handle error -->
				          <?php echo (display_error()); ?>
                        <!-- End of PHP Code to handle error -->
							
							<input class="user" id="user_id" type="text" name="user_id" pattern="[0-9D]{9}" title="(User ID must Contains 8 digits and a Capital 'D')" placeholder="User Id (example: 01171053D)" onkeypress="return num_d(event)" required>

							<!-- <i class="fa fa-eye" id="fa_eye"></i> -->
							<input class="lock" type="password" name="password" id="pwd" placeholder="Password" required>
							
							<div class="registration">
								<label class="checkbox">
									<input type="checkbox" name="remember_checkbox">
									Remember me
								</label>
								<div class="clearfix"></div>
							</div>

							<input type="submit" name="login_btn" value="Login">

							<div class="registration">
								Don't have an account ?
								<a href="signup.php">Sign Up</a>
							</div>

							<!-- <div class="download">
								Download Attachment Letter
								<a href="website.php">
									Here
								</a>
							</div> -->
						</form>
					</div>
			</div>
		</div>

		<!--footer-->
	     <div class="login-footer">
			<p>&copy; 2020 ATU ILMS. All Rights Reserved | Powered by  <a href="http://www.atu.edu.gh/" target="_blank">Accra Technical University</a></p>		
		 </div>
		 <!--//footer-->
	</div>

	<!-- Classie --><!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			body = document.body;
			
		showLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toright' );
			classie.toggle( menuLeft, 'cbp-spmenu-open' );
			disableOther( 'showLeftPush' );
		};
		
		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- show and hide password -->
<script src="js/show_hide_pwd.js"></script>
<!-- //show and hide password -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>