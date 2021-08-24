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
				<li><a href="#">Add Operation</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/operation/view_operation"><button type="submit" class="btn btn-primary">List Operation</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Operation</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal
							');
						echo form_open('operation/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
                        
							
							
                         <div class="control-group">
  <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch: </label>
<div class="controls">
  <select name="op_branch" id="level"  >

   <?php  foreach($alloperation as $op)
							 	{
							 		?>
								<option="">--Choose Batch--</option>
								<option="<?php echo $op->batch_id;?>"><?php echo $op->batch_name;?>
									
										<?php } ?>

								  </select>
									<noscript><input type="submit" value="Submit"></noscript>
    
    
    </select>
    <div class="row-fluid">
				
				<div class="box black noMargin span6" ontablet="span6" ondesktop="span6">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Support tickets Metro</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="tickets metro">
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199278 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Complete ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket yellow">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199277 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Normal priority ]</span>
										<span class="status">Status: [ Pending ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket red">
								<a href="#">
									<span class="header">
										<span class="title">ARM issue</span>
										<span class="number">[ #199276 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ High priority ]</span>
										<span class="status">Status: [ In progress ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">IE7 problem</span>
										<span class="number">[ #199275 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Rejected ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket blue">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199274 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Low priority ]</span>
										<span class="status">Status: [ Complete ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket yellow">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199273 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ Normal priority ]</span>
										<span class="status">Status: [ Pending ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket red">
								<a href="#">
									<span class="header">
										<span class="title">ARM issue</span>
										<span class="number">[ #199272 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="name">Dennis Ji</span>
										<span class="priority">[ High priority ]</span>
										<span class="status">Status: [ In progress ]</span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span6" ontablet="span6" ondesktop="span6">
					<div class="box-header">
						<h2><i class="halflings-icon white comment"></i><span class="break"></span>Chat Metro</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="chat metro yellow">
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:09</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:08</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>                                  
							</li>
							<li class="left">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:07</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Dennis Ji</span>
									<span class="time">Jul 25, 2012 11:06</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
						</ul>
						<div class="chat-form black">
							<textarea></textarea>
							<button class="btn btn-warning">Send message</button>
						</div>	
					</div>
				</div><!--/span-->
			
			</div>
								

    </div>
    </div>

							<div class="control-group">
							  <label class="control-label" for="sname">Operation Name* </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='op_name' >

								
							  </div>
							</div>

							






 




	
	
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Teacher</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 
                        