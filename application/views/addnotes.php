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
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Notes</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						
						echo form_open('notes/insert',$attributes);



						


						?>



						  <fieldset>

                          
                         
                          <br>
							<div class="control-group">

							  <label class="control-label" for="coco">Chapter Name* </label>
							  <div class="controls">
								<input type="text" class="span3" id="coco" name='chap_name' >
								
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="sub">Subject*</label>
								<div class="controls">
								  <select id="fac" name="notes_subject">
								  <?php foreach($allcourse as $course)
							{?>
								    <option value="<?php echo $course->course_id;?>"><?php echo $course->course_name;?></option>
									<?php } ?>
									</select>
								</div>
							  </div>
                           <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" name="userfile"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>
							  </div>
							</div>

							
							<div class="control-group">
								<label class="control-label" for="clevel">Status*</label>
								<div class="controls">
								  <select id="fac" name="nstatus">
								    <option value="">-- Choose  Status --</option>
									<option value="Active">Active</option>
									<option value="Deactive">DeActive</option>
									
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
   