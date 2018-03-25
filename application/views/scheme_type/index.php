<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Scheme Type Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('scheme_type/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Type Id</th>
                        <th>Type Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($scheme_type as $s){ ?>      
                    <tr>
                        <td><?php echo $s['type_id']; ?></td>
                        <td><?php echo $s['type_name']; ?></td>
                        <td>
                            <a href="<?php echo site_url('scheme_type/edit/'.$s['type_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('scheme_type/remove/'.$s['type_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>