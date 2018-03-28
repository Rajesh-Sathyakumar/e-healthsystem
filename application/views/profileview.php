 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Profile(View Only)
      
    
    </h1>
    </section>
    <section class="content">
        <div class="row">
    	 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <?php $this->load->helper('form'); ?>
     		       <form class="form-horizontal" method="post">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalName" value = "<?php echo $profiledata->hospital_name; ?>" name="hospitalName" placeholder="Hospital Name" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital shortName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalshortName" value = "<?php echo $profiledata->hospital_shortName; ?>" name="hospitalshortName" placeholder="Hospital short Name" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital Type</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitaltype" value = "<?php echo $profiledata->hospital_type; ?>" name="hospitaltype" placeholder="Hospital Type" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pincode" class="col-sm-2 control-label">Pincode</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Pincode" value = "<?php echo $profiledata->pincode; ?>" name="Pincode" placeholder="Pincode" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Incharge Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $profiledata->hospital_incharge_name; ?>" id="HospitalInchargeName" name="HospitalInchargeName" placeholder="Hospital Incharge Name" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargemobile" value = "<?php echo $profiledata->hospital_incharge_mobile; ?>" name="HospitalInchargemobile" placeholder="Hospital Incharge mobile" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargePhone" value = "<?php echo $profiledata->hospital_incharge_phone; ?>" name="HospitalInchargePhone" placeholder="Hospital Incharge Phone" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="HospitalEmail" value="<?php echo $profiledata->hospital_email;?>" name="HospitalEmail" placeholder="Hospital Email" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Owner Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ownerName" value = "<?php echo $profiledata->owner_name; ?>" name="ownerName"  placeholder="Owner Name" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">General Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="General Beds"  value = "<?php echo $profiledata->generalBeds; ?>" name="GeneralBeds"  placeholder="General Beds" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Day Care Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="DayCareBeds" value = "<?php echo $profiledata->dayCareBeds; ?>" name="DayCareBeds"  placeholder="Day Care Beds" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICUBeds" value = "<?php echo $profiledata->icuBeds; ?>" name="ICUBeds"  placeholder="ICU Beds" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICCU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICCUBeds"  value = "<?php echo $profiledata->iccuBeds; ?>" name="ICCUBeds"  placeholder="ICCU Beds" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">HDU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HDUBeds"  value = "<?php echo $profiledata->hduBeds; ?>" name="HDUBeds"  placeholder="HDU Beds" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Major Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MajorOts" value = "<?php echo $profiledata->majorOts; ?>" name="MajorOts" placeholder="Major Ots" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Minor Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MinorOts" value = "<?php echo $profiledata->minorOts; ?>" name="MinorOts" placeholder="Minor Ots" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-sm-2 control-label">Hospital Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalAddress" value = "<?php echo $profiledata->hospitalAddress; ?>" name="HospitalAddress" placeholder="Hospital Address" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Latitude</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Latitude" value = "<?php echo $profiledata->latitude; ?>" name="Latitude" placeholder="Latitude" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Longitude</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="Longitude" value = "<?php echo $profiledata->longitude; ?>" name="Longitude" placeholder="Longitude" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pan Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panNumber" value = "<?php echo $profiledata->panNumber; ?>" name="panNumber" placeholder="pan Number" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">clinical Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="clinicalRegistrationNumber" value = "<?php echo $profiledata->clinicalRegistrationNumber; ?>" name="clinicalRegistrationNumber" placeholder="clinical Registration Number" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">panCard Holder Name</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panCardHolderName" value = "<?php echo $profiledata->panCardHolderName; ?>" name="panCardHolderName" placeholder="panCard Holder Name" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">service Tax Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="serviceTaxRegistrationNumber" value = "<?php echo $profiledata->serviceTaxRegistrationNumber; ?>" name="serviceTaxRegistrationNumber" placeholder="service Tax Registration Number" readonly>
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankName" value = "<?php echo $profiledata->bank_name; ?>" name="bankName" placeholder="bank Name" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Account Number</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankAccountNumber" value = "<?php echo $profiledata->bankAccountNumber; ?>" name="bankAccountNumber" placeholder="bank Account Number" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">IFSC Code</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="IFSCCode" value = "<?php echo $profiledata->ifsc_code; ?>" name="IFSCCode" placeholder="IFSC Code" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">branch Address</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="LbranchAddress" value = "<?php echo $profiledata->branchAddress; ?>" name="branchAddress" placeholder="branch Address" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">payee Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="payeeName" value = "<?php echo $profiledata->payeeName; ?>" name="payeeName" placeholder="payee Name" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">number Of FullTime Physicians</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="numberOfFullTimePhysicians" value = "<?php echo $profiledata->numberOfFullTimePhysicians; ?>" name="numberOfFullTimePhysicians" placeholder="number Of FullTime Physicians" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">remarks</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="remarks" value = "<?php echo $profiledata->remarks; ?>" name="remarks" placeholder="remarks" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">fullTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id=" fullTimeConsultants" value = "<?php echo $profiledata->fullTimeConsultants; ?>" name="fullTimeConsultants" placeholder="fullTime Consultants" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">PartTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="PartTimeConsultants"  value = "<?php echo $profiledata->partTimeConsultants; ?>" name="PartTimeConsultants" placeholder="PartTime Consultants" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Visiting Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="VisitingConsultants" value = "<?php echo $profiledata->visitingConsultants; ?>" name="VisitingConsultants" placeholder="Visiting Consultants" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">duty Doctors</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="dutyDoctors" value = "<?php echo $profiledata->dutyDoctors; ?>" name="dutyDoctors" placeholder="duty Doctors" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">general Nurses</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="generalNurses" value = "<?php echo $profiledata->generalNurses; ?>" name="generalNurses" placeholder="general Nurses" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pharmacy type</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="pharmacytype" value = "<?php echo $profiledata->pharmacy_type; ?>" name="pharmacytype" placeholder="pharmacy type" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">state</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="state" value = "<?php echo $profiledata->state; ?>" name="state" placeholder="state" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">District</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="District" value = "<?php echo $profiledata->district_name; ?>" name="District" placeholder="District" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="location" value = "<?php echo $profiledata->location; ?>" name="location" placeholder="location" readonly>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">nabh Accredition</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="nabh" value = "<?php echo $profiledata->nabh; ?>" name="nabh" placeholder="nabh Accredition" readonly>
                    </div>
                  </div>
                </form>
             <div class="col-sm-10">
              <div class="col-sm-5">
                       <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>profileupdate" title="Login history" enabled="true">Edit Profile</a></div>
                       <div class="col-sm-5">
                       <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>proceedRequest/<?php echo $schemeId; ?>" title="Login history" enabled="true">Proceed Request</a></div>
                    </div>
                     
          </div>
      </div>
    </div>
  </section>

    
  </div>
