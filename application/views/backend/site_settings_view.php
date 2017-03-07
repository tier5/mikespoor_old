<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo DOMAIN; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $headtitle; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/admin/plugins/datatables/dataTables.bootstrap.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!--Specturum-->
  <link rel="stylesheet" type="text/css" href="assets/admin/spectrum/spectrum.css">
   
    <link rel="stylesheet" type="text/css" href="assets/admin/spectrum/docs.css">
   
  <!--Spectrum-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("include/header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("include/sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
       
      </h1>
      <ol class="breadcrumb" style="display:none;">
        <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Site Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-rounded" src="<?php if(!empty($userinfo['company_logo'])){echo DOMAIN.'uploads/'.$userinfo['company_logo'];} ?>" alt="Company Logo">

              <h3 class="profile-username text-center"><?php if(isset($userinfo['company_name'])){echo $userinfo['company_name'];} ?></h3>

              

              <a target="_blank" href="<?php echo DOMAIN; ?>" class="btn btn-primary btn-block"><i class="fa fa-globe"></i> <b>Visit Website</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About <?php if(isset($userinfo['company_name'])){echo $userinfo['company_name'];} ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"><?php if(isset($userinfo['company_address'])){echo $userinfo['company_address'];} ?></p>

              <hr>

              <strong><i class="fa fa-envelope margin-r-5"></i> E-mail</strong>

              <p class="text-muted"><?php if(isset($userinfo['contact_email'])){echo $userinfo['contact_email'];} ?></p>

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> Contact Number</strong>

               <p class="text-muted"><?php if(isset($userinfo['contact_no1'])){echo $userinfo['contact_no1'];} ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Social Media</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
             

              <p>
                <a target="_blank" title="Facebook Link"  <?php if(!empty($userinfo['facebook_link'])) {?>href="<?php if(isset($userinfo['facebook_link'])){echo $userinfo['facebook_link'];} ?>" <?php } ?>><img src="assets/images/facebook.png" width="50"/></a>
                <a target="_blank" title="Linkedin Link" <?php if(!empty($userinfo['linkdln_link'])) {?>href="<?php if(isset($userinfo['linkdln_link'])){echo $userinfo['linkdln_link'];} ?>" <?php } ?>><img src="assets/images/linkedin.png"  width="50"/></a>
                <a target="_blank" title="Google Plus Link" <?php if(!empty($userinfo['google_link'])) {?>href="<?php if(isset($userinfo['google_link'])){echo $userinfo['google_link'];} ?>" <?php } ?>><img src="assets/images/google.png"  width="50"/></a>
                <a target="_blank" title="Twitter Link" <?php if(!empty($userinfo['twitter_link'])) {?>href="<?php if(isset($userinfo['twitter_link'])){echo $userinfo['twitter_link'];} ?>" <?php } ?>><img src="assets/images/twitter.png"  width="50"/></a>
                <a target="_blank" title="Youtube Link" <?php if(!empty($userinfo['youtube_link'])) {?>href="<?php if(isset($userinfo['youtube_link'])){echo $userinfo['youtube_link'];} ?>" <?php } ?>><img src="assets/images/youtube.png"  width="50"/></a>
              
              </p>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-8">
          <!-- general form elements -->
            <form action="<?php echo DOMAIN.'backend/site-settings/editsite'; ?>" method="post" enctype="multipart/form-data" >
          <div class="box box-primary">
           <div class="box-header">
              <h3 class="box-title"><i class="fa fa-cog"></i> Site Settings</h3>
              <div class="pull-right">
                    <button type="submit" class="btn btn-primary" value="list" name="btnSave" onClick="return formvalidation();">Save</button>
                  </div>
            </div>
               <?php
	if(isset($_SESSION['successmsg']))
	{
	?>
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?php echo $_SESSION['successmsg']; ?>
    </div>
    <?php
	unset($_SESSION['successmsg']);
	}
	else if(isset($_SESSION['errormsg']))
	{
	?>
    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> <?php echo $_SESSION['errormsg']; ?>
    </div>
    <?php
	unset($_SESSION['errormsg']);
	}
	?>
            
            <!-- /.box-header -->
            <!-- form start -->
           
            
            <!-- /.box-header -->
           
          
            <input type="hidden" name="txtCid" value="<?php if(isset($userinfo['company_id'])){echo $userinfo['company_id'];} ?>"/>
            <input type="hidden" name="hid_gallery_pdf1" id="hid_gallery_pdf1" value="<?php if(isset($userinfo['company_logo'])){echo $userinfo['company_logo'];} ?>" />
              <div class="box-body">
                <div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs ui-sortable-handle">
             <li class="active"><a href="#info" data-toggle="tab">Company Information</a></li>
              <li><a href="#contact" data-toggle="tab">Contact Details</a></li>
              <li><a href="#display" data-toggle="tab">Display Settings</a></li>
             <li><a href="#email" data-toggle="tab">Email Settings</a></li>
             
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="info"><br/>
              <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" name="txtCname" id="txtCname" placeholder="Enter Company Name" value="<?php if(isset($userinfo['company_name'])){echo $userinfo['company_name'];} ?>" required>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Company Logo</label>
                  <input type="file" id="prfbtn" name="imgBanner"><br/>
                  <img src="<?php if(!empty($userinfo['company_logo'])){echo DOMAIN.'uploads/'.$userinfo['company_logo'];} ?>" id="profile" width="200" height="80"/>
                  <p class="help-block" style="font-size:12px;"><i>Image should be of size 170 X 53 px.</i></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Video Banner Link</label>
                  <input type="text" class="form-control" name="txtVlink" placeholder="Enter Video Banner Link" value="<?php if(isset($userinfo['video_banner'])){echo $userinfo['video_banner'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Video Content Status</label><br/>
                   <input type="radio" name="txtVType" value="1" <?php if($userinfo['video_status']=='1')echo"checked"; ?>> Active   <input type="radio" name="txtVType" value="0" <?php if($userinfo['video_status']=='0')echo"checked"; ?>> Deactive 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" name="txtFlink" placeholder="Enter Facebook Link" value="<?php if(isset($userinfo['facebook_link'])){echo $userinfo['facebook_link'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Google Plus Link</label>
                  <input type="text" class="form-control" name="txtGlink" placeholder="Enter Google Plus Link" value="<?php if(isset($userinfo['google_link'])){echo $userinfo['google_link'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin Link</label>
                  <input type="text" class="form-control" name="txtLlink" placeholder="Enter Linkedin Link" value="<?php if(isset($userinfo['linkdln_link'])){echo $userinfo['linkdln_link'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter Link</label>
                  <input type="text" class="form-control" name="txtTlink" placeholder="Enter Twitter Link" value="<?php if(isset($userinfo['twitter_link'])){echo $userinfo['twitter_link'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Youtube Link</label>
                  <input type="text" class="form-control" name="txtYlink" placeholder="Enter Youtube Link" value="<?php if(isset($userinfo['youtube_link'])){echo $userinfo['youtube_link'];} ?>">
                </div>
              </div>
              <div class="chart tab-pane" id="contact"><br/>
               <div class="form-group">
                  <label for="exampleInputEmail1">Company Address</label>
                  <input type="text" class="form-control" name="txtaddress"  id="txtaddress" placeholder="Enter Company Address" value="<?php if(isset($userinfo['company_address'])){echo $userinfo['company_address'];} ?>" required>
                   <p class="help-block" style="font-size:12px;"><i>Address separated by comma separator. Ex- abc, xyz, lmn</i></p>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Contact Email</label>
                  <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Enter Contact Email" value="<?php if(isset($userinfo['contact_email'])){echo $userinfo['contact_email'];} ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Primary Contact No</label>
                  <input type="text" class="form-control" name="txtphone1" id="txtphone1" placeholder="Enter Primary Contact No" value="<?php if(isset($userinfo['contact_no1'])){echo $userinfo['contact_no1'];} ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Secondary Contact No</label>
                  <input type="text" class="form-control" name="txtphone2" placeholder="Enter Secondary Contact No" value="<?php if(isset($userinfo['contact_no2'])){echo $userinfo['contact_no2'];} ?>">
                </div>
			  </div>
              <div class="chart tab-pane" id="display"><br/>
               <div class="form-group">
                  <label for="exampleInputFile">Select Timezone</label>
                  <select class="form-control" name="selTimezone">
                  <?php if(isset($userinfo['time_zone']) && !empty($userinfo['time_zone'])){
					  ?>
                      <option value="<?php echo $userinfo['time_zone']; ?>">
				<?php echo $userinfo['time_zone']; ?>		</option>
                      <?php
					  } ?>
					<option value="Africa/Abidjan">
				UTC/GMT +00:00 - Africa/Abidjan			</option>
					<option value="Africa/Accra">
				UTC/GMT +00:00 - Africa/Accra			</option>
					<option value="Africa/Addis_Ababa">
				UTC/GMT +03:00 - Africa/Addis_Ababa			</option>
					<option value="Africa/Algiers">
				UTC/GMT +01:00 - Africa/Algiers			</option>
					<option value="Africa/Asmara">
				UTC/GMT +03:00 - Africa/Asmara			</option>
					<option value="Africa/Bamako">
				UTC/GMT +00:00 - Africa/Bamako			</option>
					<option value="Africa/Bangui">
				UTC/GMT +01:00 - Africa/Bangui			</option>
					<option value="Africa/Banjul">
				UTC/GMT +00:00 - Africa/Banjul			</option>
					<option value="Africa/Bissau">
				UTC/GMT +00:00 - Africa/Bissau			</option>
					<option value="Africa/Blantyre">
				UTC/GMT +02:00 - Africa/Blantyre			</option>
					<option value="Africa/Brazzaville">
				UTC/GMT +01:00 - Africa/Brazzaville			</option>
					<option value="Africa/Bujumbura">
				UTC/GMT +02:00 - Africa/Bujumbura			</option>
					<option value="Africa/Cairo">
				UTC/GMT +03:00 - Africa/Cairo			</option>
					<option value="Africa/Casablanca">
				UTC/GMT +01:00 - Africa/Casablanca			</option>
					<option value="Africa/Ceuta">
				UTC/GMT +02:00 - Africa/Ceuta			</option>
					<option value="Africa/Conakry">
				UTC/GMT +00:00 - Africa/Conakry			</option>
					<option value="Africa/Dakar">
				UTC/GMT +00:00 - Africa/Dakar			</option>
					<option value="Africa/Dar_es_Salaam">
				UTC/GMT +03:00 - Africa/Dar_es_Salaam			</option>
					<option value="Africa/Djibouti">
				UTC/GMT +03:00 - Africa/Djibouti			</option>
					<option value="Africa/Douala">
				UTC/GMT +01:00 - Africa/Douala			</option>
					<option value="Africa/El_Aaiun">
				UTC/GMT +01:00 - Africa/El_Aaiun			</option>
					<option value="Africa/Freetown">
				UTC/GMT +00:00 - Africa/Freetown			</option>
					<option value="Africa/Gaborone">
				UTC/GMT +02:00 - Africa/Gaborone			</option>
					<option value="Africa/Harare">
				UTC/GMT +02:00 - Africa/Harare			</option>
					<option value="Africa/Johannesburg">
				UTC/GMT +02:00 - Africa/Johannesburg			</option>
					<option value="Africa/Juba">
				UTC/GMT +03:00 - Africa/Juba			</option>
					<option value="Africa/Kampala">
				UTC/GMT +03:00 - Africa/Kampala			</option>
					<option value="Africa/Khartoum">
				UTC/GMT +03:00 - Africa/Khartoum			</option>
					<option value="Africa/Kigali">
				UTC/GMT +02:00 - Africa/Kigali			</option>
					<option value="Africa/Kinshasa">
				UTC/GMT +01:00 - Africa/Kinshasa			</option>
					<option value="Africa/Lagos">
				UTC/GMT +01:00 - Africa/Lagos			</option>
					<option value="Africa/Libreville">
				UTC/GMT +01:00 - Africa/Libreville			</option>
					<option value="Africa/Lome">
				UTC/GMT +00:00 - Africa/Lome			</option>
					<option value="Africa/Luanda">
				UTC/GMT +01:00 - Africa/Luanda			</option>
					<option value="Africa/Lubumbashi">
				UTC/GMT +02:00 - Africa/Lubumbashi			</option>
					<option value="Africa/Lusaka">
				UTC/GMT +02:00 - Africa/Lusaka			</option>
					<option value="Africa/Malabo">
				UTC/GMT +01:00 - Africa/Malabo			</option>
					<option value="Africa/Maputo">
				UTC/GMT +02:00 - Africa/Maputo			</option>
					<option value="Africa/Maseru">
				UTC/GMT +02:00 - Africa/Maseru			</option>
					<option value="Africa/Mbabane">
				UTC/GMT +02:00 - Africa/Mbabane			</option>
					<option value="Africa/Mogadishu">
				UTC/GMT +03:00 - Africa/Mogadishu			</option>
					<option value="Africa/Monrovia">
				UTC/GMT +00:00 - Africa/Monrovia			</option>
					<option value="Africa/Nairobi">
				UTC/GMT +03:00 - Africa/Nairobi			</option>
					<option value="Africa/Ndjamena">
				UTC/GMT +01:00 - Africa/Ndjamena			</option>
					<option value="Africa/Niamey">
				UTC/GMT +01:00 - Africa/Niamey			</option>
					<option value="Africa/Nouakchott">
				UTC/GMT +00:00 - Africa/Nouakchott			</option>
					<option value="Africa/Ouagadougou">
				UTC/GMT +00:00 - Africa/Ouagadougou			</option>
					<option value="Africa/Porto-Novo">
				UTC/GMT +01:00 - Africa/Porto-Novo			</option>
					<option value="Africa/Sao_Tome">
				UTC/GMT +00:00 - Africa/Sao_Tome			</option>
					<option value="Africa/Tripoli">
				UTC/GMT +02:00 - Africa/Tripoli			</option>
					<option value="Africa/Tunis">
				UTC/GMT +01:00 - Africa/Tunis			</option>
					<option value="Africa/Windhoek">
				UTC/GMT +01:00 - Africa/Windhoek			</option>
					<option value="America/Adak">
				UTC/GMT -09:00 - America/Adak			</option>
					<option value="America/Anchorage">
				UTC/GMT -08:00 - America/Anchorage			</option>
					<option value="America/Anguilla">
				UTC/GMT -04:00 - America/Anguilla			</option>
					<option value="America/Antigua">
				UTC/GMT -04:00 - America/Antigua			</option>
					<option value="America/Araguaina">
				UTC/GMT -03:00 - America/Araguaina			</option>
					<option value="America/Argentina/Buenos_Aires">
				UTC/GMT -03:00 - America/Argentina/Buenos_Aires			</option>
					<option value="America/Argentina/Catamarca">
				UTC/GMT -03:00 - America/Argentina/Catamarca			</option>
					<option value="America/Argentina/Cordoba">
				UTC/GMT -03:00 - America/Argentina/Cordoba			</option>
					<option value="America/Argentina/Jujuy">
				UTC/GMT -03:00 - America/Argentina/Jujuy			</option>
					<option value="America/Argentina/La_Rioja">
				UTC/GMT -03:00 - America/Argentina/La_Rioja			</option>
					<option value="America/Argentina/Mendoza">
				UTC/GMT -03:00 - America/Argentina/Mendoza			</option>
					<option value="America/Argentina/Rio_Gallegos">
				UTC/GMT -03:00 - America/Argentina/Rio_Gallegos			</option>
					<option value="America/Argentina/Salta">
				UTC/GMT -03:00 - America/Argentina/Salta			</option>
					<option value="America/Argentina/San_Juan">
				UTC/GMT -03:00 - America/Argentina/San_Juan			</option>
					<option value="America/Argentina/San_Luis">
				UTC/GMT -03:00 - America/Argentina/San_Luis			</option>
					<option value="America/Argentina/Tucuman">
				UTC/GMT -03:00 - America/Argentina/Tucuman			</option>
					<option value="America/Argentina/Ushuaia">
				UTC/GMT -03:00 - America/Argentina/Ushuaia			</option>
					<option value="America/Aruba">
				UTC/GMT -04:00 - America/Aruba			</option>
					<option value="America/Asuncion">
				UTC/GMT -04:00 - America/Asuncion			</option>
					<option value="America/Atikokan">
				UTC/GMT -05:00 - America/Atikokan			</option>
					<option value="America/Bahia">
				UTC/GMT -03:00 - America/Bahia			</option>
					<option value="America/Bahia_Banderas">
				UTC/GMT -05:00 - America/Bahia_Banderas			</option>
					<option value="America/Barbados">
				UTC/GMT -04:00 - America/Barbados			</option>
					<option value="America/Belem">
				UTC/GMT -03:00 - America/Belem			</option>
					<option value="America/Belize">
				UTC/GMT -06:00 - America/Belize			</option>
					<option value="America/Blanc-Sablon">
				UTC/GMT -04:00 - America/Blanc-Sablon			</option>
					<option value="America/Boa_Vista">
				UTC/GMT -04:00 - America/Boa_Vista			</option>
					<option value="America/Bogota">
				UTC/GMT -05:00 - America/Bogota			</option>
					<option value="America/Boise">
				UTC/GMT -06:00 - America/Boise			</option>
					<option value="America/Cambridge_Bay">
				UTC/GMT -06:00 - America/Cambridge_Bay			</option>
					<option value="America/Campo_Grande">
				UTC/GMT -04:00 - America/Campo_Grande			</option>
					<option value="America/Cancun">
				UTC/GMT -05:00 - America/Cancun			</option>
					<option value="America/Caracas">
				UTC/GMT -04:00 - America/Caracas			</option>
					<option value="America/Cayenne">
				UTC/GMT -03:00 - America/Cayenne			</option>
					<option value="America/Cayman">
				UTC/GMT -05:00 - America/Cayman			</option>
					<option value="America/Chicago">
				UTC/GMT -05:00 - America/Chicago			</option>
					<option value="America/Chihuahua">
				UTC/GMT -06:00 - America/Chihuahua			</option>
					<option value="America/Costa_Rica">
				UTC/GMT -06:00 - America/Costa_Rica			</option>
					<option value="America/Creston">
				UTC/GMT -07:00 - America/Creston			</option>
					<option value="America/Cuiaba">
				UTC/GMT -04:00 - America/Cuiaba			</option>
					<option value="America/Curacao">
				UTC/GMT -04:00 - America/Curacao			</option>
					<option value="America/Danmarkshavn">
				UTC/GMT +00:00 - America/Danmarkshavn			</option>
					<option value="America/Dawson">
				UTC/GMT -07:00 - America/Dawson			</option>
					<option value="America/Dawson_Creek">
				UTC/GMT -07:00 - America/Dawson_Creek			</option>
					<option value="America/Denver">
				UTC/GMT -06:00 - America/Denver			</option>
					<option value="America/Detroit">
				UTC/GMT -04:00 - America/Detroit			</option>
					<option value="America/Dominica">
				UTC/GMT -04:00 - America/Dominica			</option>
					<option value="America/Edmonton">
				UTC/GMT -06:00 - America/Edmonton			</option>
					<option value="America/Eirunepe">
				UTC/GMT -05:00 - America/Eirunepe			</option>
					<option value="America/El_Salvador">
				UTC/GMT -06:00 - America/El_Salvador			</option>
					<option value="America/Fort_Nelson">
				UTC/GMT -07:00 - America/Fort_Nelson			</option>
					<option value="America/Fortaleza">
				UTC/GMT -03:00 - America/Fortaleza			</option>
					<option value="America/Glace_Bay">
				UTC/GMT -03:00 - America/Glace_Bay			</option>
					<option value="America/Godthab">
				UTC/GMT -02:00 - America/Godthab			</option>
					<option value="America/Goose_Bay">
				UTC/GMT -03:00 - America/Goose_Bay			</option>
					<option value="America/Grand_Turk">
				UTC/GMT -04:00 - America/Grand_Turk			</option>
					<option value="America/Grenada">
				UTC/GMT -04:00 - America/Grenada			</option>
					<option value="America/Guadeloupe">
				UTC/GMT -04:00 - America/Guadeloupe			</option>
					<option value="America/Guatemala">
				UTC/GMT -06:00 - America/Guatemala			</option>
					<option value="America/Guayaquil">
				UTC/GMT -05:00 - America/Guayaquil			</option>
					<option value="America/Guyana">
				UTC/GMT -04:00 - America/Guyana			</option>
					<option value="America/Halifax">
				UTC/GMT -03:00 - America/Halifax			</option>
					<option value="America/Havana">
				UTC/GMT -04:00 - America/Havana			</option>
					<option value="America/Hermosillo">
				UTC/GMT -07:00 - America/Hermosillo			</option>
					<option value="America/Indiana/Indianapolis">
				UTC/GMT -04:00 - America/Indiana/Indianapolis			</option>
					<option value="America/Indiana/Knox">
				UTC/GMT -05:00 - America/Indiana/Knox			</option>
					<option value="America/Indiana/Marengo">
				UTC/GMT -04:00 - America/Indiana/Marengo			</option>
					<option value="America/Indiana/Petersburg">
				UTC/GMT -04:00 - America/Indiana/Petersburg			</option>
					<option value="America/Indiana/Tell_City">
				UTC/GMT -05:00 - America/Indiana/Tell_City			</option>
					<option value="America/Indiana/Vevay">
				UTC/GMT -04:00 - America/Indiana/Vevay			</option>
					<option value="America/Indiana/Vincennes">
				UTC/GMT -04:00 - America/Indiana/Vincennes			</option>
					<option value="America/Indiana/Winamac">
				UTC/GMT -04:00 - America/Indiana/Winamac			</option>
					<option value="America/Inuvik">
				UTC/GMT -06:00 - America/Inuvik			</option>
					<option value="America/Iqaluit">
				UTC/GMT -04:00 - America/Iqaluit			</option>
					<option value="America/Jamaica">
				UTC/GMT -05:00 - America/Jamaica			</option>
					<option value="America/Juneau">
				UTC/GMT -08:00 - America/Juneau			</option>
					<option value="America/Kentucky/Louisville">
				UTC/GMT -04:00 - America/Kentucky/Louisville			</option>
					<option value="America/Kentucky/Monticello">
				UTC/GMT -04:00 - America/Kentucky/Monticello			</option>
					<option value="America/Kralendijk">
				UTC/GMT -04:00 - America/Kralendijk			</option>
					<option value="America/La_Paz">
				UTC/GMT -04:00 - America/La_Paz			</option>
					<option value="America/Lima">
				UTC/GMT -05:00 - America/Lima			</option>
					<option value="America/Los_Angeles">
				UTC/GMT -07:00 - America/Los_Angeles			</option>
					<option value="America/Lower_Princes">
				UTC/GMT -04:00 - America/Lower_Princes			</option>
					<option value="America/Maceio">
				UTC/GMT -03:00 - America/Maceio			</option>
					<option value="America/Managua">
				UTC/GMT -06:00 - America/Managua			</option>
					<option value="America/Manaus">
				UTC/GMT -04:00 - America/Manaus			</option>
					<option value="America/Marigot">
				UTC/GMT -04:00 - America/Marigot			</option>
					<option value="America/Martinique">
				UTC/GMT -04:00 - America/Martinique			</option>
					<option value="America/Matamoros">
				UTC/GMT -05:00 - America/Matamoros			</option>
					<option value="America/Mazatlan">
				UTC/GMT -06:00 - America/Mazatlan			</option>
					<option value="America/Menominee">
				UTC/GMT -05:00 - America/Menominee			</option>
					<option value="America/Merida">
				UTC/GMT -05:00 - America/Merida			</option>
					<option value="America/Metlakatla">
				UTC/GMT -08:00 - America/Metlakatla			</option>
					<option value="America/Mexico_City">
				UTC/GMT -05:00 - America/Mexico_City			</option>
					<option value="America/Miquelon">
				UTC/GMT -02:00 - America/Miquelon			</option>
					<option value="America/Moncton">
				UTC/GMT -03:00 - America/Moncton			</option>
					<option value="America/Monterrey">
				UTC/GMT -05:00 - America/Monterrey			</option>
					<option value="America/Montevideo">
				UTC/GMT -03:00 - America/Montevideo			</option>
					<option value="America/Montserrat">
				UTC/GMT -04:00 - America/Montserrat			</option>
					<option value="America/Nassau">
				UTC/GMT -04:00 - America/Nassau			</option>
					<option value="America/New_York">
				UTC/GMT -04:00 - America/New_York			</option>
					<option value="America/Nipigon">
				UTC/GMT -04:00 - America/Nipigon			</option>
					<option value="America/Nome">
				UTC/GMT -08:00 - America/Nome			</option>
					<option value="America/Noronha">
				UTC/GMT -02:00 - America/Noronha			</option>
					<option value="America/North_Dakota/Beulah">
				UTC/GMT -05:00 - America/North_Dakota/Beulah			</option>
					<option value="America/North_Dakota/Center">
				UTC/GMT -05:00 - America/North_Dakota/Center			</option>
					<option value="America/North_Dakota/New_Salem">
				UTC/GMT -05:00 - America/North_Dakota/New_Salem			</option>
					<option value="America/Ojinaga">
				UTC/GMT -06:00 - America/Ojinaga			</option>
					<option value="America/Panama">
				UTC/GMT -05:00 - America/Panama			</option>
					<option value="America/Pangnirtung">
				UTC/GMT -04:00 - America/Pangnirtung			</option>
					<option value="America/Paramaribo">
				UTC/GMT -03:00 - America/Paramaribo			</option>
					<option value="America/Phoenix">
				UTC/GMT -07:00 - America/Phoenix			</option>
					<option value="America/Port-au-Prince">
				UTC/GMT -05:00 - America/Port-au-Prince			</option>
					<option value="America/Port_of_Spain">
				UTC/GMT -04:00 - America/Port_of_Spain			</option>
					<option value="America/Porto_Velho">
				UTC/GMT -04:00 - America/Porto_Velho			</option>
					<option value="America/Puerto_Rico">
				UTC/GMT -04:00 - America/Puerto_Rico			</option>
					<option value="America/Rainy_River">
				UTC/GMT -05:00 - America/Rainy_River			</option>
					<option value="America/Rankin_Inlet">
				UTC/GMT -05:00 - America/Rankin_Inlet			</option>
					<option value="America/Recife">
				UTC/GMT -03:00 - America/Recife			</option>
					<option value="America/Regina">
				UTC/GMT -06:00 - America/Regina			</option>
					<option value="America/Resolute">
				UTC/GMT -05:00 - America/Resolute			</option>
					<option value="America/Rio_Branco">
				UTC/GMT -05:00 - America/Rio_Branco			</option>
					<option value="America/Santarem">
				UTC/GMT -03:00 - America/Santarem			</option>
					<option value="America/Santiago">
				UTC/GMT -04:00 - America/Santiago			</option>
					<option value="America/Santo_Domingo">
				UTC/GMT -04:00 - America/Santo_Domingo			</option>
					<option value="America/Sao_Paulo">
				UTC/GMT -03:00 - America/Sao_Paulo			</option>
					<option value="America/Scoresbysund">
				UTC/GMT +00:00 - America/Scoresbysund			</option>
					<option value="America/Sitka">
				UTC/GMT -08:00 - America/Sitka			</option>
					<option value="America/St_Barthelemy">
				UTC/GMT -04:00 - America/St_Barthelemy			</option>
					<option value="America/St_Johns">
				UTC/GMT -02:30 - America/St_Johns			</option>
					<option value="America/St_Kitts">
				UTC/GMT -04:00 - America/St_Kitts			</option>
					<option value="America/St_Lucia">
				UTC/GMT -04:00 - America/St_Lucia			</option>
					<option value="America/St_Thomas">
				UTC/GMT -04:00 - America/St_Thomas			</option>
					<option value="America/St_Vincent">
				UTC/GMT -04:00 - America/St_Vincent			</option>
					<option value="America/Swift_Current">
				UTC/GMT -06:00 - America/Swift_Current			</option>
					<option value="America/Tegucigalpa">
				UTC/GMT -06:00 - America/Tegucigalpa			</option>
					<option value="America/Thule">
				UTC/GMT -03:00 - America/Thule			</option>
					<option value="America/Thunder_Bay">
				UTC/GMT -04:00 - America/Thunder_Bay			</option>
					<option value="America/Tijuana">
				UTC/GMT -07:00 - America/Tijuana			</option>
					<option value="America/Toronto">
				UTC/GMT -04:00 - America/Toronto			</option>
					<option value="America/Tortola">
				UTC/GMT -04:00 - America/Tortola			</option>
					<option value="America/Vancouver">
				UTC/GMT -07:00 - America/Vancouver			</option>
					<option value="America/Whitehorse">
				UTC/GMT -07:00 - America/Whitehorse			</option>
					<option value="America/Winnipeg">
				UTC/GMT -05:00 - America/Winnipeg			</option>
					<option value="America/Yakutat">
				UTC/GMT -08:00 - America/Yakutat			</option>
					<option value="America/Yellowknife">
				UTC/GMT -06:00 - America/Yellowknife			</option>
					<option value="Antarctica/Casey">
				UTC/GMT +08:00 - Antarctica/Casey			</option>
					<option value="Antarctica/Davis">
				UTC/GMT +07:00 - Antarctica/Davis			</option>
					<option value="Antarctica/DumontDUrville">
				UTC/GMT +10:00 - Antarctica/DumontDUrville			</option>
					<option value="Antarctica/Macquarie">
				UTC/GMT +11:00 - Antarctica/Macquarie			</option>
					<option value="Antarctica/Mawson">
				UTC/GMT +05:00 - Antarctica/Mawson			</option>
					<option value="Antarctica/McMurdo">
				UTC/GMT +12:00 - Antarctica/McMurdo			</option>
					<option value="Antarctica/Palmer">
				UTC/GMT -04:00 - Antarctica/Palmer			</option>
					<option value="Antarctica/Rothera">
				UTC/GMT -03:00 - Antarctica/Rothera			</option>
					<option value="Antarctica/Syowa">
				UTC/GMT +03:00 - Antarctica/Syowa			</option>
					<option value="Antarctica/Troll">
				UTC/GMT +02:00 - Antarctica/Troll			</option>
					<option value="Antarctica/Vostok">
				UTC/GMT +06:00 - Antarctica/Vostok			</option>
					<option value="Arctic/Longyearbyen">
				UTC/GMT +02:00 - Arctic/Longyearbyen			</option>
					<option value="Asia/Aden">
				UTC/GMT +03:00 - Asia/Aden			</option>
					<option value="Asia/Almaty">
				UTC/GMT +06:00 - Asia/Almaty			</option>
					<option value="Asia/Amman">
				UTC/GMT +03:00 - Asia/Amman			</option>
					<option value="Asia/Anadyr">
				UTC/GMT +12:00 - Asia/Anadyr			</option>
					<option value="Asia/Aqtau">
				UTC/GMT +05:00 - Asia/Aqtau			</option>
					<option value="Asia/Aqtobe">
				UTC/GMT +05:00 - Asia/Aqtobe			</option>
					<option value="Asia/Ashgabat">
				UTC/GMT +05:00 - Asia/Ashgabat			</option>
					<option value="Asia/Baghdad">
				UTC/GMT +03:00 - Asia/Baghdad			</option>
					<option value="Asia/Bahrain">
				UTC/GMT +03:00 - Asia/Bahrain			</option>
					<option value="Asia/Baku">
				UTC/GMT +04:00 - Asia/Baku			</option>
					<option value="Asia/Bangkok">
				UTC/GMT +07:00 - Asia/Bangkok			</option>
					<option value="Asia/Barnaul">
				UTC/GMT +07:00 - Asia/Barnaul			</option>
					<option value="Asia/Beirut">
				UTC/GMT +03:00 - Asia/Beirut			</option>
					<option value="Asia/Bishkek">
				UTC/GMT +06:00 - Asia/Bishkek			</option>
					<option value="Asia/Brunei">
				UTC/GMT +08:00 - Asia/Brunei			</option>
					<option value="Asia/Chita">
				UTC/GMT +09:00 - Asia/Chita			</option>
					<option value="Asia/Choibalsan">
				UTC/GMT +09:00 - Asia/Choibalsan			</option>
					<option value="Asia/Colombo">
				UTC/GMT +05:30 - Asia/Colombo			</option>
					<option value="Asia/Damascus">
				UTC/GMT +03:00 - Asia/Damascus			</option>
					<option value="Asia/Dhaka">
				UTC/GMT +06:00 - Asia/Dhaka			</option>
					<option value="Asia/Dili">
				UTC/GMT +09:00 - Asia/Dili			</option>
					<option value="Asia/Dubai">
				UTC/GMT +04:00 - Asia/Dubai			</option>
					<option value="Asia/Dushanbe">
				UTC/GMT +05:00 - Asia/Dushanbe			</option>
					<option value="Asia/Gaza">
				UTC/GMT +03:00 - Asia/Gaza			</option>
					<option value="Asia/Hebron">
				UTC/GMT +03:00 - Asia/Hebron			</option>
					<option value="Asia/Ho_Chi_Minh">
				UTC/GMT +07:00 - Asia/Ho_Chi_Minh			</option>
					<option value="Asia/Hong_Kong">
				UTC/GMT +08:00 - Asia/Hong_Kong			</option>
					<option value="Asia/Hovd">
				UTC/GMT +08:00 - Asia/Hovd			</option>
					<option value="Asia/Irkutsk">
				UTC/GMT +08:00 - Asia/Irkutsk			</option>
					<option value="Asia/Jakarta">
				UTC/GMT +07:00 - Asia/Jakarta			</option>
					<option value="Asia/Jayapura">
				UTC/GMT +09:00 - Asia/Jayapura			</option>
					<option value="Asia/Jerusalem">
				UTC/GMT +03:00 - Asia/Jerusalem			</option>
					<option value="Asia/Kabul">
				UTC/GMT +04:30 - Asia/Kabul			</option>
					<option value="Asia/Kamchatka">
				UTC/GMT +12:00 - Asia/Kamchatka			</option>
					<option value="Asia/Karachi">
				UTC/GMT +05:00 - Asia/Karachi			</option>
					<option value="Asia/Kathmandu">
				UTC/GMT +05:45 - Asia/Kathmandu			</option>
					<option value="Asia/Khandyga">
				UTC/GMT +09:00 - Asia/Khandyga			</option>
					<option value="Asia/Kolkata">
				UTC/GMT +05:30 - Asia/Kolkata			</option>
					<option value="Asia/Krasnoyarsk">
				UTC/GMT +07:00 - Asia/Krasnoyarsk			</option>
					<option value="Asia/Kuala_Lumpur">
				UTC/GMT +08:00 - Asia/Kuala_Lumpur			</option>
					<option value="Asia/Kuching">
				UTC/GMT +08:00 - Asia/Kuching			</option>
					<option value="Asia/Kuwait">
				UTC/GMT +03:00 - Asia/Kuwait			</option>
					<option value="Asia/Macau">
				UTC/GMT +08:00 - Asia/Macau			</option>
					<option value="Asia/Magadan">
				UTC/GMT +11:00 - Asia/Magadan			</option>
					<option value="Asia/Makassar">
				UTC/GMT +08:00 - Asia/Makassar			</option>
					<option value="Asia/Manila">
				UTC/GMT +08:00 - Asia/Manila			</option>
					<option value="Asia/Muscat">
				UTC/GMT +04:00 - Asia/Muscat			</option>
					<option value="Asia/Nicosia">
				UTC/GMT +03:00 - Asia/Nicosia			</option>
					<option value="Asia/Novokuznetsk">
				UTC/GMT +07:00 - Asia/Novokuznetsk			</option>
					<option value="Asia/Novosibirsk">
				UTC/GMT +06:00 - Asia/Novosibirsk			</option>
					<option value="Asia/Omsk">
				UTC/GMT +06:00 - Asia/Omsk			</option>
					<option value="Asia/Oral">
				UTC/GMT +05:00 - Asia/Oral			</option>
					<option value="Asia/Phnom_Penh">
				UTC/GMT +07:00 - Asia/Phnom_Penh			</option>
					<option value="Asia/Pontianak">
				UTC/GMT +07:00 - Asia/Pontianak			</option>
					<option value="Asia/Pyongyang">
				UTC/GMT +08:30 - Asia/Pyongyang			</option>
					<option value="Asia/Qatar">
				UTC/GMT +03:00 - Asia/Qatar			</option>
					<option value="Asia/Qyzylorda">
				UTC/GMT +06:00 - Asia/Qyzylorda			</option>
					<option value="Asia/Rangoon">
				UTC/GMT +06:30 - Asia/Rangoon			</option>
					<option value="Asia/Riyadh">
				UTC/GMT +03:00 - Asia/Riyadh			</option>
					<option value="Asia/Sakhalin">
				UTC/GMT +11:00 - Asia/Sakhalin			</option>
					<option value="Asia/Samarkand">
				UTC/GMT +05:00 - Asia/Samarkand			</option>
					<option value="Asia/Seoul">
				UTC/GMT +09:00 - Asia/Seoul			</option>
					<option value="Asia/Shanghai">
				UTC/GMT +08:00 - Asia/Shanghai			</option>
					<option value="Asia/Singapore">
				UTC/GMT +08:00 - Asia/Singapore			</option>
					<option value="Asia/Srednekolymsk">
				UTC/GMT +11:00 - Asia/Srednekolymsk			</option>
					<option value="Asia/Taipei">
				UTC/GMT +08:00 - Asia/Taipei			</option>
					<option value="Asia/Tashkent">
				UTC/GMT +05:00 - Asia/Tashkent			</option>
					<option value="Asia/Tbilisi">
				UTC/GMT +04:00 - Asia/Tbilisi			</option>
					<option value="Asia/Tehran">
				UTC/GMT +04:30 - Asia/Tehran			</option>
					<option value="Asia/Thimphu">
				UTC/GMT +06:00 - Asia/Thimphu			</option>
					<option value="Asia/Tokyo">
				UTC/GMT +09:00 - Asia/Tokyo			</option>
					<option value="Asia/Tomsk">
				UTC/GMT +07:00 - Asia/Tomsk			</option>
					<option value="Asia/Ulaanbaatar">
				UTC/GMT +09:00 - Asia/Ulaanbaatar			</option>
					<option value="Asia/Urumqi">
				UTC/GMT +06:00 - Asia/Urumqi			</option>
					<option value="Asia/Ust-Nera">
				UTC/GMT +10:00 - Asia/Ust-Nera			</option>
					<option value="Asia/Vientiane">
				UTC/GMT +07:00 - Asia/Vientiane			</option>
					<option value="Asia/Vladivostok">
				UTC/GMT +10:00 - Asia/Vladivostok			</option>
					<option value="Asia/Yakutsk">
				UTC/GMT +09:00 - Asia/Yakutsk			</option>
					<option value="Asia/Yekaterinburg">
				UTC/GMT +05:00 - Asia/Yekaterinburg			</option>
					<option value="Asia/Yerevan">
				UTC/GMT +04:00 - Asia/Yerevan			</option>
					<option value="Atlantic/Azores">
				UTC/GMT +00:00 - Atlantic/Azores			</option>
					<option value="Atlantic/Bermuda">
				UTC/GMT -03:00 - Atlantic/Bermuda			</option>
					<option value="Atlantic/Canary">
				UTC/GMT +01:00 - Atlantic/Canary			</option>
					<option value="Atlantic/Cape_Verde">
				UTC/GMT -01:00 - Atlantic/Cape_Verde			</option>
					<option value="Atlantic/Faroe">
				UTC/GMT +01:00 - Atlantic/Faroe			</option>
					<option value="Atlantic/Madeira">
				UTC/GMT +01:00 - Atlantic/Madeira			</option>
					<option value="Atlantic/Reykjavik">
				UTC/GMT +00:00 - Atlantic/Reykjavik			</option>
					<option value="Atlantic/South_Georgia">
				UTC/GMT -02:00 - Atlantic/South_Georgia			</option>
					<option value="Atlantic/St_Helena">
				UTC/GMT +00:00 - Atlantic/St_Helena			</option>
					<option value="Atlantic/Stanley">
				UTC/GMT -03:00 - Atlantic/Stanley			</option>
					<option value="Australia/Adelaide">
				UTC/GMT +09:30 - Australia/Adelaide			</option>
					<option value="Australia/Brisbane">
				UTC/GMT +10:00 - Australia/Brisbane			</option>
					<option value="Australia/Broken_Hill">
				UTC/GMT +09:30 - Australia/Broken_Hill			</option>
					<option value="Australia/Currie">
				UTC/GMT +10:00 - Australia/Currie			</option>
					<option value="Australia/Darwin">
				UTC/GMT +09:30 - Australia/Darwin			</option>
					<option value="Australia/Eucla">
				UTC/GMT +08:45 - Australia/Eucla			</option>
					<option value="Australia/Hobart">
				UTC/GMT +10:00 - Australia/Hobart			</option>
					<option value="Australia/Lindeman">
				UTC/GMT +10:00 - Australia/Lindeman			</option>
					<option value="Australia/Lord_Howe">
				UTC/GMT +10:30 - Australia/Lord_Howe			</option>
					<option value="Australia/Melbourne">
				UTC/GMT +10:00 - Australia/Melbourne			</option>
					<option value="Australia/Perth">
				UTC/GMT +08:00 - Australia/Perth			</option>
					<option value="Australia/Sydney">
				UTC/GMT +10:00 - Australia/Sydney			</option>
					<option value="Europe/Amsterdam">
				UTC/GMT +02:00 - Europe/Amsterdam			</option>
					<option value="Europe/Andorra">
				UTC/GMT +02:00 - Europe/Andorra			</option>
					<option value="Europe/Astrakhan">
				UTC/GMT +04:00 - Europe/Astrakhan			</option>
					<option value="Europe/Athens">
				UTC/GMT +03:00 - Europe/Athens			</option>
					<option value="Europe/Belgrade">
				UTC/GMT +02:00 - Europe/Belgrade			</option>
					<option value="Europe/Berlin">
				UTC/GMT +02:00 - Europe/Berlin			</option>
					<option value="Europe/Bratislava">
				UTC/GMT +02:00 - Europe/Bratislava			</option>
					<option value="Europe/Brussels">
				UTC/GMT +02:00 - Europe/Brussels			</option>
					<option value="Europe/Bucharest">
				UTC/GMT +03:00 - Europe/Bucharest			</option>
					<option value="Europe/Budapest">
				UTC/GMT +02:00 - Europe/Budapest			</option>
					<option value="Europe/Busingen">
				UTC/GMT +02:00 - Europe/Busingen			</option>
					<option value="Europe/Chisinau">
				UTC/GMT +03:00 - Europe/Chisinau			</option>
					<option value="Europe/Copenhagen">
				UTC/GMT +02:00 - Europe/Copenhagen			</option>
					<option value="Europe/Dublin">
				UTC/GMT +01:00 - Europe/Dublin			</option>
					<option value="Europe/Gibraltar">
				UTC/GMT +02:00 - Europe/Gibraltar			</option>
					<option value="Europe/Guernsey">
				UTC/GMT +01:00 - Europe/Guernsey			</option>
					<option value="Europe/Helsinki">
				UTC/GMT +03:00 - Europe/Helsinki			</option>
					<option value="Europe/Isle_of_Man">
				UTC/GMT +01:00 - Europe/Isle_of_Man			</option>
					<option value="Europe/Istanbul">
				UTC/GMT +03:00 - Europe/Istanbul			</option>
					<option value="Europe/Jersey">
				UTC/GMT +01:00 - Europe/Jersey			</option>
					<option value="Europe/Kaliningrad">
				UTC/GMT +02:00 - Europe/Kaliningrad			</option>
					<option value="Europe/Kiev">
				UTC/GMT +03:00 - Europe/Kiev			</option>
					<option value="Europe/Kirov">
				UTC/GMT +03:00 - Europe/Kirov			</option>
					<option value="Europe/Lisbon">
				UTC/GMT +01:00 - Europe/Lisbon			</option>
					<option value="Europe/Ljubljana">
				UTC/GMT +02:00 - Europe/Ljubljana			</option>
					<option value="Europe/London">
				UTC/GMT +01:00 - Europe/London			</option>
					<option value="Europe/Luxembourg">
				UTC/GMT +02:00 - Europe/Luxembourg			</option>
					<option value="Europe/Madrid">
				UTC/GMT +02:00 - Europe/Madrid			</option>
					<option value="Europe/Malta">
				UTC/GMT +02:00 - Europe/Malta			</option>
					<option value="Europe/Mariehamn">
				UTC/GMT +03:00 - Europe/Mariehamn			</option>
					<option value="Europe/Minsk">
				UTC/GMT +03:00 - Europe/Minsk			</option>
					<option value="Europe/Monaco">
				UTC/GMT +02:00 - Europe/Monaco			</option>
					<option value="Europe/Moscow">
				UTC/GMT +03:00 - Europe/Moscow			</option>
					<option value="Europe/Oslo">
				UTC/GMT +02:00 - Europe/Oslo			</option>
					<option value="Europe/Paris">
				UTC/GMT +02:00 - Europe/Paris			</option>
					<option value="Europe/Podgorica">
				UTC/GMT +02:00 - Europe/Podgorica			</option>
					<option value="Europe/Prague">
				UTC/GMT +02:00 - Europe/Prague			</option>
					<option value="Europe/Riga">
				UTC/GMT +03:00 - Europe/Riga			</option>
					<option value="Europe/Rome">
				UTC/GMT +02:00 - Europe/Rome			</option>
					<option value="Europe/Samara">
				UTC/GMT +04:00 - Europe/Samara			</option>
					<option value="Europe/San_Marino">
				UTC/GMT +02:00 - Europe/San_Marino			</option>
					<option value="Europe/Sarajevo">
				UTC/GMT +02:00 - Europe/Sarajevo			</option>
					<option value="Europe/Simferopol">
				UTC/GMT +03:00 - Europe/Simferopol			</option>
					<option value="Europe/Skopje">
				UTC/GMT +02:00 - Europe/Skopje			</option>
					<option value="Europe/Sofia">
				UTC/GMT +03:00 - Europe/Sofia			</option>
					<option value="Europe/Stockholm">
				UTC/GMT +02:00 - Europe/Stockholm			</option>
					<option value="Europe/Tallinn">
				UTC/GMT +03:00 - Europe/Tallinn			</option>
					<option value="Europe/Tirane">
				UTC/GMT +02:00 - Europe/Tirane			</option>
					<option value="Europe/Ulyanovsk">
				UTC/GMT +04:00 - Europe/Ulyanovsk			</option>
					<option value="Europe/Uzhgorod">
				UTC/GMT +03:00 - Europe/Uzhgorod			</option>
					<option value="Europe/Vaduz">
				UTC/GMT +02:00 - Europe/Vaduz			</option>
					<option value="Europe/Vatican">
				UTC/GMT +02:00 - Europe/Vatican			</option>
					<option value="Europe/Vienna">
				UTC/GMT +02:00 - Europe/Vienna			</option>
					<option value="Europe/Vilnius">
				UTC/GMT +03:00 - Europe/Vilnius			</option>
					<option value="Europe/Volgograd">
				UTC/GMT +03:00 - Europe/Volgograd			</option>
					<option value="Europe/Warsaw">
				UTC/GMT +02:00 - Europe/Warsaw			</option>
					<option value="Europe/Zagreb">
				UTC/GMT +02:00 - Europe/Zagreb			</option>
					<option value="Europe/Zaporozhye">
				UTC/GMT +03:00 - Europe/Zaporozhye			</option>
					<option value="Europe/Zurich">
				UTC/GMT +02:00 - Europe/Zurich			</option>
					<option value="Indian/Antananarivo">
				UTC/GMT +03:00 - Indian/Antananarivo			</option>
					<option value="Indian/Chagos">
				UTC/GMT +06:00 - Indian/Chagos			</option>
					<option value="Indian/Christmas">
				UTC/GMT +07:00 - Indian/Christmas			</option>
					<option value="Indian/Cocos">
				UTC/GMT +06:30 - Indian/Cocos			</option>
					<option value="Indian/Comoro">
				UTC/GMT +03:00 - Indian/Comoro			</option>
					<option value="Indian/Kerguelen">
				UTC/GMT +05:00 - Indian/Kerguelen			</option>
					<option value="Indian/Mahe">
				UTC/GMT +04:00 - Indian/Mahe			</option>
					<option value="Indian/Maldives">
				UTC/GMT +05:00 - Indian/Maldives			</option>
					<option value="Indian/Mauritius">
				UTC/GMT +04:00 - Indian/Mauritius			</option>
					<option value="Indian/Mayotte">
				UTC/GMT +03:00 - Indian/Mayotte			</option>
					<option value="Indian/Reunion">
				UTC/GMT +04:00 - Indian/Reunion			</option>
					<option value="Pacific/Apia">
				UTC/GMT +13:00 - Pacific/Apia			</option>
					<option value="Pacific/Auckland">
				UTC/GMT +12:00 - Pacific/Auckland			</option>
					<option value="Pacific/Bougainville">
				UTC/GMT +11:00 - Pacific/Bougainville			</option>
					<option value="Pacific/Chatham">
				UTC/GMT +12:45 - Pacific/Chatham			</option>
					<option value="Pacific/Chuuk">
				UTC/GMT +10:00 - Pacific/Chuuk			</option>
					<option value="Pacific/Easter">
				UTC/GMT -06:00 - Pacific/Easter			</option>
					<option value="Pacific/Efate">
				UTC/GMT +11:00 - Pacific/Efate			</option>
					<option value="Pacific/Enderbury">
				UTC/GMT +13:00 - Pacific/Enderbury			</option>
					<option value="Pacific/Fakaofo">
				UTC/GMT +13:00 - Pacific/Fakaofo			</option>
					<option value="Pacific/Fiji">
				UTC/GMT +12:00 - Pacific/Fiji			</option>
					<option value="Pacific/Funafuti">
				UTC/GMT +12:00 - Pacific/Funafuti			</option>
					<option value="Pacific/Galapagos">
				UTC/GMT -06:00 - Pacific/Galapagos			</option>
					<option value="Pacific/Gambier">
				UTC/GMT -09:00 - Pacific/Gambier			</option>
					<option value="Pacific/Guadalcanal">
				UTC/GMT +11:00 - Pacific/Guadalcanal			</option>
					<option value="Pacific/Guam">
				UTC/GMT +10:00 - Pacific/Guam			</option>
					<option value="Pacific/Honolulu">
				UTC/GMT -10:00 - Pacific/Honolulu			</option>
					<option value="Pacific/Johnston">
				UTC/GMT -10:00 - Pacific/Johnston			</option>
					<option value="Pacific/Kiritimati">
				UTC/GMT +14:00 - Pacific/Kiritimati			</option>
					<option value="Pacific/Kosrae">
				UTC/GMT +11:00 - Pacific/Kosrae			</option>
					<option value="Pacific/Kwajalein">
				UTC/GMT +12:00 - Pacific/Kwajalein			</option>
					<option value="Pacific/Majuro">
				UTC/GMT +12:00 - Pacific/Majuro			</option>
					<option value="Pacific/Marquesas">
				UTC/GMT -09:30 - Pacific/Marquesas			</option>
					<option value="Pacific/Midway">
				UTC/GMT -11:00 - Pacific/Midway			</option>
					<option value="Pacific/Nauru">
				UTC/GMT +12:00 - Pacific/Nauru			</option>
					<option value="Pacific/Niue">
				UTC/GMT -11:00 - Pacific/Niue			</option>
					<option value="Pacific/Norfolk">
				UTC/GMT +11:00 - Pacific/Norfolk			</option>
					<option value="Pacific/Noumea">
				UTC/GMT +11:00 - Pacific/Noumea			</option>
					<option value="Pacific/Pago_Pago">
				UTC/GMT -11:00 - Pacific/Pago_Pago			</option>
					<option value="Pacific/Palau">
				UTC/GMT +09:00 - Pacific/Palau			</option>
					<option value="Pacific/Pitcairn">
				UTC/GMT -08:00 - Pacific/Pitcairn			</option>
					<option value="Pacific/Pohnpei">
				UTC/GMT +11:00 - Pacific/Pohnpei			</option>
					<option value="Pacific/Port_Moresby">
				UTC/GMT +10:00 - Pacific/Port_Moresby			</option>
					<option value="Pacific/Rarotonga">
				UTC/GMT -10:00 - Pacific/Rarotonga			</option>
					<option value="Pacific/Saipan">
				UTC/GMT +10:00 - Pacific/Saipan			</option>
					<option value="Pacific/Tahiti">
				UTC/GMT -10:00 - Pacific/Tahiti			</option>
					<option value="Pacific/Tarawa">
				UTC/GMT +12:00 - Pacific/Tarawa			</option>
					<option value="Pacific/Tongatapu">
				UTC/GMT +13:00 - Pacific/Tongatapu			</option>
					<option value="Pacific/Wake">
				UTC/GMT +12:00 - Pacific/Wake			</option>
					<option value="Pacific/Wallis">
				UTC/GMT +12:00 - Pacific/Wallis			</option>
					<option value="UTC">
				UTC/GMT +00:00 - UTC			</option>
			</select>
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Date Format</label>
                  <select class="form-control" name="selDate">
                  <option value="Y-m-d" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='Y-m-d'){echo "selected";}?>>1998-02-24 (YYYY-MM-DD)</option>
                  <option value="d-m-Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='d-m-Y'){echo "selected";}?>>20-02-1988 (DD-MM-YYYY)</option>
                  <option value="m-d-Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='m-d-Y'){echo "selected";}?>>02-20-1988 (MM-DD-YYYY)</option>
                  <option value="Y/m/d" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='Y/m/d'){echo "selected";}?>>1998/02/24 (YYYY/MM/DD)</option>
                  <option value="d/m/Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='d/m/Y'){echo "selected";}?>>20/02/1988 (DD/MM/YYYY)</option>
                  <option value="m/d/Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='m/d/Y'){echo "selected";}?>>02/20/1988 (MM/DD/YYYY)</option>
                  <option value="d M Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='d M Y'){echo "selected";}?>>20 Feb 1988</option>
                  <option value="d F Y" <?php if(isset($userinfo['date_format']) && $userinfo['date_format']=='d F Y'){echo "selected";}?>>20 Febraury 1988</option>
                  </select>
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Time Format</label>
                  <select class="form-control" name="selTime">
                  <option value="h:i a" <?php if(isset($userinfo['time_format']) && $userinfo['time_format']=='h:i a'){echo "selected";}?>>12 hrs clock</option>
                  <option value="G:i" <?php if(isset($userinfo['time_format']) && $userinfo['time_format']=='h:i'){echo "selected";}?>>24 hrs clock</option>
                  </select>
                 
                </div>
              <div class="form-group">
                  <label for="exampleInputFile">Footer Message</label>
                  <textarea class="form-control" name="txtFmessage" id="txtFmessage" placeholder="Enter Footer Message"><?php if(isset($userinfo['footer_message'])){echo $userinfo['footer_message'];} ?></textarea>
                 
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Theme Color</label>
                  <div id='switch-current'>
        <input type='text' name='color1' id='pick1' value='#ddddff'/>
        <div id='switch-current-hsv' class='switch-current-output'></div>
        <div id='switch-current-rgb' class='switch-current-output'></div>
        <div id='switch-current-hex' class='switch-current-output'></div>
    </div>

    <div>
    <input id="full" name="nowcolor" />
    </div>

<pre class='prettyprint hide' id='code-heading'>
&lt;input type='color' value='#f594d0' /&gt;
<input type='color'  class='basic' value='#f594d0'/>
</pre>
                 
                </div>
                <strong>Color Code : </strong><span id="themecolor"><?php echo $userinfo['theme_color']; ?></span><br/>
                <strong>Color : </strong><span style="border:1px solid black; background-color:<?php echo $userinfo['theme_color']; ?>"><?php echo $userinfo['theme_color']; ?></span>
			  </div>
              <div class="chart tab-pane" id="email"><br/>
              <div class="form-group">
                  <label for="exampleInputEmail1">Sender Email(Used for sending mail)</label>
                  <input type="email" class="form-control" name="txtsemail" id="txtsemail" placeholder="Enter Sender Email (Used for sending mail)" value="<?php if(isset($userinfo['sender_email'])){echo $userinfo['sender_email'];} ?>" required>
                </div>
             <div class="form-group">
                  <label for="exampleInputEmail1">Email Subject( For sending mail to user )</label>
                  <input type="text" class="form-control" name="txtsubject" id="txtsubject" placeholder="Enter Subject" value="<?php if(isset($userinfo['subject'])){echo $userinfo['subject'];} ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Message( For sending mail to user )</label>
                  <input type="text" class="form-control" name="txtmessage" id="txtmessage" placeholder="Enter Message" value="<?php if(isset($userinfo['message'])){echo $userinfo['message'];} ?>">
                </div>
			  </div>
            </div>
          </div>
                
               
                
                
                
                
               
                
                
                
              </div>
              <!-- /.box-body -->

              
            
            <!-- /.box-body -->
         
          </div>
          </form>
          <!-- /.box -->

       
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>
  

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<!-- jQuery 2.2.0 -->
<script src="assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/admin/dist/js/demo.js"></script>
 
    <script type="text/javascript" src="assets/admin/spectrum/spectrum.js"></script>
    <script type='text/javascript' src='assets/admin/spectrum/toc.js'></script>
    <script type='text/javascript' src='assets/admin/spectrum/docs.js'></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>

	 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function(){
    $("#prfbtn").change(function(){
        readURL(this);
    });
	});
	
	function formvalidation()
	{
		if(document.getElementById("txtCname").value=="")
		{
			alert("Company Name is required.");
			return false;
		}
		else if(document.getElementById("txtaddress").value=="")
		{
			alert("Company Address is required.");
			return false;
		}
		else if(document.getElementById("txtemail").value=="")
		{
			alert("Contact Email Id is required.");
			return false;
		}
		else if(document.getElementById("txtphone1").value=="")
		{
			alert("Phone Number is required.");
			return false;
		}
		else if(document.getElementById("txtFmessage").value=="")
		{
			alert("Footer message is required.");
			return false;
		}
		else if(document.getElementById("txtsemail").value=="")
		{
			alert("Sender Email Id is required.");
			return false;
		}
		else if(document.getElementById("txtsubject").value=="")
		{
			alert("Email subject is required.");
			return false;
		}
		else if(document.getElementById("txtemail").value=="")
		{
			alert("Email message content is required.");
			return false;
		}
		else
		{
			return true;
		}
		
	}
</script>
<script>
function changecolor()
{
	document.getElementById('pick1').innerHTML=document.getElementById('nowcolor').value;
}
</script>

</body>
</html>
