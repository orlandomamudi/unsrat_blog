<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>Edit Halaman</h1>
        </section>

        <section class="content">
            <div class="container-fluid">
                <a href="<?php echo base_url().'dashboard/pages'; ?>" class="btn btn-sm btn-primary">Kembali</a>
                <br>
                <br>
                <?php foreach($halaman as $h){ ?>
                    <form method="post" action="<?php echo base_url('dashboard/pages_update') ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input type="hidden" name="id" value="<?php echo $h->halaman_id; ?>">
                                                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul halaman.." value="<?php echo $h->halaman_judul; ?>">
                                                <br>
                                                <?php echo form_error('judul'); ?>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Konter</label>
                                                <?php echo form_error('konten'); ?>
                                                <br>
                                                <textarea class="form-control" id="summernote" name="konten"><?php echo $h->halaman_konten; ?></textarea>
                                            </div>
                                        </div>

                                        <input type="submit" name="status" value="Publish" class="btn btn-success btn-block">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </section>
    </div>
</div>