 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->


     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Empanelment Application Request Tracking</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
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
                    <th>Description</th>
                    
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
                      <td><?php echo $record->status ?></td>
                      <td><?php echo $record->status_message ?></td>
                      <td><?php echo $record->scheme_name ?></td>
                      
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
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                          </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <
    <!-- /.content -->
  </div>