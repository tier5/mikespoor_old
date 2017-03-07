<?php
class Gallery extends CI_Controller {
      
	    public function __construct()
        {
                parent::__construct();
				$this->load->model('backend/gallery_model');
                // Your own constructor code
        }
        public function index()
        {
			   $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Gallery Page';
				$data['title']='Gallery Page - Car\'s List';
				$data['bannerlist']=$this->gallery_model->getbannerlistmodel();
                $this->load->view('backend/gallery_view',$data);
        }
		public function add()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Gallery Page';
				$data['title']='Gallery Page - Add New';
				$data['feature']="Add";
                $this->load->view('backend/gallery_add_view',$data);
		}
		public function edit($getid)
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Gallery Page';
				$data['title']='Gallery Page - Edit';
				$data['bannerinfo']=$this->gallery_model->getbannerinfomodel($getid);
				$data['feature']="Edit";
                $this->load->view('backend/gallery_add_view',$data);
		}
		public function addbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->gallery_model->addbannermodel();
				if($res)
				{
					if(isset($_POST['btnSave']) && $_POST['btnSave']=='list')
					{
						$_SESSION['successmsg']='Gallery image information inserted successfully';
						header('location:'.DOMAIN.'backend/gallery');
						exit;
					}
					if(isset($_POST['btnAdd']) && $_POST['btnAdd']=='new')
					{
						$_SESSION['successmsg']='Gallery image information inserted successfully';
						header('location:'.DOMAIN.'backend/gallery/add');
						exit;
					}
					
				}
				else
				{
					   $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/gallery/add');
						exit;
				}
		}
		public function editbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->gallery_model->editbannermodel();
				if($res)
				{
					
						$_SESSION['successmsg']='Gallery image information updated successfully';
						header('location:'.DOMAIN.'backend/gallery/edit/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/gallery/edit/'.$_POST['txtCid']);
						exit;
				}
		}
		public function changestatus($getid,$getstatus)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->gallery_model->statusbannermodel($getid,$getstatus);
				if($res)
				{
					
						$_SESSION['successmsg']='Status changed successfully';
						header('location:'.DOMAIN.'backend/gallery/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/gallery/'.$_POST['txtCid']);
						exit;
				}
		}
		public function delete($getid)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->gallery_model->deletebannermodel($getid);
				if($res)
				{
					
						$_SESSION['successmsg']='Gallery image record deleted successfully';
						header('location:'.DOMAIN.'backend/gallery');
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/gallery');
						exit;
				}
		}


}
?>