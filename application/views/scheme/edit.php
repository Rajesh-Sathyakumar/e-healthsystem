<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Scheme Edit</h3>
            </div>
			<?php echo form_open('scheme/edit/'.$scheme['scheme_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label>Scheme Type</label>
						<div class="form-group">
							<select name="type_id" class="form-control">
								<option value="">select scheme_type</option>
								<?php 
								foreach($all_scheme_type as $scheme_type)
								{
									$selected = ($scheme_type['type_id'] == $scheme['type_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$scheme_type['type_id'].'" '.$selected.'>'.$scheme_type['type_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('type_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<br>
                    <label for="type_id" class="control-label"> Scheme Type</label>
                <select class="js-example-basic-multiple js-states" name="disease_id" style="width: 75%" multiple="multiple">
								<option value="">select disease</option>
								<?php 
								foreach($all_disease as $disease)
								{
									$selected = ($disease['disease_id'] == $scheme['disease_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$disease['disease_id'].'" '.$selected.'>'.$disease['disease_name'].'</option>';
								} 
								?>
							</select>
						</div>
					<div class="col-md-6">
						<label for="scheme_name" class="control-label">Scheme Name</label>
						<div class="form-group">
							<input type="text" name="scheme_name" value="<?php echo ($this->input->post('scheme_name') ? $this->input->post('scheme_name') : $scheme['scheme_name']); ?>" class="form-control" id="scheme_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="maximum_amount" class="control-label">Maximum Amount</label>
						<div class="form-group">
							<input type="text" name="maximum_amount" value="<?php echo ($this->input->post('maximum_amount') ? $this->input->post('maximum_amount') : $scheme['maximum_amount']); ?>" class="form-control" id="maximum_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="guidelines" class="control-label">Guidelines</label>
						<div class="form-group">
							<input type="text" name="guidelines" value="<?php echo ($this->input->post('guidelines') ? $this->input->post('guidelines') : $scheme['guidelines']); ?>" class="form-control" id="guidelines" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fund_allocated" class="control-label">Fund Allocated</label>
						<div class="form-group">
							<input type="text" name="fund_allocated" value="<?php echo ($this->input->post('fund_allocated') ? $this->input->post('fund_allocated') : $scheme['fund_allocated']); ?>" class="form-control" id="fund_allocated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="file_url" class="control-label">File Url</label>
						<div class="form-group">
							<input type="text" name="file_url" value="<?php echo ($this->input->post('file_url') ? $this->input->post('file_url') : $scheme['file_url']); ?>" class="form-control" id="file_url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $scheme['description']); ?></textarea>
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