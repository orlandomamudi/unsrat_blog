<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Artikel</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo base_url().'dashboard/artikel_tambah'; ?>" class="btn btn-sm btn-primary float-right">Buat Artikel Baru</a>
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manajemen Artikel</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="1%">NO</th>
                                            <th>Tanggal</th>
                                            <th>Artikel</th>
                                            <th>Author</th>
                                            <th>Kategori</th>
                                            <th width="10%">Gambar</th>
                                            <th>Status</th>
                                            <th width="15%">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($artikel as $a){
                                        ?>

                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo date('d/m/Y H:i', strtotime($a->artikel_tanggal)); ?></td>
                                                <td>
                                                    <?php echo $a->artikel_judul; ?>
                                                    <br>
                                                    <small class="text-muted">
                                                        <?php echo base_url()."".$a->artikel_slug; ?>
                                                    </small>
                                                </td>
                                                <td><?php echo $a->pengguna_nama; ?></td>
                                                <td><?php echo $a->kategori_nama; ?></td>
                                                <td><img width="100%" class="img-responsive"  src="<?php echo base_url().'gambar/artikel/'.$a->artikel_sampul; ?>"></td>
                                                <td>
                                                    <?php
                                                    if($a->artikel_status=="publish"){
                                                        echo "<span class='text text-success'>Publish</span>";
                                                    }else{
                                                        echo "<span class='text text-danger'>Draft</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="<?php echo base_url().$a->artikel_slug; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                                    <?php
                                                    // cek user login apakah penulis
                                                    if($this->session->userdata('level') == 'dosen' OR $this->session->userdata('level') == 'mahasiswa' ){
                                                        // jika penulis, maka cek kalo penulis artikel ini adalah si pengguna atau bukan
                                                        if($this->session->userdata('id') == $a->artikel_author){
                                                            ?>
                                                            <a href="<?php echo base_url().'dashboard/artikel_edit/'.$a->artikel_id; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                            <a href="<?php echo base_url().'dashboard/artikel_hapus/'.$a->artikel_id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                            <?php
                                                        }
                                                    }else{
                                                        // jika yang login adalah admin
                                                        ?>
                                                        <a href="<?php echo base_url().'dashboard/artikel_edit/'.$a->artikel_id; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                        <a href="<?php echo base_url().'dashboard/artikel_hapus/'.$a->artikel_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                        <?php
                                                    }
                                                    ?>
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
        </div>
    </section>
</div>