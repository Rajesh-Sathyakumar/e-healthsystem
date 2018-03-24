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
    
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

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
    
    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    function addNewHospital($hospitalinfo)
    {
        $this->db->trans_start();
        $this->db->insert('hospital', $hospitalinfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addHospitalInfo($hospitalinfo,$email)
    {
        $this->db->where('hospital_email',$email);
         $this->db->update('hospital',$hospitalinfo);
         
         // echo $this->db->affected_rows();
         // echo $email;
       return ($this->db->affected_rows() != 1) ? FALSE : TRUE;
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
    function getHospitalId($email)
    {
        $this->db->select('hospital_id');
        $this->db->from('hospital');
        $this->db->where('hospital_email',$email);
        $query = $this->db->get();
        $hos =  $query->row();
        //echo $hos->hospital_id;
        return $hos->hospital_id;
        //return $query->result();

    }
    function getEmpanelmentRequestsListing($hospitalId)
    {
         $this->db->select('a.empanelment_request_id, a.status, a.status_message, b.scheme_name');
         $this->db->from('empanelment_request a'); 
    $this->db->join('scheme b', 'a.scheme_id=b.scheme_id');
    // $this->db->join('hospital c', 'c.hospital_id=a.hospital_id', 'left');
    $this->db->where('a.hospital_id',$hospitalId);
   
        $query = $this->db->get();
        return $query->result();

    }

    function getPatientDetails($hospitalId, $schemeName)
    {
        $this->db->select('a.patientName, a.amount_credited, b.disease_name, c.scheme_name');
        $this->db->from('application_details a');
        $this->db->join('disease b', 'a.disease_id = b.disease_id');
        $this->db->join('scheme c', 'a.scheme_id = c.scheme_id');
        $this->db->where('a.hospital_id', $hospitalId);
        $this->db->where('c.scheme_name',$schemeName);
        $query = $this->db->get();
        return $query->result();
    }

    function getBeneficiaries($hospitalId)
    {
        $query =  $this->db->select('scheme.scheme_name as schemeName, COUNT(application_details.status) as scheme_count')
                      ->from('application_details')
                      ->join('scheme', 'application_details.scheme_id=scheme.scheme_id','left')
                      ->group_by('application_details.scheme_id')
                      ->where('application_details.status', 'approved')
                      ->where('hospital_id',$hospitalId)
                      ->get();
        // $res = $query->num_rows();
        // echo $res;
        return $query->result();
    }
    

    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return TRUE;
    }
    
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }

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
    

    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }

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

    function populateprofilefields($email)
    {
        $this->db->select('*');
        $this->db->from('hospital');
        $this->db->where('hospital_email',$email);
        $query = $this->db->get();
        //$res = $query->row();
        //echo $res->hospital_shortName;
       return $query->row();

    }
    function profileviewdata($email)
    {
        $this->db->select('*');
        $this->db->from('hospital');
        $this->db->where('hospital_email',$email);
        $query = $this->db->get();

        $result = $query->row();
        return $result;
    }

    function requestProcessing($schemeId, $email, $hospitalId)
    {
            // echo $schemeId;
            // echo $email;
            // echo $hospitalId;
        $empanelment['scheme_id'] = $schemeId;
        $empanelment['hospital_id'] = $hospitalId;
        $empanelment['status'] ="pending";
        $empanelment['organisation_id'] = 1;
        $this->db->insert('empanelment_request', $empanelment);
         $insert_id = $this->db->insert_id();
         echo $insert_id;

    }



    function approvalForState()
    {
        $this->db->select('empanelment_request_id,organisation_id,scheme_id,documents,status,stateAdmin_status');
        $this->db->from('empanelment_request');
        $this->db->where('districtAdmin_status','approved');

        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    // function detailsOfRequest($empanelment_request_id)
    // {

    //     $this->db->select('*');
    //     $this->db->from('hospital');
    //     $this->db->join('empanelment_request', 'empanelment_request.hospital_id = hospital.hospital_id','inner');
    //     $this->db->where('empanelment_request_id',$empanelment_request_id);

    //     $query = $this->db->get();
    //     $result = $query->row();
    //     //echo $query->num_rows();
    //     // $finalResult['result'] = $result;
    //     // $finalResult['empanelment_request_id'] = $empanelment_request_id;
    //     // // echo $finalResult['empanelment_request_id'];
    //     // // echo $finalResult['result']['hospital_id'];
    //      return $result;
    // }

    function detailsOfRequest($empanelment_request_id)
    {
        $this->db->select('*');
        $this->db->from('hospital');
        $this->db->join('empanelment_request', 'empanelment_request.hospital_id = hospital.hospital_id','left');
        $this->db->where('empanelment_request_id',$empanelment_request_id);
        $query = $this->db->get();
        // echo $query->num_rows();
        $result = $query->row();
        return $result;
    }

    function changeStatus($empanelment_request_id,$comments,$status)
    {
        $this->db->where($empanelment_request_id);

        $request_row = $this->db->get_where('empanelment_request', array('empanelment_request_id' => $empanelment_request_id))->row();

        $data = array(
           'stateAdmin_comments' => $comments,
           'stateAdmin_status' => $status 
        );

        $this->db->where('empanelment_request_id', $empanelment_request_id);
        $this->db->update('empanelment_request', $data); 
        echo $comments;
    
    }

    function getStatus($empanelment_request_id)
    {
        $this->db->select('stateAdmin_status');
        $this->db->from('empanelment_request');
        $this->db->where('empanelment_request_id',$empanelment_request_id);

        $query = $this->db->get();
        $result = $query->row();
        return $result->stateAdmin_status;
    }

}

  

