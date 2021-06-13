<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>Pengguna</h1>
        </section>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-6">
                        <a href="<?php echo base_url().'dashboard/pengguna'; ?>" class="btn btn-sm btn-primary">Kembali</a>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Pengguna</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="<?php echo base_url('dashboard/pengguna_aksi') ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama pengguna..">
                                            <?php echo form_error('nama'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Masukkan email pengguna..">
                                            <?php echo form_error('email'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Masukkan username pengguna..">
                                            <?php echo form_error('username'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukkan password pengguna..">
                                            <?php echo form_error('password'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control">
                                                <option value="">- Piliih Level -</option>
                                                <option value="admin">Admin</option>
                                                <option value="dosen">Dosen</option>
                                                <option value="mahasiswa">Mahasiswa</option>
                                            </select>
                                            <?php echo form_error('level'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="">- Pilih Status -</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Non Aktif</option>
                                            </select>
                                            <?php echo form_error('status'); ?>
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
</div>