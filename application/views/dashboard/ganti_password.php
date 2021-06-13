<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<h1>Ganti Password</h1>
		</div>
	</div>

	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah password anda</h3>
					</div>
					<div class="card-body">

						<?php 
						if(isset($_GET['alert'])){
							if($_GET['alert'] == "sukses"){
								echo "<div class='alert alert-success'>Password telah diubah!</div>";
							}else if($_GET['alert'] == "gagal"){
								echo "<div class='alert alert-danger'>Maaf, password lama yang anda masukkan salah!</div>";
							}
						}
						?>

						<form method="post" action="<?php echo base_url('dashboard/ganti_password_aksi') ?>">
							<div class="card-body">
								<div class="form-group">
									<label>Password Lama</label>
									<input type="password" name="password_lama" class="form-control" placeholder="Masukkan Password Lama Anda ..">
									<?php echo form_error('password_lama'); ?>
								</div>
								<hr>
								<div class="form-group">
									<label>Password Baru</label>
									<input type="password" name="password_baru" class="form-control" placeholder="Masukkan Password Baru ..">
									<?php echo form_error('password_baru'); ?>
								</div>
								<div class="form-group">
									<label>Konfirmasi Password Baru</label>
									<input type="password" name="konfirmasi_password" class="form-control" placeholder="Ulangi Password Baru ..">
									<?php echo form_error('konfirmasi_password'); ?>
								</div>
							</div>

							<div class="card-footer">
								<input type="submit" class="btn btn-primary float-right" value="Ganti Password">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>