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

  $admin = $_SESSION['user']['first_name'];

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Admin Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--// Bootstrap Core CSS -->

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!--// Custom CSS -->

<!-- login page css file -->
<link href="../css/login-page.css" rel='stylesheet' type='text/css'/>
<!-- //login page css file -->

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

<!-- calendar -->
<link rel="stylesheet" href="../css/monthly.css">
<!-- //calendar -->


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
									<a href="../login.php?logout'1'">
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
			<div class="col_3">

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
			<!-- Notification Message -->

			<?php 

			    // Count All Students // 
				$all_students_sql = "SELECT count(id) AS total FROM users WHERE user_type = 'user'";
				$all_students_result = mysqli_query($db, $all_students_sql);
				$all_students_values = mysqli_fetch_assoc($all_students_result);
				$all_students_num_rows = $all_students_values['total'];
				
				// Count School Supervisors //
				$school_supervisors_sql = "SELECT count(id) AS total FROM school_supervisors";
				$school_supervisors_result = mysqli_query($db, $school_supervisors_sql);
				$school_supervisors_values = mysqli_fetch_assoc($school_supervisors_result);
				$school_supervisors_num_rows = $school_supervisors_values['total'];

				// Count Virtual Attachment //
				$virtual_attachment_sql = "SELECT count(id) AS total FROM virtual_attachment_registration";
				$virtual_attachment_result = mysqli_query($db, $virtual_attachment_sql);
				$virtual_attachment_values = mysqli_fetch_assoc($virtual_attachment_result);
				$virtual_attachment_num_rows = $virtual_attachment_values['total'];

				// Count Industrial Attachment //
				$industrial_attachment_sql = "SELECT count(id) AS total FROM industrial_attachment_registration";
				$industrial_attachment_result = mysqli_query($db, $industrial_attachment_sql);
				$industrial_attachment_values = mysqli_fetch_assoc($industrial_attachment_result);
				$industrial_attachment_num_rows = $industrial_attachment_values['total'];

				// Count System Admins // 
				$system_admins_sql = "SELECT count(id) AS total FROM users WHERE user_type = 'admin'";
				$system_admins_result = mysqli_query($db, $system_admins_sql);
				$system_admins_values = mysqli_fetch_assoc($system_admins_result);
				$system_admins_num_rows = $system_admins_values['total'];
			
			?>

        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users icon-rounded"></i>
                    <div class="stats">
                      <h5><strong> <?php echo $all_students_num_rows; ?> </strong></h5>
                      <span>All <br> Student</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $school_supervisors_num_rows; ?></strong></h5>
                      <span>School <br> Supervisors</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-building-o user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $virtual_attachment_num_rows; ?></strong></h5>
                      <span>Virtual <br> Attachment</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-cogs dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $industrial_attachment_num_rows; ?></strong></h5>
                      <span>Industrial <br> Attachment</span>
                    </div>
                </div>
			 </div>
			 
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-male dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $system_admins_num_rows; ?></strong></h5>
                      <span>System <br> Admins</span>
                    </div>
                </div>
			 </div>
			 
			 <!-- <div class="col-md-12 widget">
					<div class="r3_counter_box">
							<img src="../images/atunew.jpg" alt="atunew">
						
					</div>
				 </div> -->

			<div class="clearfix"> </div>


			<div class="agil-info-calendar row">
					<!-- calendar -->
					<div class="col-md-3 agile-calendar">
						<div class="calendar-widget">
						<header class="widget-header">
							<h4 class="widget-title" style="color: white;">Calender</h4>
						</header>
						<hr class="widget-separator">
							<!-- calender grids -->
								<div class="agile-calendar-grid">
									<div class="page">
										
										<div class="w3l-calendar-left">
											<div class="calendar-heading">
												
										</div>
											<div class="monthly" id="mycalendar">
												<div class="monthly-header">
													<div class="monthly-header-title">July 2020</div>
													<a href="#" class="monthly-prev"></a>
													<a href="#" class="monthly-next"></a>
												</div><div class="monthly-day-title-wrap">
													<div>Sun</div>
													<div>Mon</div>
													<div>Tue</div>
													<div>Wed</div>
													<div>Thu</div>
													<div>Fri</div>
													<div>Sat</div>
												</div>
												<div class="monthly-day-wrap">
													<div class="monthly-week">
														<div class="m-d monthly-day-blank">
															<div class="monthly-day-number">

															</div>
														</div>
														<a href="#" class="m-d monthly-day monthly-day-event " data-number="1">
															<div class="monthly-day-number">1</div><div class="monthly-indicator-wrap">

															</div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="2">
															<div class="monthly-day-number">2</div><div class="monthly-indicator-wrap">

															</div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="3">
															<div class="monthly-day-number">3</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="4">
															<div class="monthly-day-number">4</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="5">
															<div class="monthly-day-number">5</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="6">
															<div class="monthly-day-number">6</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
													</div>

													<div class="monthly-week">
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="7">
															<div class="monthly-day-number">7</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event monthly-today" data-number="8">
															<div class="monthly-day-number">8</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="9">
															<div class="monthly-day-number">9</div>
															<div class="monthly-indicator-wrap"></div>
														</a><a href="#" class="m-d monthly-day monthly-day-event" data-number="10">
															<div class="monthly-day-number">10</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="11">
															<div class="monthly-day-number">11</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="12">
															<div class="monthly-day-number">12</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="13">
															<div class="monthly-day-number">13</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
													</div>

													<div class="monthly-week">
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="14">
															<div class="monthly-day-number">14</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="15">
															<div class="monthly-day-number">15</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="16">
															<div class="monthly-day-number">16</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="17">
															<div class="monthly-day-number">17</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="18">
															<div class="monthly-day-number">18</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="19">
															<div class="monthly-day-number">19</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="20">
															<div class="monthly-day-number">20</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
													</div>

													<div class="monthly-week">
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="21">
															<div class="monthly-day-number">21</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="22">
															<div class="monthly-day-number">22</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="23">
															<div class="monthly-day-number">23</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="24">
															<div class="monthly-day-number">24</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="25">
															<div class="monthly-day-number">25</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="26">
															<div class="monthly-day-number">26</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="27">
															<div class="monthly-day-number">27</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
													</div>

													<div class="monthly-week">
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="28">
															<div class="monthly-day-number">28</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="29">
															<div class="monthly-day-number">29</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="30">
															<div class="monthly-day-number">30</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<a href="#" class="m-d monthly-day monthly-day-event" data-number="31">
															<div class="monthly-day-number">31</div>
															<div class="monthly-indicator-wrap"></div>
														</a>
														<div class="m-d monthly-day-blank">
															<div class="monthly-day-number"></div>
														</div>
														<div class="m-d monthly-day-blank">
															<div class="monthly-day-number"></div>
														</div>
														<div class="m-d monthly-day-blank">
															<div class="monthly-day-number"></div>
														</div>
													</div>
												</div>

												<div class="monthly-event-list">
													<div class="monthly-list-item monthly-today" id="mycalendarday1" data-number="1">
														<div class="monthly-event-list-date">MON<br>1</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday2" data-number="2">
														<div class="monthly-event-list-date">TUE<br>2</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday3" data-number="3">
														<div class="monthly-event-list-date">WED<br>3</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday4" data-number="4">
														<div class="monthly-event-list-date">THU<br>4</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday5" data-number="5">
														<div class="monthly-event-list-date">FRI<br>5</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday6" data-number="6">
														<div class="monthly-event-list-date">SAT<br>6</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday7" data-number="7">
														<div class="monthly-event-list-date">SUN<br>7</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday8" data-number="8">
														<div class="monthly-event-list-date">MON<br>8</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday9" data-number="9">
														<div class="monthly-event-list-date">TUE<br>9</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday10" data-number="10">
														<div class="monthly-event-list-date">WED<br>10</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday11" data-number="11">
														<div class="monthly-event-list-date">THU<br>11</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday12" data-number="12">
														<div class="monthly-event-list-date">FRI<br>12</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday13" data-number="13">
														<div class="monthly-event-list-date">SAT<br>13</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday14" data-number="14">
														<div class="monthly-event-list-date">SUN<br>14</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday15" data-number="15">
														<div class="monthly-event-list-date">MON<br>15</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday16" data-number="16">
														<div class="monthly-event-list-date">TUE<br>16</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday17" data-number="17">
														<div class="monthly-event-list-date">WED<br>17</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday18" data-number="18">
														<div class="monthly-event-list-date">THU<br>18</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday19" data-number="19">
														<div class="monthly-event-list-date">FRI<br>19</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday20" data-number="20">
														<div class="monthly-event-list-date">SAT<br>20</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday21" data-number="21">
														<div class="monthly-event-list-date">SUN<br>21</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday22" data-number="22">
														<div class="monthly-event-list-date">MON<br>22</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday23" data-number="23">
														<div class="monthly-event-list-date">TUE<br>23</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday24" data-number="24">
														<div class="monthly-event-list-date">WED<br>24</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday25" data-number="25">
														<div class="monthly-event-list-date">THU<br>25</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday26" data-number="26">
														<div class="monthly-event-list-date">FRI<br>26</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday27" data-number="27">
														<div class="monthly-event-list-date">SAT<br>27</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday28" data-number="28">
														<div class="monthly-event-list-date">SUN<br>28</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday29" data-number="29">
														<div class="monthly-event-list-date">MON<br>29</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday30" data-number="30">
														<div class="monthly-event-list-date">TUE<br>30</div>
													</div>
													<div class="monthly-list-item" id="mycalendarday31" data-number="31">
														<div class="monthly-event-list-date">WED<br>31</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="clearfix"> </div>
									</div>
								</div>
								<!-- //calender grids -->
						</div>
					</div>
					<!-- //calendar -->

					<div class="col-md-9 chart-layer1-right"> 
						<img src="../images/atunew.jpg" alt="atunew" style="width:100%; height: 10%;">
					</div>
					
					<div class="clearfix"></div>
				</div>
			

			<!-- <div class="r3_counter_bo col-md-10" style="margin-top: 2%;">
				
			</div> -->

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

	<!-- scroll bar -->
	<script  src="../js/monthly.js"></script>
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