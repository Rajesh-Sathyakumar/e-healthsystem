<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->isLoggedIn();      
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Dashboard';

        $data['numberOfSchemes'] = $this->user_model->getNumber("scheme");
        $data['numberOfPrograms'] = $this->user_model->getNumber("programme");
        $data['numberOfUsers'] = $this->user_model->getNumber("tbl_users");
        $data['numberOfHospitals'] = $this->user_model->getNumber("hospital");
        $data['numberOfBeneficiaries'] = $this->user_model->getNumber("beneficiaries");
        
        $this->loadViews("dashboard", $this->global, $data , NULL);
    }
    public function do_upload() { 
         $config['upload_path']   = 'assets/uploads/files'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf|csv|doc'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
            
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('upload_success', $data); 
         } 
      } 
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

            $returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'e-Healthcare : User Listing';
            
            $this->loadViews("users", $this->global, $data, NULL);

        }
    }

    function requests()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Requests';
      //cho $this->session->userdata('email');
        $hospitalId = $this->user_model->getHospitalId($this->session->userdata('email'));
        //echo $hospitalId;
        $data['empanelmentRequests'] = $this->user_model->getEmpanelmentRequestsListing($hospitalId);
        $this->loadViews("request", $this->global, $data, NULL);

    }

    function  listBeneficiaries()
    {
        $this->global['pageTitle'] = 'e-Healthcare : ListBeneficiaries';
        $role = $this->session->userdata('role');
        $userId = $this->session->userdata('userId');
        if($role == ROLE_HOSPITAL)
        {
        $schemeName = $this->uri->segment(2);
        //echo $schemeName;
         $hospitalId = $this->user_model->getHospitalId($this->session->userdata('email'));
         $data['listPatient'] = $this->user_model->getPatientDetails($hospitalId, $schemeName);
     }
     else if($role == ROLE_STATE_ADMIN || $role == ROLE_DISTRICT_ADMIN)
     {
            $schemeId = $this->uri->segment(2);
            $hospitalId = $this->uri->segment(3);

            $data['listBeneficiaries'] = $this->user_model->getPatientDetailsForNodal($role,$userId,$schemeId,$hospitalId);
     }
      $this->loadViews("applicationDetails", $this->global, $data, NULL);

    }

    function beneficiaries()
    {
            $role = $this->session->userdata('role');
            $userId = $this->session->userdata('userId');
            $this->global['pageTitle'] = 'e-Healthcare : Beneficiaries';
            if($role == ROLE_HOSPITAL)
            {   

           
            $this->global['pageTitle'] = 'e-Healthcare : Beneficiaries';
            $hospitalId = $this->user_model->getHospitalId($this->session->userdata('email'));
            //echo $hospitalId;
            //$this->user_model->getBeneficiaries($hospitalId);

             $data['beneficiariesResult'] = $this->user_model->getBeneficiaries($hospitalId);

             $data['schemeNames'] = $this->user_model->getSchemeName($hospitalId);

            $this->loadViews("beneficiaries", $this->global, $data, NULL);
        }
        else
        {
            $data['beneficiaryDetailsForNodal'] = $this->user_model->getBeneficiariesForNodal($role,$userId);
            $this->loadViews("beneficiaries", $this->global, $data, NULL);
        }
        
    }
    public function schemes()
{
$crud = new grocery_CRUD();
$crud->set_table('scheme');
//$crud->set_theme('bootstrap');
$crud->columns('scheme_name','description','maximum_amount','guidelines','type','fund_allocated','file_url');
$crud->fields('scheme_name','description','maximum_amount','guidelines','type','fund_allocated','file_url');
$crud->set_field_upload('file_url','assets/uploads/files');
$output = $crud->render();
 
$this->loadSchemes($output);        
}
 
function loadSchemes($output = null)
 
