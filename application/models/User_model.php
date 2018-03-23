<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    

    function addHospitalInfo($hospitalinfo,$hospital_email)
    {
        // $pincode = $hospitalinfo['pincode'];
        // $hospital_shortName = $hospitalinfo['hospital_shortName'];
        // $hospital_incharge_name = $hospitalinfo['hospital_incharge_name'];
        // $hospital_incharge_mobile = $hospitalinfo['hospital_incharge_mobile'];
        // $hospital_incharge_phone = $hospitalinfo['hospital_incharge_phone'];
        // $owner_name = $hospitalinfo['owner_name'];
        // $generalBeds = $hospitalinfo['generalBeds'];
        // $dayCareBeds = $hospitalinfo['dayCareBeds'];
        // $icuBeds = $hospitalinfo['icuBeds'];
        // $iccuBeds = $hospitalinfo['iccuBeds'];
        // $hduBeds = $hospitalinfo['hduBeds'];
        // $majorOts = $hospitalinfo['majorOts'];
        // $minorOts = $hospitalinfo['minorOts'];
        // $hospitalAddress = $hospitalinfo['hospitalAddress'];
        // $latitude = $hospitalinfo['latitude'];
        // $Longitude = $hospitalinfo['longitude'];
        // $panNumber = $hospitalinfo['panNumber'];
        // $clinicalRegistrationNumber = $hospitalinfo['clinicalRegistrationNumber'];
        // $panCardHolderName = $hospitalinfo['panCardHolderName'];
        // $serviceTaxRegistrationNumber = $hospitalinfo['serviceTaxRegistrationNumber'];
        // $bank_name = $hospitalinfo['bank_name'];
        // $bankAccountNumber = $hospitalinfo['bankAccountNumber'];
        // $ifsc_code = $hospitalinfo['ifsc_code'];
        // $branchAddress = $hospitalinfo['branchAddress'];
        // $payeeName = $hospitalinfo['payeeName'];
        // $numberOfFullTimePhysicians = $hospitalinfo['numberOfFullTimePhysicians'];
        // $remarks = $hospitalinfo['remarks'];
        // $fullTimeConsultants = $hospitalinfo['fullTimeConsultants'];
        // $partTimeConsultants = $hospitalinfo['partTimeConsultants'];
        // $visitingConsultants = $hospitalinfo['visitingConsultants'];
        // $dutyDoctors = $hospitalinfo['dutyDoctors'];
        // $generalNurses = $hospitalinfo['generalNurses'];
        // $pharmacy_type = $hospitalinfo['pharmacy_type'];
        // $state = $hospitalinfo['state'];
        // $district = $hospitalinfo['district']; 
        // $location = $hospitalinfo['location'];
        // $hospital_type = $hospitalinfo['hospital_type'];
        // $nabh =  $hospitalinfo['nabh'];



   
        // $this->db->set('pincode',$pincode);
        // $this->db->set('hospital_shortName',$hospital_shortName);
        //  $this->db->set('hospital_incharge_name',$hospital_incharge_name);
        //  $this->db->set('hospital_incharge_phone',$hospital_incharge_phone);
        //  $this->db->set('hospital.hospital_incharge_mobile',$hospital_incharge_mobile);
        //  $this->db->set('hospital.owner_name',$owner_name);
        //  $this->db->set('hospital.generalBeds',$generalBeds);
        //  $this->db->set('hospital.dayCareBeds',$dayCareBeds);
        //  $this->db->set('hospital.icuBeds',$icuBeds);
        //  $this->db->set('hospital.iccuBeds',$iccuBeds);
        //  $this->db->set('hospital.hduBeds',$hduBeds);
        //  $this->db->set('hospital.majorOts',$majorOts);
        //  $this->db->set('hospital.minorOts',$minorOts);
        //  $this->db->set('hospital.hospitalAddress',$hospitalAddress);
        //  $this->db->set('hospital.latitude',$latitude);
        //  $this->db->set('hospital.Longitude',$Longitude);
        //  $this->db->set('hospital.panNumber',$panNumber);
        //  $this->db->set('hospital.clinicalRegistrationNumber',$clinicalRegistrationNumber);
        //  $this->db->set('hospital.panCardHolderName',$panCardHolderName);
        //  $this->db->set('hospital.serviceTaxRegistrationNumber',$serviceTaxRegistrationNumber);
        //  $this->db->set('hospital.bank_name',$bank_name);
        //  $this->db->set('hospital.bankAccountNumber',$bankAccountNumber);
        //  $this->db->set('hospital.ifsc_code',$ifsc_code);
        //  $this->db->set('hospital.branchAddress',$branchAddress);
        //  $this->db->set('hospital.payeeName',$payeeName);
        //  $this->db->set('hospital.numberOfFullTimePhysicians',$numberOfFullTimePhysicians);
        //  $this->db->set('hospital.remarks',$remarks);
        //  $this->db->set('hospital.fullTimeConsultants',$fullTimeConsultants);
        //  $this->db->set('hospital.partTimeConsultants',$partTimeConsultants);
        // $this->db->set('hospital.visitingConsultants',$visitingConsultants);
        // $this->db->set('hospital.dutyDoctors',$dutyDoctors);
        // $this->db->set('hospital.generalNurses',$generalNurses);
        // $this->db->set('hospital.pharmacy_type',$pharmacy_type);
        // $this->db->set('hospital.state',$state);
        // $this->db->set('hospital.location',$location);
        // $this->db->set('hospital.district',$district);
        // $this->db->set('hospital.hospital_type',$hospital_type);
        // $this->db->set('hospital.nabh',$nabh);

        $this->db->where('hospital_email',$hospital_email);
        $this->db->update('hospital',$hospitalinfo);

       if($this->db->affected_rows()!=1)
       {
        return FALSE;
       }
       else
       {
        return TRUE;
       }
       
        
       
        
        

    }    
    function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
		$this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     */
    function loginHistoryCount($userId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->from('tbl_last_login as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($userId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('tbl_last_login as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfoById($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    function schemesListing()
    {
        $this->db->select('scheme_id, scheme_name, description');
        $this->db->from('scheme');
        $query = $this->db->get();

         $result = $query->result();        
        return $result; 

    }

}

  