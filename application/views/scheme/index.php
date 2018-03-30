<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Scheme Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('scheme/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Scheme Id</th>
						<th>Type Id</th>
						<th>Scheme Name</th>
						<th>Maximum Amount</th>
						<th>Creation Date</th>
						<th>Updation Date</th>
						<th>Fund Allocated</th>
						<th>Forms</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($scheme as $s){ ?>
                    <tr>
						<td><?php echo $s['scheme_id']; ?></td>	
						<td><?php echo $s['type_id']; ?></td>
						<td><?php echo $s['scheme_name']; ?></td>
						<td><?php echo $s['maximum_amount']; ?></td>
						<td><?php echo $s['creation_date']; ?></td>
						<td><?php echo $s['updation_date']; ?></td>
						<td><?php echo $s['fund_allocated']; ?></td>
						<td><a href="butterfly.jpg" download><button type="button" class="btn btn-info btn-sm">
                           <span class="glyphicon glyphicon-download"></span>
                         </button></a></td>
						<td><?php echo $s['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('scheme/edit/'.$s['scheme_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('scheme/remove/'.$s['scheme_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>
