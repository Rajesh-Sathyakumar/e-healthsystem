 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->


     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Application Details Tracking</h3>

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
                    <th>S.No</th>
                    <th>Patient Name</th>
                    <th>Availed For</th>
                    <th>Amount Credited</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   <tbody>
                   <?php
                    if(!empty($listPatient))
                    {
                        foreach($listPatient as $record)
                        {
                    ?>
                    <tr>
                      <td>1</td>
                      <td><?php echo $record->patientName ?></td>
                      <td><?php echo $record->disease_name ?></td>
                      <td><?php echo $record->amount_credited ?></td>
                      
                      
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
