<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Kategori</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					
					<a href="<?php echo base_url().'dashboard/kategori_tambah'; ?>" class="btn btn-sm btn-primary float-right">Buat Kategori baru</a>

					<br/>
					<br/>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Kategori Artikel</h3>
						</div>
						<div class="card-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th width="1%">NO</th>
										<th>Kategori</th>
										<th>Slug</th>
										<th width="10%">OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach($kategori as $k){ 
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $k->kategori_nama; ?></td>
											<td><?php echo $k->kategori_slug; ?></td>
											<td>
												<a href="<?php echo base_url().'dashboard/kategori_edit/'.$k->kategori_id; ?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i> </a>
												<a href="<?php echo base_url().'dashboard/kategori_hapus/'.$k->kategori_id; ?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

</div>