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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATU | Industrial Liaison Office</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
     SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <link rel="stylesheet" href="css/website.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- //Custom CSS -->
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- //Bootstrap Core CSS -->

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons CSS-->

    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- //js-->

</head>
<body>
    <div class="header-top-wrapper">
        <div class="container-12">
            <div class="grid-12">
                  <div class="region region-header-top">

                        <div id="block-block-7" class="block-block-7">
                            <div class="nav_items">
                                <ol>
                                    <li>
                                        <a href="letter/Attachment Letter.pdf" >
                                            <i class="fa fa-download"></i>
                                            Download
                                        </a>
                                    </li>
                                    <li>
                                        <a href="signup.php">
                                            <i class="fa fa-pencil-square-o"></i>
                                            Sign Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="registration.php">
                                            <i class="fa fa-file-text-o"></i>
                                            Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="website.php">
                                            <i class="fa fa-home"></i>
                                            Home
                                        </a>
                                    </li>
                                    <div class="nav-brand">
                                        
                                        <h3>
                                            <b>ATU Industrial Liaison</b>
                                        </h3>
                                    </div>
                                </ol>
                                	
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-page">
        <div class="container">
            <div class="row">

                <!-- ABOUT LIAISON -->
                <div class="col-md-8">
                    <div class="page-title">
                        <h3>Industrial Liaison</h3>
                    </div>
                    <p style="text-align: justify;">
                        The Industrial Liaison Office is a department within 
                        Accra Technical University that is charged with the 
                        responsibility of coordinating industrial attachment / 
                        internship programmes for students in the University.
                    </p>
                    <p style="text-align: justify;"><strong>GOAL</strong></p>
                    <p style="text-align: justify;">
                        The cardinal goal of the Department is to ensure a 
                        smooth transition of the theoretical knowledge acquired 
                        by students in the lecture halls into the World of Work. 
                        The office is also responsible for the placement 
                        of students in related industries or organizations 
                        to enable them acquaint themselves with current technological 
                        transformations in the work environment.
                    </p>
                    <p style="text-align: justify;"><strong>OBJECTIVES</strong></p>
                    <p style="text-align: justify;">The objectives of the Department are to:</p>
                    <ol style="text-align: justify;">
                        <li>help equip students with the practical skills and knowledge in their major fields of study, via practical industrial training;</li>
                        <li>assist students to acquire the behavioral skills appropriate for the World of Work through hands-on-learning programmes;</li>
                        <li>prepare students for job placement after completion of their programmes;</li>
                        <li>encourage students to acquire and practice relevant entrepreneurial skills via practical attachment programmes and guest lessons; and</li>
                        <li>ensure that our students are preferred to all other students for employment opportunities.</li>
                    </ol>
                    <p style="text-align: justify;"><strong>STUDENTS’ INDUSTRIAL ATTACHMENT EXERCISE: INDUSTRIAL ATTACHMENT LETTER</strong></p>
                    <p style="text-align: justify;">
                        For students to get attached to industries for their practical industrial training, letters for the industrial attachment 
                        are acquired online. This is available to students on the Industrial Liaison of Accra Technical University's website. 
                        Students can download the industrial attachment letter 
                        <a href="letter/Attachment Letter.pdf"><b><i class="fa fa-download"></i> here</b></a>.
                    </p>
                </div>
                <!--// ABOUT LIAISON -->


                <!-- QUICK LINKS -->
                <div class="col-md-4">
                    <div class="quick_links">
                        <div class="quick-links-title">
                            <h3>Quick Links</h3>
                            <!-- <p>Learn More On This Page</p> -->
                        </div>
                        <ul class="bullet-list"> 
                            <li>
                                <a href="letter/Attachment Letter.pdf">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Click here to Download your Attachment Letter
                                </a> 
                            </li>
                            <li>
                                <a href="login.php">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Click here to register for Industrial Attachment
                                </a>
                            </li>
                            <li>
                                <a href="signup.php">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Click here to Sign up
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Check your Placement
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Visit ATU Students' Portal
                                </a>
                            </li>
                            
                          
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Visit iCampus
                                </a>
                            </li>
                            <li>
                                <a href="http://atu.edu.gh/">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Visit ATU Website
                                </a>
                            </li>
                            <li>
                                <a href="login.php?logout='1'">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Click here to Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--// QUICK LINKS -->

                    <!-- RELATED LINKS -->
                    <!-- <div class="related_links">
                        <div class="related-links-title">
                            <h3>Related Links</h3>
                        </div>
                        <ul class="bullet-list"> 
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Visit ATU Website
                                </a> 
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Sign up
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    &nbsp;&nbsp;Login
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!--// RELATED LINKS -->
                </div>
                
            </div>
        </div>
    </div>

    

    <!--footer-->
	<div class="footer">
        <p>&copy; 2020 ATU ILMS. All Rights Reserved | Powered by <a href="website.php">ATU Industrial Liaison Office</a></p>		
     </div>
     <!--//footer-->

     <!-- scroll bar -->
	<script  src="js/index1.js"></script>
	<!-- //scroll bar -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

     <!-- Bootstrap Core JavaScript -->
     <script src="js/bootstrap.js"> </script>
     <!-- //Bootstrap Core JavaScript -->
</body>
</html>