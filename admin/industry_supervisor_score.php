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
   
      

  $mysql_query_1 = "SELECT * FROM virtual_attachment_registration";
  $mysql_query_2 = "SELECT * FROM industrial_attachment_registration";

  if (isset($_POST["search_btn"])) {

	$search_by = $_POST["inputFilterBy"];
	$search_term = $_POST["inputSearch"];

	if ($search_by != "" && $search_term != "") {

		switch ($search_by) {

			case '--FilterBy--':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration";
				break;

			case 'First Name':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE first_name LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE first_name LIKE '%$search_term%'";
				break;

			case 'Last Name':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE last_name LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE last_name LIKE '%$search_term%'";
				break;

			case 'Index Number':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE index_number LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE index_number LIKE '%$search_term%'";
				break;

			case 'Programme':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE program LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE program LIKE '%$search_term%'";
				break;

			case 'Level':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE `level` LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE `level` LIKE '%$search_term%'";
				break;

			case 'Session':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE `session` LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE `session` LIKE '%$search_term%'";
				break;

			case 'Score':

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration WHERE industry_supervisor_grade LIKE '%$search_term%'";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration WHERE industry_supervisor_grade LIKE '%$search_term%'";
				break;
			
			default:

				$mysql_query_1 = "SELECT * FROM virtual_attachment_registration";
                $mysql_query_2 = "SELECT * FROM industrial_attachment_registration";
				break;
		}

	}

  }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Industry-Based Supervisor Assessment</title>

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
			  
              <li class="treeview">
				<a href="assign_supervisors.php">
				 <i class="fa fa-user"></i>
				 <span>Assign Supervisors</span>
				</a>
			  </li>

			  <hr class="sidebar-divider">
			  
              <li class="treeview active">
                <a href="#">
				 <i class="fa fa-percent"></i> 
				 <span>Supervisor Assessment</span>
                 <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li class="sup-active">
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
										 <h3 class="panel-title">Industry-Based Supervisors Assessment</h3> 
									 </div> 
									 <div class="panel-body"> 
										<div class="form-body widget_shadow_panel">

											<div class="row">

												<form action="" method="post">
													<!-- Filter Box -->
													<div class="form-group col-xs-3 col-sm-3 col-md-3 col-lg-3">  
														<select id="InputLevel" class="form-control" name="inputFilterBy">
															<option selected=""><b>--FilterBy--</b></option>
															<option>First Name</option>
															<option>Last Name</option>
															<option>Index Number</option>
															<option>Programme</option>
															<option>Level</option>
															<option>Session</option>
															<option>Score</option>
														</select>
													</div> 
													<!--// Filter Box --> 

													<!-- Search Box -->
													<div class="form-inline col-xs-9 col-sm-9 col-md-9 col-lg-9" style="padding-left: 324px;"> 
														<div class="form-group"> 
															<input type="search" class="form-control" name="inputSearch" placeholder="Search term ..." aria-label="Search" required> 
														</div> 
														<button type="submit" class="btn btn-default btn-sm" name="search_btn">Search</button> 
													</div>
													<!--// Search Box -->
												</form>

											</div>

											<div class="hr2"></div>

											<div class="panel-body widget-shadow" style="overflow-x: auto">

												<!-- TABLE STARTS HERE -->
												<table class="table table-striped table-condensed">
													<thead>
														<tr class="active">
															<th scope="col" style="text-align:center">Student Name</th>
															<th scope="col" style="text-align:center">Index Number</th>
															<th scope="col" style="text-align:center">Programme</th>
															<th scope="col" style="text-align:center">Level</th>
															<th scope="col" style="text-align:center">Session</th>
															<th scope="col" style="text-align:center">Registration Type</th>
															<th scope="col" style="text-align:center">Industry Supervisor Name</th>
															<th scope="col" style="text-align:center">Industry Supervisor Contact</th>
															<th scope="col" style="text-align:center">Score</th>
														</tr>
													</thead>
													<tbody>

														<?php 
														
															// Get Virtual Attachment Data  //
															$mysql_query_command_1 = $mysql_query_1;
															$execute_result_query = mysqli_query($db, $mysql_query_command_1);
															
															while ($row_set = mysqli_fetch_array($execute_result_query)) {

																echo "<tr>";
																	echo "<td style='text-align:center'>".$row_set["first_name"]."&nbsp;".$row_set["last_name"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["index_number"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["program"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["level"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["session"]."</td>";
																	echo "<td style='text-align:center'>"."Virtual Attachment"."</td>";
																	echo "<td style='text-align:center'>".$row_set["industry_supervisor_name"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["industry_supervisor_contact"]."</td>";
																	echo "<td style='text-align:center'>".$row_set["industry_supervisor_grade"]."</td>";
																echo "</tr>";

															}


															// Get Industrial Attachment Data  //
															$mysql_query_command_2 = $mysql_query_2;
															$execute_result_query_2 = mysqli_query($db, $mysql_query_command_2);
															
															while ($row_set_2 = mysqli_fetch_array($execute_result_query_2)) {

																echo "<tr>";
																	echo "<td style='text-align:center'>".$row_set_2["first_name"]."&nbsp;".$row_set_2["last_name"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["index_number"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["program"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["level"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["session"]."</td>";
																	echo "<td style='text-align:center'>"."Industrial Attachment"."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["industry_supervisor_name"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["industry_supervisor_contact"]."</td>";
																	echo "<td style='text-align:center'>".$row_set_2["industry_supervisor_grade"]."</td>";
																echo "</tr>";

															}
														
														?> 

													</tbody>
												</table>
												<!-- TABLE ENDS HERE -->

											</div>

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