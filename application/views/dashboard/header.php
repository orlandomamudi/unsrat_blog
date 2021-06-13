<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UNSRATBlog | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition layout-navbar-fixed layout-fixed">
	<div class="wrapper">
			
		<nav class="main-header navbar navbar-expand navbar-light navbar-primary">
			
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#">
					<i class="fas fa-bars"></i></a>
				</li>
			</ul>


			<ul class="navbar-nav ml-auto">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/dist/img/user.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs text-white">User : <b><?php echo $this->session->userdata('level') ?></b></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?php echo base_url(); ?>assets/dist/img/user.jpg" class="img-circle" alt="User Image">
							<p>
								<?php echo $this->session->userdata('username') ?>
								<small>User : <?php echo $this->session->userdata('level') ?></small>
							</p>
						</li>
						
						<li class="user-footer">
							<div class="float-left">
								<a href="<?php echo base_url().'dashboard/profil' ?>" class="btn btn-default btn-flat">Profil</a>
							</div>
							<div class="float-right">
								<a href="<?php echo base_url().'dashboard/keluar' ?>" class="btn btn-default btn-flat">Keluar</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>	
		</nav>

		<!-- main saidbar container -->
		<aside class="main-sidebar sidebar-light-primary elevation-4">
			<!-- logo -->
            <a href="" class="brand-link bg-primary"><img src="<?php echo base_url(); ?>gambar/website/logo-unsrat.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>UNSRAT</b>Blog</span>
            </a>
			<!-- sidebar -->
			<div class="sidebar">
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <?php 
						$id_user = $this->session->userdata('id');
						$user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
						?>
						<p class="nav nav-header"><?php echo $user->pengguna_nama; ?></p>
                    </div>
                </div> -->
				<!-- sidebar menu -->
				<ul class="nav nav-pills nav-sidebar nav-child-indent flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-header">MAIN NAVIGATION</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard' ?>">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>DASHBOARD</p>
						</a>
					</li>
					<?php 
					if($this->session->userdata('level') == "admin"){
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/kategori' ?>">
							<i class="nav-icon fas fa-th"></i>
							<p>KATEGORI</p>
						</a>
					</li>
					<?php
					} 
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/artikel' ?>">
							<i class="nav-icon fas fa-pencil-alt"></i>
							<P>ARTIKEL</P>
						</a>
					</li class="nav-item">

					<?php 
					if($this->session->userdata('level') == "admin"){
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/pages' ?>">
							<i class="nav-icon fas fa-copy"></i>
							<p>PAGES</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/pengguna' ?>">
							<i class="nav-icon fas fa-users"></i>
							<p>PENGGUNA & HAK AKSES</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/pengaturan' ?>">
							<i class="nav-icon fas fa-edit"></i>
							<p>PENGATURAN WEBSITE</p>
						</a>
					</li>
					<?php
					} 
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/profil' ?>">
							<i class="nav-icon fas fa-user"></i>
							<p>PROFIL</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/ganti_password' ?>">
							<i class="nav-icon fas fa-lock"></i>
							<p>GANTI PASSWORD</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url().'dashboard/keluar' ?>">
							<i class="nav-icon fas fa-share"></i>
							<p>KELUAR</p>
						</a>
					</li>
				</ul>
                </div>
		</aside>