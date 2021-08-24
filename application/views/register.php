<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Sign up</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styles.css" />
   
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/dobPicker.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
     <script src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/combodate.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/moment.js"></script>

  
<body style="">
<div class="container-fluid" style="margin-top: 22px;">
<a href="<?php echo base_url();?>index.php/login" class="pull-left"><img src="<?php echo base_url(); ?>/assets/images/Logo_KCC1.png"style="margin-left:5px;"></a>
<h1 class="col-xs-pull-6"> Online Course Portal</h1>

</div>
  <div class="container-fluid">
    	<div class="well" style="background-color:rgb(164, 165, 159); color:white;" >
        <h2>Create new User</h2>
        <bR>
          <?php
          $attributes = array('class' => 'form-inline');
          echo form_open('login/register',$attributes);
          ?>
           <div class="form-group">
    <label>ID No. :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <input type="text" class="form-control" id="idno" placeholder="ID number" name="idno" value="<?php echo set_value('idno'); ?>">
     <?php echo form_error('idno','<div class="error" style="color:RED;">','</div>'); ?>
  </div><br><br>

  <div class="form-group">
    <label>First Name:&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>
    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo set_value('fname'); ?>">&nbsp;&nbsp;
    <?php echo form_error('fname','<div class="error" style="color:RED;">','</div>'); ?>

  </div>
  <div class="form-group">
    <label>Middle Name:&nbsp;</label>
    <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname" value="<?php echo set_value('mname'); ?>">&nbsp;&nbsp;
  </div>
  
  <div class="form-group">
    <label>Last Name:&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo set_value('lname'); ?>">
     <?php echo form_error('lname','<div class="error" style="color:RED;">','</div>'); ?>

  </div><br><br>

<div class="form-group">
    <label>Sex: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <input type="radio" class="form-control" id="sex" name="sex" value="MALE" >Male&nbsp;&nbsp;&nbsp;
    <input type="radio" class="form-control" id="sex" name="sex" Value="FEMALE" >Female
  </div><br><br>


 
  
  <label>Date of Birth:</label><label style="color:RED; font-size:19px">*</label>

<input type="text" id="date" data-format="YYYY-MM-DD" data-template="YYYY MMMM D" name="date" value="1992-11-03" class="form-control">
<br><br>
<script>





$("input[name='date']").combodate({
    minYear: 1980,
    maxYear: 2015,
    minuteStep: 10
}); 
</script>


  
<div class="form-group">
    <label>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?php echo set_value('address'); ?>">
     <?php echo form_error('address','<div class="error" style="color:RED;">','</div>'); ?>
  </div><br><br>
  <div class="form-group">
    <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
      <?php echo form_error('email','<div class="error" style="color:RED;">','</div>'); ?>
  </div><br><br>

  <div class="form-group">
    <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>
    <input type="password" class="form-control" id="mno" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
     <?php echo form_error('password','<div class="error" style="color:RED;">','</div>'); ?>
 </div><br><br>

 <div class="form-group">
    <label>Confirm Password:</label><label style="color:RED; font-size:19px">*</label>
    <input type="password" class="form-control" id="mno" placeholder="Confirm Password" name="confpassword" value="<?php echo set_value('confpassword'); ?>">
     <?php echo form_error('confpassword','<div class="error" style="color:RED;">','</div>'); ?>
 </div><br><br>

   <div class="form-group">
    <label>Phone no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

    <input type="text" class="form-control" id="email" placeholder="Phone" name="phone" value="<?php echo set_value('phone'); ?>">
     <?php echo form_error('phone','<div class="error" style="color:RED;">','</div>'); ?>
  </div><br><br>
  

   <div class="form-group">
    <label>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <input type="text" class="form-control" id="mno" placeholder="Mobile number" name="mobile" value="<?php echo set_value('mobile'); ?>">
     <?php echo form_error('phone','<div class="error" style="color:RED;">','</div>'); ?>
  </div><br><br>
  

   

  <!-- <div class="form-group">
    <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div><br><br> -->

   <div class="form-group">
  <label>Level: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

  <select name="level" id="level" class="form-control" name="level" >
    <option value="">-- Select Level--</option>
    <option value="Graduate">Graduate</option>
    <option value="UnderGraduate">UnderGraduate</option>
    <option value="PostGraduate">PostGraduate</option>
    
  </select>
    </div><br><br>
  <div class="form-group">
  <label>Faculty:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

  <select name="faculty" id="faculty" class="form-control" name="faculty" >
    <option value="">-- Select Faculty--</option>
    <option value="Science and Technology">Science and Technology</option>
    <option value="Management">Management</option>
    
  </select>
    </div><br><br>

  <div class="form-group">
  <label>Programme:&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

  <select name="programme" id="programme" class="form-control" name="programme" >
		<option value="">-- Select Programme--</option>
		<option value="BBA">BBA</option>
		<option value="BCA">BCA</option>
		<option value="BE Civil">BE Civil</option>
		<option value="BE Computer">BE Computer</option>
		<option value="BE Elx &amp; Comm">BE Elx &amp; Comm.</option>
		<option value="BIT">BIT</option>
		<option value="MAMCJ">MAMCJ</option>
		<option value="MCA">MCA</option>
		<option value="PGDCA">PGDCA</option>

	</select>
    </div><br><br>
    <div class="form-group">
    <label>Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

   <select name="semester" id="semester" class="form-control" name="semester">
		<option value="">-- Select Semester --</option>
		<option value="1">I</option>
		<option value="2">II</option>
		<option value="3">III</option>
		<option value="4">IV</option>
		<option value="5">V</option>
		<option value="6">VI</option>
		<option value="7">VII</option>
		<option value="8">VIII</option>

	</select>
    </div><br><br>
    <div class="form-group">
    <label>Batch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label style="color:RED; font-size:19px">*</label>

    <select name="batch" id="batch" class="form-control" name="batch">
		<option value="">-- Select Batch --</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		
	</select>
    </div><br><br> 
 
  <button type="submit" class="btn btn-primary">Register</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="reset" class="btn btn-default">Reset</button>

</form> 

    
        </div>
    
    </section>
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
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>