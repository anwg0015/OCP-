<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		 
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo base_url(); ?>index.php/login/mainpage"><span><img src="<?php echo base_url(); ?>/assets/img/Logo_KCC1.png" style="margin-left:-32px; margin-top:2px;"></span></a>
								<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						      <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo base_url();?>/168515_437905316295409_1354232350_n.jpg" class="thumbnail" alt="" width="60"><?php echo $this->session->userdata('fname'); 
                                    echo "&nbsp;".$this->session->userdata('lname'); ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    
                                    <li><a href="<?php echo base_url(); ?>/index.php/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
						<!-- end: User Dropdown -->
					
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
		<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url(); ?>/index.php/login/mainpage"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="<?php echo base_url(); ?>/index.php/ "><i class="icon-bar-chart"></i><span class="hidden-tablet"> Admin Users</span></a></li>	
						<li><a href="<?php echo base_url(); ?>/index.php/programme"><i class="icon-book"></i><span class="hidden-tablet"> Programme</span></a></li>
						<li><a href="<?php echo base_url(); ?>/index.php/batch"><i class="icon-book"></i><span class="hidden-tablet"> Batch</span></a></li>
						<li><a href="<?php echo base_url(); ?>/index.php/programme/my_programme"><i class="icon-book"></i><span class="hidden-tablet"> My Programme</span></a></li>
						<li><a href="<?php echo base_url(); ?>/index.php/"><i class="icon-book"></i><span class="hidden-tablet"> My Subject</span></a></li>
						<li><a href="#"><i class="icon-book"></i><span class="hidden-tablet"> Notice</span></a></li>
						<li><a href="<?php echo base_url(); ?>/index.php/course"><i class="icon-book"></i><span class="hidden-tablet"> Course</span></a></li>
						<li><a href="#"><i class="icon-eye-open"></i><span class="hidden-tablet"> Discussion</span></a></li>
						
						
				
						
				</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			
			<!-- start: Content -->
		

			      <!-- include goes here -->
		
			      <?php include($page); ?>   
                    
                    
                    
                    
                    
                  
			</div>
                
                
                
       		 </div>
        	</div>
                </div>
                
                 
                
	
	<footer>

		<p st>
			<span style="margin-left:270px;">&copy; 2015 <a href="" alt="">Kantipur City College</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>/assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>/assets/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>/assets/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>/assets/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>/assets/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>/assets/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
