<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/student_css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link id="bootstrap-style" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link id="base-style" href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
  <link id="base-style-responsive" href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  <script src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
  <!-- end: CSS -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <img src="<?php echo base_url(); ?>/assets/img/Logo_KCC1.png" style="margin-left:-32px; margin-top:2px;">
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      
          
            <ul class="dropdown-menu">
              
                <ul class="menu">
                 
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      </ul>
                      </ul>

              
          
          
             
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="hidden-xs">Welcome Alexander Pierce</span>
              <li class="dropdown-toggle">Log out</li>
            </a>
            <ul class="dropdown-menu">

              <!-- User image -->
              
                

              
         
  </header>

  <!-- Left side column. contains the logo and sidebar -->
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
          
        
   

    <!-- /.sidebar -->
  </aside>

  


<div class="content-wrapper">
 <!--here goes the main content-->
  
<?php include($page); ?>

</div>
</div>



<footer class="main-footer">
   <span style="margin-left:270px;">&copy; 2015 <a href="" alt="">Kantipur City College</a></span>
  </footer>






<script src="<?php echo base_url(); ?>/student_css/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url(); ?>/student_css/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>/student_css/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>/student_css/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>/student_css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/student_css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>/student_css/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>/student_css/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/student_css/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>/student_css/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>/student_css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>/student_css/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/student_css/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/student_css/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/student_css/dist/js/pages/dashboard.js"></script>
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


<!-- AdminLTE for demo purposes -->


<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/student_css/dist/js/demo.js"></script>
*
<script src="<?php echo base_url(); ?>/student_css/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/student_css/plugins/datatables/dataTables.bootstrap.min.js"></script>
   <script >
        $(function () {
  
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

 
</body>
</html>
