<?php 

  include('functions.php');
  //include('process_signup_form.php');
  include('user_reg_functions.php');


?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Sign Up</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--// Bootstrap Core CSS -->

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--// Custom CSS -->

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- login page css file -->
<link href='css/login-page.css' media='all' rel='stylesheet' type='text/css'/>
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
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- main content start-->
		<div id="page-wrappe">
			<div class="main-page signup-page">

				<h2 class="title1">Signup</h2>
				<div class="sign-up-row widget-shadow">

				<form id="register_form" action="signup.php" method="post">

				    <!-- PHP Code to handle error -->
					<?php echo display_error(); ?>
					<!-- // PHP Code to handle error -->

					<div class="sign-u">
						<input type="text" name="first_name" value="<?php echo $firstName; ?>" placeholder="First Name (example: John)" onkeypress="return alphabet(event)" required>
					    <div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<input type="text" name="last_name" value="<?php echo $lastName; ?>" placeholder="Last Name (example: Doe)" onkeypress="return alphabet(event)" required>
					    <div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<input type="text" name="user_id" pattern="[0-9D]{9}" title="(User ID must Contain 8 digits and a Capital 'D')" value="<?php echo $userId; ?>" placeholder="User Id (example: 01171053D)" onkeypress="return num_d(event)" required>
					    <div class="clearfix"> </div>
					</div>

					<div class="sign-u">
					    <!-- <i class="fa fa-eye" id="fa_eye"></i> -->
						<input type="password" name="password" id="pwd" placeholder="Password" required>
					    <div class="clearfix"> </div>
					</div>

					<div class="sign-u">
					    <!-- <i class="fa fa-eye" id="fa_eye"></i> -->
						<input type="password" name="confirm_password" id="pwd" placeholder="Confirm Password" required>
					    <div class="clearfix"> </div>
					</div>

					<div class="sub_home">
						<input type="submit" value="Signup" name="signup_btn" id="signup_btn">
						<div class="clearfix"> </div>
					</div>

					<div class="registration">
						Already have an account ?
						<a href="login.php">Login</a>
					</div>
				</form>

				</div>
			</div>
		</div>

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

	<!-- Sign Up Scripts -->
	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="js/signup_script.js"></script> -->
	<!-- //Sign Up Scripts -->
	
</body>
</html>