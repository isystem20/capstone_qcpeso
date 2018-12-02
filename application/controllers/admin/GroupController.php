 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class GroupController extends Admin_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/GroupModel','groupmod');
         $this->load->model('LoggerModel','logger'); //Include LoggerModel
     }
 
    public function Group()
    {
 
        $layout = array('tables'=>TRUE, 'datepicker'=>TRUE, 'pagetitle'=>'Group');
        $data['masterlist'] = $this->groupmod->LoadMasterlist();
        $data['class'] = 'group';
        $this->load->view('layout/admin/1_css',$layout);
        $this->load->view('layout/admin/2_preloader',$layout);
        $this->load->view('layout/admin/3_topbar',$layout);
        $this->load->view('layout/admin/4_leftsidebar',$layout);
        $this->load->view('pages/maintenance/Group',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals',$layout);

        $json = json_encode($data['masterlist']); //log
        $this->logger->log('Load Group','Group',$json); //Log 

    }
    public function Create() {
        $this->form_validation->set_rules('name','Name','required|is_unique[tbl_group_masterlist.name]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                )
            );

            if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             $this->logger->log('Error Form Create','Group',$errors); //LoggerModel
             echo json_encode(['error'=>$errors]);
         }
        else {
            $postdata = $this->input->post();
            $inserted = $this->groupmod->Add($postdata);
            // echo json_encode(['success'=>TRUE]);
            if ($inserted != FALSE) {
                $json = json_encode($inserted); 
                $this->logger->log('Create','Group',$json); //Log             
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Create','Group',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
         }
 
    }
 
    public function Update() {
         $this->form_validation->set_rules('itemid', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            $this->logger->log('Error Form Create','Group',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->groupmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);    
                $this->logger->log('Update','Group',$json); //Log         
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Update','Group',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
        }




    }
 
    public function Delete() {
 
         $this->form_validation->set_rules('id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            $this->logger->log('Error Form Create','Group',$errors); //Log
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->groupmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);
                $this->logger->log('Delete','Group',$json); //Log              
                echo $json;
            }
            else {
                $json = json_encode($postdata); // encode postdata
                $this->logger->log('Error Delete','Group',$json); //Log 
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



    }
 
    public function Read() {
 
    }
 
 
 
 }