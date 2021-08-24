

	  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/combodate.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/moment.js"></script>

	<script>
('#batch').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View batch</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/assignment/getall"><button type="submit" class="btn btn-primary">View Assignment</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Assignment</h2>
						
					</div>
					<?php echo form_open_multipart('assignment/insert');?>
					<div class="box-content">
					
					
						<?php $attributes = array('class' => 'form-horizontal');?>
						
						
						
						
						
						   
						  					
				
						  <fieldset>
                          
                         
                          <br>
                         
							<div class="control-group">
							  <label class="control-label" for="cname">Assignment No*</label>
							  <div class="controls">
								<input type="text" class="span3" name="assign_name">
							  </div>
							 
							</div>
							 
							 <?php 
							 foreach($allcourse as $course)
							 	{
							 		?>
							
							<div class="control-group">
								<label class="control-label" for="clevel">Assignment Subject*</label>
								<div class="controls">
								  <select id="fac" name="asubject">
								  <option="">--Choose Subject--</option>
									<option value="<?php echo $course->course_id;?>"><?php echo $course->course_name;?></option>
									</select>
								</div>
							  </div>
							  
							  <div class="control-group">

							    <label class="control-label">Create Date*:</label>
<div class="controls">
<input type="text" id="date" data-format="YYYY-MM-DD" data-template="YYYY MMMM D" name="cdate"  class="form-control">
</div>
</div>

<div class="control-group">

							    <label class="control-label">Submission Date*:</label>
<div class="controls">
<input type="text" id="date" data-format="YYYY-MM-DD" data-template="YYYY MMMM D" name="sdate" class="form-control">
</div>
</div>





<div class="control-group">
<div class="controls">

<input type="file" name="userfile" value=""/>


</div>
</div>
	


<br /><br />




</form>
	

</body>
</html>






						  <div class="control-group">
								<label class="control-label" for="clevel">Assignment Status*</label>
								<div class="controls">
								  <select id="fac" name="bstatus">
								    <option value="">-- Choose  Status --</option>
									<option value="Active">Active</option>
									<option value="Deactive">DeActive</option>
									
									</select>
								</div>
							  </div>
							 
                           
							<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Assignment</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 
                        <?php } ?>