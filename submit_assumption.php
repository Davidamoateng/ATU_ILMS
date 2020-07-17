<?php 
	include('functions.php');
	//include('user_reg_functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: login.php');
	}

	if (!isUser()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: login.php');
	}

	$firstName = $_SESSION['user']['first_name'];
	$lastName = $_SESSION['user']['last_name'];
	$indexNumber = $_SESSION['user']['user_id']; 

	$regions = array("--Select Company Region--","Ashanti Region","Ahafo Region","Bono East Region","Brong Ahafo Region","Central Region","Eastern Region",
	"Greater Accra Region","North East Region","Northern Region","Oti Region","Savannah Region","Upper East Region","Upper West Region","Volta Region",
	"Western North Region","Western Region");

	// $programs = array("--Select Program--","Accountancy","Building Technology","Civil Engineering","Computer Science","Electrical / Electronics Engineering",
	// "Fashion Design & Textiles","Furniture Design & Production","Hotel, Catering & Institutional Management","Languages & Liberal Studies","Mathematics & Statistics",
	// "Marketing","Mechanical Engineering","Purchasing & Supply","Science Laboratory Technology","Secretaryship & Management Studies");

	// Get Virtual Attachment User Details //

	$get_virtual_user_details = "SELECT * FROM virtual_attachment_registration WHERE first_name = '$firstName' AND last_name = '$lastName' AND index_number = '$indexNumber'";
	$run_get_virtual_user_details = mysqli_query($db, $get_virtual_user_details);
	$execute_get_virtual_user_details = mysqli_num_rows($run_get_virtual_user_details);

	if ($execute_get_virtual_user_details == 1) {

		$get_virtual_user_details = mysqli_fetch_assoc($run_get_virtual_user_details);

		$otherName = $get_virtual_user_details["other_name"];
		$program = $get_virtual_user_details["program"];
		$session = $get_virtual_user_details["session"];
		$level = $get_virtual_user_details["level"];

		$registration_type = "Virtual Attachment";

	} else {

		 // Get Industrial Attachment User Details //
		$get_industrial_user_details = "SELECT * FROM industrial_attachment_registration WHERE first_name = '$firstName' AND last_name = '$lastName' AND index_number = '$indexNumber'";
	    $run_get_industrial_user_details = mysqli_query($db, $get_industrial_user_details);
		$execute_get_industrial_user_details = mysqli_num_rows($run_get_industrial_user_details);
		
		if ($execute_get_industrial_user_details == 1) {

			$get_industrial_user_details = mysqli_fetch_assoc($run_get_industrial_user_details);

			$otherName = $get_industrial_user_details["other_name"];
			$program = $get_industrial_user_details["program"];
			$session = $get_industrial_user_details["session"];
			$level = $get_industrial_user_details["level"];

			$registration_type = "Industrial Attachment";
			$status_number = 2;


		} else {

			header("Location: registration.php");
		
		}
		
	}

	// Proceed to Submit Student Assumption //
	if (isset($_POST["submit_btn"])) { 

		$mobile_number = $_POST["inputMobileNumber"];
		$company_name = $_POST["inputCompanyName"];
		$supervisor_name = $_POST["inputSupervisorName"];
		$supervisor_contact = $_POST["inputSupervisorContact"];
		$supervisor_email = $_POST["inputSupervisorEmail"];
		$company_region = $_POST["inputCompanyRegion"];
		$company_address = $_POST["inputCompanyAddress"];


		if ($_POST["inputMobileNumber"] != "" && $_POST["inputCompanyName"] != "" && $_POST["inputSupervisorName"] != "" && $_POST["inputSupervisorContact"] != "" && $_POST["inputSupervisorEmail"]  != "" && $_POST["inputCompanyRegion"] != "" && $_POST["inputCompanyAddress"] != "") {
			
			$avoid_duplicate = "SELECT * FROM students_assumption WHERE index_number = '$indexNumber' LIMIT 1";
			$execute_avoid_duplicate_query = mysqli_query($db, $avoid_duplicate);
			$check_avoidance_query = mysqli_num_rows($execute_avoid_duplicate_query);

			if ($check_avoidance_query == 1) {

				echo "<script>alert('Sorry...Your Assumption details have already been submitted.!!</script>";

			} else {

				$my_insert_query = "INSERT INTO `students_assumption` (`id`, `first_name`, `last_name`, `other_name`, `mobile_number`, `program`, `index_number`, `session`, `level`, `company_name`, `supervisor_name`, `supervisor_contact`, `supervisor_email`, `company_region`, `company_address`, `registration_type`, `date`) 
				                     VALUES (NULL, '$firstName', '$lastName', '$otherName', '$mobile_number', '$program', '$indexNumber', '$session', '$level', '$company_name', '$supervisor_name', '$supervisor_contact', '$supervisor_email', '$company_region', '$company_address', '$registration_type', CURRENT_TIMESTAMP)";
				
				

				if ($run_query = mysqli_query($db, $my_insert_query)) {

					echo "<script>alert('Congrats...Your Assumption details have already been submitted Successfully')</script>";

					if ($registration_type == "Virtual Attachment") {

						$my_update_query_1 = "UPDATE `virtual_attachment_registration` SET `industry_supervisor_name` = '$supervisor_name' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_1);

						$my_update_query_2 = "UPDATE `virtual_attachment_registration` SET `industry_supervisor_contact` = '$supervisor_contact' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_2);

						$my_update_query_3 = "UPDATE `virtual_attachment_registration` SET `attachment_region` = 'Greater Accra' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_3);

					} else {

						$my_update_query_1 = "UPDATE `industrial_attachment_registration` SET `industry_supervisor_name` = '$supervisor_name' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_1);

						$my_update_query_2 = "UPDATE `industrial_attachment_registration` SET `industry_supervisor_contact` = '$supervisor_contact' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_2);

						$my_update_query_3 = "UPDATE `industrial_attachment_registration` SET `attachment_region` = '$company_region' WHERE index_number = '$indexNumber'";
						$execute_my_update_query = mysqli_query($db, $my_update_query_3);

					}
					

				} else {

					echo "<script>alert('Error...Details Not Submitted.!! Please try again ..')</script>";

				}
				
				// var_dump($my_insert_query);

			}
			

		}

	}
	

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Submit Assumption</title>

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

			  <li class="treeview">
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

              <li class="treeview active">
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
			<div class="main-page">


					<div class="panel-info widget-shadow"> 
							<div class="row">
								 <div class="col-md-12 panel-grids">
										 <div class="panel panel-primary"> 
											 <div class="panel-heading"> 
												 <h3 class="panel-title">Assumption Of Duty Form</h3> 
											 </div> 
											 <div class="panel-body"> 
												<div class="form-body widget_shadow_panel">
														<h3 class="instruction-title2">Student's Information</h3>
														<div class="hr2"></div>

													<form action="" method="post"> 
														<div class="row">
															<div class="form-group col-md-6"> 
																<label for="inputFirstName">First Name<b style="color:red;">*</b>:</label> 
																<input type="text" class="form-control" id="firstName" name="first_name" disabled value="<?php echo $firstName; ?>" onkeypress="return alphabet(event)" placeholder="Enter First Name" required> 
															</div>
															<div class="form-group col-md-6"> 
																<label for="inputLastName">Last Name<b style="color:red;">*</b>:</label> 
																<input type="text" class="form-control" id="lastName" name="last_name" disabled value="<?php echo $lastName; ?>" onkeypress="return alphabet(event)" placeholder="Enter Last Name" required> 
															</div> 
														</div> 
														<div class="row">
																<div class="form-group col-md-6"> 
																	<label for="inputOtherName">Other Name(s):</label> 
																	<input type="text" class="form-control" id="otherName" name="otherName" disabled value="<?php echo $otherName; ?>" onkeypress="return alphabet(event)" placeholder="Enter Other Name(s):"> 
																</div>
																<div class="form-group col-md-6"> 
																	<label for="inputIndexNumber">Index Number<b style="color:red;">*</b>:</label> 
																	<input type="text" class="form-control" id="indexNumber" name="indexNumber" value="<?php echo $indexNumber; ?>" pattern="[0-9D]{9}" title="(User ID must Contain 8 digits and a Capital 'D')" onkeypress="return num_d(event)" placeholder="Enter Index Number" required> 
																</div>
															</div> 
															<div class="row">
																	<div class="form-group col-md-6"> 
																		<label for="inputMobileNumber">Mobile Number(s)<b style="color:red;">*</b>:</label> 
																		<input type="text" class="form-control" id="mobileNumber" name="inputMobileNumber" value="" onkeypress="return number_plus(event)" placeholder="Enter Mobile Number (eg. 0542054285)" required> 
																	 </div>
																	 <div class="form-group col-md-6"> 
																		<label for="inputProgram">Program<b style="color:red;">*</b>:</label> 
																		<input type="text" class="form-control" id="program" name="program" disabled value="<?php echo $program; ?>" onkeypress="return alphabet(event)" placeholder="Enter Program" required> 
																	</div>
																</div> 
																<div class="row">
																		<div class="form-group col-md-6"> 
																			<label for="inputSession">Session<b style="color:red;">*</b>:</label> 
																			<input type="text" class="form-control" id="session" name="session" disabled value="<?php echo $session; ?>"  placeholder="Enter Session" required> 
																		</div>
																		<div class="form-group col-md-6"> 
																			<label for="inputLevel">Level<b style="color:red;">*</b>:</label> 
																			<input type="text" class="form-control" id="level" name="level" disabled value="<?php echo $level; ?>" placeholder="Enter Level" required> 
																		</div> 
																</div> 

																<h3 class="instruction-title2">Company's Information</h3>
																<div class="hr2"></div>
																
																<div class="row">
																		<div class="form-group col-md-6"> 
																			<label for="inputCompanyName">Company Name<b style="color:red;">*</b>:</label> 
																			<input type="text" class="form-control" id="companyName" name="inputCompanyName" onkeypress="return alpha_numeric_space(event)" placeholder="Enter Company Name" required> 
																		</div>
																		<div class="form-group col-md-6"> 
																			<label for="InputSupervisorName">Supervisor Name<b style="color:red;">*</b>:</label> 
																			<input type="text" class="form-control" id="supervisorName" name="inputSupervisorName" onkeypress="return alpha_numeric_space(event)" placeholder="Enter Supervisor Name" required> 
																		</div> 
																</div>

																<div class="row">
																		<div class="form-group col-md-6"> 
																			<label for="inputSupervisorContact">Supervisor Contact<b style="color:red;">*</b>:</label> 
																			<input type="text" class="form-control" id="supervisorContact" name="inputSupervisorContact" onkeypress="return number_plus(event)" placeholder="Enter Supervisor Contact" required> 
																		</div>
																		<div class="form-group col-md-6"> 
																			<label for="inputSupervisorEmail">Supervisor Email:</label> 
																			<input type="email" class="form-control" id="supervisorEmail" name="inputSupervisorEmail" placeholder="Enter Supervisor Email"> 
																		</div> 
																</div>
																
																<div class="row">
																	<div class="form-group col-md-12">
																		<label for="inputCompanyRegion">Company Region<b style="color:red;">*</b>:</label> 
																		<select id="companyRegion" name="inputCompanyRegion" class="form-control" required>
																			 <?php 
																			    foreach($regions as $val) {
																					echo "<option>".$val."</option>";
																				};
																			 ?>
																	   </select>
																</div>
															</div>

															<div class="form-row">
																	<div class="form-group col-md-12">
																		<label for="inputCompanyAddress"><b>Company Address<b style="color:red;">*</b>:</b></label>
																		<textarea class="form-control" id="companyAddress" name="inputCompanyAddress" placeholder="Enter Company's Address" width="100%" required></textarea>
																	</div>
																</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default" name="submit_btn">Submit</button>
														</div> 
													</form> 

												</div>		
											 </div> 
										 </div>
									 </div>	
							</div>
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