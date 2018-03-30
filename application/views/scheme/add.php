<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Scheme Add</h3>
            </div>
            <?php echo form_open('scheme/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
				<div class="col-md-6">
						<br>
                <label for="type_id" class="control-label"> Scheme Type</label>
                <select class="js-example-basic-single js-states" name="type_id" style="width: 75%">
								<?php 
								foreach($all_scheme_type as $scheme_type)
								{
									$selected = ($scheme_type['type_id'] == $this->input->post('type_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$scheme_type['type_id'].'" '.$selected.'>'.$scheme_type['type_name'].'</option>';
								} 
								?>
                </select>
                </div> 
                <div class="col-md-6">
						<label for="scheme_name" class="control-label">Scheme Name</label>
						<div class="form-group">
							<input type="text" name="scheme_name" value="<?php echo $this->input->post('scheme_name'); ?>" class="form-control" id="scheme_name" />
						</div>
					</div>
                <div class="col-md-6">
                    <label for="type_id" class="control-label"> Disease Type</label>
                <select class="js-example-basic-multiple js-states" name="disease_id" style="width: 75%" multiple="multiple">
								<option value="">select disease</option>
								<?php 
								foreach($all_disease as $disease)
								{
									$selected = ($disease['disease_id'] == $this->input->post('disease_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$disease['disease_id'].'" '.$selected.'>'.$disease['disease_name'].'</option>';
								} 
								?>
							</select>
					</div>
					<span class="text-danger"><?php echo form_error('type_id');?></span>
					
					<div class="col-md-6">
						<label for="maximum_amount" class="control-label">Maximum Claim Amount per person</label>
						<div class="form-group">
							<input type="text" name="maximum_amount" value="<?php echo $this->input->post('maximum_amount'); ?>" class="form-control" id="maximum_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fund_allocated" class="control-label">Fund Allocated</label>
						<div class="form-group">
							<input type="text" name="fund_allocated" value="<?php echo $this->input->post('fund_allocated'); ?>" class="form-control" id="fund_allocated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_url" class="control-label">Forms</label>
     					    <input type = "file" name = "userfile" size = "20" value="<?php echo $this->input->post('userfile'); ?>"/> 
        					 
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
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