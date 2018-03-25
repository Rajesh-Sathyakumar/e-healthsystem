 <div class="content-wrapper">
    <!-- Con<section class="content-header">
     content Header (Page header) -->
    
    <section class="content-header">
      <h1>
        Beneficiaries Details Tracking
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
           </div>
            <!-- /.box-footer -->
          </div>
        </section>
          <!-- /.box -->
        </div>
