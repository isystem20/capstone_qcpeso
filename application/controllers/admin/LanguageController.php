<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageController extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->model('admin/LanguageModel','langmod');
    }


	public function Languages()
	{
        
        $layout = array('tables' => TRUE, );  
        $data['language'] = $this->langmod->Load_LanguageModel_Masterlist();
       

		$this->load->view('layout/admin/1_css',$layout);
		$this->load->view('layout/admin/2_preloader');
		$this->load->view('layout/admin/3_topbar');
		$this->load->view('layout/admin/4_leftsidebar');
		$this->load->view('pages/maintenance/languages',$data);
		$this->load->view('layout/admin/6_js',$layout);	
		
	}

	public function Create() {
	
	}

	public function Update() {
 
	}

	public function Delete() {

	}

	public function Read() {

	}


}
