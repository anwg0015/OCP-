<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>OCP Login</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="">
<div class="container-fluid" style="margin-top: 22px;">
<a href="<?php echo base_url();?>index.php/login" class="pull-left"><img src="<?php echo base_url(); ?>/assets/images/Logo_KCC1.png"style="margin-left:5px;"></a>
<h1 class="col-xs-pull-6"> Online Course Portal</h1>

</div>

<section class="container-fluid">
<div class="well" style="background-image:url(<?php echo base_url(); ?>/assets/images/us.jpg) " >







<?php 
$attributes = array('role' => 'login', 'style' =>'margin-right: 7px;' );
echo form_open('login/check_login',$attributes); ?>
			     <div class="msg msg-ok" style='color:white; font-size:18px;'>
                    <?php if(isset($msg)){
                        echo $msg;
                    }
                    ?>
                </div>
                <div class="form-group">
                    <?php 
                    $un=array(
                        'name' => 'username',
                        'placeholder' => 'Enter username',
                        'required' => '',
                        'class' => 'form-control'
                        );
                    echo form_input($un);
                    ?>
                    <span class="glyphicon glyphicon-user"></span>
                </div>
				
				<div class="form-group">
                    <?php 
                    $data=array(
                        'name' => 'password',
                        'placeholder' => 'Enter password',
                        'required' => '',
                        'class' => 'form-control'
                        );
                    echo form_password($data);
                    ?>
					<span class="glyphicon glyphicon-lock"></span>
				</div>
			
				<div class="form-group" style="color:white;"">
					<input type="checkbox" name="remember" value="1"> Remember me
				</div>
				
				<button type="submit" name="go" class="btn btn-block btn-primary">Login Now</button>
				
				<section>
					<a href="#" style="color:white;">Forgot your password ?</a>
				</section>
                <a href="<?php echo base_url();?>index.php/student/home">Login as a Student
                <a href="<?php echo base_url(); ?>index.php/login/signup" style="color:white;" class="pull-right">Create a new accout</a>
<?php 
?>
            
</section>

<div class="container-fluid">
<div class="well span3" style="background-color:white;">
            <span id="Label5" style="font-size:20px; color:blue;">What is Online Course Portal?</span><hr>
            <p align="justify" style="font-family:opensregular; font-size:19px;">Online Course Portal is online education system in which courses can be accessed 
                24 hours a day, 7 days a week. Students can easily read and review lectures, 
                discussions and other materials relevant to their course. The students need only 
                a computer and internet connection for accessing online courses.</p>
        </div>
           
            <div>
                <h3>OCP Available Programs</h3>
            </div>
            <div class="well">
            <span id="Label5" style="font-size:20px; color:blue;">MCA (Master of Computer Application)</span><hr>
            <p style="text-align:justify;font-family:opensregular; font-size:19px;">Master of Computer Application (MCA) is a two-year (Four Semester), 66 Credits hours program. MCA develops a range of competencies in business and team communication model as they apply to software design and development, software development cycle and distributed or web-based application.</p>
            </div>
            <div class="well">
                <span id="Label5" style="font-size:20px; color:blue;">PGDCA (Post Graduate Diploma in Computer application)</span><hR>
                <p style="text-align:justify;font-family:opensregular; font-size:19px;">Post Graduate Diploma in Computer application (PGDCA) is a one-year Two semester, 34 Credits hour’s program offered to the graduates with non-IT background. PGDCA program offered to the graduates with non-IT background. PGDCA program, at Kantipur City College (KCC), develops within students a strong theoretical foundation and sufficient practical knowledge for advance study leading to MCA degree.</p>
            </div>
            <div class="well">
                <span id="Label5" style="font-size:20px; color:blue;">MAMCJ (Masters of Arts in Mass Communication &amp; Journalism)</span><hr>
               <p style="text-align:justify;font-family:opensregular; font-size:19px;">The 4-semester MA MCJ program (two years) is an offer for students who want to earn a University degree with professional expertise and academic command in Mass Communication and Journalism. It offers a graduate degree to respond to the phenomenal growth of the mass media in Nepal and the need for competent, trained, professionals equipped with the latest knowledge in ICT sector. The subject-based modules of the program arm the students with theoretical information, and the practical research work equips them with real professional talents. This program is useful for both fresh graduates and working journalists.</p>
            </div>
        </div>
            </div>
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp" style="text-align:center;">
                &copy; <?PHP echo date("Y"); ?> <a target="_blank" href="" title="KCC" style="text-decoration:underline;">Kantipur City College</a>
            </div>
            </div>
            </div>
            </footer>
</body>
       


        

        
			

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>