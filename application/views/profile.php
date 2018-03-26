<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/dist/img/avatar.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $name; ?></h3>

              <p class="text-muted text-center"><?php echo $role_text; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            
            <?php
            if($role == ROLE_STATE_ADMIN)
            {
              ?>
              <div class="box-body">
              <strong><i class="fa fa-institution"></i>Tamil Nadu</strong>

              <p class="text-muted">
                State approval admin for schemes in Tamil Nadu region
              </p>
            </div>
              <?php
            }
            else if($role == ROLE_DISTRICT_ADMIN)
            {
              ?>
              <div class="box-body">
              <strong><i class="fa fa-institution"></i>Chennai</strong>

              <p class="text-muted">
                District approval admin for schemes in Chennai region
              </p>
            </div>
            <?php
            }
            else
            {
              ?>
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>
            </div>
            <?php
          }
            ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab ">Profile Settings</a></li>
            </ul>
      
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <?php $this->load->helper('form'); ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>profilesettings">
                  <?php
                  if($role == ROLE_STATE_ADMIN || $role == ROLE_DISTRICT_ADMIN || $role == ROLE_ADMIN)
                  {
                    ?>
                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <?php
                      if($role == ROLE_STATE_ADMIN)
                      {
                        ?>
                      <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Name of admin" value = "State Admin" readonly="true">
                    <?php
                    }
                    else
                    {
                      ?>
                      <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Name of admin" value = "District Admin" readonly="true">
                      <?php  
                    }
                    ?>

                    </div>
                  </div>
                  <?php 
                  if($role == ROLE_STATE_ADMIN)
                  {
                    ?>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">State</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="stateName" name="stateName" placeholder="State Name" value ="<?php echo $this->session->userdata('name'); ?>" readonly="true">
                    </div>
                  </div>
                  <?php
                }
                else if($role == ROLE_DISTRICT_ADMIN)
                {
                  ?>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">District</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="districtName" name="districtName" placeholder="District Name" value="<?php echo $this->session->userdata('name'); ?>" readonly="true">
                    </div>
                  </div>
                  <?php
                }
                else
                {
                  ?>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Admin</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="adminName" name="adminName" placeholder="Admin Name">
                    </div>
                  </div>
                  <?php
                }
              }
                 
                  else
                  {
                  ?>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalName" value = "<?php echo $profilefields->hospital_name; ?>" name="hospitalName" placeholder="Hospital Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital shortName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalshortName" value = "<?php echo $profilefields->hospital_shortName; ?>" name="hospitalshortName" placeholder="Hospital short Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital Type</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitaltype" value = "<?php echo $profilefields->hospital_type; ?>" name="hospitaltype" placeholder="Hospital Type">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pincode" class="col-sm-2 control-label">Pincode</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Pincode" value = "<?php echo $profilefields->pincode; ?>" name="Pincode" placeholder="Pincode">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Incharge Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $name; ?>" id="HospitalInchargeName" name="HospitalInchargeName" placeholder="Hospital Incharge Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargemobile" value = "<?php echo $profilefields->hospital_incharge_mobile; ?>" name="HospitalInchargemobile" placeholder="Hospital Incharge mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargePhone" value = "<?php echo $profilefields->hospital_incharge_phone; ?>" name="HospitalInchargePhone" placeholder="Hospital Incharge Phone">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="HospitalEmail" value="<?php echo $email;?>" name="HospitalEmail" placeholder="Hospital Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Owner Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ownerName" value = "<?php echo $profilefields->owner_name; ?>" name="ownerName"  placeholder="Owner Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">General Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="General Beds"  value = "<?php echo $profilefields->generalBeds; ?>" name="GeneralBeds"  placeholder="General Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Day Care Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="DayCareBeds" value = "<?php echo $profilefields->dayCareBeds; ?>" name="DayCareBeds"  placeholder="Day Care Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICUBeds" value = "<?php echo $profilefields->icuBeds; ?>" name="ICUBeds"  placeholder="ICU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICCU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICCUBeds"  value = "<?php echo $profilefields->iccuBeds; ?>" name="ICCUBeds"  placeholder="ICCU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">HDU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HDUBeds"  value = "<?php echo $profilefields->hduBeds; ?>" name="HDUBeds"  placeholder="HDU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Major Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MajorOts" value = "<?php echo $profilefields->majorOts; ?>" name="MajorOts" placeholder="Major Ots">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Minor Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MinorOts" value = "<?php echo $profilefields->minorOts; ?>" name="MinorOts" placeholder="Minor Ots">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-sm-2 control-label">Hospital Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalAddress" value = "<?php echo $profilefields->hospitalAddress; ?>" name="HospitalAddress" placeholder="Hospital Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Latitude</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Latitude" value = "<?php echo $profilefields->latitude; ?>" name="Latitude" placeholder="Latitude">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Longitude</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="Longitude" value = "<?php echo $profilefields->longitude; ?>" name="Longitude" placeholder="Longitude">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pan Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panNumber" value = "<?php echo $profilefields->panNumber; ?>" name="panNumber" placeholder="pan Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">clinical Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="clinicalRegistrationNumber" value = "<?php echo $profilefields->clinicalRegistrationNumber; ?>" name="clinicalRegistrationNumber" placeholder="clinical Registration Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">panCard Holder Name</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panCardHolderName" value = "<?php echo $profilefields->panCardHolderName; ?>" name="panCardHolderName" placeholder="panCard Holder Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">service Tax Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="serviceTaxRegistrationNumber" value = "<?php echo $profilefields->serviceTaxRegistrationNumber; ?>" name="serviceTaxRegistrationNumber" placeholder="service Tax Registration Number">
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankName" value = "<?php echo $profilefields->bank_name; ?>" name="bankName" placeholder="bank Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Account Number</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankAccountNumber" value = "<?php echo $profilefields->bankAccountNumber; ?>" name="bankAccountNumber" placeholder="bank Account Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">IFSC Code</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="IFSCCode" value = "<?php echo $profilefields->ifsc_code; ?>" name="IFSCCode" placeholder="IFSC Code">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">branch Address</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="LbranchAddress" value = "<?php echo $profilefields->branchAddress; ?>" name="branchAddress" placeholder="branch Address">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">payee Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="payeeName" value = "<?php echo $profilefields->payeeName; ?>" name="payeeName" placeholder="payee Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">number Of FullTime Physicians</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="numberOfFullTimePhysicians" value = "<?php echo $profilefields->numberOfFullTimePhysicians; ?>" name="numberOfFullTimePhysicians" placeholder="number Of FullTime Physicians">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">remarks</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="remarks" value = "<?php echo $profilefields->remarks; ?>" name="remarks" placeholder="remarks">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">fullTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id=" fullTimeConsultants" value = "<?php echo $profilefields->fullTimeConsultants; ?>" name="fullTimeConsultants" placeholder="fullTime Consultants">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">PartTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="PartTimeConsultants"  value = "<?php echo $profilefields->partTimeConsultants; ?>" name="PartTimeConsultants" placeholder="PartTime Consultants">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Visiting Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="VisitingConsultants" value = "<?php echo $profilefields->visitingConsultants; ?>" name="VisitingConsultants" placeholder="Visiting Consultants">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">duty Doctors</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="dutyDoctors" value = "<?php echo $profilefields->dutyDoctors; ?>" name="dutyDoctors" placeholder="duty Doctors">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">general Nurses</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="generalNurses" value = "<?php echo $profilefields->generalNurses; ?>" name="generalNurses" placeholder="general Nurses">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pharmacy type</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="pharmacytype" value = "<?php echo $profilefields->pharmacy_type; ?>" name="pharmacytype" placeholder="pharmacy type">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">state</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="state" value = "<?php echo $profilefields->state; ?>" name="state" placeholder="state">
                    </div>
                  </div>
                  <div class="form-group" >
                   <label for="district" class="col-sm-2 control-label">District Name</label>
                    <div class="col-sm-10">
                                   <select class="form-control required" name="district_id">
                                   <?php
                               foreach($district_all as $district)
                               {
                                   $selected = ($district['district_id'] == $this->input->post('district_id')) ? ' selected="selected"' : "";

                                   echo '<option value="'.$district['district_id'].'" '.$selected.'>'.$district['district_name'].'</option>';
                               }
                               ?>
                                   </select>
                                   </div>
                                 </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="location" value = "<?php echo $profilefields->location; ?>" name="location" placeholder="location">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">nabh Accredition</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="nabh" value = "<?php echo $profilefields->nabh; ?>" name="nabh" placeholder="nabh Accredition">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                  </div>
                  <?php
                }
                ?>
                </form>
              </div>
             
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>