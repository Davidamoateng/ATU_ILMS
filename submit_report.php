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
	$indexNumber = $_SESSION['user']['user_id'];
    
	$student_full_name = $studentFirstName." ".$studentLastName;
	
	if (isset($_POST["submit_btn"])) {

		$introduction = $_POST["inputIntroduction"];
		$objective = $_POST["inputObjective"];

		$brief_history = $_POST["inputBriefHistory"];
		$vision_mission = $_POST["inputVisionMission"];
		$department = $_POST["inputDepartment"];
		$major_activities = $_POST["inputMajorActivities"];

		$description = $_POST["inputDescription"];
		$detailed_account = $_POST["inputDetailedAccount"];
		$general_observation = $_POST["inputGeneralObservation"];

		$knowledge = $_POST["inputKnowledge"];
		$contribution = $_POST["inputContribution"];
		$observation = $_POST["inputObservation"];
		 
		$conclusion = $_POST["inputConclusion"];
		$recommendation = $_POST["inputRecommendation"];


		if ($_POST["inputIntroduction"] != "" && $_POST["inputObjective"] != "" && $_POST["inputBriefHistory"] != "" && $_POST["inputVisionMission"] != "" && $_POST["inputDepartment"] != "" && $_POST["inputMajorActivities"] != "" && $_POST["inputDescription"] != "" && $_POST["inputDetailedAccount"] != "" && $_POST["inputGeneralObservation"] != "" && $_POST["inputKnowledge"] != "" && $_POST["inputContribution"] != "" && $_POST["inputObservation"] != "" && $_POST["inputConclusion"] != "" && $_POST["inputRecommendation"] != "") {
				
			    $check_report_existence = "SELECT * FROM attachment_reports WHERE index_number = '$indexNumber'";
				$report_existence_query = mysqli_query($db, $check_report_existence);
				$report_query_presence = mysqli_num_rows($report_existence_query);

				if ($report_query_presence == 1) {

					echo "<script>alert('Error... You have already submitted your report..!')</script>";
					
				} else {
					
					$insert_report_command = "INSERT INTO attachment_reports (`id`, `username`, `index_number`, `date`, `introduction`, `objective`, `brief_history`, `vision_mission`, `department`, `major_activities`, `description`, `detailed_account`, `general_observation`, `knowledge`, `contribution`, `observation`, `conclusion`, `recommendation`) 
					VALUES (NULL, '$student_full_name', '$indexNumber', CURRENT_TIMESTAMP, '$introduction', '$objective', '$brief_history', '$vision_mission', '$department', '$major_activities', '$description', '$detailed_account', '$general_observation', '$knowledge', '$contribution', '$observation', '$conclusion', '$recommendation')";
					$execute_insert_query = mysqli_query($db, $insert_report_command);
					
					echo "<script>alert('Your report has been submitted successfully ...')</script>";
					
				}
				

		}

	}
	//var_dump($student_full_name, $indexNumber);

?>
 
<!DOCTYPE HTML>
<html>
<head>

<title>ATU ILMS | Submit Report</title>

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

			  <li class="treeview active">
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
												 <h3 class="panel-title">Submit Report</h3> 
											 </div> 
											 <div class="panel-body"> 
												<div class="form-body widget_shadow_panel">
													<p>
														<b><u>INSTRUCTION</u> :</b>
														Please fill the appropriate fields in the table below to write your
														Industrial Attachment / Internship Report, click <b>"Submit"</b> after
														filling the spaces to send your Report to the Liaison Office.
														
													</p>
													<p>
													  <b><u>Note:</u></b> Once report is submitted changes cannot be done.
													</p>
													<form action="#" method="post">
															
														<table class="table table-bordered text-center"> 
                                                            <tbody>

																<!-- CHAPTER ONE -->
                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left"><b><u>CHAPTER ONE</u></b></th>
																</tr>
																
                                                                <tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;"><b>A. Background / Introduction<b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputIntroduction" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>
																
																<tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;"><b>B. Objective of the Industrial Attachment<b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputObjective" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>
																
																<tr>
																	<td scope="row" colspan="7" class="text-left" style="padding-top: 5px;"><b>C. The Organization</b></td>
																</tr>
																
																<tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;">1<b>.</b> Brief History<b><b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputBriefHistory" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;">2<b>.</b> Vision / Mission Statement<b><b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputVisionMission" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;">3<b>.</b> Department / Unit / Section<b><b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputDepartment" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 25px;">4<b>.</b> Major Activities<b><b style="color:red;">*</b>:</b></td>
																	<td>
																		<textarea name="inputMajorActivities" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<!-- CHAPTER TWO -->
                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left"><b><u>CHAPTER TWO</u></b></th>
																</tr>
																
																<tr>
																	<td scope="row" class="text-left" style="padding-top: 15px;"><b>A.</b> Description of the nature of  work at the<br> department  / unit /  section you were assigned<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputDescription" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>
																
																<tr>
																	<td scope="row" class="text-left" style="padding-top: 20px;"><b>B.</b> Detailed account of work performed / trained<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputDetailedAccount" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 15px;"><b>C.</b> General Observation (new knowledge / skills<br> acquired)<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputGeneralObservation" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<!-- CHAPTER THREE -->
                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left"><b><u>CHAPTER THREE</u></b></th>
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 15px;"><b>A.</b> New knowledge / skills and challenges<br> encountered<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputKnowledge" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 15px;"><b>B.</b> Your contribution to improve the organization<br> (value addition)<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputContribution" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 20px;"><b>C.</b> Your General Observation<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputObservation" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>

																<!-- CHAPTER FOUR -->
                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left"><b><u>CHAPTER FOUR</u></b></th>
																</tr>

																<tr>
																	<td scope="row" class="text-left" style="padding-top: 20px;"><b>A.</b> Conclusion<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputConclusion" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>
																
																<tr>
																	<td scope="row" class="text-left" style="padding-top: 20px;"><b>B.</b> Recommendation<b style="color:red;">*</b>:</td>
																	<td>
																		<textarea name="inputRecommendation" class="form-control" onkeypress="return alpha_numeric_space(event)" rows="3" cols="55" required></textarea>
																	</td>  
																</tr>
                                  
                                                            </tbody> 
                                                        </table>
														<div class="text-center">
															<!-- <button type="submit" class="btn btn-default disabled">
																<i class="fa fa-edit"></i>
																Edit
															</button> -->
															<button type="submit" class="btn btn-primary" name="submit_btn">
																<i class="fa fa-upload"></i>
																Submit
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