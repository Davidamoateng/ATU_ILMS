<?php 
  include('../functions.php');

  if (!isLoggedIn()) {
	 $_SESSION['msg'] = "Please log in first ...";
	 header('location: ../login.php');
  }

  if (!isAdmin()) {
	  $_SESSION['msg'] = "Please log in first ...";
	  header('location: ../login.php');
  }

  if (isset($_POST["add_btn"])) {    

	$supervisor_name = $_POST["inputSupervisorName"];
	$supervisor_department = $_POST["inputSupervisorDepartment"];
	$supervisor_contact = $_POST["inputSupervisorContact"];
	$supervisor_faculty = $_POST["inputSupervisorFaculty"];
	$supervisor_id = $_POST["inputSupervisorId"];
	$supervisor_region_residence = $_POST["inputResidentRegion"];
	$school_supervisor_password = $_POST["inputSchoolSupervisorPassword"];
	$industry_supervisor_password = $_POST["inputIndustrySupervisorPassword"];

	if ($supervisor_name != "" && $supervisor_department != "" && $supervisor_contact != "" && $supervisor_faculty != "" && $supervisor_id != "" && $supervisor_region_residence != "" && $school_supervisor_password != "" && $industry_supervisor_password != "") {
		
	$supervisor_id = $_POST["inputSupervisorId"];
		        $check_supervisor_existence = "SELECT * FROM school_supervisors WHERE `supervisor_id` = '$supervisor_id'";
				$supervisor_existence_query = mysqli_query($db, $check_supervisor_existence);
				$supervisor_query_presence = mysqli_num_rows($supervisor_existence_query);

		if ($supervisor_query_presence == 1) {

			echo "<script>alert('Error... Supervisor already exists..! Please enter a different Supervisor Id ..')</script>";

		} else {

			$my_insert_query = "INSERT INTO `school_supervisors` (`id`, `supervisor_name`, `supervisor_department`, `supervisor_contact`, `supervisor_faculty`, `supervisor_id`, `supervisor_region_residence`) 
							VALUES (NULL, '$supervisor_name', '$supervisor_department', '$supervisor_contact', '$supervisor_faculty', '$supervisor_id', '$supervisor_region_residence')";
		

			if ($execute_my_insert_query = mysqli_query($db, $my_insert_query)){

				// Insert School Supervisor Password //
				$insert_school_supervisor_password = "INSERT INTO supervisors_login (`id`, `username`, `password`, `date`, `status`) 
				                                       VALUES (NULL, '$supervisor_name', '$school_supervisor_password', CURRENT_TIMESTAMP, 'school')";
				$execute_school_supervisor_pwd_query = mysqli_query($db, $insert_school_supervisor_password);

				// Insert Industry Supervisor Password //
				$insert_industry_supervisor_password = "INSERT INTO supervisors_login (`id`, `username`, `password`, `date`, `status`) 
				                                       VALUES (NULL, '$supervisor_name', '$industry_supervisor_password', CURRENT_TIMESTAMP, 'industry')";
				$execute_industry_supervisor_pwd_query = mysqli_query($db, $insert_industry_supervisor_password);

				echo "<script>alert ('Supervisor has been added successfully ...');</script>";

			} else {

				echo "<script>alert ('Error...  adding Supervisor failed.!! Please try again..');</script>";
				
			}

		}
		
							
	} else {

		echo "<script>alert ('Please fill all input fields ...');</script>";

	}

	

  }


