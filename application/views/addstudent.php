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
				<li><a href="#">Add Student</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/student"><button type="submit" class="btn btn-primary">List Student</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Student</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('student/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
							<div class="control-group">
							  <label class="control-label" for="sname">Student Name* </label>
							  <div class="controls">
								<input type="text" class="span3" id="sname" name='sname' >

								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="sroll">Student Idno:* </label>
							  <div class="controls">
								<input type="text" class="span3" id="sidno" name='sidno' >
								
							  </div>
							</div>
							<div class="control-group">
							
  <label class="control-label">Date of Birth*:</label>
<div class="controls">
<input type="text" id="date" data-format="YYYY-MM-DD" data-template="YYYY MMMM D" name="sdate" value="1992-11-03" class="form-control">
</div>
</div>

<script>





$("input[name='sdate']").combodate({
    minYear: 1980,
    maxYear: 2015,
    minuteStep: 10
}); 
</script>
<div class="control-group">
    <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender*:</label>
<div class="controls">
    <input type="radio" class="form-control" id="sex" name="std_gender" value="MALE" checked="checked"  >Male&nbsp;&nbsp;&nbsp;
    <input type="radio" class="form-control" id="sex" name="std_gender" Value="FEMALE" >Female
  </div>
  </div>
  <div class="control-group">
  <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level*: </label>
<div class="controls">
  <select name="slevel" id="level"  >
    <option value="">-- Select Level--</option>
    <option value="Graduate">Graduate</option>
    <option value="UnderGraduate">UnderGraduate</option>
    <option value="PostGraduate">PostGraduate</option>
    
  </select>
    </div>
    </div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address*:</label>
<div class="controls">
<input type="text" id="addr" name="saddress" class="form-control">
</div>
</div>
<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email*:</label>
<div class="controls">
<input type="text" id="addr" name="semail" class="form-control">
</div>
</div>

<div class="control-group">
   <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone*:</label>
 <div class="controls">
    <input type="text" id="phone" name="sphone" class="form-control">
 </div>
</div>

<div class="control-group">
								<label class="control-label" for="programme">Programme*</label>
								<div class="controls">
								  <select id="programme" name="sprogramme">
								    <option value="">-- Choose Programme --</option>
								    <?php foreach($allprog as $programme){
?>

									<option value="<?php echo $programme->prog_id; ?>"><?php echo $programme->prog_name;?></option>
									<?php } ?>
									
									</select>
								</div>
							  </div>
					<div class="control-group">
								<label class="control-label" for="semester">Semester*</label>
								<div class="controls">
								  <select id="sem" name="ssem">
								    <option value="">-- Choose Semester --</option>
								   
									
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="sbatch">Batch*</label>
								<div class="controls">
								  <select id="batch" name="sbatch">
									<option value="">-- Choose semester batch --</option>

								  	<?php foreach ($allbatch as $batch) {
								  		# code...
								  	
								  	?>
								 <option value="<?php echo $batch->batch_id?>" <?php if($sbatch==$batch->batch_id) echo "selected"; ?>>

            <?=$branch['title']?>
									<?php } ?>									
									</select>
								</div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="pass">Password* </label>
							  <div class="controls">
								<input type="password" class="span3" id="pass" name='spassword' >
								</div>
								</div>

								<div class="control-group">
							  <label class="control-label" for="sphoto">Photo* </label>
							  <div class="controls">
								<input type="file" class="span3" id="photo" name='sphoto' >
								</div>
							</div>
													  						<div class="control-group">
    <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status*:</label>
<div class="controls">
    <input type="radio" class="form-control" id="status" name="status" value="1" checked  >Active&nbsp;&nbsp;&nbsp;
    <input type="radio" class="form-control" id="status" name="status" Value="0" >Inactive
  </div>

   </div>
	
	
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Student</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 