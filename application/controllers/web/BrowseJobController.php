<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrowseJobController extends CI_Controller {


function __construct() {
	parent::__construct();
			$this->load->model('web/BrowseJobModel','browsmod');
			$this->load->model('web/EstablishmentModel','estmod');
			$this->load->model('admin/CategoriesModel','categmod');
			$this->load->model('admin/SkillsModel','skimod');
			$this->load->model('admin/ApplicantLevelModel','levelmod');
     }
public function BrowseJob()
				{
						$str = null;
						
						$postdata = $this->input->post();

						if  (!empty($postdata['searchtext'])) {
							$str = $postdata['searchtext'];
				}
		
		

		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist($postdata);
		$data['mostrecentjob'] = $this->browsmod->MostRecentJobs();
		$data['estabpost'] = $this->estmod->LoadMasterlist();		
		$data['categori'] = $this->categmod->LoadCategoryMasterlist();
		$data['skills'] = $this->skimod->LoadMasterlist();
		$data['applevel'] = $this->levelmod->LoadMasterlist();
		$data['criteria'] = $postdata;
		$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'BrowseJob');
			$this->load->view('layout/web/1_head',$layout);
			$this->load->view('layout/web/2_preloader',$layout);
			$this->load->view('layout/web/3_header',$layout);
			$this->load->view('web/BrowseJob',$data);
			$this->load->view('layout/web/5_rightbar',$layout);
			$this->load->view('layout/web/6_footer',$layout);

	}
public function BrowseJobDescription($id = NULL){


	if (!empty($id)) {
		

		
		$data['browsejob'] = $this->browsmod->BrowseJobModelMasterlist(null,$id);
		
		
		 $JobPostResult = $data['browsejob']->result_array();
		$data['Recent'] = $this->browsmod->CompanyRecentJobs($JobPostResult[0]['EstablishmentId']);
		$data['Recent'] = $this->browsmod->CompanyRecentJobs();
		$data['estabpost'] = $this->estmod->LoadMasterlist();		
		$data['categori'] = $this->categmod->LoadCategoryMasterlist();
		$data['skills'] = $this->skimod->LoadMasterlist();
		$data['applevel'] = $this->levelmod->LoadMasterlist();

		if ($data['browsejob']->num_rows() > 0) {
			$data['browsejob'] = $data['browsejob']->result_array();

				$layout = array('transparentwrapper' => TRUE,'addons'=>TRUE, 'pagetitle'=>'BrowseJobDescription');
				$this->load->view('layout/web/1_head',$layout);
				$this->load->view('layout/web/2_preloader',$layout);
				$this->load->view('layout/web/3_header',$layout);
				$this->load->view('web/BrowseJobDescription',$data);
				$this->load->view('layout/web/5_rightbar',$layout);
				$this->load->view('layout/web/6_footer',$layout);
		}
		else{
			return redirect(base_url('404'));

		}

	}
	
	}

}
