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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Profile Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <?php $this->load->helper('form'); ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>profilesettings">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Hospital Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital shortName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalshortName" name="hospitalshortName" placeholder="Hospital short Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital Type</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitaltype" name="hospitaltype" placeholder="Hospital Type">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pincode" class="col-sm-2 control-label">Pincode</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Incharge Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargeName" name="HospitalInchargeName" placeholder="Hospital Incharge Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargemobile" name="HospitalInchargemobile" placeholder="Hospital Incharge mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargePhone" name="HospitalInchargePhone" placeholder="Hospital Incharge Phone">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="HospitalInchargeEmail" name="HospitalInchargeEmail" placeholder="Hospital Incharge Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Owner Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ownerName"  name="ownerName"  placeholder="Owner Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">General Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="General Beds"  name="GeneralBeds"  placeholder="General Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Day Care Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="DayCareBeds"  name="DayCareBeds"  placeholder="Day Care Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICUBeds"  name="ICUBeds"  placeholder="ICU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICCU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICCUBeds"  name="ICCUBeds"  placeholder="ICCU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">HDU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HDUBeds"  name="HDUBeds"  placeholder="HDU Beds">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Major Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MajorOts" name="MajorOts" placeholder="Major Ots">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Minor Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MinorOts" name="MinorOts" placeholder="Minor Ots">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-sm-2 control-label">Hospital Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalAddress" name="HospitalAddress" placeholder="Hospital Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Latitude</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Latitude" name="Latitude" placeholder="Latitude">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Longitude</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="Longitude" name="Longitude" placeholder="Longitude">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pan Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panNumber" name="panNumber" placeholder="pan Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">clinical Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="clinicalRegistrationNumber" name="clinicalRegistrationNumber" placeholder="clinical Registration Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">panCard Holder Name</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panCardHolderName" name="panCardHolderName" placeholder="panCard Holder Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">service Tax Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="serviceTaxRegistrationNumber" name="serviceTaxRegistrationNumber" placeholder="service Tax Registration Number">
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankName" name="bankName" placeholder="bank Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Account Number</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankAccountNumber" name="bankAccountNumber" placeholder="bank Account Number">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">IFSC Code</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="IFSCCode" name="IFSCCode" placeholder="IFSC Code">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">branch Address</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="LbranchAddress" name="branchAddress" placeholder="branch Address">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">payee Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="payeeName" name="payeeName" placeholder="payee Name">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">number Of FullTime Physicians</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="numberOfFullTimePhysicians" name="numberOfFullTimePhysicians" placeholder="number Of FullTime Physicians">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">remarks</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="remarks" name="remarks" placeholder="remarks">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">fullTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id=" fullTimeConsultants" name="fullTimeConsultants" placeholder="  fullTime Consultants">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">PartTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="PartTimeConsultants" name="PartTimeConsultants" placeholder="PartTime  Consultants">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Visiting Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="VisitingConsultants" name="VisitingConsultants" placeholder="Visiting  Consultants">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">duty Doctors</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="dutyDoctors" name="dutyDoctors" placeholder="duty Doctors">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">general Nurses</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="generalNurses" name="generalNurses" placeholder="general Nurses">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pharmacy type</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="pharmacytype" name="pharmacytype" placeholder="pharmacy type">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">state</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="state" name="state" placeholder="state">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">District</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="District" name="District" placeholder="District">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="location" name="location" placeholder="location">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">nabh Accredition</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="nabh" name="nabh" placeholder="nabh Accredition">
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
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
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