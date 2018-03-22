<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
 
class Main extends BaseController {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url'); 
$this->load->library('grocery_CRUD');
 
}
 
public function index()
{
echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}
 
public function hospital()
{
$crud = new grocery_CRUD();
$crud->set_table('hospital');
//$crud->columns('scheme_name','description','maximum_amount','guidelines','type','fund_allocated');
$output = $crud->render();
$this->_example_output($output);        
}
 
function _example_output($output = null)
 
{
$this->load->view('our_template.php',$output);    
}
}