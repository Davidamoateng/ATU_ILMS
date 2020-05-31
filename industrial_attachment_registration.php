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

	$studentFirstName = $_COOKIE["first_name"];
	$studentLastName = $_COOKIE["last_name"];
	$indexNumberHolder = $_COOKIE["index_number"];
	$studentIndexNumber = "";

	$programs = array("--Select Program--","Accountancy","Building Technology","Civil Engineering","Computer Science","Electrical / Electronics Engineering",
	"Fashion Design & Textiles","Furniture Design & Production","Hotel, Catering & Institutional Management","Languages & Liberal Studies","Mathematics & Statistics",
	"Marketing","Mechanical Engineering","Purchasing & Supply","Science Laboratory Technology","Secretaryship & Management Studies");
	

	$sessions = array("--Select Session--","Full-time","Part-time");

	$faculties = array("--Select Faculty--","Faculty of Applied Arts","Faculty of Applied Science","Faculty of Built Environment","Faculty of Business","Faculty of Engineering");

	$levels = array("--Select Level--","100","200","300");

	if (isset($_POST["register_btn"])) {
		if ($_POST["inputProgram"] != "" && $_POST["inputLevel"] != "" && $_POST["inputSession"] != "") {
			
			$otherName = $_POST["inputOtherName"];
			$programSelected = $_POST["inputProgram"];
			$levelSelected = $_POST["inputLevel"];
			$sessionSelected = $_POST["inputSession"];
			$indexNumber = $_POST["inputIndexNumber"];
			$faculty = $_POST["inputFaculty"];

			$preventDoubleRegistration = "SELECT * FROM virtual_attachment_registration WHERE index_number = '$indexNumber' LIMIT 1";
			$executeDoubleRegistration = mysqli_query($db, $preventDoubleRegistration);
			$checkPrevention = mysqli_num_rows($executeDoubleRegistration);

			if ($checkPrevention == 1) {
				echo "<script> alert('Sorry...You have already registered for Virtual Attachment..!') </script>";
			}else{

				$checkUserExistence = "SELECT * FROM  industrial_attachment_registration WHERE index_number = '$indexNumber' LIMIT 1";
				$executeCheckExistence = mysqli_query($db, $checkUserExistence);
				$checkUser = mysqli_num_rows($executeCheckExistence);

				if ($checkUser == 1) {
					echo "<script> alert('Sorry...You have registered already..!') </script>";
				}else {

					$insertDetailsCommand = "INSERT INTO `industrial_attachment_registration` (`first_name`, `last_name`, `other_name`, `index_number`, `program`, `level`, `session`, `faculty`, `date`)
											 VALUES ('$studentFirstName', '$studentLastName', '$otherName', '$studentIndexNumber', '$programSelected', '$levelSelected', '$sessionSelected', '$faculty', CURRENT_TIMESTAMP)";
											 
					if ($runInsertQuery = mysqli_query($db, $insertDetailsCommand)) {
						echo "<script> alert('Details have been sent successfully') </script>";
					}else {
						echo "<script> alert('Sorry...Details not submitted..!') </script>";
					}
				}
			}
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | Industrial Attachment Registration</title>

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

              <li class="treeview active">
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
			<div class="main-page">
		
        	
        	
                <div class="panel-info widget-shadow"> 
                    <div class="row">
                         <div class="col-md-12 panel-grids">
                                 <div class="panel panel-primary"> 
                                     <div class="panel-heading"> 
                                         <h3 class="panel-title">Industrial Attachment Registration</h3> 
                                     </div> 
                                     <div class="panel-body"> 
                                        
										<form class="form-body widget_shadow_panel" action="">
											<div class="row">
													<div class="form-group col-md-6"> 
														<label for="inputFirstName">First Name:</label> 
														<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" disabled value="<?php echo $studentFirstName; ?>" placeholder="Enter First Name" required> 
													</div>
													<div class="form-group col-md-6"> 
														<label for="inputLastName">Last Name:</label> 
														<input type="text" class="form-control" id="inputLastName" name="inputLastName" disabled value="<?php echo $studentLastName; ?>" placeholder="Enter Last Name:" required> 
													</div> 
												</div> 
		
												<div class="row">
														<div class="form-group col-md-6"> 
															<label for="inputOtherNames"><b>Other Name(s):</b></label> 
															<input type="text" class="form-control" id="inputOtherName" name="inputOtherName" placeholder="Enter Other Name(s)"> 
														</div>
														<div class="form-group col-md-6"> 
															<label for="inputIndexNumber">Index Number:</label> 
															<input type="text" class="form-control" id="inputIndexNumber" name="inputIndexNumber" value="<?php echo $indexNumberHolder; ?>" placeholder="Enter Index Number"> 
														</div> 
												</div> 
		
												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="inputProgram"><b>Program:</b></label> 
														<select id="inputProgram" name="inputProgram" class="form-control">
															<option selected="">--Select Program--</option>
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
													<div class="form-group col-md-6"> 
														<label for="inputLevel"><b>Level:</b></label> 
														<select id="inputLevel" name="inputLevel" class="form-control">
															<option selected="">--Select Level--</option>
															<option>100</option>
															<option>200</option>
															<option>300</option>
														</select>
													</div> 
												</div>
		
												<div class="row">
													<div class="form-group col-md-6"> 
														<label for="inputSession"><b>Session:</b></label> 
														<select id="inputSession" name="inputSession" class="form-control">
															<option selected="">--Select Session--</option>
															<option>Full-time</option>
															<option>Part-time</option>
															<!-- <option>Weekend</option> -->
														</select>
													</div>
													<div class="form-group col-md-6"> 
														<label for="inputFaculty"><b>Faculty:</b></label> 
														<select id="inputFaculty" name="inputFaculty" class="form-control">
															<option selected="">--Select Faculty--</option>
															<option>Faculty of Applied Art</option>
															<option>Faculty of Applied Science</option>
															<option>Faculty of Built Environment</option>
															<option>Faculty of Business</option>
															<option>Faculty of Engineering</option>
														</select>
													</div> 
												</div>
		
												<div class="text-center">
													<button type="submit" class="btn btn-default" name="register_btn">Register</button>
												</div> 
											</form>

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