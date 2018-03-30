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
        function addOrganization($res)
        {
            $this->db->trans_start();
            $this->db->insert('organisation', $res);
            
            $insert_id = $this->db->insert_id();
            $this->db->trans_complete();
            return $insert_id;
        }
           function addHospital($res)
        {
            $this->db->trans_start();
            $this->db->insert('hospital', $res);
            
            $insert_id = $this->db->insert_id();
            $this->db->trans_complete();
            return $insert_id;
        }
        function addDistrictadmin($res)
        {
            $this->db->trans_start();
            $this->db->insert('district_admin', $res);
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




        function getSchemeName($hospitalId)
        {
            $this->db->select('scheme_id');
            $this->db->from('empanelment_request');
            $this->db->where('hospital_id',$hospitalId);
             $this->db->where('status','approved');
            $query = $this->db->get();
            $result = $query->result();
            $schemeIds = array();
            foreach($result as $row)
            {
                $schemeIds[] = $row->scheme_id;
             }
             $ids = implode(",",$schemeIds);
             $list = explode(",",$ids);
            $this->db->select('scheme_name');
            $this->db->from('scheme');
            $this->db->where_in('scheme_id',$list);
            $query = $this->db->get();
            return $query->result();
            //echo $query->num_rows();
        }




        // function getdiseases($hospitalId)

        // {
        //     $this->db->select('scheme_id');
        //     $this->db->from('empanelment_request');
        //     $this->db->where('hospital_id',$hospitalId);
        //      $this->db->where('status','approved');
        //     $query = $this->db->get();
        //     $result = $query->result();
        //     $schemeIds = array();
        //     foreach($result as $row)
        //     {
        //         $schemeIds[] = $row->scheme_id;
        //      }
        //      $ids = implode(",",$schemeIds);
        //      $list = explode(",",$ids);


        //     $this->db->select('scheme_name');
        //     $this->db->from('scheme');
        //     $this->db->where_in('scheme_id',$list);
        //     $query = $this->db->get();
        //     return $query->result();
        //     //echo $query->num_rows();



        // }


        function getdiseases($hospitalId)
        {
            $this->db->select('scheme_id');
            $this->db->from('empanelment_request');
            $this->db->where('hospital_id',$hospitalId);
             $this->db->where('status','approved');

            $query = $this->db->get();
            $result = $query->result();
            $schemeIds = array();
            foreach($result as $row)
            {
                $schemeIds[] = $row->scheme_id;
             }
             $ids = implode(",",$schemeIds);
             $list = explode(",",$ids);

             $this->db->select('disease_id');
            $this->db->from('disease_coverage');
            $this->db->where_in('scheme_id',$list);
            $query = $this->db->get();

             $this->db->select('disease_id');
            $this->db->from('disease_coverage');
            $this->db->where_in('scheme_id',$list);
            $query = $this->db->get();

            $result =  $query->result();
            $diseaseIds = array();
            foreach($result as $row)
            {
                $diseaseIds[] = $row->disease_id;
             }
             $ids = implode(",",$diseaseIds);
             $list = explode(",",$ids);
            $this->db->select('disease_name');
            $this->db->from('disease');
            $this->db->where_in('disease_id',$list);
             $query = $this->db->get();
             //echo $query->num_rows();
            return $query->result();
        }


         public function ForgotPassword($email)
        {
            $this->db->select('email');
            $this->db->from('tbl_users'); 
            $this->db->where('email', $email); 
            $query=$this->db->get();
            return $query->row_array();
        }





         public function sendpassword($data)
         {
            $email = $data['email'];
            $query1=$this->db->query("SELECT *  from tbl_users where email = '".$email."' ");
            $row=$query1->result_array();
            if ($query1->num_rows()>0)
            {
            $passwordplain = "";
            $passwordplain  = rand(99999999,999999999);
            $newpass['password'] = getHashedPassword($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('tbl_users', $newpass); 
            $mail_message='Dear '.$row[0]['name'].','. "\r\n";
            $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
            $mail_message.='<br>Please Update your password.';
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Your company name'; 
            } 
            return $mail_message;     
            
        }





        function schemesListing($hospitalId)
        {
            // $this->db->select('scheme_id, scheme_name, description');
            // $this->db->from('scheme');
            // $query = $this->db->get();

            //  $result = $query->result();        
            //  return $result; 
            $this->db->select('scheme_id');
            $this->db->from('empanelment_request');
            $this->db->where('hospital_id',$hospitalId);
            $query = $this->db->get();
            $result = $query->result();
            $schemeIds = array();
            foreach($result as $row)
            {
                $schemeIds[] = $row->scheme_id;
             }
             $ids = implode(",",$schemeIds);
             $list = explode(",",$ids);


            $this->db->select('scheme_id, scheme_name, description');
            $this->db->from('scheme');
            $this->db->where_not_in('scheme_id',$list);
            $query = $this->db->get();
            //echo $query->num_rows();

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
            $this->db->select('a.*, b.district_name');
            $this->db->from('hospital a');
            $this->db->join('district b', 'a.district_id = b.district_id','left');
            $this->db->where('hospital_email',$email);
            $query = $this->db->get();

            $result = $query->row();
            return $result;
        }
        function viewrequestdetails($empanelment_request_id)
        {
            $this->db->select('*');
            $this->db->from('empanelment_request');
            $this->db->where('empanelment_request_id',$empanelment_request_id);
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
            
            $this->db->select('hospital.district_id, district_admin.user_id');
            $this->db->from('hospital');
            $this->db->join('district_admin', 'hospital.district_id=district_admin.district_id','left');
            $this->db->where('hospital_id',$hospitalId);

            $query = $this->db->get();
            $result = $query->row();
            //$district_id = $result->district_id;
            $districtAdmin_id = $result->user_id;
            // echo $districtAdmin_id;
            // echo $district_id;
            //echo $query->num_rows();

            $empanelment['districtAdmin_id'] = $districtAdmin_id;

            $this->db->insert('empanelment_request', $empanelment);
            $insert_id = $this->db->insert_id();
            

        }

        // function requestProcessing($schemeId, $email, $hospitalId)
        // {
        //         // echo $schemeId;
        //         // echo $email;
        //         // echo $hospitalId;
        //     $empanelment['scheme_id'] = $schemeId;
        //     $empanelment['hospital_id'] = $hospitalId;
        //     $empanelment['status'] ="pending";
        //     $empanelment['organisation_id'] = 1;
            
        //     $this->db->select('district_id');
        //     $this->db->from('hospital');
        //     $this->db->where('hospital_id',$hospitalId);

        //     $query = $this->db->get();
        //     $result = $query->row();
        //     $districtAdmin_id = $result->district_id;
        //     // echo $districtAdmin_id;
        //     // echo $query->num_rows();
        //     $empanelment['districtAdmin_id'] = $districtAdmin_id;

        //     $this->db->insert('empanelment_request', $empanelment);
        //     $insert_id = $this->db->insert_id();
        //     echo $insert_id;

        // }



        function approvalForState($id = null)
        {
                
                $this->db->select('er.empanelment_request_id,er.documents,er.status,er.stateAdmin_status,sc.scheme_name');
                $this->db->from('empanelment_request er');
                $this->db->join('scheme sc','er.scheme_id = sc.scheme_id','right');
                $this->db->where('districtAdmin_status','approved');
                $this->db->where('stateAdmin_status',null);

                $query = $this->db->get();

                $result = $query->result();
                return $result;
        }
        function getDistrict($id)
        {
            // echo $id;
           $this->db->select('district_id');
           $this->db->from('district_admin');
           $this->db->where('user_id',$id);
           $query=  $this->db->get();
           return $query->row()->district_id;

        }

        function approvalForDistrict($id)
        {

            // $district_id = $this->user_model->getDistrict($id);
            $this->db->select('er.empanelment_request_id,er.documents,er.status,er.districtAdmin_status,sc.scheme_name');
            $this->db->from('empanelment_request er');
            $this->db->join('scheme sc','er.scheme_id = sc.scheme_id','left');
            $this->db->where('er.districtAdmin_id',$id);
            $this->db->where('er.districtAdmin_status',NULL);

            $query = $this->db->get();        
            $result = $query->result();
            return $result;
        }

        function getDistrictName($id)
        {
            $this->db->select('district_name');
            $this->db->from('district');
            $this->db->where('district_id',$id);


            $query = $this->db->get()->row()->district_name;
            return $query;
        }


        function detailsOfRequest($empanelment_request_id)
        {
            $this->db->select('*');
            $this->db->from('hospital');
            $this->db->join('empanelment_request', 'empanelment_request.hospital_id = hospital.hospital_id','left');
            $this->db->where('empanelment_request_id',$empanelment_request_id);
            $query = $this->db->get();
            $result = $query->row();
            return $result;
        }

        function changeStatus($empanelment_request_id,$comments,$status,$role)
        {
            $this->db->where($empanelment_request_id);

            $request_row = $this->db->get_where('empanelment_request', array('empanelment_request_id' => $empanelment_request_id))->row();

            if($role == ROLE_STATE_ADMIN)
            {
                $data = array(
                   'stateAdmin_comments' => $comments,
                   'stateAdmin_status' => $status,
                   'status' => $status 
                );
            }
            else if($role == ROLE_DISTRICT_ADMIN)
            {
                 $data = array(
                   'districtAdmin_comments' => $comments,
                   'districtAdmin_status' => $status, 
                   'status' => "District ".$status
                );    
            }

            $this->db->where('empanelment_request_id', $empanelment_request_id);
            $this->db->update('empanelment_request', $data); 
        
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

        function getNumber($table_name)
        {
            if($table_name == "beneficiaries")
            {
                $this->db->select('*');
                $this->db->from("application_details");
                $this->db->where('status','approved');

                $query = $this->db->get();
                $result = $query->num_rows();    
            }
            else
            {
                $this->db->select('*');
                $this->db->from($table_name);

                $query = $this->db->get();
                $result = $query->num_rows();
             }
            return $result;
        }

        function getAllRequests($role)
        {
            if($role == ROLE_STATE_ADMIN)
            {
                $this->db->select('er.empanelment_request_id,er.documents,er.status,er.stateAdmin_status,sc.scheme_name');
                $this->db->from('empanelment_request er');
                $this->db->join('scheme sc','er.scheme_id = sc.scheme_id','right');
                $this->db->where('districtAdmin_status','approved');
            }
            else if($role == ROLE_DISTRICT_ADMIN)
            {
                $this->db->select('er.empanelment_request_id,er.documents,er.status,er.districtAdmin_status,sc.scheme_name');
                $this->db->from('empanelment_request er');
                $this->db->join('scheme sc','er.scheme_id = sc.scheme_id','right');
                $this->db->where('districtAdmin_status','');
            }


            $query = $this->db->get();
            $result = $query->result();
            return $result;    
        }

        function getBeneficiariesForNodal($role,$userId)
        {
             
             // echo $district_id;
             // echo $role;
            if($role == ROLE_STATE_ADMIN)
            {
                $this->db->select('COUNT(app.application_details_id) as application_count,sch.scheme_name,hosp.hospital_name,sch.scheme_id,hosp.hospital_id');
                $this->db->from('application_details app');
                $this->db->join('scheme sch','app.scheme_id = sch.scheme_id','right');
                $this->db->join('hospital hosp','app.hospital_id = hosp.hospital_id','right');
                $this->db->where('app.status','approved');
                // $this->db->where('hosp.state',$user);
                $this->db->group_by('hosp.hospital_id');
                $this->db->group_by('sch.scheme_name');

                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }
            else if($role == ROLE_DISTRICT_ADMIN)
            {
                $district_id = $this->getDistrict($userId);
                $this->db->select('COUNT(app.application_details_id) as application_count,sch.scheme_name,hosp.hospital_name,sch.scheme_id,hosp.hospital_id');
                $this->db->from('application_details app');
                $this->db->join('scheme sch','app.scheme_id = sch.scheme_id','right');
                $this->db->join('hospital hosp','app.hospital_id = hosp.hospital_id','right');
                $this->db->where('app.status','approved');
                $this->db->where('hosp.district_id',$district_id);
                $this->db->group_by('app.hospital_id');
                $this->db->group_by('sch.scheme_name');

                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }
        }

        function getReports($id,$role)
        {
            if($role == ROLE_STATE_ADMIN)
            {
                $this->db->select('emp.empanelment_request_id,sch.scheme_name,emp.documents,emp.status,emp.stateAdmin_status');
                $this->db->from('empanelment_request emp');
                $this->db->join('scheme sch','emp.scheme_id = sch.scheme_id');
                $this->db->where('districtAdmin_status','approved');
            }
            else
            {
                //$district_id = $this->getDistrict($id);
                $this->db->select('emp.empanelment_request_id,sch.scheme_name,emp.documents,emp.status,emp.districtAdmin_status');
                $this->db->from('empanelment_request emp');
                $this->db->join('scheme sch','emp.scheme_id = sch.scheme_id');
                $this->db->where('districtAdmin_id',$id);    
            }

            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }

        function getIdByName($table_name,$name)
        {
            if($table_name == 'hospital')
            {
                $this->db->select('hospital_id');
                $this->db->from('hospital');
                $this->db->where('hospital_name',$name);

                $query = $this->db->get();
                $result = $query->row();
            }
            elseif ($table_name == 'scheme') 
            {
                $this->db->select('scheme_id');
                $this->db->from('scheme');
                $this->db->where('scheme_name', $name);

                $query = $this->db->get();
                $result = $query->row()->scheme_id;        
            }  
            return $result;  
        }


        function getPatientDetailsForNodal($role,$id,$scheme_id,$hospital_id)
        {
            if($role == ROLE_DISTRICT_ADMIN)
            {
                $district_id = $this->getDistrict($id);
                $this->db->select('app.application_reference,hosp.hospital_name,sch.scheme_name,app.patientName,dise.disease_name,app.amount_credited');
                $this->db->from('application_details app');
                // $this->db->join('hospital hosp','app.hospital_id = '.$hospital_id);
                $this->db->join('hospital hosp','app.hospital_id = hosp.hospital_id');
                $this->db->join('scheme sch','app.scheme_id = sch.scheme_id');
                $this->db->join('disease dise','app.disease_id = dise.disease_id');
                $this->db->where('app.district_id',$district_id);
                $this->db->where('hosp.hospital_id',$hospital_id);
                $this->db->where('sch.scheme_id',$scheme_id);

                $query = $this->db->get();
                $result = $query->result();        
            }
            else if($role == ROLE_STATE_ADMIN)
            {
                $this->db->select('app.application_reference,hosp.hospital_name,sch.scheme_name,app.patientName,dise.disease_name,app.amount_credited');
                $this->db->from('application_details app');
                // $this->db->join('hospital hosp','app.hospital_id = '.$hospital_id);
                $this->db->join('hospital hosp','app.hospital_id = hosp.hospital_id');
                $this->db->join('scheme sch','app.scheme_id = sch.scheme_id');
                $this->db->join('disease dise','app.disease_id = dise.disease_id');
                // $this->db->where('app.district_id',$district_id);
                $this->db->where('hosp.hospital_id',$hospital_id);
                $this->db->where('sch.scheme_id',$scheme_id);

                $query = $this->db->get();
                $result = $query->result();       
            }
            return $result;
        }
    }



      
     
