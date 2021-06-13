<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UNSRATBlog | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->

  <?php 
    if(isset($_GET['alert'])){
        if($_GET['alert']=="gagal"){
            echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password Salah.</div>";
        }else if($_GET['alert']=="belum_login"){
            echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih Dulu!</div>";
        }else if($_GET['alert']=="logout"){
            echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!</div>";
        }
    } 
    ?>

  <div class="card card-primary">
    <div class="card-header text-center bg-primary">
      <img style="width: 4.0em;" src="<?php echo base_url(); ?>gambar/website/logo-unsrat.png"><br>
      <a href="<?php echo base_url(); ?>" class="h1"><b>UNSRAT</b>Blog</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><i>Silahkan Masukan Username dan Password untuk Login</i></p>

      <form action="<?php echo base_url().'login/aksi' ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control has-feedback" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('username'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control has-feedback" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password'); ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label>
                 <a href="<?php echo base_url(); ?>">Kembali</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
