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
        
        $completion_1_score = $_POST["CompletionRadioBtn_1"];
        $completion_2_score = $_POST["CompletionRadioBtn_2"];
        $completion_3_score = $_POST["CompletionRadioBtn_3"];
        $completion_4_score = $_POST["CompletionRadioBtn_4"];

        $placement_1_score = $_POST["PlacementRadioBtn_1"];

        $attitude_1_score = $_POST["AttitudeRadioBtn_1"];

        $communication_1_score = $_POST["CommunicationRadioBtn_1"];
        $communication_2_score = $_POST["CommunicationRadioBtn_2"];

        $appearance_1_score = $_POST["AppearanceRadioBtn_1"];

        $supervisor_first_name = $_POST["inputSupervisorFirstName"];
        $supervisor_last_name = $_POST["inputSupervisorLastName"];
        $supervisor_phone_number = $_POST["inputSupervisorPhoneNumber"];
        $general_remarks = $_POST["inputGeneralRemarks"];

        

        // Calculation of Marks //
        $grade_score = $completion_1_score + $completion_2_score + $completion_3_score + $completion_4_score +
                       $placement_1_score + $attitude_1_score + $communication_1_score + $communication_2_score +
                       $appearance_1_score + 5;
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////               

        if ($_POST["inputSupervisorFirstName"] != "" && $_POST["inputSupervisorLastName"] != "" && $_POST["inputSupervisorPhoneNumber"] != "" && $_POST["inputGeneralRemarks"]) {

            $mysql_query1 = "INSERT INTO school_supervisor_grade (`id`, `username`, `index_number`, `completion_1_score`, `completion_2_score`, `completion_3_score`, `completion_4_score`, `placement_1_score`, `attitude_1_score`, `communication_1_score`, `communication_2_score`, `appearance_1_score`, `grade`, `supervisor_first_name`, `supervisor_last_name`, `supervisor_phone_number`, `general_remarks`, `date`) 
                             VALUES (NULL, '$student_full_name', '$indexNumber', '$completion_1_score', '$completion_2_score', '$completion_3_score', '$completion_4_score', '$placement_1_score', '$attitude_1_score', '$communication_1_score', '$communication_2_score', '$appearance_1_score', '$grade_score', '$supervisor_first_name', '$supervisor_last_name', '$supervisor_phone_number', '$general_remarks', CURRENT_TIMESTAMP)";

            if ($execute_mysql_query1 = mysqli_query($db, $mysql_query1)) {
                
                $mysql_query2 = "SELECT * FROM industrial_attachment_registration WHERE index_number='$indexNumber'";
		        $execute_mysql_query2 = mysqli_query($db, $mysql_query2);
                $check_existence = mysqli_num_rows($execute_mysql_query2);

                if ($check_existence == 1) {

                    $mysql_query3 = "UPDATE `industrial_attachment_registration` SET `school_supervisor_grade` = '$grade_score' WHERE index_number = '$indexNumber'";
                    $execute_mysql_query3 = mysqli_query($db, $mysql_query3);
                    
                } else {

                    $mysql_query4 = "SELECT * FROM virtual_attachment_registration WHERE index_number='$indexNumber'";
		            $execute_mysql_query4 = mysqli_query($db, $mysql_query4);
                    $check_existence2 = mysqli_num_rows($execute_mysql_query4);

                    if ($check_existence2 == 1) {

                        $mysql_query5 = "UPDATE `virtual_attachment_registration` SET `school_supervisor_grade` = '$grade_score' WHERE index_number = '$indexNumber'";
                        $execute_mysql_query5 = mysqli_query($db, $mysql_query5);
                        
                    }
                    
                }
                
                
            }              

            echo "<script>alert('Assessment has been submitted successfully ...')</script>";

        }else{
            echo "<script>alert('Error... Assessment has not been submitted..!!')</script>";
        }
        
    }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ATU ILMS | School-Based Supervisor Assessment</title>

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

              <li class="treeview active">
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
                <li class="sup-active">
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
												 <h3 class="panel-title">School-Based Supervisor Assessment</h3> 
											 </div> 
											 <div class="panel-body sup-assessment-panel"> 
												<div class="form-body sup-assessment-form widget_shadow_panel">
                                                    
                                                    <p>
                                                        <b><u>INSTRUCTIONS</u> :</b>
                                                        Please indicate by clicking the appropriate button below the 
                                                        degree to which the student measures up to the area stated below.
                                                    </p>

                                                    <!-- Industry Supervisor Assessment Form -->
                                                    <form class="form-horizontal" action="" method="post"> 
                                                        
                                                        <table class="table table-bordered text-center"> 
                                                            <tbody>
                                                                <tr> 
                                                                    <th scope="col" rowspan="2">COMPETENCIES</th> 
                                                                    <th scope="col" colspan="6">
                                                                        0&nbsp;-&nbsp;Absent &nbsp;&nbsp;&nbsp;&nbsp;  1&nbsp;-&nbsp;Weak &nbsp;&nbsp; 2&nbsp;-&nbsp;Satisfactory
                                                                    </th> 
                                                                </tr> 
                                                                <tr>
                                                                    <th scope="col" colspan="6">
                                                                        3&nbsp;-&nbsp;Good  &nbsp;&nbsp; 4&nbsp;-&nbsp;Very Good &nbsp;&nbsp; 5&nbsp;-&nbsp;Excellent
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">SCORES</th>
                                                                    <td>0</td>
                                                                    <td>1</td>
                                                                    <td>2</td>
                                                                    <td>3</td>
                                                                    <td>4</td>
                                                                    <td>5</td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left">A. COMPLETION OF E-LOGBOOK</th>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>1. Filling of student's information</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_1" value="5" required>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>2. Filling of Organization profile</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_2" value="5" required>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>3. Filling of daily E-logbook up-to-date by student</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_3" value="5" required>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>4. Filling of E-logbook endorsed by supervisor</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input"  type="radio" name="CompletionRadioBtn_4" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_4" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_4" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_4" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_4" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CompletionRadioBtn_4" value="5" required>
                                                                    </td>
                                                                </tr>

            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->                                                    

                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left">B. PLACEMENT</th>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>1. Relationship with course of study</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="PlacementRadioBtn_1" value="5" required>
                                                                    </td>
                                                                </tr>

            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->                                                    
                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left">C. ATTITUDE TO WORK</th>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>1. Attitude to work</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AttitudeRadioBtn_1" value="5" required>
                                                                    </td>
                                                                </tr>

           <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->                                                     

                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left">D. COMMUNICATION</th>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>1. Written ability</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_1" value="5" required>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>2. Verbal and non-verbal</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="CommunicationRadioBtn_2" value="5" required>
                                                                    </td>
                                                                </tr>

            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->                                                    

                                                                <tr>
                                                                    <th scope="row" colspan="7" class="text-left">E. APPEARANCE</th>
                                                                </tr>

                                                                <tr>
                                                                    <td scope="row" class="text-left">
                                                                        <span>1. Appearance (Appropriate Gear for work)</span>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="0" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="1" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="2" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="3" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="4" required>
                                                                    </td>
                                                                    <td scope="row">
                                                                        <input class="form-check-input" type="radio" name="AppearanceRadioBtn_1" value="5" required>
                                                                    </td>
                                                                </tr>
                                                               
                                                            </tbody> 
                                                        </table>

                                                        <div class="hr2"></div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputFirstName"><b>Supervisor First Name<b style="color:red;">*</b>:</b></label>
                                                                <input type="text" class="form-control" id="SupervisorFirstName" name="inputSupervisorFirstName" onkeypress="return alphabet(event)" placeholder="Enter First Name" required>
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputLastName"><b>Supervisor Last Name<b style="color:red;">*</b>:</b></label>
                                                                <input type="text" class="form-control" id="SupervisorLastName" name="inputSupervisorLastName" onkeypress="return alphabet(event)" placeholder="Enter Last Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputDate"><b>Supervisor Phone Number:</b></label>
                                                                <input type="text" class="form-control" id="SupervisorPhoneNumber" name="inputSupervisorPhoneNumber" onkeypress="return number_plus(event)" placeholder="Enter Phone Number">
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputGeneralRemarks"><b>General Remarks<b style="color:red;">*</b>:</b></label>
                                                                <textarea class="form-control" id="GeneralRemarks" name="inputGeneralRemarks" onkeypress="return alphabet_space(event)" rows="4" required></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary" name="submit_btn"><i class="fa fa-upload" ></i> Submit</button>
                                                            <a href="industry_supervisor_login.php" class="btn btn-danger"> <i class="fa fa-sign-out" ></i> Logout</a>
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