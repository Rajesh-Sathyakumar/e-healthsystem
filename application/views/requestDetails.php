 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Empanelment Request
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="row">
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Submitted Form</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <?php $this->load->helper('form'); ?>
                <form class="form-horizontal" method="post">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalName" name="hospitalName" placeholder="Hospital Name" readonly="true" value="<?php echo $requestDetails->hospital_name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital shortName</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitalshortName" name="hospitalshortName" placeholder="Hospital short Name" readonly="true" value="<?php echo $requestDetails->hospital_shortName ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="shortName" class="col-sm-2 control-label">Hospital Type</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hospitaltype" name="hospitaltype" placeholder="Hospital Type" readonly="true" value="<?php echo $requestDetails->hospital_type ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="pincode" class="col-sm-2 control-label">Pincode</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="Pincode" readonly="true" value="<?php echo $requestDetails->pincode ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hospital Incharge Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargeName" name="HospitalInchargeName" placeholder="Hospital Incharge Name" readonly="true" value="<?php echo $requestDetails->hospital_incharge_name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge mobile</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargemobile" name="HospitalInchargemobile" placeholder="Hospital Incharge mobile" readonly="true" value="<?php echo $requestDetails->hospital_incharge_mobile ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Phone</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalInchargePhone" name="HospitalInchargePhone" placeholder="Hospital Incharge Phone" readonly="true" value="<?php echo $requestDetails->hospital_incharge_phone ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Hospital Incharge Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="HospitalInchargeEmail" name="HospitalInchargeEmail" placeholder="Hospital Incharge Email" readonly="true" value="<?php echo $requestDetails->hospital_email ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Owner Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ownerName"  name="ownerName"  placeholder="Owner Name" readonly="true" value="<?php echo $requestDetails->owner_name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">General Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="General Beds"  name="GeneralBeds"  placeholder="General Beds" readonly="true" value="<?php echo $requestDetails->generalBeds ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Day Care Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="DayCareBeds"  name="DayCareBeds"  placeholder="Day Care Beds" readonly="true" value="<?php echo $requestDetails->dayCareBeds ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICUBeds"  name="ICUBeds"  placeholder="ICU Beds" readonly="true" value="<?php echo $requestDetails->icuBeds ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ICCU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ICCUBeds"  name="ICCUBeds"  placeholder="ICCU Beds" readonly="true" value="<?php echo $requestDetails->iccuBeds ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">HDU Beds</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HDUBeds"  name="HDUBeds"  placeholder="HDU Beds" readonly="true" value="<?php echo $requestDetails->hduBeds ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Major Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MajorOts" name="MajorOts" placeholder="Major Ots" readonly="true" value="<?php echo $requestDetails->majorOts ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Minor Ots</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="MinorOts" name="MinorOts" placeholder="Minor Ots" readonly="true" value="<?php echo $requestDetails->minorOts ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-sm-2 control-label">Hospital Address</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="HospitalAddress" name="HospitalAddress" placeholder="Hospital Address" readonly="true" value="<?php echo $requestDetails->hospitalAddress ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Latitude</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Latitude" name="Latitude" placeholder="Latitude" readonly="true" value="<?php echo $requestDetails->latitude ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Longitude</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="Longitude" name="Longitude" placeholder="Longitude" readonly="true" value="<?php echo $requestDetails->longitude ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pan Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panNumber" name="panNumber" placeholder="pan Number" readonly="true" value="<?php echo $requestDetails->panNumber ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">clinical Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="clinicalRegistrationNumber" name="clinicalRegistrationNumber" placeholder="clinical Registration Number" readonly="true" value="<?php echo $requestDetails->clinicalRegistrationNumber ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">panCard Holder Name</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="panCardHolderName" name="panCardHolderName" placeholder="panCard Holder Name" readonly="true" value="<?php echo $requestDetails->panCardHolderName ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">service Tax Registration Number</label>

                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="serviceTaxRegistrationNumber" name="serviceTaxRegistrationNumber" placeholder="service Tax Registration Number" readonly="true" value="<?php echo $requestDetails->serviceTaxRegistrationNumber ?>">
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankName" name="bankName" placeholder="bank Name" readonly="true" value="<?php echo $requestDetails->bank_name ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">bank Account Number</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="bankAccountNumber" name="bankAccountNumber" placeholder="bank Account Number" readonly="true" value="<?php echo $requestDetails->bankAccountNumber ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">IFSC Code</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="IFSCCode" name="IFSCCode" placeholder="IFSC Code" readonly="true" value="<?php echo $requestDetails->ifsc_code ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">branch Address</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="LbranchAddress" name="branchAddress" placeholder="branch Address" readonly="true" value="<?php echo $requestDetails->branchAddress ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">payee Name</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="payeeName" name="payeeName" placeholder="payee Name" readonly="true" value="<?php echo $requestDetails->payeeName ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">number Of FullTime Physicians</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="numberOfFullTimePhysicians" name="numberOfFullTimePhysicians" placeholder="number Of FullTime Physicians" readonly="true" value="<?php echo $requestDetails->numberOfFullTimePhysicians ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">remarks</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="remarks" name="remarks" placeholder="remarks" readonly="true" value="<?php echo $requestDetails->remarks ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">fullTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id=" fullTimeConsultants" name="fullTimeConsultants" placeholder="fullTime Consultants" readonly="true" value="<?php echo $requestDetails->fullTimeConsultants ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">PartTime Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="PartTimeConsultants" name="PartTimeConsultants" placeholder="PartTime Consultants" readonly="true" value="<?php echo $requestDetails->partTimeConsultants ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Visiting Consultants</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="VisitingConsultants" name="VisitingConsultants" placeholder="Visiting Consultants" readonly="true" value="<?php echo $requestDetails->visitingConsultants ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">duty Doctors</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="dutyDoctors" name="dutyDoctors" placeholder="duty Doctors" readonly="true" value="<?php echo $requestDetails->dutyDoctors ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">general Nurses</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="generalNurses" name="generalNurses" placeholder="general Nurses" readonly="true" value="<?php echo $requestDetails->hospital_name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">pharmacy type</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="pharmacytype" name="pharmacytype" placeholder="pharmacy type" readonly="true" value="<?php echo $requestDetails->pharmacy_type ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">state</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="state" name="state" placeholder="state" readonly="true" value="<?php echo $requestDetails->state ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">District</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="District" name="District" placeholder="District" readonly="true" value="<?php echo $requestDetails->district ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="location" name="location" placeholder="location" readonly="true" value="<?php echo $requestDetails->location ?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">nabh Accredition</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="nabh" name="nabh" placeholder="nabh Accredition" readonly="true" value="<?php echo $requestDetails->nabh ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" id="comments" name="comments" placeholder="Enter your remarks here"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a class="btn btn-success" method="post" href="<?php echo base_url(); ?>approve/<?php echo $this->uri->segment(2); ?>/approved/change">Approve</a>
                      <a class="btn btn-danger" method="post" href="<?php echo base_url(); ?>approve/<?php echo $this->uri->segment(2); ?>/rejected/change">Reject</a>
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

  <script type="text/javascript">
    $('#approve').on('click',function(){
  var comments=$('#comments').val();
  var url = window.location.href;
  var id = url.split('/showRequestProfile/')[1]

  var data = {
    "comments": comments,
    "id": id,
    "Status" : "approved"
  }
  var settings = {

    "url": "http://localhost/changeStatus/",
    "method": "POST",
    "headers": {
      "Content-Type": "application/json",
    },
    "data": JSON.stringify(data)
  }

$.ajax(settings).done(function (response) 
{
  console.log(response);
});

});

</script>