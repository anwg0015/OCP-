 	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Routine</a></li>
			</ul>  
			
			<a href="<?php echo base_url(); ?>index.php/routine/edit/<?php echo $routine['routine_id']; ?>"><button type="submit" class="btn btn-primary">Edit Routine</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Class Routine</h2>
						
					</div>
					<?php if (isset($msg)) {
						?>
			<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong><?php echo $msg; ?> </strong>
						</div><?php } ?>


			<div class="box-content">
				<center><?php 
				echo $routine['routine_desc'];
				?></center>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	