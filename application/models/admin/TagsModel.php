<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class TagsModel extends CI_Model {

		public function LoadTagslist($id = null) {
			$this->db->select('*');
			$this->db->from('tbl_web_post_tags');
			if (!empty($id)) {
				$this->db->where('Id',$id);
				return $this->db->get()->result();
			}else {
				$this->db->where('IsActive','1');
				$this->db->or_where('IsActive','2');
				return $this->db->get();
			}
			
		}

		public function Add($data) {

			$this->db->set('Name',"'".$data['name']."'",FALSE);
			$this->db->set('Description',"'".$data['description']."'",FALSE);
			$this->db->set('CreatedById',"'".$this->session->userdata('userid')."'",FALSE);
			$this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);	
			$this->db->set('IsActive',"'".$data['status']."'",FALSE);

			$this->db->insert('tbl_web_post_tags');

			$id = $this->db->insert_id();

			if ($id > 0) {
				$inserted = $this->LoadTagslist($id);
				return $inserted;
			}
			else {
				return FALSE;
			}

		}


		public function Delete($data) {
			//filerecord = [Del-1234567890]filerecord
			$this->db->set('Name','"[Del-'.strtotime(date('Y-m-d H:i:s')).']~'.$data['name'].'"',FALSE);
			$this->db->set('IsActive','"0"',FALSE);
			$this->db->where('Id', $data['id']);
			$this->db->update('tbl_web_post_tags');
			$deleted = $this->db->affected_rows();
			if ($deleted > 0) {
				return $data;
			}else {
				FALSE;
			}

		}



		public function Update($id, $data) {
		    $this->db->set('ModifiedById',"'".$this->session->userdata('userid')."'",FALSE);
		    $this->db->set('ModifiedAt','CURRENT_TIMESTAMP',FALSE);
		    $this->db->set('VersionNo', 'VersionNo+1', FALSE);  
		    $this->db->set('Name', '"'.$data['name'].'"', FALSE); 
		    $this->db->set('Description', '"'.$data['description'].'"', FALSE); 
		    $this->db->set('IsActive', '"'.$data['status'].'"', FALSE);
		    $this->db->where('Id', $id);
		    $query = $this->db->update('tbl_web_post_tags');
			$update = $this->db->affected_rows();
			if ($update > 0) {
				$result = $this->LoadTagslist($id);
				return $result;
			}
			else {
				return FALSE;
			}
		}



	}