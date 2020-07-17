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

  $regions = array("Ashanti Region","Ahafo Region","Bono East Region","Brong Ahafo Region","Central Region","Eastern Region",
  "Greater Accra Region","North East Region","Northern Region","Oti Region","Savannah Region","Upper East Region","Upper West Region","Volta Region",
  "Western North Region","Western Region");

  $mysql_query_1 = "SELECT * FROM school_supervisors";

  $mysql_query_faculty_of_applied_arts = "SELECT * FROM school_supervisors WHERE supervisor_faculty = 'Faculty of Applied Arts'";
  $mysql_query_faculty_of_applied_science = "SELECT * FROM school_supervisors WHERE supervisor_faculty = 'Faculty of Applied Science'";
  $mysql_query_faculty_of_built_environment = "SELECT * FROM school_supervisors WHERE supervisor_faculty = 'Faculty of Built Environment'";
  $mysql_query_faculty_of_business = "SELECT * FROM school_supervisors WHERE supervisor_faculty = 'Faculty of Business'";
  $mysql_query_faculty_of_engineering = "SELECT * FROM school_supervisors WHERE supervisor_faculty = 'Faculty of Engineering'";


?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Assign Supervisors</title>

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
			  
              <li class="treeview">
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
			  
              <li class="treeview active">
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
					<!-- Student Statistics Panel -->
					<!-- <div class="row">
						<div class="col-md-12 panel-grids">
								<div class="panel panel-primary"> 
									<div class="panel-heading"> 
										<h3 class="panel-title">Student Statistics</h3> 
									</div> 
									<div class="panel-body"> 
									   <div class="form-body widget_shadow_panel">
						   
											<div class="panel-body widget-shadow" style="overflow-x: auto">
												<table class="table table-bordered table-condensed"> 
													<thead> 
														<tr>
															<th scope="col">Ashanti Region</th>
															<th scope="col">Ahafo Region</th>
															<th scope="col">Bono East Region</th>
															<th scope="col">Brong Ahafo Region</th>
															<th scope="col">Central Region</th>
															<th scope="col">Eastern Region</th>
															<th scope="col">Greater Accra Region</th>
															<th scope="col">North East Region</th>
														</tr>
													</thead> 
													<tbody> 
														<?php
															// echo "<tr>";

															// $mycounter = 0;
															// while ($mycounter < 8) {

															// 	$selected_item = $regions[$mycounter];
															// 	$mysql_query_command_1 = "SELECT company_region FROM students_assumption WHERE company_region = '$selected_item'";
															// 	$execute_result_query = mysqli_query($db, $mysql_query_command_1);
															// 	$row_cnt = mysqli_num_rows($execute_result_query);
															// 	echo "<td scope='row' style='text-align:center'>".$row_cnt."</td>";
															// 	$mycounter++;
															// }

															// echo "</tr>";
														?>
													</tbody>
													
												</table>
											
												<table class="table table-bordered table-condensed"> 
													<thead> 
														<tr>
															<th scope="col" style="text-align:center">Northern Region</th>
															<th scope="col" style="text-align:center">Oti Region</th>
															<th scope="col" style="text-align:center">Savannah Region</th>
															<th scope="col" style="text-align:center">Upper East Region</th>
															<th scope="col" style="text-align:center">Upper West Region</th>
															<th scope="col" style="text-align:center">Volta Region</th>
															<th scope="col" style="text-align:center">Western North Region</th>
															<th scope="col" style="text-align:center">Western Region</th>
														</tr>
													</thead> 
													<tbody>  
													<?php
															// echo "<tr>";

															// $mycounter = 0;
															// while ($mycounter < 8) {

															// 	$selected_item = $regions[$mycounter];
															// 	$mysql_query_command_1 = "SELECT company_region FROM students_assumption WHERE company_region = '$selected_item'";
															// 	$execute_result_query = mysqli_query($db, $mysql_query_command_1);
															// 	$row_cnt = mysqli_num_rows($execute_result_query);
															// 	echo "<td scope='row' style='text-align:center'>".$row_cnt."</td>";
															// 	$mycounter++;
															// }

															// echo "</tr>";
														?>
													</tbody>
													
												</table>
											</div>
									   
									   </div>
									</div> 
								</div>
							</div>	
				   </div> -->
				   <!--// Student Statistics Panel -->

				   <!-- Assign Supervisors Panel-->
					<div class="row">
						 <div class="col-md-12 panel-grids">
								 <div class="panel panel-primary"> 
									 <div class="panel-heading"> 
										 <h3 class="panel-title">Assign Supervisors</h3> 
									 </div> 
									 <div class="panel-body"> 
										<div class="form-body widget_shadow_panel" style="overflow-x: auto;">
							 
											<form action="#" method="post">
												<table class="table table-bordered table-condensed">
													<thead>
														<tr>
															<th class="text-center" scope="col"><b>Regions</b></th>
															<th class="text-center" scope="col" colspan="5"><b>Faculties</b></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row"></th>
															<th class="text-center" scope="row">Applied Arts</th>
															<th class="text-center" scope="row">Applied Science</th>
															<th class="text-center" scope="row">Built Environment</th>
															<th class="text-center" scope="row">Business</th>
															<th class="text-center" scope="row">Engineering</th>
														</tr>
														<tr>
															<th class="text-center">Ashanti</th>
															<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ashanti_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ashanti_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ashanti_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ashanti_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ashanti_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ashanti_built_environment">
																			<?php

																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}

																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ashanti_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ashanti_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ashanti_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ashanti_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>
						
				<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
														<tr>
																<th class="text-center">Ahafo</th>
																<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ahafo_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ahafo_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ahafo_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ahafo_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																				
																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ahafo_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ahafo_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ahafo_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ahafo_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_ahafo_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_ahafo_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														       </td>
															</tr>
						
						<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
															<tr>
																	<th class="text-center">Bono East</th>
																	<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_bono_east_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_bono_east_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_bono_east_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_bono_east_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_bono_east_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_bono_east_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_bono_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_bono_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_bono_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_bono_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
																	</tr>


																	<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
															<tr>
																	<th class="text-center">Brong Ahafo</th>
																	<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_brong_ahafo_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_brong_ahafo_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_brong_ahafo_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_brong_ahafo_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_brong_ahafo_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_brong_ahafo_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_brong_ahafo_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_brong_ahafo_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_brong_ahafo_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_brong_ahafo_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>
						
				     <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->													
						
																	<tr>
																			<th class="text-center">Central</th>
																			<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_central_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_central_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_central_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_central_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_central_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_central_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_central_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_central_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_central_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control"name="selected_supervisor_2_central_engineering" >
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
																		</tr>
						
						<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
																		<tr>
																				<th class="text-center">Eastern</th>
																				<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_eastern_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_eastern_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_eastern_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_eastern_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_eastern_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_eastern_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_eastern_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_eastern_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_eastern_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_eastern_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>


														<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
														<tr>
																<th class="text-center">Greater Accra</th>
																	<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_greater_accra_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_greater_accra_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_greater_accra_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_greater_accra_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_greater_accra_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_greater_accra_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_greater_accra_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_greater_accra_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_greater_accra_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_greater_accra_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
													</tr>
						
						<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
																				<tr>
																						<th class="text-center">North East</th>
																						<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_north_east_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_north_east_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_north_east_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_north_east_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_north_east_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_north_east_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_north_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_north_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_north_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_north_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
																					</tr>
						
						<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
																					    <tr>
																							<th class="text-center">Northern</th>
																							<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_northern_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_northern_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_northern_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_northern_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_northern_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_northern_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_northern_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_northern_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_northern_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_northern_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>
						
						
						<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
						
																						    <tr>
																								<th class="text-center">Oti</th>
																								<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_oti_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_oti_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_oti_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_oti_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_oti_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_oti_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_oti_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_oti_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_oti_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_oti_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>

								<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->															

														<tr>
					                                         <th class="text-center">Savannah</th>
																<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_savannah_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_savannah_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_savannah_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_savannah_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_savannah_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_savannah_built_environment">
																			<?php 
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_savannah_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_savannah_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_savannah_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_savannah_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
																							</tr>

									<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->														

																							<tr>
																								<th class="text-center">Upper East</th>
																								<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_east_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_east_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_east_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_east_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_east_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_east_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_east_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_east_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>

									<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->														

													    <tr>
															<th class="text-center">Upper West</th>
																<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_west_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_west_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_west_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_west_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_west_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_west_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_west_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_west_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_upper_west_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_upper_west_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>

									<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->														

																							<tr>
																								<th class="text-center">Volta</th>
																								<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_volta_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_volta_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_volta_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_volta_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_volta_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_volta_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_volta_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_volta_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_volta_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_volta_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>

									<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->														

																							<tr>
																								<th class="text-center">Western North</th>
																								<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_north_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_north_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_north_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_north_applied_science">>
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_north_built_environment">>
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_north_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_north_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_north_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_north_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_north_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>

									<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->														

														<tr>
															<th class="text-center">Western</th>
																<td>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_applied_arts">

																			<?php
																				$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																				while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																					echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																				}
																			?>

																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_applied_arts">

																		<?php
																			$execute_mysql_query_faculty_of_applied_arts = mysqli_query($db, $mysql_query_faculty_of_applied_arts);
																			while ($get_faculty_of_applied_arts_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_arts)) {
																				
																				echo "<option selected=''>".$get_faculty_of_applied_arts_details["supervisor_name"]."</option>";
																					
																			}
																		?>

																		</select>
																	</div>
															</td>

															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_applied_science">
																			<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		   ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_applied_science">
																				<?php

																				$execute_mysql_query_faculty_of_applied_science = mysqli_query($db, $mysql_query_faculty_of_applied_science);

																				while ($get_faculty_of_applied_science_details = mysqli_fetch_array($execute_mysql_query_faculty_of_applied_science)) {
																						
																					echo "<option selected=''>".$get_faculty_of_applied_science_details["supervisor_name"]."</option>";
																						
																				}

																		        ?>
																			</select>
																		</div>
															</td>
															<td>
																	<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_built_environment">
																				<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		       ?>
																			</select>
																		</div>
																		<div class="form-group">
																			<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_built_environment">
																			<?php
																				$execute_mysql_query_faculty_of_built_environment = mysqli_query($db, $mysql_query_faculty_of_built_environment);
																				while ($get_faculty_of_built_environment_details = mysqli_fetch_array($execute_mysql_query_faculty_of_built_environment)) {
																						
																					echo "<option selected=''>".$get_faculty_of_built_environment_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																			</select>
																		</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_business">
																		    <?php
																				$execute_mysql_query_faculty_of_business = mysqli_query($db, $mysql_query_faculty_of_business);
																				while ($get_faculty_of_business_details = mysqli_fetch_array($execute_mysql_query_faculty_of_business)) {
																						
																					echo "<option selected=''>".$get_faculty_of_business_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
															</td>
															<td>
																<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_1_western_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
																	<div class="form-group">
																		<select id="inputAssignSupervisor" class="form-control" name="selected_supervisor_2_western_engineering">
																		    <?php
																				$execute_mysql_query_faculty_of_engineering = mysqli_query($db, $mysql_query_faculty_of_engineering);
																				while ($get_faculty_of_engineering_details = mysqli_fetch_array($execute_mysql_query_faculty_of_engineering)) {
																						
																					echo "<option selected=''>".$get_faculty_of_engineering_details["supervisor_name"]."</option>";
																						
																				}
																		    ?>
																		</select>
																	</div>
														    </td>
														</tr>
													</tbody>
												</table>
						
												<div class="text-center">
													<button type="submit" class="btn btn-default" name="assign_btn">Assign</button>
												</div>
											  </form>		
										
										</div>
									 </div> 
								 </div>
							 </div>	
					</div>
					<!--// Assign Supervisors Panel-->
				</div>
				

			</div>
		</div>
		<div class="clearfix"> </div>


		<?php 
		   //////////////////////////////////// PHP CODE TO ASSIGN A SUPERVISOR START //////////////////////////////////////////

		   if (isset($_POST["assign_btn"])) {

			  // Ashanti Region //
			  $supervisor_1_ashanti_applied_arts = $_POST["selected_supervisor_1_ashanti_applied_arts"];
			  $supervisor_2_ashanti_applied_arts = $_POST["selected_supervisor_2_ashanti_applied_arts"];

			  $supervisor_1_ashanti_applied_science = $_POST["selected_supervisor_1_ashanti_applied_science"];
			  $supervisor_2_ashanti_applied_science = $_POST["selected_supervisor_2_ashanti_applied_science"];

			  $supervisor_1_ashanti_built_environment = $_POST["selected_supervisor_1_ashanti_built_environment"];
			  $supervisor_2_ashanti_built_environment = $_POST["selected_supervisor_2_ashanti_built_environment"];

			  $supervisor_1_ashanti_business = $_POST["selected_supervisor_1_ashanti_business"];
			  $supervisor_2_ashanti_business = $_POST["selected_supervisor_2_ashanti_business"];

			  $supervisor_1_ashanti_engineering = $_POST["selected_supervisor_1_ashanti_engineering"];
			  $supervisor_2_ashanti_engineering = $_POST["selected_supervisor_2_ashanti_engineering"];



			  // Ahafo Region //
			  $supervisor_1_ahafo_applied_arts = $_POST["selected_supervisor_1_ahafo_applied_arts"];
			  $supervisor_2_ahafo_applied_arts = $_POST["selected_supervisor_2_ahafo_applied_arts"];

			  $supervisor_1_ahafo_applied_science = $_POST["selected_supervisor_1_ahafo_applied_science"];
			  $supervisor_2_ahafo_applied_science = $_POST["selected_supervisor_2_ahafo_applied_science"];

			  $supervisor_1_ahafo_built_environment = $_POST["selected_supervisor_1_ahafo_built_environment"];
			  $supervisor_2_ahafo_built_environment = $_POST["selected_supervisor_2_ahafo_built_environment"];

			  $supervisor_1_ahafo_business = $_POST["selected_supervisor_1_ahafo_business"];
			  $supervisor_2_ahafo_business = $_POST["selected_supervisor_2_ahafo_business"];

			  $supervisor_1_ahafo_engineering = $_POST["selected_supervisor_1_ahafo_engineering"];
			  $supervisor_2_ahafo_engineering = $_POST["selected_supervisor_2_ahafo_engineering"];


			  // Bono East Region //
			  $supervisor_1_bono_east_applied_arts = $_POST["selected_supervisor_1_bono_east_applied_arts"];
			  $supervisor_2_bono_east_applied_arts = $_POST["selected_supervisor_2_bono_east_applied_arts"];

			  $supervisor_1_bono_east_applied_science = $_POST["selected_supervisor_1_bono_east_applied_science"];
			  $supervisor_2_bono_east_applied_science = $_POST["selected_supervisor_2_bono_east_applied_science"];

			  $supervisor_1_bono_east_built_environment = $_POST["selected_supervisor_1_bono_east_built_environment"];
			  $supervisor_2_bono_east_built_environment = $_POST["selected_supervisor_2_bono_east_built_environment"];

			  $supervisor_1_bono_east_business = $_POST["selected_supervisor_1_bono_east_business"];
			  $supervisor_2_bono_east_business = $_POST["selected_supervisor_2_bono_east_business"];

			  $supervisor_1_bono_east_engineering = $_POST["selected_supervisor_1_bono_east_engineering"];
			  $supervisor_2_bono_east_engineering = $_POST["selected_supervisor_2_bono_east_engineering"];


			  // Brong Ahafo Region //
			  $supervisor_1_brong_ahafo_applied_arts = $_POST["selected_supervisor_1_brong_ahafo_applied_arts"];
			  $supervisor_2_brong_ahafo_applied_arts = $_POST["selected_supervisor_2_brong_ahafo_applied_arts"];

			  $supervisor_1_brong_ahafo_applied_science = $_POST["selected_supervisor_1_brong_ahafo_applied_science"];
			  $supervisor_2_brong_ahafo_applied_science = $_POST["selected_supervisor_2_brong_ahafo_applied_science"];

			  $supervisor_1_brong_ahafo_built_environment = $_POST["selected_supervisor_1_brong_ahafo_built_environment"];
			  $supervisor_2_brong_ahafo_built_environment = $_POST["selected_supervisor_2_brong_ahafo_built_environment"];

			  $supervisor_1_brong_ahafo_business = $_POST["selected_supervisor_1_brong_ahafo_business"];
			  $supervisor_2_brong_ahafo_business = $_POST["selected_supervisor_2_brong_ahafo_business"];

			  $supervisor_1_brong_ahafo_engineering = $_POST["selected_supervisor_1_brong_ahafo_engineering"];
			  $supervisor_2_brong_ahafo_engineering = $_POST["selected_supervisor_2_brong_ahafo_engineering"];


              // Central Region //
			  $supervisor_1_central_applied_arts = $_POST["selected_supervisor_1_central_applied_arts"];
			  $supervisor_2_central_applied_arts = $_POST["selected_supervisor_2_central_applied_arts"];

			  $supervisor_1_central_applied_science = $_POST["selected_supervisor_1_central_applied_science"];
			  $supervisor_2_central_applied_science = $_POST["selected_supervisor_2_central_applied_science"];

			  $supervisor_1_central_built_environment = $_POST["selected_supervisor_1_central_built_environment"];
			  $supervisor_2_central_built_environment = $_POST["selected_supervisor_2_central_built_environment"];

			  $supervisor_1_central_business = $_POST["selected_supervisor_1_central_business"];
			  $supervisor_2_central_business = $_POST["selected_supervisor_2_central_business"];

			  $supervisor_1_central_engineering = $_POST["selected_supervisor_1_central_engineering"];
			  $supervisor_2_central_engineering = $_POST["selected_supervisor_2_central_engineering"];


			  // Eastern Region //
			  $supervisor_1_eastern_applied_arts = $_POST["selected_supervisor_1_eastern_applied_arts"];
			  $supervisor_2_eastern_applied_arts = $_POST["selected_supervisor_2_eastern_applied_arts"];

			  $supervisor_1_eastern_applied_science = $_POST["selected_supervisor_1_eastern_applied_science"];
			  $supervisor_2_eastern_applied_science = $_POST["selected_supervisor_2_eastern_applied_science"];

			  $supervisor_1_eastern_built_environment = $_POST["selected_supervisor_1_eastern_built_environment"];
			  $supervisor_2_eastern_built_environment = $_POST["selected_supervisor_2_eastern_built_environment"];

			  $supervisor_1_eastern_business = $_POST["selected_supervisor_1_eastern_business"];
			  $supervisor_2_eastern_business = $_POST["selected_supervisor_2_eastern_business"];

			  $supervisor_1_eastern_engineering = $_POST["selected_supervisor_1_eastern_engineering"];
			  $supervisor_2_eastern_engineering = $_POST["selected_supervisor_2_eastern_engineering"];


			   // Greater Accra Region //
			   $supervisor_1_greater_accra_applied_arts = $_POST["selected_supervisor_1_greater_accra_applied_arts"];
			   $supervisor_2_greater_accra_applied_arts = $_POST["selected_supervisor_2_greater_accra_applied_arts"];
 
			   $supervisor_1_greater_accra_applied_science = $_POST["selected_supervisor_1_greater_accra_applied_science"];
			   $supervisor_2_greater_accra_applied_science = $_POST["selected_supervisor_2_greater_accra_applied_science"];
 
			   $supervisor_1_greater_accra_built_environment = $_POST["selected_supervisor_1_greater_accra_built_environment"];
			   $supervisor_2_greater_accra_built_environment = $_POST["selected_supervisor_2_greater_accra_built_environment"];
 
			   $supervisor_1_greater_accra_business = $_POST["selected_supervisor_1_greater_accra_business"];
			   $supervisor_2_greater_accra_business = $_POST["selected_supervisor_2_greater_accra_business"];
 
			   $supervisor_1_greater_accra_engineering = $_POST["selected_supervisor_1_greater_accra_engineering"];
			   $supervisor_2_greater_accra_engineering = $_POST["selected_supervisor_2_greater_accra_engineering"];


			   // North East Region // 
			   $supervisor_1_north_east_applied_arts = $_POST["selected_supervisor_1_north_east_applied_arts"];
			   $supervisor_2_north_east_applied_arts = $_POST["selected_supervisor_2_north_east_applied_arts"];
 
			   $supervisor_1_north_east_applied_science = $_POST["selected_supervisor_1_north_east_applied_science"];
			   $supervisor_2_north_east_applied_science = $_POST["selected_supervisor_2_north_east_applied_science"];
 
			   $supervisor_1_north_east_built_environment = $_POST["selected_supervisor_1_north_east_built_environment"];
			   $supervisor_2_north_east_built_environment = $_POST["selected_supervisor_2_north_east_built_environment"];
 
			   $supervisor_1_north_east_business = $_POST["selected_supervisor_1_north_east_business"];
			   $supervisor_2_north_east_business = $_POST["selected_supervisor_2_north_east_business"];
 
			   $supervisor_1_north_east_engineering = $_POST["selected_supervisor_1_north_east_engineering"];
			   $supervisor_2_north_east_engineering = $_POST["selected_supervisor_2_north_east_engineering"];


			   // Northern Region // 
			   $supervisor_1_northern_applied_arts = $_POST["selected_supervisor_1_northern_applied_arts"];
			   $supervisor_2_northern_applied_arts = $_POST["selected_supervisor_2_northern_applied_arts"];
 
			   $supervisor_1_northern_applied_science = $_POST["selected_supervisor_1_northern_applied_science"];
			   $supervisor_2_northern_applied_science = $_POST["selected_supervisor_2_northern_applied_science"];
 
			   $supervisor_1_northern_built_environment = $_POST["selected_supervisor_1_northern_built_environment"];
			   $supervisor_2_northern_built_environment = $_POST["selected_supervisor_2_northern_built_environment"];
 
			   $supervisor_1_northern_business = $_POST["selected_supervisor_1_northern_business"];
			   $supervisor_2_northern_business = $_POST["selected_supervisor_2_northern_business"];
 
			   $supervisor_1_northern_engineering = $_POST["selected_supervisor_1_northern_engineering"];
			   $supervisor_2_northern_engineering = $_POST["selected_supervisor_2_northern_engineering"];


			   // Oti Region // 
			   $supervisor_1_oti_applied_arts = $_POST["selected_supervisor_1_oti_applied_arts"];
			   $supervisor_2_oti_applied_arts = $_POST["selected_supervisor_2_oti_applied_arts"];
 
			   $supervisor_1_oti_applied_science = $_POST["selected_supervisor_1_oti_applied_science"];
			   $supervisor_2_oti_applied_science = $_POST["selected_supervisor_2_oti_applied_science"];
 
			   $supervisor_1_oti_built_environment = $_POST["selected_supervisor_1_oti_built_environment"];
			   $supervisor_2_oti_built_environment = $_POST["selected_supervisor_2_oti_built_environment"];
 
			   $supervisor_1_oti_business = $_POST["selected_supervisor_1_oti_business"];
			   $supervisor_2_oti_business = $_POST["selected_supervisor_2_oti_business"];
 
			   $supervisor_1_oti_engineering = $_POST["selected_supervisor_1_oti_engineering"];
			   $supervisor_2_oti_engineering = $_POST["selected_supervisor_2_oti_engineering"];


			   // Savannah Region // 
			   $supervisor_1_savannah_applied_arts = $_POST["selected_supervisor_1_savannah_applied_arts"];
			   $supervisor_2_savannah_applied_arts = $_POST["selected_supervisor_2_savannah_applied_arts"];
 
			   $supervisor_1_savannah_applied_science = $_POST["selected_supervisor_1_savannah_applied_science"];
			   $supervisor_2_savannah_applied_science = $_POST["selected_supervisor_2_savannah_applied_science"];
 
			   $supervisor_1_savannah_built_environment = $_POST["selected_supervisor_1_savannah_built_environment"];
			   $supervisor_2_savannah_built_environment = $_POST["selected_supervisor_2_savannah_built_environment"];
 
			   $supervisor_1_savannah_business = $_POST["selected_supervisor_1_savannah_business"];
			   $supervisor_2_savannah_business = $_POST["selected_supervisor_2_savannah_business"];
 
			   $supervisor_1_savannah_engineering = $_POST["selected_supervisor_1_savannah_engineering"];
			   $supervisor_2_savannah_engineering = $_POST["selected_supervisor_2_savannah_engineering"];


			   // Upper East Region // 
			   $supervisor_1_upper_east_applied_arts = $_POST["selected_supervisor_1_upper_east_applied_arts"];
			   $supervisor_2_upper_east_applied_arts = $_POST["selected_supervisor_2_upper_east_applied_arts"];
 
			   $supervisor_1_upper_east_applied_science = $_POST["selected_supervisor_1_upper_east_applied_science"];
			   $supervisor_2_upper_east_applied_science = $_POST["selected_supervisor_2_upper_east_applied_science"];
 
			   $supervisor_1_upper_east_built_environment = $_POST["selected_supervisor_1_upper_east_built_environment"];
			   $supervisor_2_upper_east_built_environment = $_POST["selected_supervisor_2_upper_east_built_environment"];
 
			   $supervisor_1_upper_east_business = $_POST["selected_supervisor_1_upper_east_business"];
			   $supervisor_2_upper_east_business = $_POST["selected_supervisor_2_upper_east_business"];
 
			   $supervisor_1_upper_east_engineering = $_POST["selected_supervisor_1_upper_east_engineering"];
			   $supervisor_2_upper_east_engineering = $_POST["selected_supervisor_2_upper_east_engineering"];


			   // Upper West Region // 
			   $supervisor_1_upper_west_applied_arts = $_POST["selected_supervisor_1_upper_west_applied_arts"];
			   $supervisor_2_upper_west_applied_arts = $_POST["selected_supervisor_2_upper_west_applied_arts"];
 
			   $supervisor_1_upper_west_applied_science = $_POST["selected_supervisor_1_upper_west_applied_science"];
			   $supervisor_2_upper_west_applied_science = $_POST["selected_supervisor_2_upper_west_applied_science"];
 
			   $supervisor_1_upper_west_built_environment = $_POST["selected_supervisor_1_upper_west_built_environment"];
			   $supervisor_2_upper_west_built_environment = $_POST["selected_supervisor_2_upper_west_built_environment"];
 
			   $supervisor_1_upper_west_business = $_POST["selected_supervisor_1_upper_west_business"];
			   $supervisor_2_upper_west_business = $_POST["selected_supervisor_2_upper_west_business"];
 
			   $supervisor_1_upper_west_engineering = $_POST["selected_supervisor_1_upper_west_engineering"];
			   $supervisor_2_upper_west_engineering = $_POST["selected_supervisor_2_upper_west_engineering"];


			   // Volta Region // 
			   $supervisor_1_volta_applied_arts = $_POST["selected_supervisor_1_volta_applied_arts"];
			   $supervisor_2_volta_applied_arts = $_POST["selected_supervisor_2_volta_applied_arts"];
 
			   $supervisor_1_volta_applied_science = $_POST["selected_supervisor_1_volta_applied_science"];
			   $supervisor_2_volta_applied_science = $_POST["selected_supervisor_2_volta_applied_science"];
 
			   $supervisor_1_volta_built_environment = $_POST["selected_supervisor_1_volta_built_environment"];
			   $supervisor_2_volta_built_environment = $_POST["selected_supervisor_2_volta_built_environment"];
 
			   $supervisor_1_volta_business = $_POST["selected_supervisor_1_volta_business"];
			   $supervisor_2_volta_business = $_POST["selected_supervisor_2_volta_business"];
 
			   $supervisor_1_volta_engineering = $_POST["selected_supervisor_1_volta_engineering"];
			   $supervisor_2_volta_engineering = $_POST["selected_supervisor_2_volta_engineering"];


			   // Western North Region // 
			   $supervisor_1_western_north_applied_arts = $_POST["selected_supervisor_1_western_north_applied_arts"];
			   $supervisor_2_western_north_applied_arts = $_POST["selected_supervisor_2_western_north_applied_arts"];
 
			   $supervisor_1_western_north_applied_science = $_POST["selected_supervisor_1_western_north_applied_science"];
			   $supervisor_2_western_north_applied_science = $_POST["selected_supervisor_2_western_north_applied_science"];
 
			   $supervisor_1_western_north_built_environment = $_POST["selected_supervisor_1_western_north_built_environment"];
			   $supervisor_2_western_north_built_environment = $_POST["selected_supervisor_2_western_north_built_environment"];
 
			   $supervisor_1_western_north_business = $_POST["selected_supervisor_1_western_north_business"];
			   $supervisor_2_western_north_business = $_POST["selected_supervisor_2_western_north_business"];
 
			   $supervisor_1_western_north_engineering = $_POST["selected_supervisor_1_western_north_engineering"];
			   $supervisor_2_western_north_engineering = $_POST["selected_supervisor_2_western_north_engineering"];


			   // Western Region // 
			   $supervisor_1_western_applied_arts = $_POST["selected_supervisor_1_western_applied_arts"];
			   $supervisor_2_western_applied_arts = $_POST["selected_supervisor_2_western_applied_arts"];
 
			   $supervisor_1_western_applied_science = $_POST["selected_supervisor_1_western_applied_science"];
			   $supervisor_2_western_applied_science = $_POST["selected_supervisor_2_western_applied_science"];
 
			   $supervisor_1_western_built_environment = $_POST["selected_supervisor_1_western_built_environment"];
			   $supervisor_2_western_built_environment = $_POST["selected_supervisor_2_western_built_environment"];
 
			   $supervisor_1_western_business = $_POST["selected_supervisor_1_western_business"];
			   $supervisor_2_western_business = $_POST["selected_supervisor_2_western_business"];
 
			   $supervisor_1_western_engineering = $_POST["selected_supervisor_1_western_engineering"];
			   $supervisor_2_western_engineering = $_POST["selected_supervisor_2_western_engineering"];



			   $check_database_if_assignment_exist = "SELECT * FROM assigned_supervisors WHERE id = '1' LIMIT 1";
			   $execute_check_database = mysqli_query($db, $check_database_if_assignment_exist);
			   $get_check_database_details = mysqli_num_rows($execute_check_database);

			   
			   
			   if ($get_check_database_details == 1) {

				   // Ashanti Region //
				   $mysql_update_ashanti_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_ashanti_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_ashanti_applied_arts',
																				    `supervisor_1_faculty_of_applied_science` = '$supervisor_1_ashanti_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_ashanti_applied_science', 
																				    `supervisor_1_faculty_of_built_environment` = '$supervisor_1_ashanti_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_ashanti_built_environment', 
																					`supervisor_1_faculty_of_business` = '$supervisor_1_ashanti_business', `supervisor_2_faculty_of_business` = '$supervisor_2_ashanti_business', 
																					`supervisor_1_faculty_of_engineering` = '$supervisor_1_ashanti_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_ashanti_engineering' WHERE `regions` = 'Ashanti Region'";
				  $execute_update_for_ashanti_query = mysqli_query($db, $mysql_update_ashanti_query);	
				  
				  // Ahafo Region //
				  $mysql_update_ahafo_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_ahafo_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_ahafo_applied_arts',
																				    `supervisor_1_faculty_of_applied_science` = '$supervisor_1_ahafo_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_ahafo_applied_science', 
																					`supervisor_1_faculty_of_built_environment` = '$supervisor_1_ahafo_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_ahafo_built_environment', 
																					`supervisor_1_faculty_of_business` = '$supervisor_1_ahafo_business', `supervisor_2_faculty_of_business` = '$supervisor_2_ahafo_business', 
																					`supervisor_1_faculty_of_engineering` = '$supervisor_1_ahafo_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_ahafo_engineering' WHERE `regions` = 'Ahafo Region'";
				   $execute_update_for_ahafo_query = mysqli_query($db, $mysql_update_ahafo_query);
				   
				  //Bono East Region //
				  $mysql_update_bono_east_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_bono_east_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_bono_east_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_bono_east_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_bono_east_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_bono_east_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_bono_east_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_bono_east_business', `supervisor_2_faculty_of_business` = '$supervisor_2_bono_east_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_bono_east_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_bono_east_engineering' WHERE `regions` = 'Bono East Region'";
				   $execute_update_for_bono_east_query = mysqli_query($db, $mysql_update_bono_east_query);
				   
				   //Brong Ahafo Region //
				  $mysql_update_brong_ahafo_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_brong_ahafo_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_brong_ahafo_applied_arts',
																							`supervisor_1_faculty_of_applied_science` = '$supervisor_1_brong_ahafo_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_brong_ahafo_applied_science', 
																							`supervisor_1_faculty_of_built_environment` = '$supervisor_1_brong_ahafo_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_brong_ahafo_built_environment', 
																							`supervisor_1_faculty_of_business` = '$supervisor_1_brong_ahafo_business', `supervisor_2_faculty_of_business` = '$supervisor_2_brong_ahafo_business', 
																							`supervisor_1_faculty_of_engineering` = '$supervisor_1_brong_ahafo_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_brong_ahafo_engineering' WHERE `regions` = 'Brong Ahafo Region'";
				   $execute_update_for_brong_ahafo_query = mysqli_query($db, $mysql_update_brong_ahafo_query);


				   //Central Region // 
				  $mysql_update_central_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_central_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_central_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_central_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_central_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_central_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_central_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_central_business', `supervisor_2_faculty_of_business` = '$supervisor_2_central_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_central_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_central_engineering' WHERE `regions` = 'Central Region'";
				  $execute_update_for_central_query = mysqli_query($db, $mysql_update_central_query);
				  

				  //Eastern Region // 
				  $mysql_update_eastern_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_eastern_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_eastern_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_eastern_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_eastern_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_eastern_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_eastern_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_eastern_business', `supervisor_2_faculty_of_business` = '$supervisor_2_eastern_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_eastern_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_eastern_engineering' WHERE `regions` = 'Eastern Region'";
                  $execute_update_for_eastern_query = mysqli_query($db, $mysql_update_eastern_query);
				   

				  //Greater Accra Region // 
				  $mysql_update_greater_accra_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_greater_accra_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_greater_accra_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_greater_accra_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_greater_accra_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_greater_accra_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_greater_accra_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_greater_accra_business', `supervisor_2_faculty_of_business` = '$supervisor_2_greater_accra_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_greater_accra_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_greater_accra_engineering' WHERE `regions` = 'Greater Accra Region'";
				  $execute_update_for_greater_accra_query = mysqli_query($db, $mysql_update_greater_accra_query);


				  //North East Region // 
				  $mysql_update_north_east_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_north_east_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_north_east_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_north_east_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_north_east_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_north_east_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_north_east_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_north_east_business', `supervisor_2_faculty_of_business` = '$supervisor_2_north_east_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_north_east_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_north_east_engineering' WHERE `regions` = 'North East Region'";
				  $execute_update_for_north_east_query = mysqli_query($db, $mysql_update_north_east_query);
				  

				  // Northern Region // 
				  $mysql_update_northern_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_northern_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_northern_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_northern_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_northern_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_northern_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_northern_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_northern_business', `supervisor_2_faculty_of_business` = '$supervisor_2_northern_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_northern_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_northern_engineering' WHERE `regions` = 'Northern Region'";
				  $execute_update_for_northern_query = mysqli_query($db, $mysql_update_northern_query);


				  // Oti Region // 
				  $mysql_update_oti_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_oti_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_oti_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_oti_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_oti_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_oti_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_oti_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_oti_business', `supervisor_2_faculty_of_business` = '$supervisor_2_oti_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_oti_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_oti_engineering' WHERE `regions` = 'Oti Region'";
				  $execute_update_for_oti_query = mysqli_query($db, $mysql_update_oti_query);


				  // Savannah Region // 
				  $mysql_update_savannah_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_savannah_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_savannah_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_savannah_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_savannah_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_savannah_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_savannah_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_savannah_business', `supervisor_2_faculty_of_business` = '$supervisor_2_savannah_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_savannah_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_savannah_engineering' WHERE `regions` = 'Savannah Region'";
				  $execute_update_for_savannah_query = mysqli_query($db, $mysql_update_savannah_query);


				  // Upper East Region // 
				  $mysql_update_upper_east_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_upper_east_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_upper_east_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_upper_east_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_upper_east_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_upper_east_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_upper_east_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_upper_east_business', `supervisor_2_faculty_of_business` = '$supervisor_2_upper_east_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_upper_east_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_upper_east_engineering' WHERE `regions` = 'Upper East Region'";
				  $execute_update_for_upper_east_query = mysqli_query($db, $mysql_update_upper_east_query);


				  // Upper West Region // 
				  $mysql_update_upper_west_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_upper_west_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_upper_west_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_upper_west_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_upper_west_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_upper_west_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_upper_west_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_upper_west_business', `supervisor_2_faculty_of_business` = '$supervisor_2_upper_west_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_upper_west_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_upper_west_engineering' WHERE `regions` = 'Upper West Region'";
				  $execute_update_for_upper_west_query = mysqli_query($db, $mysql_update_upper_west_query);


				  // Volta Region // 
				  $mysql_update_volta_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_volta_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_volta_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_volta_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_volta_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_volta_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_volta_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_volta_business', `supervisor_2_faculty_of_business` = '$supervisor_2_volta_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_volta_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_volta_engineering' WHERE `regions` = 'Volta Region'";
				  $execute_update_for_volta_query = mysqli_query($db, $mysql_update_volta_query);


				  // Volta Region // 
				  $mysql_update_volta_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_volta_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_volta_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_volta_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_volta_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_volta_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_volta_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_volta_business', `supervisor_2_faculty_of_business` = '$supervisor_2_volta_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_volta_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_volta_engineering' WHERE `regions` = 'Volta Region'";
				  $execute_update_for_volta_query = mysqli_query($db, $mysql_update_volta_query);


				  // Western North Region // 
				  $mysql_update_western_north_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_western_north_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_western_north_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_western_north_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_western_north_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_western_north_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_western_north_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_western_north_business', `supervisor_2_faculty_of_business` = '$supervisor_2_western_north_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_western_north_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_western_north_engineering' WHERE `regions` = 'Western North Region'";
				  $execute_update_for_western_north_query = mysqli_query($db, $mysql_update_western_north_query);


				 // Western Region // 
				  $mysql_update_western_query = "UPDATE `assigned_supervisors` SET `supervisor_1_faculty_of_applied_arts` = '$supervisor_1_western_applied_arts', `supervisor_2_faculty_of_applied_arts` = '$supervisor_2_western_applied_arts',
																						`supervisor_1_faculty_of_applied_science` = '$supervisor_1_western_applied_science', `supervisor_2_faculty_of_applied_science` = '$supervisor_2_western_applied_science', 
																						`supervisor_1_faculty_of_built_environment` = '$supervisor_1_western_built_environment',  `supervisor_2_faculty_of_built_environment` = '$supervisor_2_western_built_environment', 
																						`supervisor_1_faculty_of_business` = '$supervisor_1_western_business', `supervisor_2_faculty_of_business` = '$supervisor_2_western_business', 
																						`supervisor_1_faculty_of_engineering` = '$supervisor_1_western_engineering', `supervisor_2_faculty_of_engineering` = '$supervisor_2_western_engineering' WHERE `regions` = 'Western Region'";
				  $execute_update_for_western_query = mysqli_query($db, $mysql_update_western_query);

				  //echo "<script>alert ('Supervisors has been assigned successfully ...');</script>";


				   
				// Ashanti Region Insert //
				$mysql_insert_ashanti_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Ashanti Region', '$supervisor_1_ashanti_applied_arts', '$supervisor_2_ashanti_applied_arts', 
											                                   '$supervisor_1_ashanti_applied_science', '$supervisor_2_ashanti_applied_science', 
																			   '$supervisor_1_ashanti_built_environment', '$supervisor_2_ashanti_built_environment', 
																			   '$supervisor_1_ashanti_business', '$supervisor_2_ashanti_business', 
																			   '$supervisor_1_ashanti_engineering', '$supervisor_2_ashanti_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_ashanti_query = mysqli_query($db, $mysql_insert_ashanti_query);
				

				// Ahafo Region Insert //
				$mysql_insert_ahafo_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Ahafo Region', '$supervisor_1_ahafo_applied_arts', '$supervisor_2_ahafo_applied_arts', 
											                                   '$supervisor_1_ahafo_applied_science', '$supervisor_2_ahafo_applied_science', 
																			   '$supervisor_1_ahafo_built_environment', '$supervisor_2_ahafo_built_environment', 
																			   '$supervisor_1_ahafo_business', '$supervisor_2_ahafo_business', 
																			   '$supervisor_1_ahafo_engineering', '$supervisor_2_ahafo_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_ahafo_query = mysqli_query($db, $mysql_insert_ahafo_query);
				


				// Bono East Region Insert //
				$mysql_insert_bono_east_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Bono East Region', '$supervisor_1_bono_east_applied_arts', '$supervisor_2_bono_east_applied_arts', 
											                                   '$supervisor_1_bono_east_applied_science', '$supervisor_2_bono_east_applied_science', 
																			   '$supervisor_1_bono_east_built_environment', '$supervisor_2_bono_east_built_environment', 
																			   '$supervisor_1_bono_east_business', '$supervisor_2_bono_east_business', 
																			   '$supervisor_1_bono_east_engineering', '$supervisor_2_bono_east_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_bono_east_query = mysqli_query($db, $mysql_insert_bono_east_query);
				


				// Brong Ahafo Region Insert //
				$mysql_insert_brong_ahafo_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Brong Ahafo Region', '$supervisor_1_brong_ahafo_applied_arts', '$supervisor_2_brong_ahafo_applied_arts', 
											                                   '$supervisor_1_brong_ahafo_applied_science', '$supervisor_2_brong_ahafo_applied_science', 
																			   '$supervisor_1_brong_ahafo_built_environment', '$supervisor_2_brong_ahafo_built_environment', 
																			   '$supervisor_1_brong_ahafo_business', '$supervisor_2_brong_ahafo_business', 
																			   '$supervisor_1_brong_ahafo_engineering', '$supervisor_2_brong_ahafo_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_brong_ahafo_query = mysqli_query($db, $mysql_insert_brong_ahafo_query);
				

				// Central Region Insert //
				$mysql_insert_central_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Central Region', '$supervisor_1_central_applied_arts', '$supervisor_2_central_applied_arts', 
											                                   '$supervisor_1_central_applied_science', '$supervisor_2_central_applied_science', 
																			   '$supervisor_1_central_built_environment', '$supervisor_2_central_built_environment', 
																			   '$supervisor_1_central_business', '$supervisor_2_central_business', 
																			   '$supervisor_1_central_engineering', '$supervisor_2_central_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_central_query = mysqli_query($db, $mysql_insert_central_query);
				

				// Eastern Region Insert //
				$mysql_insert_eastern_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Eastern Region', '$supervisor_1_eastern_applied_arts', '$supervisor_2_eastern_applied_arts', 
											                                   '$supervisor_1_eastern_applied_science', '$supervisor_2_eastern_applied_science', 
																			   '$supervisor_1_eastern_built_environment', '$supervisor_2_eastern_built_environment', 
																			   '$supervisor_1_eastern_business', '$supervisor_2_eastern_business', 
																			   '$supervisor_1_eastern_engineering', '$supervisor_2_eastern_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_eastern_query = mysqli_query($db, $mysql_insert_eastern_query);
				

			
				// Greater Accra Region Insert //
				$mysql_insert_greater_accra_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Greater Accra Region', '$supervisor_1_greater_accra_applied_arts', '$supervisor_2_greater_accra_applied_arts', 
											                                   '$supervisor_1_greater_accra_applied_science', '$supervisor_2_greater_accra_applied_science', 
																			   '$supervisor_1_greater_accra_built_environment', '$supervisor_2_greater_accra_built_environment', 
																			   '$supervisor_1_greater_accra_business', '$supervisor_2_greater_accra_business', 
																			   '$supervisor_1_greater_accra_engineering', '$supervisor_2_greater_accra_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_greater_accra_query = mysqli_query($db, $mysql_insert_greater_accra_query);
				


				// North East Region Insert //
				$mysql_insert_north_east_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'North East Region', '$supervisor_1_north_east_applied_arts', '$supervisor_2_north_east_applied_arts', 
											                                   '$supervisor_1_north_east_applied_science', '$supervisor_2_north_east_applied_science', 
																			   '$supervisor_1_north_east_built_environment', '$supervisor_2_north_east_built_environment', 
																			   '$supervisor_1_north_east_business', '$supervisor_2_north_east_business', 
																			   '$supervisor_1_north_east_engineering', '$supervisor_2_north_east_engineering', CURRENT_TIMESTAMP)";
			     $execute_insert_for_north_east_query = mysqli_query($db, $mysql_insert_north_east_query);
				

				// Northern Region Insert //
				$mysql_insert_northern_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Northern Region', '$supervisor_1_northern_applied_arts', '$supervisor_2_northern_applied_arts', 
											                                   '$supervisor_1_northern_applied_science', '$supervisor_2_northern_applied_science', 
																			   '$supervisor_1_northern_built_environment', '$supervisor_2_northern_built_environment', 
																			   '$supervisor_1_northern_business', '$supervisor_2_northern_business', 
																			   '$supervisor_1_northern_engineering', '$supervisor_2_northern_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_northern_query = mysqli_query($db, $mysql_insert_northern_query);
				

				// Oti Region Insert //
				$mysql_insert_oti_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Oti Region', '$supervisor_1_oti_applied_arts', '$supervisor_2_oti_applied_arts', 
											                                   '$supervisor_1_oti_applied_science', '$supervisor_2_oti_applied_science', 
																			   '$supervisor_1_oti_built_environment', '$supervisor_2_oti_built_environment', 
																			   '$supervisor_1_oti_business', '$supervisor_2_oti_business', 
																			   '$supervisor_1_oti_engineering', '$supervisor_2_oti_engineering', CURRENT_TIMESTAMP)";
				$execute_insert_for_oti_query = mysqli_query($db, $mysql_insert_oti_query);
				

				// Savannah Region Insert //
				$mysql_insert_savannah_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Savannah Region', '$supervisor_1_savannah_applied_arts', '$supervisor_2_savannah_applied_arts', 
											                                   '$supervisor_1_savannah_applied_science', '$supervisor_2_savannah_applied_science', 
																			   '$supervisor_1_savannah_built_environment', '$supervisor_2_savannah_built_environment', 
																			   '$supervisor_1_savannah_business', '$supervisor_2_savannah_business', 
																			   '$supervisor_1_savannah_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_savannah_query = mysqli_query($db, $mysql_insert_savannah_query);
				


				// Upper East Region Insert //
				$mysql_insert_upper_east_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Upper East Region', '$supervisor_1_upper_east_applied_arts', '$supervisor_2_upper_east_applied_arts', 
											                                   '$supervisor_1_upper_east_applied_science', '$supervisor_2_upper_east_applied_science', 
																			   '$supervisor_1_upper_east_built_environment', '$supervisor_2_upper_east_built_environment', 
																			   '$supervisor_1_upper_east_business', '$supervisor_2_upper_east_business', 
																			   '$supervisor_1_upper_east_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_upper_east_query = mysqli_query($db, $mysql_insert_upper_east_query);
				


				// Upper West Region Insert //
				$mysql_insert_upper_west_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Upper West Region', '$supervisor_1_upper_west_applied_arts', '$supervisor_2_upper_west_applied_arts', 
											                                   '$supervisor_1_upper_west_applied_science', '$supervisor_2_upper_west_applied_science', 
																			   '$supervisor_1_upper_west_built_environment', '$supervisor_2_upper_west_built_environment', 
																			   '$supervisor_1_upper_west_business', '$supervisor_2_upper_west_business', 
																			   '$supervisor_1_upper_west_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_upper_west_query = mysqli_query($db, $mysql_insert_upper_west_query);
				

				// Volta Region Insert //
				$mysql_insert_volta_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Volta Region', '$supervisor_1_volta_applied_arts', '$supervisor_2_volta_applied_arts', 
											                                   '$supervisor_1_volta_applied_science', '$supervisor_2_volta_applied_science', 
																			   '$supervisor_1_volta_built_environment', '$supervisor_2_volta_built_environment', 
																			   '$supervisor_1_volta_business', '$supervisor_2_volta_business', 
																			   '$supervisor_1_volta_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_volta_query = mysqli_query($db, $mysql_insert_volta_query);
				


				//Western North Region Insert //
				$mysql_insert_western_north_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Western North Region', '$supervisor_1_western_north_applied_arts', '$supervisor_2_western_north_applied_arts', 
											                                   '$supervisor_1_western_north_applied_science', '$supervisor_2_western_north_applied_science', 
																			   '$supervisor_1_western_north_built_environment', '$supervisor_2_western_north_built_environment', 
																			   '$supervisor_1_western_north_business', '$supervisor_2_western_north_business', 
																			   '$supervisor_1_western_north_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_western_north_query = mysqli_query($db, $mysql_insert_western_north_query);
				


				//Western Region Insert //
				$mysql_insert_western_query = "INSERT INTO `assigned_supervisors` (`id`, `regions`, `supervisor_1_faculty_of_applied_arts`, `supervisor_2_faculty_of_applied_arts`, 
				                                                                                    `supervisor_1_faculty_of_applied_science`, `supervisor_2_faculty_of_applied_science`, 
																									`supervisor_1_faculty_of_built_environment`, `supervisor_2_faculty_of_built_environment`, 
																									`supervisor_1_faculty_of_business`, `supervisor_2_faculty_of_business`, 
																									`supervisor_1_faculty_of_engineering`, `supervisor_2_faculty_of_engineering`, `date`) 
											   VALUES (NULL, 'Western Region', '$supervisor_1_western_applied_arts', '$supervisor_2_western_applied_arts', 
											                                   '$supervisor_1_western_applied_science', '$supervisor_2_western_applied_science', 
																			   '$supervisor_1_western_built_environment', '$supervisor_2_western_built_environment', 
																			   '$supervisor_1_western_business', '$supervisor_2_western_business', 
																			   '$supervisor_1_western_engineering', savannah', CURRENT_TIMESTAMP)";
				$execute_insert_for_western_query = mysqli_query($db, $mysql_insert_western_query);
				
				echo "<script>alert ('Supervisors has been assigned successfully ...');</script>";


			   }else {

				echo "<script>alert ('Error... Supervisors assigning failed.!!');</script>";

			   }






			   // Assigning Supervisors To Virtual Attachment Students //

			   // Faculty of Applied Arts //
			   $assign_virtual_students_supervisors_greater_accra_applied_arts = "UPDATE virtual_attachment_registration SET school_supervisor_name = '$supervisor_1_greater_accra_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Greater Accra Region'";
			   $execute_assign_virtual_students_supervisors_greater_accra_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_applied_arts);


			   // Faculty of Applied Science // 
			   $assign_virtual_students_supervisors_greater_accra_applied_science = "UPDATE virtual_attachment_registration SET school_supervisor_name = '$supervisor_1_greater_accra_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Greater Accra Region'";
			   $execute_assign_virtual_students_supervisors_greater_accra_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_applied_science);


			    // Faculty of Built Environment // 
				$assign_virtual_students_supervisors_greater_accra_built_environment = "UPDATE virtual_attachment_registration SET school_supervisor_name = '$supervisor_1_greater_accra_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Greater Accra Region'";
				$execute_assign_virtual_students_supervisors_greater_accra_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_built_environment);


				 // Faculty of Business // 
				 $assign_virtual_students_supervisors_greater_accra_business = "UPDATE virtual_attachment_registration SET school_supervisor_name = '$supervisor_1_greater_accra_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Greater Accra Region'";
				 $execute_assign_virtual_students_supervisors_greater_accra_business = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_business);


				  // Faculty of Engineering // 
				  $assign_virtual_students_supervisors_greater_accra_engineering = "UPDATE virtual_attachment_registration SET school_supervisor_name = '$supervisor_1_greater_accra_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Greater Accra Region'";
				  $execute_assign_virtual_students_supervisors_greater_accra_engineering = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_engineering);








				  // Assigning Supervisors To Industrial Attachment Students //

				   // Ashanti Region //
				   $assign_virtual_students_supervisors_ashanti_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ashanti_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Ashanti Region'";
				   $execute_assign_virtual_students_supervisors_ashanti_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_ashanti_applied_arts);
	
	 
				   $assign_virtual_students_supervisors_ashanti_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ashanti_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Ashanti Region'";
				   $execute_assign_virtual_students_supervisors_ashanti_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_ashanti_applied_science);
	
	
					$assign_virtual_students_supervisors_ashanti_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ashanti_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Ashanti Region'";
					$execute_assign_virtual_students_supervisors_ashanti_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_ashanti_built_environment);
	
	
					 $assign_virtual_students_supervisors_ashanti_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ashanti_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Ashanti Region'";
					 $execute_assign_virtual_students_supervisors_ashanti_business = mysqli_query($db, $assign_virtual_students_supervisors_ashanti_business);
	
	
					  $assign_virtual_students_supervisors_ashanti_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ashanti_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Ashanti Region'";
					  $execute_assign_virtual_students_supervisors_ashanti_engineering = mysqli_query($db, $assign_virtual_students_supervisors_ashanti_engineering);






					  // Ahafo Region // 
					  $assign_virtual_students_supervisors_ahafo_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ahafo_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Ahafo Region'";
					  $execute_assign_virtual_students_supervisors_ahafo_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_ahafo_applied_arts);
	   
		
					  $assign_virtual_students_supervisors_ahafo_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ahafo_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Ahafo Region'";
					  $execute_assign_virtual_students_supervisors_ahafo_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_ahafo_applied_science);
	   
	   
					   $assign_virtual_students_supervisors_ahafo_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ahafo_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Ahafo Region'";
					   $execute_assign_virtual_students_supervisors_ahafo_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_ahafo_built_environment);
	   
	   
						$assign_virtual_students_supervisors_ahafo_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ahafo_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Ahafo Region'";
						$execute_assign_virtual_students_supervisors_ahafo_business = mysqli_query($db, $assign_virtual_students_supervisors_ahafo_business);
	   
	   
						 $assign_virtual_students_supervisors_ahafo_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_ahafo_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Ahafo Region'";
						 $execute_assign_virtual_students_supervisors_ahafo_engineering = mysqli_query($db, $assign_virtual_students_supervisors_ahafo_engineering);






						 // Bono East Region // 
						 $assign_virtual_students_supervisors_bono_east_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_bono_east_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Bono East Region'";
						 $execute_assign_virtual_students_supervisors_bono_east_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_bono_east_applied_arts);
		  
		   
						 $assign_virtual_students_supervisors_bono_east_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_bono_east_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Bono East Region'";
						 $execute_assign_virtual_students_supervisors_bono_east_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_bono_east_applied_science);
		  
		  
						  $assign_virtual_students_supervisors_bono_east_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_bono_east_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Bono East Region'";
						  $execute_assign_virtual_students_supervisors_bono_east_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_bono_east_built_environment);
		  
		  
						   $assign_virtual_students_supervisors_bono_east_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_bono_east_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Bono East Region'";
						   $execute_assign_virtual_students_supervisors_bono_east_business = mysqli_query($db, $assign_virtual_students_supervisors_bono_east_business);
		  
		  
							$assign_virtual_students_supervisors_bono_east_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_bono_east_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Bono East Region'";
							$execute_assign_virtual_students_supervisors_bono_east_engineering = mysqli_query($db, $assign_virtual_students_supervisors_bono_east_engineering);






							// Brong Ahafo Region // 
							$assign_virtual_students_supervisors_brong_ahafo_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_brong_ahafo_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Brong Ahafo Region'";
							$execute_assign_virtual_students_supervisors_brong_ahafo_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_brong_ahafo_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_brong_ahafo_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_brong_ahafo_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Brong Ahafo Region'";
							$execute_assign_virtual_students_supervisors_brong_ahafo_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_brong_ahafo_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_brong_ahafo_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_brong_ahafo_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Brong Ahafo Region'";
							 $execute_assign_virtual_students_supervisors_brong_ahafo_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_brong_ahafo_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_brong_ahafo_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_brong_ahafo_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Brong Ahafo Region'";
							  $execute_assign_virtual_students_supervisors_brong_ahafo_business = mysqli_query($db, $assign_virtual_students_supervisors_brong_ahafo_business);
			 
			 
							   $assign_virtual_students_supervisors_brong_ahafo_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_brong_ahafo_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Brong Ahafo Region'";
							   $execute_assign_virtual_students_supervisors_brong_ahafo_engineering = mysqli_query($db, $assign_virtual_students_supervisors_brong_ahafo_engineering);






							// Central Region // 
							$assign_virtual_students_supervisors_central_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_central_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Central Region'";
							$execute_assign_virtual_students_supervisors_central_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_central_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_central_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_central_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Central Region'";
							$execute_assign_virtual_students_supervisors_central_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_central_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_central_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_central_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Central Region'";
							 $execute_assign_virtual_students_supervisors_central_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_central_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_central_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_central_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Central Region'";
							  $execute_assign_virtual_students_supervisors_central_business = mysqli_query($db, $assign_virtual_students_supervisors_central_business);
			 
			 
							   $assign_virtual_students_supervisors_central_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_central_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Central Region'";
							   $execute_assign_virtual_students_supervisors_central_engineering = mysqli_query($db, $assign_virtual_students_supervisors_central_engineering);






							   // Eastern Region // 
							$assign_virtual_students_supervisors_eastern_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_eastern_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Eastern Region'";
							$execute_assign_virtual_students_supervisors_eastern_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_eastern_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_eastern_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_eastern_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Eastern Region'";
							$execute_assign_virtual_students_supervisors_eastern_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_eastern_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_eastern_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_eastern_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Eastern Region'";
							 $execute_assign_virtual_students_supervisors_eastern_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_eastern_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_eastern_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_eastern_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Eastern Region'";
							  $execute_assign_virtual_students_supervisors_eastern_business = mysqli_query($db, $assign_virtual_students_supervisors_eastern_business);
			 
			 
							   $assign_virtual_students_supervisors_eastern_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_eastern_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Eastern Region'";
							   $execute_assign_virtual_students_supervisors_eastern_engineering = mysqli_query($db, $assign_virtual_students_supervisors_eastern_engineering);







							// Greater Accra Region // 
							$assign_virtual_students_supervisors_greater_accra_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_greater_accra_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Greater Accra Region'";
							$execute_assign_virtual_students_supervisors_greater_accra_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_greater_accra_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_greater_accra_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Greater Accra Region'";
							$execute_assign_virtual_students_supervisors_greater_accra_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_greater_accra_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_greater_accra_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Greater Accra Region'";
							 $execute_assign_virtual_students_supervisors_greater_accra_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_greater_accra_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_greater_accra_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Greater Accra Region'";
							  $execute_assign_virtual_students_supervisors_greater_accra_business = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_business);
			 
			 
							   $assign_virtual_students_supervisors_greater_accra_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_greater_accra_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Greater Accra Region'";
							   $execute_assign_virtual_students_supervisors_greater_accra_engineering = mysqli_query($db, $assign_virtual_students_supervisors_greater_accra_engineering);







				
		                    // North East Region // 
							$assign_virtual_students_supervisors_north_east_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_north_east_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'North East Region'";
							$execute_assign_virtual_students_supervisors_north_east_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_north_east_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_north_east_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_north_east_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'North East Region'";
							$execute_assign_virtual_students_supervisors_north_east_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_north_east_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_north_east_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_north_east_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'North East Region'";
							 $execute_assign_virtual_students_supervisors_north_east_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_north_east_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_north_east_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_north_east_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'North East Region'";
							  $execute_assign_virtual_students_supervisors_north_east_business = mysqli_query($db, $assign_virtual_students_supervisors_north_east_business);
			 
			 
							   $assign_virtual_students_supervisors_north_east_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_north_east_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'North East Region'";
							   $execute_assign_virtual_students_supervisors_north_east_engineering = mysqli_query($db, $assign_virtual_students_supervisors_north_east_engineering);






							   // Northern Region // 
							$assign_virtual_students_supervisors_northern_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_northern_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Northern Region'";
							$execute_assign_virtual_students_supervisors_northern_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_northern_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_northern_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_northern_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Northern Region'";
							$execute_assign_virtual_students_supervisors_northern_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_northern_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_northern_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_northern_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Northern Region'";
							 $execute_assign_virtual_students_supervisors_northern_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_northern_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_northern_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_northern_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Northern Region'";
							  $execute_assign_virtual_students_supervisors_northern_business = mysqli_query($db, $assign_virtual_students_supervisors_northern_business);
			 
			 
							   $assign_virtual_students_supervisors_northern_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_northern_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Northern Region'";
							   $execute_assign_virtual_students_supervisors_northern_engineering = mysqli_query($db, $assign_virtual_students_supervisors_northern_engineering);






							// Oti Region // 
							$assign_virtual_students_supervisors_oti_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_oti_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Oti Region'";
							$execute_assign_virtual_students_supervisors_oti_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_oti_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_oti_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_oti_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Oti Region'";
							$execute_assign_virtual_students_supervisors_oti_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_oti_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_oti_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_oti_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Oti Region'";
							 $execute_assign_virtual_students_supervisors_oti_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_oti_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_oti_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_oti_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Oti Region'";
							  $execute_assign_virtual_students_supervisors_oti_business = mysqli_query($db, $assign_virtual_students_supervisors_oti_business);
			 
			 
							   $assign_virtual_students_supervisors_oti_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_oti_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Oti Region'";
							   $execute_assign_virtual_students_supervisors_oti_engineering = mysqli_query($db, $assign_virtual_students_supervisors_oti_engineering);


					



							   // Savannah Region // 
							$assign_virtual_students_supervisors_savannah_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_savannah_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Savannah Region'";
							$execute_assign_virtual_students_supervisors_savannah_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_savannah_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_savannah_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_savannah_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Savannah Region'";
							$execute_assign_virtual_students_supervisors_savannah_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_savannah_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_savannah_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_savannah_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Savannah Region'";
							 $execute_assign_virtual_students_supervisors_savannah_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_savannah_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_savannah_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_savannah_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Savannah Region'";
							  $execute_assign_virtual_students_supervisors_savannah_business = mysqli_query($db, $assign_virtual_students_supervisors_savannah_business);
			 
			 
							   $assign_virtual_students_supervisors_savannah_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_savannah_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Savannah Region'";
							   $execute_assign_virtual_students_supervisors_savannah_engineering = mysqli_query($db, $assign_virtual_students_supervisors_savannah_engineering);






							   // Upper East Region // 
							$assign_virtual_students_supervisors_upper_east_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_east_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Upper East Region'";
							$execute_assign_virtual_students_supervisors_upper_east_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_upper_east_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_upper_east_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_east_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Upper East Region'";
							$execute_assign_virtual_students_supervisors_upper_east_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_upper_east_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_upper_east_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_east_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Upper East Region'";
							 $execute_assign_virtual_students_supervisors_upper_east_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_upper_east_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_upper_east_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_east_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Upper East Region'";
							  $execute_assign_virtual_students_supervisors_upper_east_business = mysqli_query($db, $assign_virtual_students_supervisors_upper_east_business);
			 
			 
							   $assign_virtual_students_supervisors_upper_east_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_east_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Upper East Region'";
							   $execute_assign_virtual_students_supervisors_upper_east_engineering = mysqli_query($db, $assign_virtual_students_supervisors_upper_east_engineering);






							   // Upper West Region // 
							$assign_virtual_students_supervisors_upper_west_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_west_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Upper West Region'";
							$execute_assign_virtual_students_supervisors_upper_west_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_upper_west_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_upper_west_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_west_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Upper West Region'";
							$execute_assign_virtual_students_supervisors_upper_west_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_upper_west_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_upper_west_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_west_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Upper West Region'";
							 $execute_assign_virtual_students_supervisors_upper_west_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_upper_west_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_upper_west_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_west_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Upper West Region'";
							  $execute_assign_virtual_students_supervisors_upper_west_business = mysqli_query($db, $assign_virtual_students_supervisors_upper_west_business);
			 
			 
							   $assign_virtual_students_supervisors_upper_west_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_upper_west_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Upper West Region'";
							   $execute_assign_virtual_students_supervisors_upper_west_engineering = mysqli_query($db, $assign_virtual_students_supervisors_upper_west_engineering);






							   // Volta Region // 
							$assign_virtual_students_supervisors_volta_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_volta_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Volta Region'";
							$execute_assign_virtual_students_supervisors_volta_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_volta_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_volta_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_volta_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Volta Region'";
							$execute_assign_virtual_students_supervisors_volta_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_volta_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_volta_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_volta_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Volta Region'";
							 $execute_assign_virtual_students_supervisors_volta_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_volta_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_volta_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_volta_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Volta Region'";
							  $execute_assign_virtual_students_supervisors_volta_business = mysqli_query($db, $assign_virtual_students_supervisors_volta_business);
			 
			 
							   $assign_virtual_students_supervisors_volta_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_volta_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Volta Region'";
							   $execute_assign_virtual_students_supervisors_volta_engineering = mysqli_query($db, $assign_virtual_students_supervisors_volta_engineering);




							   // Western North Region // 
							$assign_virtual_students_supervisors_western_north_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_north_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Western North Region'";
							$execute_assign_virtual_students_supervisors_western_north_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_western_north_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_western_north_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_north_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Western North Region'";
							$execute_assign_virtual_students_supervisors_western_north_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_western_north_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_western_north_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_north_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Western North Region'";
							 $execute_assign_virtual_students_supervisors_western_north_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_western_north_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_western_north_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_north_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Western North Region'";
							  $execute_assign_virtual_students_supervisors_western_north_business = mysqli_query($db, $assign_virtual_students_supervisors_western_north_business);
			 
			 
							   $assign_virtual_students_supervisors_western_north_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_north_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Western North Region'";
							   $execute_assign_virtual_students_supervisors_western_north_engineering = mysqli_query($db, $assign_virtual_students_supervisors_western_north_engineering);






							   // Western Region // 
							$assign_virtual_students_supervisors_western_applied_arts = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_applied_arts' WHERE faculty = 'Faculty of Applied Arts' AND attachment_region = 'Western Region'";
							$execute_assign_virtual_students_supervisors_western_applied_arts = mysqli_query($db, $assign_virtual_students_supervisors_western_applied_arts);
			 
			  
							$assign_virtual_students_supervisors_western_applied_science = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_applied_science' WHERE faculty = 'Faculty of Applied Science' AND attachment_region = 'Western Region'";
							$execute_assign_virtual_students_supervisors_western_applied_science = mysqli_query($db, $assign_virtual_students_supervisors_western_applied_science);
			 
			 
							 $assign_virtual_students_supervisors_western_built_environment = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_built_environment' WHERE faculty = 'Faculty of Built Environment' AND attachment_region = 'Western Region'";
							 $execute_assign_virtual_students_supervisors_western_built_environment = mysqli_query($db, $assign_virtual_students_supervisors_western_built_environment);
			 
			 
							  $assign_virtual_students_supervisors_western_business = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_business' WHERE faculty = 'Faculty of Business' AND attachment_region = 'Western Region'";
							  $execute_assign_virtual_students_supervisors_western_business = mysqli_query($db, $assign_virtual_students_supervisors_western_business);
			 
			 
							   $assign_virtual_students_supervisors_western_engineering = "UPDATE industrial_attachment_registration SET school_supervisor_name = '$supervisor_2_western_engineering' WHERE faculty = 'Faculty of Engineering' AND attachment_region = 'Western Region'";
							   $execute_assign_virtual_students_supervisors_western_engineering = mysqli_query($db, $assign_virtual_students_supervisors_western_engineering);


		   }

		   //////////////////////////////////// PHP CODE TO ASSIGN A SUPERVISOR END //////////////////////////////////////////
		?>

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