<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>Pengguna</h1>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-12">

                    <a href="<?php echo base_url().'dashboard/pengguna_tambah'; ?>" class="btn btn-sm btn-primary">Buat pengguna baru</a>
                    <br>
                    <br>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pengguna Website</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th width="10%">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($pengguna as $p){
                                    ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $p->pengguna_nama; ?></td>
                                            <td><?php echo $p->pengguna_email; ?></td>
                                            <td><?php echo $p->pengguna_username; ?></td>
                                            <td><?php echo $p->pengguna_level; ?></td>
                                            <td>
                                                <?php
                                                if($p->pengguna_status == 1){
                                                    echo "Aktif";
                                                }else{
                                                    echo "Non Aktif";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url().'dashboard/pengguna_edit/'.$p->pengguna_id; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="<?php echo base_url().'dashboard/pengguna_hapus/'.$p->pengguna_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
</div>