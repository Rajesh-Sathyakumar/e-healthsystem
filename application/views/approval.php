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
                <thead>
                <tr>
                  <th>Request_id</th>
                  <th>Scheme_Name</th>
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
                      <td><?php echo $record->scheme_name ?></td>
                      <td><?php echo $record->documents ?></td>
                      <td><?php echo $record->status ?></td>
                      <td><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>showRequestProfile/<?php echo $record->empanelment_request_id ?>" title="View Request" enabled="true">View</a></td>
                      <td><?php 
                      if($role == ROLE_STATE_ADMIN)
                      {
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
                  else if($role == ROLE_DISTRICT_ADMIN)
                  {
                    if($record->districtAdmin_status == "approved")
                    {
                      ?>
                                <span class="label label-success">Approved</span>
                            <?php
                          }
                          else if($record->districtAdmin_status == "rejected")
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