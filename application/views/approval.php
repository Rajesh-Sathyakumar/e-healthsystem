 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Empanelment requests to be approved
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <?php
                if($role == ROLE_STATE_ADMIN)
                 {
                  ?>
                <thead>
                <tr>
                  <th>Empanelment_request_id</th>
                  <th>Organisation_id</th>
                  <th>Scheme_id</th>
                  <th>Documents</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(!empty($approvalRecords))
                    {
                        foreach($approvalRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->empanelment_request_id ?></td>
                      <td><?php echo $record->organisation_id ?></td>
                      <td><?php echo $record->scheme_id ?></td>
                      <td><?php echo $record->documents ?></td>
                      <td><?php echo $record->status ?></td>
                      <td><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>showRequestProfile/<?php $record->empanelment_request_id ?>" title="View Request" enabled="true">View</a></td>
                    </tr>
                    <?php
                  }
                }
              }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>