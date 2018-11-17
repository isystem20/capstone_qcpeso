 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class WebPostsController extends CI_Controller {
 
    function __construct() {
         parent::__construct();
         $this->load->model('admin/WebPostsModel','webpostmod');
         $this->load->model('admin/PostTypesModel','postymod');
     }
 
      public function AllWebPosts()
    {
 
        $layout = array('tables'=>TRUE);
        $data['webposts'] = $this->webpostmod->LoadMasterlist();
        $data['class'] = 'webposts';

        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/settings/AllWebPosts',$data);
        $this->load->view('layout/admin/6_js',$layout);     
        $this->load->view('layout/admin/7_modals'); 


    }

    public function AddWebPosts()
    {
 
        $layout = array('tables'=>TRUE, 'editor'=>TRUE, 'tags'=>TRUE);
        $data['webposts'] = $this->webpostmod->LoadMasterlist();
        $data['posttypes'] = $this->postymod->LoadMasterlist();
        $data['class'] = 'web-posts';

        $this->load->view('layout/admin/1_css');
        $this->load->view('layout/admin/2_preloader');
        $this->load->view('layout/admin/3_topbar');
        $this->load->view('layout/admin/4_leftsidebar');
        $this->load->view('pages/settings/AddWebPosts',$data);
        $this->load->view('layout/admin/6_js',$layout);     
       

    }
 
 	public function Create() {
		$this->form_validation->set_rules('title','title','required|is_unique[tbl_web_posts.PostTitle]',
		        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        		)
		    );

		    if ($this->form_validation->run() == FALSE){
             $errors = validation_errors();
             echo json_encode(['error'=>$errors]);
         }
        else {
        	$postdata = $this->input->post();
        	$inserted = $this->webpostmod->Add($postdata);
        	// echo json_encode(['success'=>TRUE]);
         	if ($inserted != FALSE) {
	        	$json = json_encode($inserted);       		
        		echo $json;
        	}
        	else {
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
            echo json_encode(['error'=>$errors]);
        }
        else{
            $id = $postdata['itemid'];
            unset($postdata['itemid']);
            $postdata = array_filter($postdata, 'strlen');

            $result = $this->webpostmod->Update($id,$postdata);
            if ($result != FALSE) {
                $json = json_encode($result);             
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }
        }




 	}
 
 	public function Delete() {
 
         $this->form_validation->set_rules('Id', 'Item Record', 'required',
                array(
                'required'      => 'Cannot identify this record.',
                ));

        $postdata = $this->input->post();
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else{
            $result = $this->webpostmod->Delete($postdata);
            if ($result != FALSE) {
                $json = json_encode($result);              
                echo $json;
            }
            else {
                echo json_encode(['error'=>'Update Unsuccessful.']);
            }

        }



 	}
 
 	public function Read() {
 
 	}
 
 
 
 }