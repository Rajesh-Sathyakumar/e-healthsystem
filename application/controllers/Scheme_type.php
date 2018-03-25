<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
require APPPATH . '/libraries/BaseController.php'; 

class Scheme_type extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->database();
        $this->load->model('Scheme_type_model');
        $this->isLoggedIn();  
        
    } 

    /*
     * Listing of scheme_type
     */
    function index()
    {
        $data['scheme_type'] = $this->Scheme_type_model->get_all_scheme_type();
        $this->loadViews('scheme_type/index', $this->global, $data , NULL);
    }

    /*
     * Adding a new scheme_type
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'type_name' => $this->input->post('type_name'),
            );
            
            $scheme_type_id = $this->Scheme_type_model->add_scheme_type($params);
            redirect('scheme_type/index');
        }
        else
        {            
        
            $this->loadViews('scheme_type/add', $this->global, NULL , NULL);
        }
    }  

    /*
     * Editing a scheme_type
     */
    function edit($type_id)
    {   
        // check if the scheme_type exists before trying to edit it
        $data['scheme_type'] = $this->Scheme_type_model->get_scheme_type($type_id);
        
        if(isset($data['scheme_type']['type_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'type_name' => $this->input->post('type_name'),
                );

                $this->Scheme_type_model->update_scheme_type($type_id,$params);            
                redirect('scheme_type/index');
            }
            else
            {
             
                 $this->loadViews('scheme_type/edit', $this->global, $data , NULL);
            }
        }
        else
            show_error('The scheme_type you are trying to edit does not exist.');
    } 

    /*
     * Deleting scheme_type
     */
    function remove($type_id)
    {
        $scheme_type = $this->Scheme_type_model->get_scheme_type($type_id);

        // check if the scheme_type exists before trying to delete it
        if(isset($scheme_type['type_id']))
        {
            $this->Scheme_type_model->delete_scheme_type($type_id);
            redirect('scheme_type/index');
        }
        else
            show_error('The scheme_type you are trying to delete does not exist.');
    }
    
}
