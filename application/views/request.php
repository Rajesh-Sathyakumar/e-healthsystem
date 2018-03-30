 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
      Empanelment Application Request Tracking
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
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Empanelment Request ID</th>
                    <th>Scheme</th>
                    <th>Status</th>
                    <th>View</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                    if(!empty($empanelmentRequests))
                    {
                        foreach($empanelmentRequests as $record)
                        {
                    ?>
                    <tr>

                      <td><?php echo $record->empanelment_request_id ?></td>
                      <td><?php echo $record->scheme_name ?></td>
                      <td><?php echo $record->status ?></td>
                      <td>
                      <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>viewrequest/<?php echo  $record->empanelment_request_id; ?>"  title="Approve Button" enabled="true">view</a></td>
                      
                        <?php
                      }
                      ?>
                    </tr>
                    <?php
                        }
                   
                    ?>
                </tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
         
          </div>
          <!-- /.box -->
        </div>
      </section>
    <!-- /.content -->
  </div>