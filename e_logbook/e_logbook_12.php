<?php 
    include('../functions.php'); 

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: ../login.php');
	}

	if (!isUser()) {
		$_SESSION['msg'] = "Please log in first ...";
		header('location: ../login.php');
	}

	/////////// E-Logbook Code Starts Here//////////////////////////////////////////////////////////////////////
	$update_btn_status = "";
	$save_btn_status = "";

	$studentFirstName = $_SESSION['user']['first_name'];
	$studentLastName = $_SESSION['user']['last_name'];

	
	$student_full_name = $studentFirstName." ".$studentLastName;
	$indexNumber = $_SESSION['user']['user_id'];

		 $check_content_existence = "SELECT * FROM week12_table WHERE index_number = '$indexNumber'";
		 $check_existence_query = mysqli_query($db, $check_content_existence);
		 $check_content_presence = mysqli_num_rows($check_existence_query);

	if ($check_content_presence == 1) {

		$edit_btn_status = "enabled";
		$save_btn_status = "disabled";

	}else{

		$edit_btn_status = "disabled";
		$save_btn_status = "enabled";

	}

	//////////////////////////SAVE BUTTON START/////////////////////////////////////////////
	if (isset($_POST["save_btn"])) {
	 
		$monday_activity = $_POST["job_assigned_1"];
		$tuesday_activity = $_POST["job_assigned_2"];
		$wednesday_activity = $_POST["job_assigned_3"];
		$thursday_activity = $_POST["job_assigned_4"];
		$friday_activity = $_POST["job_assigned_5"];

		if ($monday_activity != "" && $tuesday_activity != "" && $wednesday_activity != "" && $thursday_activity != "" && $friday_activity != "") {
		   
			 $check_record_existence = "SELECT * FROM week12_table WHERE index_number = '$indexNumber'";
			 $record_existence_query = mysqli_query($db, $check_record_existence);
			 $record_query_presence = mysqli_num_rows($record_existence_query);

			 if ($record_query_presence == 1) {
				 
				 echo "<script>alert('Error... Record already exists..!')</script>";

			 }else {
				 
				 $insert_details_command = "INSERT INTO week12_table (`id`, `username`, `index_number`, `date`, `monday_activities`, `tuesday_activities`, `wednesday_activities`, `thursday_activities`, `friday_activities`) 
				 VALUES (NULL, '$student_full_name', '$indexNumber', CURRENT_TIMESTAMP, '$monday_activity', '$tuesday_activity', '$wednesday_activity', '$thursday_activity', '$friday_activity')";
				 $execute_insert_query = mysqli_query($db, $insert_details_command);
				 
				 echo "<script>alert('Your record has been saved successfully')</script>";
				 //header('location: e_logbook_2.php');
				 
			 }

		}else{
			echo "<script>alert('Please fill all input fields ...')</script>";
		}
	}
	/////////////////////////////////SAVE BUTTON END/////////////////////////////////////////


	//////////////////////////EDIT BUTTON START/////////////////////////////////////////////
	if (isset($_POST["edit_btn"])) {

		$monday_activity = $_POST["job_assigned_1"];
		$tuesday_activity = $_POST["job_assigned_2"];
		$wednesday_activity = $_POST["job_assigned_3"];
		$thursday_activity = $_POST["job_assigned_4"];
		$friday_activity = $_POST["job_assigned_5"];

		if ($monday_activity != "" && $tuesday_activity != "" && $wednesday_activity != "" && $thursday_activity != "" && $friday_activity != "") {
		 
		  $update_details_command = "UPDATE week12_table SET monday_activities = '$monday_activity', tuesday_activities = '$tuesday_activity', wednesday_activities = '$wednesday_activity', thursday_activities = '$thursday_activity', friday_activities = '$friday_activity' WHERE `index_number`='$indexNumber'";
		  $execute_update_query = mysqli_query($db, $update_details_command);

		  

		  echo "<script>alert('Your record has been updated successfully ...')</script>";
		  //header('location: e_logbook_2.php');

		}else{

			echo "<script>alert('You need to fill all input fields ...')</script>";
					}
	}
	/////////////////////////////////EDIT BUTTON END////////////////////////////////////////////////

 /////////// E-Logbook Code Ends Here//////////////////////////////////////////////////////////////////////

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | E-Logbook</title>

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
				<a class="navbar-brand" href="../index.php">
					<span class="fa fa-university"></span> 
					 ATU ILMS
				</a>
			</h1>
		  </div>
		  
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
			  <!-- <li class="header">MAIN NAVIGATION</li> -->

			  <li class="treeview">
				<a href="../index.php">
				 <i class="fa fa-th-large"></i>
				 <span>Instructions</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

              <li class="treeview">
                <a href="../registration.php">
                <i class="fa fa-user-plus"></i>
                <span>Register</span>
                </a>
			  </li>

			  <hr class="sidebar-divider">

              <li class="treeview">
				<a href="../submit_assumption.php">
				 <i class="fa fa-credit-card"></i>
				 <span>Submit Assumption</span>
				</a>
			  </li>
			  
			  <hr class="sidebar-divider">

			  <li class="treeview active">
                <a href="e_logbook_1.php">
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
					<a href="../industry_supervisor_login.php">
						<i class="fa fa-angle-right"></i> 
						Industry-Based Supervisor
					</a>
				</li>
                <li>
					<a href="../school_supervisor_login.php">
						<i class="fa fa-angle-right"></i> 
						School-Based Supervisor
					</a>
				</li>
                </ul>
			  </li>

			  <hr class="sidebar-divider">

			  <li>
				<a href="../submit_report.php">
					<i class="fa fa-file-word-o"></i> 
					<span>Submit Report</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">

			  <li>
				<a href="../change_password.php">
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
								<!-- Logged in user information -->
								<div class="profile_img">	
									<span class="prfil-img">
										<img src="../images/atu-small.jpg" alt="atu-small"> 
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
												 <h3 class="panel-title">E-Logbook</h3> 
											 </div> 
											 
											 <div class="panel-body e-logbook-panel widget_shadow_panel"> 
												    
													<div class="row">
															<div class="col-sm-4 col-md-4 col-lg-4">
																<a class="btn btn-primary btn-sm" id="e-logbook-btn" href="e_logbook_11.php" role="button"> 
																	<i class="fa fa-arrow-left"></i>
																	Previous
																</a>
																
															</div>
															<div class="col-sm-4 col-md-4 col-lg-4">
																<h4 class="" id="weeks-header">Week 12</h4>
															</div>
															<div class="col-sm-4 col-md-4 col-lg-4">
																<a class="btn btn-primary btn-sm px-3" id="e-logbook-btn" href="e_logbook_13.php" role="button">
																	Next
																	<i class="fa fa-arrow-right"></i>
																</a>
															</div>
														</div>
														<hr>
														
														<form action="" method="POST">

															 <!-- E-logbook Table -->
																<div class="row">
                                                                   <div class="col-md12">
																		<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th class="e-logbook-table" scope="col"><b>DAY</b></th>
																						<th class="e-logbook-table" scope="col"><b>SUMMARY OF ACTIVITIES</b></th>
																					</tr>
																				</thead>
																				<tbody>
											    										<?php 
																					
																						$get_previous_data = "SELECT * FROM week12_table WHERE index_number = '$indexNumber'";
																						$execute_get_query = mysqli_query($db, $get_previous_data);
																						$get_data = mysqli_fetch_assoc($execute_get_query);
																						

																						$monday_activity_holder = $get_data["monday_activities"];
																						$tuesday_activity_holder = $get_data["tuesday_activities"];
																						$wednesday_activity_holder = $get_data["wednesday_activities"];
																						$thursday_activity_holder = $get_data["thursday_activities"];
																						$friday_activity_holder = $get_data["friday_activities"];



																							echo "<tr>";
																							echo "<th scope='row' class='e-logbook-th' style='padding-top: 22px;'>"."Monday"."</th>";
																							echo "<td>";
																								echo "<textarea name='job_assigned_1' class='form-control' required>".$monday_activity_holder."</textarea>";
																							echo "</td>";                             
																							echo "</tr>";

																							echo "<tr>";
																							echo "<th scope='row' class='e-logbook-table' style='padding-top: 22px;'>"."Tuesday"."</th>";
																							echo "<td>";
																								echo "<textarea name='job_assigned_2' class='form-control' required>".$tuesday_activity_holder."</textarea>";
																							echo "</td>";                                
																							echo "</tr>";

																							echo "<tr>";
																							echo "<th scope='row' class='e-logbook-table' style='padding-top: 22px;'>"."Wednesday"."</th>";
																							echo "<td>";
																								echo "<textarea name='job_assigned_3' class='form-control' required>".$wednesday_activity_holder."</textarea>";
																							echo "</td>";                                
																							echo "</tr>";

																							echo "<tr>";
																							echo "<th scope='row' class='e-logbook-table' style='padding-top: 22px;'>"."Thursday"."</th>";
																							echo "<td>";
																								echo "<textarea name='job_assigned_4' class='form-control' required>".$thursday_activity_holder."</textarea>";
																							echo "</td>";                                
																							echo "</tr>";

																							echo "<tr>";
																							echo "<th scope='row' class='e-logbook-table' style='padding-top: 22px;'>"."Friday"."</th>";
																							echo "<td>";
																								echo "<textarea name='job_assigned_5' class='form-control' required>".$friday_activity_holder."</textarea>";
																							echo "</td>";                                
																							echo "</tr>";

																					?>
																				</tbody>
																			</table>
																   </div>    

																</div>	
															
																<!-- //E-logbook Table -->

																<div class="text-center">
																	<button type="submit" name="edit_btn" class="btn btn-primary" <?php echo $edit_btn_status; ?>>
																		<i class="fa fa-edit"></i>
																		Edit
																	</button>
																	<button type="submit" name="save_btn" class="btn btn-success" <?php echo $save_btn_status; ?>>
																		<i class="fa fa-save"></i>
																		Save
																	</button>
																</div> 
													</form> 
												</div>	
											 </div> 
										 </div>
									 </div>	
							</div>
						</div>
				
        	
        	
        	      <div class="clearfix"> </div>
			</div>
		</div>


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