<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>Tambah Halaman Baru</h1>
        </section>

        <section class="content">
            <div class="container-fluid">
                <a href="<?php echo base_url().'dashboard/pages'; ?>" class="btn btn-sm btn-primary">Kembali</a>
                <br>
                <br>
                <form method="post" action="<?php echo base_url('dashboard/pages_aksi') ?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Judul Halaman</label>
                                            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul halaman.." value="<?php echo set_value('judul'); ?>">
                                            <?php echo form_error('judul'); ?>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Konten Halaman</label>
                                            <?php echo form_error('konten'); ?>
                                            <br>
                                            <textarea class="form-control" id="summernote" name="konten"><?php echo set_value('konten'); ?></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" value="Publish" class="btn btn-success btn-block">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>