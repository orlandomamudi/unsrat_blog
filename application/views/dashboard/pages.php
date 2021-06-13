<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>Halaman</h1>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo base_url().'dashboard/pages_tambah'; ?>" class="btn btn-sm btn-primary float-right">Buat halaman baru</a>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Halaman</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="1%">NO</th>
                                            <th>Judul Halaman</th>
                                            <th>URL Slug</th>
                                            <th width="15%">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($halaman as $h){
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $h->halaman_judul; ?></td>
                                                <td><?php echo base_url()."page/".$h->halaman_slug; ?></td>
                                                <td>
                                                    <a target="_blank" href="<?php echo base_url()."page/".$h->halaman_slug; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="<?php echo base_url().'dashboard/pages_edit/'.$h->halaman_id; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url().'dashboard/pages_hapus/'.$h->halaman_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
</div>