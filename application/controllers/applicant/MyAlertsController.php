 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MyAlertsController extends CI_Controller {
 
    
 
    public function MyAlerts()
    {
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE);
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/applicant/MyAlerts',$layout);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals');

       

    }

 
 }