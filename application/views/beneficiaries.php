<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
     Beneficiaries Details Tracking
     <?php 
    if($role == ROLE_HOSPITAL)
      {
    ?>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
               Add Patient
              </button>
              <?php
            }
        ?>
    </h1>
    </section>
    <!-- Main content -->
 <section class="content">
  <?php 
    if($role == ROLE_HOSPITAL)
      {
    ?>
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
           <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Details</h4>
              </div>
              <div class="modal-body">
               <form class="form-horizontal" method = 'post'>
                  <div class="form-group">
                 
                  <label for="scheme" name ="schemename" class="col-sm-2 control-label">Scheme</label>
                  <div class="col-sm-10">
                     <select class="form-control">
                      <?php
                    if(!empty($schemeNames))
                    {
                        foreach($schemeNames as $record)
                        {
                    ?>
                    <option><?php echo $record->scheme_name; ?></option>
                    <!-- <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option> -->
                     <?php
                }
                }
                ?>
                  </select>
                 
                
                </div>
                </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Patient Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name = "patientname" id="inputEmail" placeholder="Patient Name">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Fund allocated</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" name = "fundallocated" placeholder="Fund allocated">
                    </div>
                  </div>
                  <div class="form-group">
                 <label for="diseases" class="col-sm-2 control-label">Diseases</label>
                  <div class="col-sm-10">
                     <select name = "diseasename" class="form-control">
                        <?php
                    if(!empty($DiseaseNames))
                    {
                        foreach($DiseaseNames as $record)
                        {
                    ?>
                    <option><?php echo $record->disease_name ?></option>
                   <?php
                }
                }
                ?>
                   </select>
                    <!-- <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option> -->
                 
                </div>
                </div>
                    
                  
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
               <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>addPatientDetails" title="Login history" enabled="true">View</a>
              </div>
            </div>
            <!-- /.box-header -->
            
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php
      }
      else if($role == ROLE_DISTRICT_ADMIN || $role == ROLE_STATE_ADMIN)
      {
      ?>
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
                    <!-- <th>Application id</th> -->
                    <th>Scheme</th>
                    <th>Hospital</th>
                    <th>Number of Patient benefited</th>
                    <th>List Of Patients</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                    if(!empty($beneficiaryDetailsForNodal))
                    {
                        foreach($beneficiaryDetailsForNodal as $record)
                        {
                    ?>
                    <!-- application_countrd->beneficiaries_count ?> -->
                    <tr>
                      <!-- <td><?php echo $record->application_details_id ?></td> -->
                      <td><?php echo $record->scheme_name ?></td>
                      <td><?php echo $record->hospital_name ?></td>
                      <td><?php echo $record->application_count?></td>
                      <td><a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>listBeneficiaries/<?php echo $record->scheme_name; ?>" title="Show Beneficiaries" enabled="true">View</a></td>
                      
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
      <?php
    }
    ?>
        </section>
          <!-- /.box -->
        </div>

