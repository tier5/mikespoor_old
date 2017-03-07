<?php
class Timeline_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
        }
		public function countgallery()
		{
			$cnt=$this->db->count_all_results('lm_timeline');
			return $cnt;
		}
		
		public function addfeaturemodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			
			    $data = array(
                    'timeline_title' => trim(addslashes($_POST['txtTitle'])),
					'timeline_content' => htmlspecialchars($_POST['editor1']),
					'orderBy' => trim(addslashes($_POST['txtOrder'])),
                    'addedBy' => $_SESSION['usersession'],
					'status' => '1',
					'addedOn' => $entdate,
					'updatedOn' => $entdate
                             );

                $query=$this->db->insert('lm_timeline', $data);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		
		public function getfeaturedlistmodel()
		{
			$this->db->select('`timeline_id`, `timeline_title`, `timeline_content`, `orderBy`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_timeline');
			$this->db->order_by('orderBy', 'ASC');
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		public function getactivefeaturedlistmodel()
		{
			$this->db->select('`timeline_id`, `timeline_title`, `timeline_content`, `orderBy`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_timeline');
			$this->db->order_by('orderBy', 'DESC');
			$this->db->where('status',1);
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		
		public function getfeatureinfomodel($getid)
		{
			$this->db->select('`timeline_id`, `timeline_title`, `timeline_content`, `orderBy`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_timeline');
			$this->db->where('timeline_id',$getid);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row;
		}
		
		public function editfeaturemodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			
			$data = array(
                    'timeline_title' => trim(addslashes($_POST['txtTitle'])),
					'timeline_content' => htmlspecialchars($_POST['editor1']),
					'orderBy' => trim(addslashes($_POST['txtOrder'])),
                    'addedBy' => $_SESSION['usersession'],
					'updatedOn' => $entdate
             );

             $this->db->where('timeline_id', $_POST['txtCid']);
             $query=$this->db->update('lm_timeline', $data);
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		
		public function statusfeaturemodel($getid,$getstatus)
		{
			 $timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			 $nowstatus='';
			 if($getstatus==0)
			 {
				 $nowstatus=1;
			 }
			 else
			 {
				 $nowstatus=0;
			 }
			 $data = array(
                    'status' => $nowstatus,
                    'addedBy' => $_SESSION['usersession'],
					'updatedOn' => $entdate
             );

             $this->db->where('timeline_id', $getid);
             $query=$this->db->update('lm_timeline', $data);
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		
		public function deletefeaturemodel($getid)
		{    
		    
			 $this->db->where('timeline_id', $getid);
             $query=$this->db->delete('lm_timeline');
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
       
}
?>