<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Districts</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('district/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>District Id</th>
						<th>District Name</th>
                        <th>District Admin</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($district as $d){ ?>
                    <tr>
						<td><?php echo $d['district_id']; ?></td>
						<td><?php echo $d['district_name']; ?></td>
                        <td><?php echo $d['name']; ?></td>

                        <td></td>
						<td>
                            <a href="<?php echo site_url('district/edit/'.$d['district_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('district/remove/'.$d['district_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>