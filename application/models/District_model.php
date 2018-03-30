<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class District_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get district by district_id
     */
    function get_district($district_id)
    {
        return $this->db->get_where('district',array('district_id'=>$district_id))->row_array();
    }
        
    /*
     * Get all district
     */
    function get_all_district()
    {
        // $this->db->order_by('district_id', 'asc');
        // return $this->db->get('district')->result_array();
        $this->db->select('district.district_id, district.district_name, tbl_users.name');
        $this->db->from('district_admin');
        $this->db->join('tbl_users','district_admin.user_id=tbl_users.userId','right');
        $this->db->join('district','district_admin.district_id=district.district_id','right');
        $this->db->order_by('tbl_users.name', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
        
    /*
     * function to add new district
     */
    function add_district($params)
    {
        $this->db->insert('district',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update district
     */
    function update_district($district_id,$params)
    {
        $this->db->where('district_id',$district_id);
        return $this->db->update('district',$params);
    }
    
    /*
     * function to delete district
     */
    function delete_district($district_id)
    {
        return $this->db->delete('district',array('district_id'=>$district_id));
    }
}