{
$this->global['pageTitle'] = 'e-Healthcare : Schemes';
$this->loadViews("template_crud_user", $this->global, $output, NULL);
}


    function profileupdate()
    {
           
            $this->global['pageTitle'] = 'e-Healthcare : Profile Update';
            $this->load->model('user_model');
            $this->load->model('District_model');
            $email = $this->session->userdata('email');
              //$this->user_model->populateprofilefields($email);
            $data['district_all']=$this->District_model->get_all_district();
            $data['profilefields'] = $this->user_model->populateprofilefields($email);
            $this->loadViews("profile", $this->global, $data, NULL);
        
    }
    function requestprocess()
    {
         $this->global['pageTitle'] = 'e-Healthcare : Profile View Only';
        $email = $this->session->userdata('email');
        $schemeId = $this->uri->segment(2);
         $data['profiledata'] = $this->user_model->profileviewdata($email);
         $data['schemeId'] = $schemeId;
          $this->loadViews("profileview", $this->global, $data, NULL);
    }
    function viewrequest()
    {
        $this->global['pageTitle'] = 'e-Healthcare : View Timeline';
        $empanelment_request_id =  $this->uri->segment(2);
        //echo $empanelment_request_id;
        $data['empanelrequest'] = $this->user_model->viewrequestdetails($empanelment_request_id);

         $this->loadViews("requestTimeline", $this->global, $data, NULL);
    }


    function profilesettings()
    {
         $this->load->library('form_validation');
         $this->form_validation->set_rules('hospitalName','Hospital Name','required|max_length[128]|trim');
         $this->form_validation->set_rules('hospitalshortName','Hospital short Name','required|max_length[128]|trim');
         $this->form_validation->set_rules('hospitaltype','Hospital Type','required|max_length[128]|trim');
         $this->form_validation->set_rules('Pincode','Pincode','required|max_length[6]|trim');
         $this->form_validation->set_rules('HospitalInchargeName','Hospital Incharge Name','required|max_length[128]|trim');
         $this->form_validation->set_rules('HospitalInchargemobile','Hospital Incharge mobile','required|max_length[10]|trim');
         $this->form_validation->set_rules('HospitalInchargePhone','Hospital Incharge Phone','required|max_length[11]|trim');
         $this->form_validation->set_rules('HospitalEmail','Hospital Incharge Email','required|max_length[128]|trim');
         $this->form_validation->set_rules('ownerName','Owner Name','required|max_length[128]|trim');
         $this->form_validation->set_rules('GeneralBeds','General Beds','required|max_length[128]|trim');
         $this->form_validation->set_rules('DayCareBeds','Day Care Beds','required|max_length[128]|trim');
         $this->form_validation->set_rules('ICUBeds','ICU Beds','required|max_length[128]|trim');
         $this->form_validation->set_rules('ICCUBeds','ICCU Beds','required|max_length[128]|trim');
         $this->form_validation->set_rules('HDUBeds','HDU Beds','required|max_length[128]|trim');
         $this->form_validation->set_rules('MajorOts','Major Ots','required|max_length[128]|trim');
         $this->form_validation->set_rules('MinorOts','Minor Ots','required|max_length[128]|trim');
        $this->form_validation->set_rules('HospitalAddress','Hospital Address','required|max_length[128]|trim');
        $this->form_validation->set_rules('Latitude','Latitude','required|max_length[128]|trim');
        $this->form_validation->set_rules('Longitude','Longitude','required|max_length[128]|trim');
        $this->form_validation->set_rules('panNumber','pan Number','required|max_length[128]|trim');
        $this->form_validation->set_rules('clinicalRegistrationNumber','clinical Registration Number','required|max_length[128]|trim');
        $this->form_validation->set_rules('panCardHolderName','panCard Holder Name','required|max_length[128]|trim');
        $this->form_validation->set_rules('serviceTaxRegistrationNumber','service Tax Registration Number','required|max_length[128]|trim');
        $this->form_validation->set_rules('bankName','bank Name','required|max_length[128]|trim');
        $this->form_validation->set_rules('bankAccountNumber','bank Account Number','required|max_length[128]|trim');
        $this->form_validation->set_rules('IFSCCode','IFSC Code','required|max_length[11]|trim');
        $this->form_validation->set_rules('branchAddress','branch Address','required|max_length[128]|trim');
        $this->form_validation->set_rules('payeeName','payee Name','required|max_length[128]|trim');
        $this->form_validation->set_rules('numberOfFullTimePhysicians','number Of FullTime Physicians','required|max_length[128]|trim');
        $this->form_validation->set_rules('remarks','remarks','required|max_length[128]|trim');
        $this->form_validation->set_rules('fullTimeConsultants','fullTime Consultants','required|max_length[128]|trim');
        $this->form_validation->set_rules('PartTimeConsultants','PartTime Consultants','required|max_length[128]|trim');
        $this->form_validation->set_rules('VisitingConsultants','Visiting Consultants','required|max_length[128]|trim');
        $this->form_validation->set_rules('dutyDoctors','duty Doctors','required|max_length[128]|trim');
        $this->form_validation->set_rules('generalNurses','general Nurses','required|max_length[128]|trim');
        $this->form_validation->set_rules('pharmacytype','pharmacy type','required|max_length[128]|trim'); 
        $this->form_validation->set_rules('state','state','required|max_length[128]|trim');
         $this->form_validation->set_rules('district_id','district_id','required|max_length[128]|trim');
         $this->form_validation->set_rules('location','Location','required|max_length[128]|trim');
         $this->form_validation->set_rules('nabh','nabh Accredition','required|max_length[128]|trim');


          if($this->form_validation->run() == FALSE)
            { 
                $this->loadViews("request",$this->global,NULL,NULL);
              // $this->loadViews("/profile",$this->global,NULL,NULL);
            }
            else
            {
               // $this->loadViews("dashboard",$this->global,NULL,NULL);
                $hospital_name = ucwords(strtolower($this->security->xss_clean($this->input->post('hospitalName'))));
                $hospital_shortName = ucwords(strtolower($this->security->xss_clean($this->input->post('hospitalshortName'))));
                $pincode = $this->security->xss_clean($this->input->post('Pincode'));
                $hospital_incharge_name = ucwords(strtolower($this->security->xss_clean($this->input->post('HospitalInchargeName'))));
                $hospital_incharge_mobile = $this->security->xss_clean($this->input->post('HospitalInchargemobile'));
                $hospital_incharge_phone = $this->security->xss_clean($this->input->post('HospitalInchargePhone'));
                $hospital_email = $this->security->xss_clean($this->input->post('HospitalEmail'));
                $owner_name = ucwords(strtolower($this->security->xss_clean($this->input->post('ownerName'))));
                $generalBeds = $this->security->xss_clean($this->input->post('GeneralBeds'));
                $dayCareBeds = $this->security->xss_clean($this->input->post('DayCareBeds'));
                $icuBeds = $this->security->xss_clean($this->input->post('ICUBeds'));
                $iccuBeds = $this->security->xss_clean($this->input->post('ICCUBeds')); 
                $hduBeds = $this->security->xss_clean($this->input->post('HDUBeds'));
                $majorOts = $this->security->xss_clean($this->input->post('MajorOts'));
                $minorOts = $this->security->xss_clean($this->input->post('MinorOts'));
                $hospitalAddress = ucwords(strtolower($this->security->xss_clean($this->input->post('HospitalAddress'))));
                $latitude = $this->security->xss_clean($this->input->post('Latitude'));
                $Longitude = $this->security->xss_clean($this->input->post('longitude'));
                $panNumber = ucwords(strtolower($this->security->xss_clean($this->input->post('panNumber'))));
                $clinicalRegistrationNumber = ucwords(strtolower($this->security->xss_clean($this->input->post('clinicalRegistrationNumber'))));
                $panCardHolderName = ucwords(strtolower($this->security->xss_clean($this->input->post('panCardHolderName'))));
                $serviceTaxRegistrationNumber = ucwords(strtolower($this->security->xss_clean($this->input->post('serviceTaxRegistrationNumber'))));
                $bank_name = ucwords(strtolower($this->security->xss_clean($this->input->post('bankName'))));
                $bankAccountNumber = ucwords(strtolower($this->security->xss_clean($this->input->post('bankAccountNumber'))));
                $ifsc_code = ucwords(strtolower($this->security->xss_clean($this->input->post('IFSCCode'))));
                $branchAddress = ucwords(strtolower($this->security->xss_clean($this->input->post('branchAddress'))));
                $payeeName = ucwords(strtolower($this->security->xss_clean($this->input->post('payeeName'))));
                $numberOfFullTimePhysicians = ucwords(strtolower($this->security->xss_clean($this->input->post('numberOfFullTimePhysicians'))));
                $remarks = ucwords(strtolower($this->security->xss_clean($this->input->post('remarks'))));
                $fullTimeConsultants = ucwords(strtolower($this->security->xss_clean($this->input->post('fullTimeConsultants'))));
                $partTimeConsultants = $this->security->xss_clean($this->input->post('PartTimeConsultants'));
                $visitingConsultants = $this->security->xss_clean($this->input->post('VisitingConsultants'));
                $dutyDoctors = $this->security->xss_clean($this->input->post('dutyDoctors'));
                $generalNurses = $this->security->xss_clean($this->input->post('generalNurses'));
                $pharmacy_type = $this->security->xss_clean($this->input->post('pharmacytype'));
                $state = $this->security->xss_clean($this->input->post('state'));
                $district = $this->security->xss_clean($this->input->post('district_id'));
                $location = $this->security->xss_clean($this->input->post('location'));
                $hospital_type = $this->security->xss_clean($this->input->post('hospitaltype'));
                $nabh = $this->security->xss_clean($this->input->post('nabh'));


                $hospitalinfo = array('hospital_name'=>$hospital_name,   
                                        'hospital_shortName'=> $hospital_shortName,  
                                        'pincode'=>  $pincode, 
                                        'hospital_incharge_name'=>  $hospital_incharge_name, 
                                        'hospital_incharge_mobile'=>  $hospital_incharge_mobile, 
                                        'hospital_incharge_phone'=>  $hospital_incharge_phone, 
                                        //'hospital_email'=> $hospital_email,
                                        'owner_name'=>  $owner_name, 
                                        'generalBeds'=> $generalBeds, 
                                        'dayCareBeds'=>  $dayCareBeds, 
                                        'icuBeds'=> $icuBeds,
                                        'iccuBeds'=> $iccuBeds, 
                                        'hduBeds'=> $hduBeds,
                                        'majorOts'=> $majorOts, 
                                        'minorOts'=>  $minorOts,  
                                        'hospitalAddress'=> $hospitalAddress,  
                                        'latitude'=> $latitude, 
                                        'longitude'=> $Longitude,
                                        'panNumber'=> $panNumber,
                                        'clinicalRegistrationNumber'=> $clinicalRegistrationNumber,
                                        'panCardHolderName' =>$panCardHolderName, 
                                        'serviceTaxRegistrationNumber'=> $serviceTaxRegistrationNumber, 
                                        'bank_name'=>  $bank_name,  
                                        'bankAccountNumber'=> $bankAccountNumber,
                                        'ifsc_code'=>  $ifsc_code, 
                                        'branchAddress'=> $branchAddress,
                                        'payeeName'=> $payeeName,  
                                        'numberOfFullTimePhysicians' => $numberOfFullTimePhysicians,
                                        'remarks'=> $remarks,
                                        'fullTimeConsultants'=> $fullTimeConsultants,
                                        'partTimeConsultants'=> $partTimeConsultants,
                                        'visitingConsultants'=> $visitingConsultants,
                                        'dutyDoctors'=> $dutyDoctors, 
                                        'generalNurses'=> $generalNurses, 
                                        'pharmacy_type'=>   $pharmacy_type,
                                        'state'=> $state,
                                        'district_id'=> $district, 
                                        'location'=>  $location,
                                        'hospital_type'=>  $hospital_type, 
                                        'nabh'=>   $nabh);
                $this->load->model('user_model');
                $result = $this->user_model->addHospitalInfo($hospitalinfo,$hospital_email);

                if($result == TRUE)
                {
                    $this->session->set_flashdata('success', 'Profile updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'profile updation failed');
                }

               redirect('/dashboard');
            }



}


    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $this->load->model('District_model');
            $data['roles'] = $this->user_model->getUserRoles();
            $data['district_all']=$this->District_model->get_all_district();
            $this->global['pageTitle'] = 'e-Healthcare : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = $this->security->xss_clean($this->input->post('email'));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                $createdBy = 1;
               if($this->session->userdata('session_variable')) 
               {
                    $createdBy = $this->vendorId;
                }
                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$createdBy, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                if($roleId==2){
                $org_name = ucwords(strtolower($this->security->xss_clean($this->input->post('organization'))));   
                $res = array('organisation_name'=>$org_name,'user_id' => $result);
                $org_result =  $this->user_model->addOrganization($res);
                }
                if($roleId==3){
                $hospital_name = ucwords(strtolower($this->security->xss_clean($this->input->post('hospital'))));  
                $res = array('hospital_email'=>$email,'hospital_incharge_name'=> $name,'hospital_incharge_mobile'=>$mobile,'hospital_name'=>$hospital_name); 
                $org_result =  $this->user_model->addHospital($res);
                }
                if($roleId==5){
                $district_id = ucwords(strtolower($this->security->xss_clean($this->input->post('district_id'))));   
                 $res = array('district_id'=>$district_id,'user_id' => $result);
                 $district_result =  $this->user_model->addDistrictadmin($res);
                }
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'e-Healthcare : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = $this->security->xss_clean($this->input->post('email'));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Change Password';
        
        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('loadChangePass');
            }
        }
    }

    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'e-Healthcare : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? $this->session->userdata("userId") : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 5, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'e-Healthcare : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }


    function schemesList()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Schemes List';
        $hospitalId = $this->user_model->getHospitalId($this->session->userdata('email'));
        $data['schemeRecords'] = $this->user_model->schemesListing($hospitalId);
        //$this->user_model->getSchemeEmpanelment($hospitalId,)    
        $this->loadViews("schemes", $this->global, $data, NULL);
    }

    function showRequestProfile()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Request Details';

        $empanelment_request_id = $this->uri->segment(2);

        $data['requestDetails'] = $this->user_model->detailsOfRequest($empanelment_request_id);

        $district_id =  $data['requestDetails']->district_id;

        $data['district_name'] = $this->user_model->getDistrictName($district_id);
       
        $this->loadViews("requestDetails", $this->global, $data, NULL);
    }

    function approve()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Approval';
        
        $role = $this->session->userdata('role');
        $district_admin_id = $this->session->userdata('userId');
        
        $task = $this->uri->segment(4);
        if($task == "change")
        {
            $comments = $this->input->post('comments');
            $empanelment_request_id = $this->uri->segment(2);
            $status = $this->uri->segment(3);
            // $empanelment_request_id = _POST['id'];
            // $status = _POST['Status'];
            $this->user_model->changeStatus($empanelment_request_id,$comments,$status,$role);    
        }
        if($role == ROLE_STATE_ADMIN)
        {
            $data['approvalRecords'] = $this->user_model->approvalForState(1);
        }
        else if($role == ROLE_DISTRICT_ADMIN)
        {
             $data['approvalRecords'] = $this->user_model->approvalForDistrict($district_admin_id);    
        }

        $this->loadViews("approval", $this->global, $data, NULL);
    }

    function proceedRequest()
    {
        $schemeId = $this->uri->segment(2);
        $email = $this->session->userdata('email');
        $hospitalId = $this->user_model->getHospitalId($email);
        // echo $schemeId;
        // echo $email;
        // echo $hospitalId;    
        $this->global['pageTitle'] = 'e-Healthcare : schemesList';
  
        $this->user_model->requestProcessing($schemeId, $email, $hospitalId);
        $this->global['pageTitle'] = 'e-Healthcare : Dashboard';
        $this->global['pageTitle'] = 'e-Healthcare : Dashboard';

        $data['numberOfSchemes'] = $this->user_model->getNumber("scheme");
        $data['numberOfPrograms'] = $this->user_model->getNumber("programme");
        $data['numberOfUsers'] = $this->user_model->getNumber("tbl_users");
        $data['numberOfHospitals'] = $this->user_model->getNumber("hospital");
        $data['numberOfBeneficiaries'] = $this->user_model->getNumber("beneficiaries");
        $this->loadViews("dashboard", $this->global, $data, NULL);


    }

    function reports()
    {
        $this->global['pageTitle'] = 'e-Healthcare : Reports';
        $id = $this->session->userdata('userId');
        $role = $this->session->userdata('role');

        $data['reports'] = $this->user_model->getReports($id,$role);

        $this->loadViews("reports", $this->global,$data, NULL);


    }
    function addPatientDetails()
    {
        $data['showAllRequests'] = $this->user_model->getAllRequests($role);
        $this->loadViews("reports", $this->global, $data, NULL);
    }


    // function profileviewformat()
    // {
    //     $this->global['pageTitle'] = 'e-Healthcare : Profile(view only)';

    //       //$email = $this->session->userdata('email');
    //       //$data['profileRecords'] = $this->user_model->profileview($email);    
    //       $this->loadViews("empanelmentrequest", $this->global, NULL, NULL);
    // }



    // function empanelrequest()
    // {
    //     $this->global['pageTitle'] = 'e-Healthcare : Empanelment Request';
    //     $this->loadViews("empanelform", $this->global, NULL, NULL);
    // }


    

    function notification()
    {
        $this->global['pageTitle'] = 'e-Healthcare : View Timeline';
        $this->loadViews("notification",$this->global,NULL,NULL);
    }
}

?>
