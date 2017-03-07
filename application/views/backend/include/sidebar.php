<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <?php
	  
	 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	 $acarr=explode("backend/",$actual_link);
	 
	 if(isset($acarr[1]))
	 {
		 $current_page=$acarr[1];
		
	 }
	 else
	 {
		  $current_page='dashboard';
	 }
	
	 
	 ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($current_page == 'dashboard') { ?>class = "active"<?php } ?>>
          <a href="<?php echo DOMAIN.'backend/dashboard'; ?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview<?php if($current_page == 'home-page/feature-list' || $current_page == 'home-page' || $current_page == 'home-page/content') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/home-page'; ?>">
            <i class="fa fa-bank"></i> <span>Home Page</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           
            <li <?php if($current_page == 'home-page') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/home-page'; ?>"><i class="fa fa-list"></i> Banner List</a></li>
            <li <?php if($current_page == 'home-page/featured-list') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/home-page/feature-list'; ?>"><i class="fa fa-list"></i> Feature List</a></li>
             <li <?php if($current_page == 'home-page/content') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/home-page/content'; ?>"><i class="fa fa-list"></i> Home Page Content</a></li>
          </ul>
          
        </li>
        <li class="treeview<?php if($current_page == 'about-us' || $current_page=='about-us/timeline') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/about-us'; ?>">
            <i class="fa fa-briefcase"></i> <span>About Us</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           
            <li <?php if($current_page == 'about-us') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/about-us'; ?>"><i class="fa fa-list"></i> Content</a></li>
            <li <?php if($current_page == 'about-us/timeline') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/about-us/timeline'; ?>"><i class="fa fa-list"></i> Timeline</a></li>
            
          </ul>
          
        </li>
        <li class="treeview<?php if($current_page == 'banner/type/1' || $current_page == 'banner/type/2' || $current_page == 'banner/type/3' || $current_page == 'banner/type/4' || $current_page == 'banner/type/5') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/banner/1'; ?>">
            <i class="fa fa-briefcase"></i> <span>Banner Management</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           
            <li <?php if($current_page == 'banner/type/1') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/banner/type/1'; ?>"><i class="fa fa-list"></i> About Us</a></li>
            <li <?php if($current_page == 'banner/type/2') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/banner/type/2'; ?>"><i class="fa fa-list"></i> Picture Gallery</a></li>
             <li <?php if($current_page == 'banner/type/3') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/banner/type/3'; ?>"><i class="fa fa-list"></i> Link & News</a></li>
              <li <?php if($current_page == 'banner/type/4') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/banner/type/4'; ?>"><i class="fa fa-list"></i> School Visit</a></li>
               <li <?php if($current_page == 'banner/type/5') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/banner/type/5'; ?>"><i class="fa fa-list"></i> Contact Us</a></li>
          </ul>
          
        </li>
        
       
         
        <li class="treeview<?php if($current_page == 'picture/add' || $current_page == 'picture' || $current_page == 'picture_gallery/add' || $current_page == 'picture_gallery') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/picture'; ?>">
            <i class="fa fa-picture-o"></i> <span>Picture</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php if($current_page == 'picture/add' || $current_page == 'picture') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/picture'; ?>"><i class="fa fa-plus"></i> Category List</a></li>
            <li <?php if($current_page == 'picture_gallery' || $current_page == 'picture_gallery/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/picture_gallery'; ?>"><i class="fa fa-plus"></i> Picture List</a></li>
            
          </ul>
        </li>
         
       <li class="treeview<?php if($current_page == 'video_gallery/add' || $current_page == 'video_gallery' || $current_page == 'video_banner/add' || $current_page == 'video_banner') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/video'; ?>">
            <i class="fa fa-video-camera"></i> <span>Video</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php if($current_page == 'video_gallery' || $current_page == 'video_gallery/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/video_gallery'; ?>"><i class="fa fa-plus"></i> Video List</a></li>
             <li <?php if($current_page == 'video_banner' || $current_page == 'video_banner/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/video_banner'; ?>"><i class="fa fa-plus"></i> Video Banner</a></li>
          </ul>
        </li>
          
        <li class="treeview<?php if($current_page == 'link-news') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/link-news'; ?>">
            <i class="fa fa-link"></i> <span>Link & News</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
           
            <li <?php if($current_page == 'link-news') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/link-news'; ?>"><i class="fa fa-list"></i> Content</a></li>
           
            
          </ul>
          
        </li>
        
        <li class="treeview<?php if($current_page == 'school_visit/add' || $current_page == 'school_visit' || $current_page == 'school_visit_blog/add' || $current_page == 'school_visit/blog') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/video'; ?>">
            <i class="fa fa-comments-o"></i> <span>School Visit</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php if($current_page == 'school_visit' || $current_page == 'school_visit/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/school_visit'; ?>"><i class="fa fa-plus"></i> Category</a></li>
             <li <?php if($current_page == 'school_visit_blog' || $current_page == 'school_visit_blog/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/school_visit_blog'; ?>"><i class="fa fa-plus"></i> School Visit Blog</a></li>
          </ul>
        </li>
        
        <li class="treeview<?php if($current_page == 'contact/add') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/video'; ?>">
            <i class="fa fa-phone"></i> <span>Contact Us</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php if($current_page == 'contact') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/contact'; ?>"><i class="fa fa-plus"></i> Content</a></li>
            
          </ul>
        </li>
        
        <li class="treeview<?php if($current_page == 'review/add' || $current_page == 'review') { ?> active"<?php }else{echo '"';} ?>>
          <a href="<?php echo DOMAIN.'backend/video'; ?>">
            <i class="fa fa-user"></i> <span>Testimonial</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php if($current_page == 'review') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/review'; ?>"><i class="fa fa-plus"></i> Testimonial List</a></li>
             <li <?php if($current_page == 'review/add') { ?>class = "active"<?php } ?>><a href="<?php echo DOMAIN.'backend/review/add'; ?>"><i class="fa fa-plus"></i> Add New</a></li>
          </ul>
        </li>
        <li <?php if($current_page == 'seo-settings') { ?>class = "active"<?php } ?>>
          <a href="<?php echo DOMAIN.'backend/seo-settings'; ?>">
            <i class="fa fa-cog"></i> <span>SEO Settings</span>
          </a>
        </li>
         <?php /*?> <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Contact Us</span></a></li><?php */?>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>