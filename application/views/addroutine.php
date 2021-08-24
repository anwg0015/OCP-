 	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#"><?php echo isset($action)?'Update ':'ADD New';?> Routine</a></li>
			</ul>  
				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span><?php echo isset($action)?'Update ':'ADD New';?> Routine</h2>
						</div>
<?php $attributes = array('class' => 'form-horizontal');
				if(isset($action))
				{
						echo form_open('routine/update',$attributes);
				}else{
						echo form_open('routine/insert',$attributes);
					}
					 ?>
			<div class="box-content">
				<div class="control-group">
							  <label class="control-label" for="cname"><center>Routine Description *</center></label><br>
							  <div class="controls">
								<textarea name="routine" class="ckeditor" value="<?php echo isset($action)?$routine['routine_desc']:''; ?>"></textarea>
							  </div>
							</div>
			
			</div><!--/row-->
			<input type="hidden" name="sem_id" value="<?php echo $sem_id; ?>"> 
<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"><?php echo isset($action)?'Update ':'ADD';?> Routine</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
        </div>
	