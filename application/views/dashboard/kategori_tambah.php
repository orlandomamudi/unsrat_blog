<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Buat kategori baru</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<a href="<?php echo base_url().'dashboard/kategori'; ?>" class="btn btn-sm btn-primary float-right">Kembali</a>
					
					<br/>
					<br/>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Kategori Artikel</h3>
						</div>
						<div class="card-body">
							
							
							<form method="post" action="<?php echo base_url('dashboard/kategori_aksi') ?>">
								<div class="card-body">
									<div class="form-group">
										<label>Nama Kategori</label>
										<input type="text" name="kategori" class="form-control" placeholder="Masukkan nama kategori ..">
										<?php echo form_error('kategori'); ?>
									</div>
								</div>

								<div class="card-footer">
									<input type="submit" class="btn btn-success" value="Simpan">
								</div>
							</form>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

</div>  