 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class DevController extends CI_Controller {
 
 	function __construct() {
         parent::__construct();
         $this->load->model('admin/AccountReleaseModel','accrelmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
 	public function ChangeUserType()
 	{
 		
 			


 	}

 }