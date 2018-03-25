 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->

<section class="content">
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Beneficiaries Details Tracking</h3>

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
                    <th>Scheme</th>
                    <th>Number of Patient benefited</th>
                    <th>List Of Patients</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                    if(!empty($beneficiariesResult))
                    {
                        foreach($beneficiariesResult as $record)
                        {
                    ?>
                    <tr>
                      <td>1</td>
                      <td><?php echo $record->schemeName ?></td>
                      <td><?php echo $record->scheme_count ?></td>
                      <td><a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>listBeneficiaries/<?php echo $record->schemeName; ?>" title="Login history" enabled="true">View</a></td>
                      
                      <?php
                      }
                      ?>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
             </div>
          </div>
        </div>
    </section>
  </div>