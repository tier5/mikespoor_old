<?php
class Home_page_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
        }
		public function countgallery()
		{
			$cnt=$this->db->count_all_results('lm_home_banner');
			return $cnt;
		}
		public function addbannermodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			$gallery_pdf1='';
			$gallery_pdf2='';
			  if($_FILES['imgBanner']['name']!="")
	           {	
		         $photopath2 = pathinfo($_FILES['imgBanner']['name']);
		         $extension2 = $photopath2['extension'];
		         $source2 = $_FILES['imgBanner']['tmp_name'];
		         $gallery_pdf1 = time().".".$extension2;
		         $destination2 = "uploads/".$gallery_pdf1;
		          move_uploaded_file($source2,$destination2);
	           }
			   
			    if($_FILES['imgFBanner']['name']!="")
	           {	
		         $photopath3 = pathinfo($_FILES['imgFBanner']['name']);
		         $extension3 = $photopath3['extension'];
		         $source3 = $_FILES['imgFBanner']['tmp_name'];
		         $gallery_pdf2 = time().".".$extension3;
		         $destination3 = "uploads/".$gallery_pdf2;
		          move_uploaded_file($source3,$destination3);
	           }
			   
			    $data = array(
                    'banner_title' => trim(addslashes($_POST['txtTitle'])),
                    'banner_image' => $gallery_pdf1,
					'banner_front_image' => $gallery_pdf2,
					'banner_comment' => addslashes($_POST['editor1']),
                    'addedBy' => $_SESSION['usersession'],
					'status' => '1',
					'addedOn' => $entdate,
					'updatedOn' => $entdate
                             );

                $query=$this->db->insert('lm_home_banner', $data);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		public function addfeaturemodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			
			    $data = array(
                    'feat_title' => trim(addslashes($_POST['txtTitle'])),
					'feat_content' => htmlspecialchars($_POST['editor1']),
                    'addedBy' => $_SESSION['usersession'],
					'status' => '1',
					'addedOn' => $entdate,
					'updatedOn' => $entdate
                             );

                $query=$this->db->insert('lm_featured_list', $data);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		public function getbannerlistmodel()
		{
			$this->db->select('`banner_id`, `banner_title`, `banner_image`, `banner_front_image`, `banner_comment`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_home_banner');
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		public function getfeaturedlistmodel()
		{
			$this->db->select('`feat_id`, `feat_title`, `feat_content`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_featured_list');
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		public function getactivefeaturedlistmodel()
		{
			$this->db->select('`feat_id`, `feat_title`, `feat_content`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_featured_list');
			$this->db->where('status',1);
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		public function getactivebannerlistmodel()
		{
			$this->db->select('`banner_id`, `banner_title`, `banner_image`, `banner_front_image`, `banner_comment`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_home_banner');
			$this->db->where('status',1);
			$query = $this->db->get();
			$row = $query->result_array();
			return $row;
		}
		public function getbannerinfomodel($getid)
		{
			$this->db->select('`banner_id`, `banner_title`, `banner_image`, `banner_front_image`, `banner_comment`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_home_banner');
			$this->db->where('banner_id',$getid);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row;
		}
		public function getfeatureinfomodel($getid)
		{
			$this->db->select('`feat_id`, `feat_title`, `feat_content`, `status`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_featured_list');
			$this->db->where('feat_id',$getid);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row;
		}
		public function editbannermodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			$gallery_pdf1='';
			$gallery_pdf2='';
			if($_FILES['imgBanner']['name']!="")
	          {	
		        unlink("uploads/".$_POST['hid_gallery_pdf1']);
		        $photopath2 = pathinfo($_FILES['imgBanner']['name']);
		        $extension2 = $photopath2['extension'];
		        $source2 = $_FILES['imgBanner']['tmp_name'];
		       $gallery_pdf1 = time().".".$extension2;
		       $destination2 = "uploads/".$gallery_pdf1;
		
		        move_uploaded_file($source2,$destination2);
	          }
	         else
	          {
		         $gallery_pdf1 = $_POST['hid_gallery_pdf1'];
	          }
			  
			  if($_FILES['imgFBanner']['name']!="")
	          {	
		        unlink("uploads/".$_POST['hid_gallery_pdf2']);
		        $photopath3 = pathinfo($_FILES['imgFBanner']['name']);
		        $extension3 = $photopath3['extension'];
		        $source3 = $_FILES['imgFBanner']['tmp_name'];
		       $gallery_pdf2 = time().".".$extension3;
		       $destination3 = "uploads/".$gallery_pdf2;
		
		        move_uploaded_file($source3,$destination3);
	          }
	         else
	          {
		         $gallery_pdf2 = $_POST['hid_gallery_pdf2'];
	          }
			  
			 
			$data = array(
             'banner_title' => trim(addslashes($_POST['txtTitle'])),
                    'banner_image' => $gallery_pdf1,
					'banner_front_image' => $gallery_pdf2,
					'banner_comment' => addslashes($_POST['editor1']),
                    'addedBy' => $_SESSION['usersession'],
					'updatedOn' => $entdate
             );

             $this->db->where('banner_id', $_POST['txtCid']);
             $query=$this->db->update('lm_home_banner', $data);
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		public function editfeaturemodel()
		{
			$timezone = 'GMT';
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$entdate = date('Y-m-d H:i:s');
			
			$data = array(
                    'feat_title' => trim(addslashes($_POST['txtTitle'])),
					'feat_content' => htmlspecialchars($_POST['editor1']),
                    'addedBy' => $_SESSION['usersession'],
					'updatedOn' => $entdate
             );

             $this->db->where('feat_id', $_POST['txtCid']);
             $query=$this->db->update('lm_featured_list', $data);
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		public function statusbannermodel($getid,$getstatus)
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

             $this->db->where('banner_id', $getid);
             $query=$this->db->update('lm_home_banner', $data);
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

             $this->db->where('feat_id', $getid);
             $query=$this->db->update('lm_featured_list', $data);
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		public function deletebannermodel($getid)
		{    
		     $searchquery = $this->db->query("select * from lm_home_banner where banner_id='".$getid."'");

             foreach ($searchquery->result_array() as $searchrow)
               {
                   unlink("uploads/".$searchrow['banner_image']);
				   unlink("uploads/".$searchrow['banner_thumbnail']);
               }
			 $this->db->where('banner_id', $getid);
             $query=$this->db->delete('lm_home_banner');
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
		    
			 $this->db->where('feat_id', $getid);
             $query=$this->db->delete('lm_featured_list');
			 if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
        public function getcmsinfomodel($getid)
		{
			$this->db->select('`home_id`, `home_title`, `home_offer1_title`, `home_offer1_content`, `home_offer2_title`, `home_offer2_content`, `home_offer3_title`, `home_offer3_content`, `home_stat1_title`, `home_stat1_content`, `home_stat2_title`, `home_stat2_content`, `home_stat3_title`, `home_stat3_content`, `home_stat4_title`, `home_stat4_content`, `home_sec1_title`, `home_sec1_content`, `home_sec2_title`, `home_sec2_content`, `home_sec3_title`, `home_sec3_content`, `home_fsec_title`, `home_fsec_content`, `addedBy`, `addedOn`, `updatedOn`');
            $this->db->from('lm_home_page');
			$this->db->where('home_id',$getid);
			$query = $this->db->get();
			$row = $query->row_array();
			return $row;
		}
		public function cmseditmodel($getid)
		{
			$entdate=date('Y-m-d H:i:s');
			
			 
			$data = array(
                    'home_title' => trim(addslashes($_POST['txtTitle'])),
					'home_offer1_title' => trim(addslashes($_POST['txtOt1'])),
					'home_offer1_content' => htmlspecialchars($_POST['txtOc1']),
					'home_offer2_title' => trim(addslashes($_POST['txtOt2'])),
					'home_offer2_content' => htmlspecialchars($_POST['txtOc2']),
					'home_offer3_title' => trim(addslashes($_POST['txtOt3'])),
					'home_offer3_content' => htmlspecialchars($_POST['txtOc3']),
					'home_stat1_title' => trim(addslashes($_POST['txtSt1'])),
					'home_stat1_content' => trim(addslashes($_POST['txtSc1'])),
					'home_stat2_title' => trim(addslashes($_POST['txtSt2'])),
					'home_stat2_content' => trim(addslashes($_POST['txtSc2'])),
					'home_stat3_title' => trim(addslashes($_POST['txtSt3'])),
					'home_stat3_content' => trim(addslashes($_POST['txtSc3'])),
					'home_stat4_title' => trim(addslashes($_POST['txtSt4'])),
					'home_stat4_content' => trim(addslashes($_POST['txtSc4'])),
					'home_sec1_title' => trim(addslashes($_POST['txtXt1'])),
					'home_sec1_content' => htmlspecialchars($_POST['txtXc1']),
					'home_sec2_title' => trim(addslashes($_POST['txtYt2'])),
					'home_sec2_content' => htmlspecialchars($_POST['txtYc2']),
					'home_sec3_title' => trim(addslashes($_POST['txtZt3'])),
					'home_sec3_content' => htmlspecialchars($_POST['txtZc3']),
					'home_fsec_title' => trim(addslashes($_POST['txtLTitle'])),
					'home_fsec_content' => htmlspecialchars($_POST['txtLContent']),
					'addedBy' => $_SESSION['usersession'],
					'addedOn' => $entdate,
					'updatedOn' => $entdate
             );

             $this->db->where('home_id', $_POST['txtCid']);
             $query=$this->db->update('lm_home_page', $data);
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