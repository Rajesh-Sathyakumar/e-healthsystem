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
                  <th>Your Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(!empty($approvalRecords))
                    {
                        foreach($approvalRecords as $record)
                        {
                          $id = $record->empanelment_request_id; 
                    ?>
                    <tr>
                      <td><?php echo $record->empanelment_request_id ?></td>
                      <td><?php echo $record->organisation_id ?></td>
                      <td><?php echo $record->scheme_id ?></td>
                      <td><?php echo $record->documents ?></td>
                      <td><?php echo $record->status ?></td>
                      <td><a class="btn btn-info btn-sm" name="id" value="<?php echo $id ?>" href="<?php echo base_url(); ?>showRequestProfile" title="View Request" enabled="true" method="get">View</a></td>
                      <td><?php 
                            if($record->stateAdmin_status == "approved")
                            {
                            ?>
                                <span class="label label-success">Approved</span>
                            <?php
                          }
                          else if($record->stateAdmin_status == "rejected")
                          {
                            ?>
                            <span class="label label-danger">Rejected</span>
                            <?php
                          }
                          else
                          {
                          ?>
                          <span class="label label-primary">Pending</span>
                          <?php
                        }
                        ?>
                          </td>
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