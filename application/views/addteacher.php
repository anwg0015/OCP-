	  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/combodate.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/moment.js"></script>

	<script>
('#student').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Teacher</a></li>
			</ul>

<?php if (isset($msg)) {
?>
	<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong><?php echo $msg; ?> </strong>
						</div><?php } ?>

<a href="<?php echo base_url(); ?>index.php/teacher"><button type="submit" class="btn btn-primary">List Teacher</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Teacher</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal
							');
						echo form_open('teacher/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>

							<div class="control-group">
							  <label class="control-label" for="sname">First Name* </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='t_fname' >

								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="sname">Middle Name </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='t_mname' >

								
							  </div>
							</div>


							<div class="control-group ">
							  <label class="control-label" for="sroll">Last Name* </label>
							  <div class="controls">
								<input type="text" class="span3" id="sidno" name='t_lname' >
								
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Sex *</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="t_sex" id="optionsRadios1" value="Male" checked="">Male
								  </label>
								  <label class="radio">
									<input type="radio" name="t_sex" id="optionsRadios2" value="Female">Female
								</label>
								</div>
							  </div>


<label class="control-label">Date of Birth*:</label>
<div class="controls">
<input type="text" id="date" data-format="YYYY-MM-DD" data-template="YYYY MMMM D" name="t_dob" value="1992-11-03" class="form-control">
</div>
<script>
$("input[name='tdate']").combodate({
    minYear: 1980,
    maxYear: 2015,
    minuteStep: 10
}); 
</script>
</br>
<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher Address*:</label>
<div class="controls">
<input type="text" id="addr" name="t_address" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher Phone*:</label>
<div class="controls">
<input type="text" id="addr" name="t_phone" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher Mobile*:</label>
<div class="controls">
<input type="text" id="addr" name="t_mobile" class="form-control">
</div>
</div>

<div class="control-group">
  <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teacher Role*: </label>
<div class="controls">
  <select name="t_role" id="level"  >
    <option value="">-- Select Role --</option>
    <option value="HOD">HOD</option>
    <option value="teacher">Teacher</option>
    </select>
    </div>
    </div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email*:</label>
<div class="controls">
<input type="text" id="addr" name="t_email" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password*:</label>
<div class="controls">
<input type="text" id="addr" name="t_password" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirm Password*:</label>
<div class="controls">
<input type="text" id="addr" name="t_password" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">Status *</label>
<div class="controls">
 <label class="radio">
<input type="radio" name="t_status" id="optionsRadios1" value="Active" checked="">Active</label>
<label class="radio">
<input type="radio" name="t_status" id="optionsRadios2" value="Inactive">Inactive</label>
</div></div>

<div class="form-actions">
<button type="submit" class="btn btn-primary">Add Teacher</button>
 <button type="reset" class="btn">Cancel</button></div>
</fieldset>
</form>  
</div> 