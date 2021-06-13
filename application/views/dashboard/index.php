<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid mb-2">
			<h1>Dashboard</h1>
		</div>
	</div>

	<!-- Main Content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $jumlah_artikel ?></h3>

							<p>Jumlah Artikel</p>
						</div>
						<div class="icon">
							<i class="ion ion-android-list"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?php echo $jumlah_halaman ?></h3>

							<p>Jumlah Halaman/Page</p>
						</div>
						<div class="icon">
							<i class="ion ion-android-document"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?php echo $jumlah_kategori ?></h3>

							<p>Jumlah Kategori</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?php echo $jumlah_pengguna ?></h3>

							<p>Jumlah Pengguna</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
					</div>
				</div>
				
			</div>

			<!-- <div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Dashboard</h3>
							</div>
							
							<div class="card-body">
								<h3>Selamat Datang !</h3>

								<div class="table-responsive p-0">
									<table class="table table-hover text-nowrap">
										<tr>
											<th width="20%">Nama</th>
											<th width="1px">:</th>
											<td>
												<?php 
												$id_user = $this->session->userdata('id');
												$user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
												?>
												<?php echo $user->pengguna_nama; ?>
											</td>
										</tr>
										<tr>
											<th width="20%">Username</th>
											<th width="1px">:</th>
											<td><?php echo $this->session->userdata('username') ?></td>
										</tr>
										<tr>
											<th width="20%">Level</th>
											<th width="1px">:</th>
											<td><?php echo $this->session->userdata('level') ?></td>
										</tr>
										<tr>
											<th width="20%">Status</th>
											<th width="1px">:</th>
											<td>Aktif</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>

</div>