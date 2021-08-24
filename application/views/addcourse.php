	<script>
('#course').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>

				<li><a href="#">Add Course</a></li>
			</ul>
			
				      
 <div class="alert alert-success">
							
<?php echo "ADDED SUCCESFULLY";?>
							
						</div>

 


<a href="<?php echo base_url(); ?>index.php/course"><button type="submit" class="btn btn-primary">List Course</button></a>


 
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Course</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						
						echo form_open('course/insert',$attributes);



						


						?>



						  <fieldset>

                          
                         
                          <br>
							<div class="control-group">

							  <label class="control-label" for="coco">Course Code* </label>
							  <div class="controls">
								<input type="text" class="span3" id="coco" name='ccode' >
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="cname">Course Name*</label>
							  <div class="controls">
								<input type="text" class="span3" name="cname" >
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="clevel">Course Level*</label>
								<div class="controls">
								  <select id="fac" name="clevel">
								    <option value="">-- Choose Course Level --</option>
									<option value="Graduate">Graduate</option>
									<option value="Undergraduate">Undergraduate</option>
									<option value="Postgraduate">Postgraduate</option>
									</select>
								</div>
							  </div>
                            <div class="control-group">
								<label class="control-label" for="fac">Faculty*</label>
								<div class="controls">
								  <select id="fac" name="cfaculty">
								    <option value="">-- Choose Faculty --</option>
									<option value="Science and Technology">Science and Technology</option>
									<option value="Management">Management</option>
									</select>
								</div>
							  </div>
                            <div class="control-group">
								<label class="control-label" for="programme">Programme*</label>
								<div class="controls">
								  <select id="programme" name="cprogramme">
								    <option value="">-- Choose Programme --</option>
									<option value="BBA">BBA</option>
									<option value="BCA">BCA</option>
									<option value="BIT">BIT</option>
									<option value="BE Civil">BE Civil</option>
									<option value="BE Computer">BE.Comp</option>
									<option value="BE Electronic and Communication">BE. Elex & Comm</option>
									<option value="MAMCJ">MAMCJ</option>
									<option value="MCA">MCA</option>
									<option value="PGDCA">PGDCA</option>
									
									</select>
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="semester">Semester*</label>
								<div class="controls">
								  <select id="fac" name="csem">
								    <option value="">-- Choose Semester --</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
									<option value="VI">VI</option>
									<option value="VII">VII</option>
									<option value="VIII">VIII</option>
									
									
									</select>
								</div>
							  </div>
                     
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Course</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 
   