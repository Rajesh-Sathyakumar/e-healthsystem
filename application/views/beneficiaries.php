 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
     Beneficiaries Details Tracking
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
               Add Patient
              </button>
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


        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Details</h4>
              </div>
              <div class="modal-body">
               <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Scheme</label>

                    <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option></option>
                  </select>
               
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Patient Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Number of Patient benefited">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Disease</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Disease">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Fund allocated</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Fund allocated">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
               <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>addPatientDetails" title="Login history" enabled="true">View</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


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
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
         </div>
          </div>
        </section>
          <!-- /.box -->
        </div>
