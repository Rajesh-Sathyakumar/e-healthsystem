<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">District Edit</h3>
            </div>
			<?php echo form_open('district/edit/'.$district['district_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="district_name" class="control-label">District Name</label>
						<div class="form-group">
							<input type="text" name="district_name" value="<?php echo ($this->input->post('district_name') ? $this->input->post('district_name') : $district['district_name']); ?>" class="form-control" id="district_name" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
</div>
