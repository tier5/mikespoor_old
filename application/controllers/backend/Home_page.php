<?php
class Home_page extends CI_Controller {
      
	    public function __construct()
        {
                parent::__construct();
				$this->load->model('backend/home_page_model');
                // Your own constructor code
        }
        public function index()
        {
			   $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Home Page';
				$data['title']='Home Page - Banner List';
				$data['bannerlist']=$this->home_page_model->getbannerlistmodel();
                $this->load->view('backend/home_page_view',$data);
        }
		public function add()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Home Page';
				$data['title']='Home Page Banner - Add New';
				$data['feature']="Add";
                $this->load->view('backend/home_page_add_view',$data);
		}
		public function addfeature()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Home Page';
				$data['title']='Feature List - Add New';
				$data['feature']="Add";
                $this->load->view('backend/featured_list_add_view',$data);
		}
		public function edit($getid)
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Home Page';
				$data['title']='Home Page Banner - Edit';
				$data['bannerinfo']=$this->home_page_model->getbannerinfomodel($getid);
				$data['feature']="Edit";
                $this->load->view('backend/home_page_add_view',$data);
		}
		public function editfeature($getid)
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Home Page';
				$data['title']='Feature List - Edit';
				$data['bannerinfo']=$this->home_page_model->getfeatureinfomodel($getid);
				$data['feature']="Edit";
                $this->load->view('backend/featured_list_add_view',$data);
		}
		public function addbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->home_page_model->addbannermodel();
				if($res)
				{
					if(isset($_POST['btnSave']) && $_POST['btnSave']=='list')
					{
						$_SESSION['successmsg']='Banner created successfully';
						header('location:'.DOMAIN.'backend/home-page');
						exit;
					}
					if(isset($_POST['btnAdd']) && $_POST['btnAdd']=='new')
					{
						$_SESSION['successmsg']='Banner created successfully';
						header('location:'.DOMAIN.'backend/home-page/add');
						exit;
					}
					
				}
				else
				{
					   $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/add');
						exit;
				}
		}
		public function addnewfeature()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->home_page_model->addfeaturemodel();
				if($res)
				{
					if(isset($_POST['btnSave']) && $_POST['btnSave']=='list')
					{
						$_SESSION['successmsg']='Feature created successfully';
						header('location:'.DOMAIN.'backend/home-page/feature-list');
						exit;
					}
					if(isset($_POST['btnAdd']) && $_POST['btnAdd']=='new')
					{
						$_SESSION['successmsg']='Feature created successfully';
						header('location:'.DOMAIN.'backend/home-page/addfeature');
						exit;
					}
					
				}
				else
				{
					   $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/addfeature');
						exit;
				}
		}
		public function editbanner()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->home_page_model->editbannermodel();
				if($res)
				{
					
						$_SESSION['successmsg']='Banner updated successfully';
						header('location:'.DOMAIN.'backend/home-page/edit/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/edit/'.$_POST['txtCid']);
						exit;
				}
		}
		public function editnewfeature()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->home_page_model->editfeaturemodel();
				if($res)
				{
					
						$_SESSION['successmsg']='Feature updated successfully';
						header('location:'.DOMAIN.'backend/home-page/editfeature/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/editfeature/'.$_POST['txtCid']);
						exit;
				}
		}
		public function changestatus($getid,$getstatus)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->home_page_model->statusbannermodel($getid,$getstatus);
				if($res)
				{
					
						$_SESSION['successmsg']='Banner status changed successfully';
						header('location:'.DOMAIN.'backend/home-page/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/'.$_POST['txtCid']);
						exit;
				}
		}
		public function changefeaturestatus($getid,$getstatus)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->home_page_model->statusfeaturemodel($getid,$getstatus);
				if($res)
				{
					
						$_SESSION['successmsg']='Feature status changed successfully';
						header('location:'.DOMAIN.'backend/home-page/feature-list/'.$_POST['txtCid']);
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/feature-list/'.$_POST['txtCid']);
						exit;
				}
		}
		public function delete($getid)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->home_page_model->deletebannermodel($getid);
				if($res)
				{
					
						$_SESSION['successmsg']='Banner deleted successfully';
						header('location:'.DOMAIN.'backend/home-page');
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page');
						exit;
				}
		}
		public function deletefeature($getid)
		{
			  $this->load->helper('auth_helper');
			  checkuserlogin();
			  $res=$this->home_page_model->deletefeaturemodel($getid);
				if($res)
				{
					
						$_SESSION['successmsg']='Feature deleted successfully';
						header('location:'.DOMAIN.'backend/home-page/feature-list');
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/feature-list');
						exit;
				}
		}
         public function content()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Content ';
				$data['title']='Content ';
				$data['bannerinfo']=$this->home_page_model->getcmsinfomodel(1);
				$data['feature']="Edit";
                $this->load->view('backend/home_content_view',$data);
		}
		public function contentedit()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$res=$this->home_page_model->cmseditmodel();
				if($res)
				{
					
						$_SESSION['successmsg']='Content updated successfully';
						header('location:'.DOMAIN.'backend/home-page/content');
						exit;
					
				}
				else
				{
					    $_SESSION['errormsg']='Seems to be some problem. Try Again';
						header('location:'.DOMAIN.'backend/home-page/content');
						exit;
				}
		}
		public function feature_list()
		{
			    $this->load->helper('auth_helper');
				checkuserlogin();
				$this->load->model('backend/login_model');
				$data['memberinfo']=$this->login_model->getuserinfoid($_SESSION['usersession']);
				$data['companyinfo']=$this->login_model->getuserinfoid('1');
			    $data['headtitle']=$data['companyinfo']['company_name'].' | Featured List';
				$data['title']='Home Page - Featured List';
				$data['bannerlist']=$this->home_page_model->getfeaturedlistmodel();
                $this->load->view('backend/featured_list_view',$data);
		}

}
?>