?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Add Supervisor</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/alphabet.js"></script>
 <!-- //js-->

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

	<!-- requried-jsfiles-for owl -->
	<link href="../css/owl.carousel.css" rel="stylesheet">
		<script src="../js/owl.carousel.js"></script>
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
<body class="cbp-spmenu-push">
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
				 <i class="fa fa-dashboard"></i>
				 <span>Dashboard</span>
                </a>
			  </li>

			  <hr class="sidebar-divider">

			  <li class="treeview">
				<a href="registered_students.php">
				 <i class="fa fa-users"></i>
				 <span>Registered Students</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

              <li class="treeview">
                <a href="student_assumptions.php">
                <i class="fa fa-credit-card"></i>
                <span>Student Assumptions</span>
                </a>
			  </li>

			  <hr class="sidebar-divider">
			  
              <li class="treeview active">
				<a href="add_supervisor.php">
				 <i class="fa fa-plus"></i>
				 <span>Add Supervisors</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">
			  
              <li class="treeview">
				<a href="view_supervisors.php">
				 <i class="fa fa-eye"></i>
				 <span>View Supervisors</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">
			  
              <li class="treeview">
				<a href="assign_supervisors.php">
				 <i class="fa fa-user"></i>
				 <span>Assign Supervisors</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">
			  
              <li class="treeview">
                <a href="#">
				 <i class="fa fa-percent"></i> 
				 <span>Supervisor Assessment</span>
                 <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li>
					<a href="industry_supervisor_score.php">
						<i class="fa fa-angle-right"></i> 
						Industry Supervisor Score
					</a>
				</li>
                <li>
					<a href="school_supervisor_score.php">
						<i class="fa fa-angle-right"></i> 
						School Supervisor Score
					</a>
				</li>
                </ul>
			  </li>

			  <hr class="sidebar-divider">

			  <!-- <li>
				<a href="view_student_logbooks.php">
					<i class="fa fa-book"></i> 
					<span>View Student Logbook</span>
				</a>
			</li>	
			
			<hr class="sidebar-divider">

			<li>
				<a href="view_students_reports.php">
					<i class="fa fa-file-text"></i> 
					<span>View Student Reports</span>
				</a>
			</li>

			  <hr class="sidebar-divider"> -->

			  <li class="treeview">
				<a href="add_admin.php">
				 <i class="fa fa-plus"></i>
				 <span>Add New Admin</span>
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
					<a href="../login.php?logout='1'">
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
								<!-- Logged In User Profile Information -->
								<div class="profile_img">	
									<span class="prfil-img"><img src="../images/atu-small.jpg" alt="atu-small"> </span>
									<div class="user-name">
										<p>Welcome,</p>

										<?php if (isset($_SESSION['user'])) : ?>
										<span> <?php echo $_SESSION['user']['first_name']; ?></span>
										<?php endif ?>

									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>
								<!-- End Logged In User Profile Information -->		
							</a>
							<ul class="dropdown-menu drp-mnu"> 
								<li> 
									<a href="../login.php?logout='1'">
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
										 <h3 class="panel-title">Add Supervisor</h3> 
									 </div> 
									 <div class="panel-body"> 
										<div class="form-body widget_shadow_panel">
							
											<form method="post" action=""> 
												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="InputSupervisorName">Supervisor Name<b style="color:red;">*</b>:</label> 
														<input type="text" class="form-control" id="SupervisorName" name="inputSupervisorName" onkeypress="return alphabet_space(event)" placeholder="Enter Supervisor Name" required> 
													</div>
													<div class="row">
														<div class="form-group col-md-6">
															<label for="InputSupervisorDepartment">Supervisor Department<b style="color:red;">*</b>:</label> 
															<select id="SupervisorDepartment" class="form-control" name="inputSupervisorDepartment" required>
																<option selected="">--Select Supervisor Department--</option>
																<option>Accountancy</option>
																<option>Building Technology</option>
																<option>Civil Engineering</option>
																<option>Computer Science</option>
																<option>Electrical / Electronics Engineering</option>
																<option>Fashion Design & Textiles</option>
																<option>Furniture Design & Production</option>
																<option>Hotel, Catering & Institutional Management</option>
																<option>Languages & Liberal Studies</option>
																<option>Mathematics & Statistics</option>
																<option>Marketing</option>
																<option>Mechanical Engineering</option>
																<option>Purchasing & Supply</option>
																<option>Science Laboratory Technology</option> 
																<option>Secretaryship & Management Studies</option>
														    </select>
													    </div>
												    </div>
												</div>

												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="InputSupervisorContact">Supervisor Contact<b style="color:red;">*</b>:</label> 
														<input type="text" class="form-control" id="SupervisorContact" name="inputSupervisorContact" onkeypress="return number_plus(event)" placeholder="Enter Supervisor Contact" required> 
													</div>
													<div class="row">
														<div class="form-group col-md-6">
															<label for="InputSupervisorFaculty">Supervisor Faculty<b style="color:red;">*</b>:</label> 
															<select id="SupervisorFaculty" class="form-control" name="inputSupervisorFaculty" required>
																<option selected="">--Select Supervisor Faculty--</option>
																<option>Faculty of Applied Arts</option>
																<option>Faculty of Applied Science</option>
																<option>Faculty of Built Environment</option>
																<option>Faculty of Business</option>
																<option>Faculty of Engineering</option>
														    </select>
													    </div>
												    </div>
												</div>

												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="InputSupervisorId">Supervisor Id<b style="color:red;">*</b>:</label> 
														<input type="text" class="form-control" id="SupervisorId" name="inputSupervisorId" pattern="[0-9D]{9}" title="(User ID must Contain 8 digits and a Capital 'D')" onkeypress="return num_d(event)" placeholder="Enter Supervisor Id" required> 
													</div>
													<div class="row">
														<div class="form-group col-md-6">
															<label for="InputResidentRegion">Resident Region<b style="color:red;">*</b>:</label> 
															<select id="ResidentRegion" class="form-control" name="inputResidentRegion" required>
																<option selected="">--Select Resident Region--</option>
																<option>Ashanti Region</option>
																<option>Ahafo Region</option>
																<option>Bono East Region</option>
																<option>Brong Ahafo Region</option>
																<option>Central Region</option>
																<option>Eastern Region</option>
																<option>Greater Accra Region</option>
																<option>North East Region</option>
																<option>Northern Region</option>
																<option>Oti Region</option>
																<option>Savannah Region</option>
																<option>Upper East Region</option>
																<option>Upper West Region</option>
																<option>Volta Region</option> 
																<option>Western North Region</option>
																<option>Western Region</option> 
														   </select>
													    </div>
												    </div>
												</div>

												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="InputSchoolSupervisorPassword">School Supervisor Password<b style="color:red;">*</b>:</label> 
														<input type="password" class="form-control" id="SchoolSupervisorPassword" name="inputSchoolSupervisorPassword" placeholder="Enter School Supervisor Password" required> 
													</div>

													<div class="form-group col-md-6"> 
														<label for="InputIndustrySupervisorPassword">School Industry Password<b style="color:red;">*</b>:</label> 
														<input type="password" class="form-control" id="IndustrySupervisorPassword" name="inputIndustrySupervisorPassword" placeholder="Enter Industry Supervisor Password" required> 
													</div>
												</div>

												
												<div class="text-center">
													<button type="submit" class="btn btn-default" name="add_btn">
														<i class="fa fa-plus-circle"></i>
														Add
													</button>
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
		<div class="clearfix"> </div>

	<!--footer-->
	<div class="footer">
	   <p>&copy; 2020 ATU ILMS. All Rights Reserved | Powered by <a href="../website.php">ATU Industrial Liaison Office</a></p>		
	</div>
	<!--//footer-->
  </div>
		
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="../js/classie.js"></script>
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
	<script  src="../js/index1.js"></script>
	<!-- //scroll bar -->
		
	<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='../js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>