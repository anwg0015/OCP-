<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Course</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/operation/add"><button type="submit" class="btn btn-primary">Add Operation</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Activity</h2>


						
					</div>
					<center><div class="control-group">
								<label class="control-label" for="selectError">Branch</label>
								<div class="controls">
									
								  <select id="selectprog" data-rel="chosen" name = 'op_branch' onchange='this.form.submit()'>
  								<option>Select Branch</option>

								  	
									<option value=""></option>
										
								  </select>
									<noscript><input type="submit" value="Submit"></noscript>

								</div>
</center>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	  <th>SN</th>
								  <th>Name</th>
								  <th>Management</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  		

							<tr>
                           

								<td class="center"></td>
								<td class="center"></td>
								<td class="center"><a href=""></a></td>
								<td class="center">
									
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	