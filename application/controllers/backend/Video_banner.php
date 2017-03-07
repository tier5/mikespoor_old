<?php
class Video_banner extends CI_Controller {
      
	    public function __construct()
        {
                parent::__construct();
				$this->load->model('backend/video_banner_model');
                // Your own constructor code
        }
        public function index()
        {
			   $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Video Banner Category';
				$data['title']='Video Banner Category';
				$data['bannerlist']=$this->video_banner_model->getbannerlistmodel();
                $this->load->view('backend/video_banner_view',$data);
        }
		public function add()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Video Banner Category';
				$data['title']='Video Banner Category - Add New';
				$data['feature']="Add";
                $this->load->view('backend/video_banner_add_view',$data);
		}
		public function edit($getid)
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Video Banner Category';
				$data['title']='Video Banner Category - Edit';
				$data['bannerinfo']=$this->video_banner_model->getbannerinfomodel($getid);
				$data['feature']="Edit";
                $this->load->view('backend/video_banner_add_view',$data);
		}
		public function addbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->video_banner_model->addbannermodel();
				if($res)
				{
					if(isset($_POST['btnSave']) && $_POST['btnSave']=='list')
					{
						$_SESSION['successmsg']='Video Banner information inserted successfully';
						header('location:'.DOMAIN.'backend/video_banner');
						exit;
					}
					if(isset($_POST['btnAdd']) && $_POST['btnAdd']=='new')
					{
						$_SESSION['successmsg']='Video Banner information inserted successfully';
						header('location:'.DOMAIN.'backend/video_banner/add');
						exit;
					}
					
				}
				else
				{
					   $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/video_banner/add');
						exit;
				}
		}
		public function editbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->video_banner_model->editbannermodel();
				if($res)
				{
					
						$_SESSION['successmsg']='Video Banner information updated successfully';
						header('location:'.DOMAIN.'backend/video_banner/edit/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/video_banner/edit/'.$_POST['txtCid']);
						exit;
				}
		}
		public function changestatus($getid,$getstatus)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->video_banner_model->statusbannermodel($getid,$getstatus);
				if($res)
				{
					
						$_SESSION['successmsg']='Status changed successfully';
						header('location:'.DOMAIN.'backend/video_banner/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/video_banner/'.$_POST['txtCid']);
						exit;
				}
		}
		public function changefeatured($getid,$getstatus)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->video_banner_model->featuredvideo_bannermodel($getid,$getstatus);
				if($res)
				{
					
						$_SESSION['successmsg']='Featured Status changed successfully';
						header('location:'.DOMAIN.'backend/video_banner/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/video_banner/'.$_POST['txtCid']);
						exit;
				}
		}
		public function delete($getid)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->video_banner_model->deletebannermodel($getid);
				if($res)
				{
					
						$_SESSION['successmsg']='Video Banner record deleted successfully';
						header('location:'.DOMAIN.'backend/video_banner');
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/video_banner');
						exit;
				}
		}


}
?>