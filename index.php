<?php 
    include('functions.php'); 

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: login.php');
	}
	if (!isUser()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: login.php');
	}

	$studentFirstName = $_SESSION['user']['first_name'];
	$studentLastName = $_SESSION['user']['last_name'];

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Instructions</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- //Bootstrap Core CSS -->

<!-- Bootstrap 4.0.0 Css -->
<!-- <link href="css/bootstrapV-4.0.0.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- //Bootstrap 4.0.0 Css -->

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //Custom CSS -->

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- login page css file -->
<link href="css/login-page.css" rel='stylesheet' type='text/css'/>
<!-- //login page css file -->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/alphabet.js"></script>
 <!-- //js-->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

	<!-- requried-jsfiles-for owl -->
	<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
				nav:true,
			});
		});
    </script>
	<!-- //requried-jsfiles-for owl -->

</head> 
<body class="cbp-spmenu-push" style="background: #F1F1F1">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		
		

		
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
               <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1>
				<a class="navbar-brand" href="index.php">
					<span class="fa fa-university"></span> 
					 ATU ILMS
				</a>
			</h1>
		  </div>
		  
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
			  <!-- <li class="header">MAIN NAVIGATION</li> -->

			  <li class="treeview active">
				<a href="index.php">
				 <i class="fa fa-th-large"></i>
				 <span>Instructions</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

              <li class="treeview">
                <a href="registration.php">
                <i class="fa fa-user-plus"></i>
                <span>Register</span>
                </a>
			  </li>

			  <hr class="sidebar-divider">

              <li class="treeview">
				<a href="submit_assumption.php">
				 <i class="fa fa-credit-card"></i>
				 <span>Submit Assumption</span>
				</a>
			  </li>
			  
			  <hr class="sidebar-divider">

			  <li>
                <a href="e_logbook/e_logbook_1.php">
				 <i class="fa fa-book"></i> 
				 <span>E-Logbook</span>
                </a>
			  </li>
			  
			  <hr class="sidebar-divider">

              <li class="treeview">
                <a href="#">
				 <i class="fa fa-users"></i> 
				 <span>Supervisors</span>
                 <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li>
					<a href="industry_supervisor_login.php">
						<i class="fa fa-angle-right"></i> 
						Industry-Based Supervisor
					</a>
				</li>
                <li>
					<a href="school_supervisor_login.php">
						<i class="fa fa-angle-right"></i> 
						School-Based Supervisor
					</a>
				</li>
                </ul>
			  </li>

			  <hr class="sidebar-divider">

			  <li>
				<a href="submit_report.php">
					<i class="fa fa-file-word-o"></i> 
					<span>Submit Report</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

			  <li>
				<a href="change_password.php">
					<i class="fa fa-lock"></i> 
					<span>Change Password</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

			    <li>
					<a href="login.php?logout='1'">
						<i class="fa fa-sign-out"></i> 
						<span>Logout</span>	
					</a>
				</li>
				
				<hr class="sidebar-divider">
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
	</aside>

	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->

				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								
								<!-- Logged in user information -->
								<div class="profile_img">	
									<span class="prfil-img">
										<img src="images/atu-small.jpg" alt="atu-small"> 
									</span>

									<div class="user-name">
									<?php if (isset($_SESSION['user'])) : ?>
										<p>Welcome,</p>
										<span> 
											<?php 
											  echo $_SESSION['user']['first_name'];
											  echo ' '. $_SESSION['user']['last_name']; 
											?> 
										 </span>
									<?php endif ?>
									</div>

									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>
								<!-- End of Logged in user information	 -->	
							</a>
							<ul class="dropdown-menu drp-mnu"> 
								<li> 
									<a href="login.php?logout='1'">
									   <i class="fa fa-sign-out"></i> 
									    Logout
									</a> 
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->


		<!-- main content start-->
		<div id="page-wrapper">

		<!-- Notification Message -->
		<?php if (isset($_SESSION['success'])) : ?>
		         <div class="success">
				    <h5>
					   <b>
						    <i class="fa fa-check-circle"></i>
							<?php 
								echo $_SESSION['success'];
								unset($_SESSION['success']);
							?>
					   </b>
					</h5>
				 </div>
		 <?php endif ?>
		 <!-- End Of Notification Message -->

		<div class="main-page">
		 <div class="panel-group tool-tips widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
			<h1 class="instruction-title1 text-center">Instructions</h1>

			<h3 class="instruction-title2 text-center">Please read the following instructions carefully before you proceed:</h3>
			<p class="download-title text-center"><b><u>NOTE:</u></b> Click <a href="website.php"><b><i class="fa fa-download"></i> here</b></a> to download your industrial attachment letter</p>
			 
			<div class="row">

               <!-- accordion starts here -->
			   <div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseOne">
						  Step 1
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body panel-text">
						  <p>
							Once you have been able to login into the system, click on <b>Register</b> if you haven't registered yet 
							for the Industrial Attachment / Internship.
						  </p>
					  </div>
					</div>
				  </div>
			   </div>

				  <div class="col-md-6" >
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseTwo">
								Step 2
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body panel-text">
							  <p>
								There are two (2) options, choose <b>VIRTUAL</b> if you a interning in the school or 
								<b>INDUSTRIAL</b> if you are interning with a company of your choice.
							  </p>
						  </div>
						</div>
					  </div>
				  </div>

				</div>



			<div class="row">

					<div class="col-md-6">
							<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
									  <h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseThree">
											Step 3
										</a>
									  </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
									  <div class="panel-body panel-text">
											<p>
												If you select <b>VIRTUAL</b> in Step 2, you will be asked to enter your receipt number which would be written on the receipt given to you after paying 
												for the Virtual Attachment, then click on <b>VALIDATE</b> to fill the form.
											</p>
									  </div>
									</div>
								  </div>
					</div>

						  <div class="col-md-6">
								<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingFour">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseFour">
												Step 4
											</a>
										  </h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
										  <div class="panel-body panel-text">
											  <p>
												If you select <b>INDUSTRIAL</b> in Step 2, you will be provided with a form to fill for Industrial Attachment 
												after which you should click on <b>REGISTER</b> to submit the form to the Liaison Office.
											  </p>
										  </div>
										</div>
									  </div>
						  </div>

			</div>



			   <div class="row">

				<div class="col-md-6">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFive">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseFive">
							Step 5
						</a>
					  </h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
					  <div class="panel-body panel-text">
						  <p>
							After you have successfully submitted your registration details, click on 
							<b>Submit Assumption</b> if you have not yet submitted your assumption form.
						  </p>
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-md-6">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSix">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseSix">
							Step 6
						</a>
					  </h4>
					</div>
					<div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false">
					  <div class="panel-body panel-text">
						  <p>
							Once you have clicked on <b>Submit Assumption</b> in Step 5, a form will be given to you fill, after that
							click on <b>SUBMIT</b> to submit your details to the Liaison Office.
						  </p>
					  </div>
					</div>
				  </div>
				</div>

				</div>
				


				<div class="row">

				<div class="col-md-6">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSeven">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseSeven">
							Step 7
						</a>
					  </h4>
					</div>
					<div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven" aria-expanded="false">
					  <div class="panel-body panel-text">
						  <p>
							Click on <b>E-Logbook</b> to record all the activities you have done throughout the day,
							make sure you click on <b>SAVE</b> after you are done to avoid loosing your data.
							<b><u>Note:</u></b> you can edit your records anytime you want to, by clicking on <b>EDIT</b>
						  </p>
					  </div>
					</div>
				  </div>
				</div>

				  <div class="col-md-6">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingEight">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseEight">
							Step 8
						</a>
					  </h4>
					</div>
					<div id="collapseEight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEight" aria-expanded="false">
					  <div class="panel-body panel-text">
						  <p>
							Clicking on <b>Industry Based Supervisor</b> will open a page where your industry based supervisor can grade the you. 
							<b><u>Note:</u></b> Students can't access this page, unless a school supervisor visits your work place to access you
							then he will provide the login password.
						  </p>
					  </div>
					</div>
				  </div>
				</div>

				</div>




				<div class="row">

				<div class="col-md-6">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingNine">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseNine">
							Step 9
						</a>
					  </h4>
					</div>
					<div id="collapseNine" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingNine" aria-expanded="false">
					  <div class="panel-body panel-text">
						  <p>
							Clicking on the <b>School Based Supervisor</b> will open a page where your school based supervisor can grade the you. 
							<b><u>Note:</u></b> this is not accessible by the you, only school supervisors can login with a password.
						  </p>
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-md-6">
						<div class="panel panel-default">
						  <div class="panel-heading" role="tab" id="headingTen">
							<h4 class="panel-title">
							  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseTen">
								  Step 10
							  </a>
							</h4>
						  </div>
						  <div id="collapseTen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTen" aria-expanded="false">
							<div class="panel-body panel-text">
								<p>
									Clicking on the <b>Submit Report</b> will open a page where you the student can submit your industrial attachment report to the 
									industrial liaison office without stress, make sure you click on <b>SUBMIT</b> after filling the form.
								</p>
							</div>
						  </div>
						</div>
					  </div>

				</div>


				<!-- <div class="row"> 

						<div class="col-md-6">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingEleven">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseEleven">
									Step 11
								</a>
							  </h4>
							</div>
							<div id="collapseEleven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEleven" aria-expanded="false">
							  <div class="panel-body panel-text">
									Your password is one of the few things that puts a barrier between your account and the outside world, In case you want to change your account password, just click on Change Password and fill in your details.
							  </div>
							</div>
						  </div>
						</div>
		
						<div class="col-md-6">
								<div class="panel panel-default">
								  <div class="panel-heading" role="tab" id="headingTwelve">
									<h4 class="panel-title">
									  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseTwelve">
										  Step 12
									  </a>
									</h4>
								  </div>
								  <div id="collapseTwelve" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwelve" aria-expanded="false">
									<div class="panel-body panel-text">
										After you have finished with everything you want to do in the online management system, it is advisable for you to logout your account. This will prevent other users from using your account to perform other operations you are not even aware of.
									</div>
								  </div>
								</div>
							  </div>
							  	
						</div>
					</div> -->
        	
        	
				  <div class="clearfix"> </div>
				  
				
				</div>
		    
			</div>
		</div>


	<!--footer-->
	<div class="footer">
	   <p>&copy; 2020 ATU ILMS. All Rights Reserved | Powered by <a href="website.php">ATU Industrial Liaison Office</a></p>		
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

	<!-- scroll bar -->
	<script  src="js/index1.js"></script>
	<!-- //scroll bar -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>