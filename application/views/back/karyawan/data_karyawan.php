<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </section>
    <section class="content">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Data Karyawan</h3>
                        <a href="<?= base_url('karyawan/add_karyawan') ?>" class="btn btn-primary btn-sm  float-right">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message') ?>
                        <?= validation_errors() ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Karyawan</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($karyawan as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nik ?></td>
                                        <td><?= $row->username ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?php if ($row->status_user == "1") {
                                                echo 'Active';
                                            } else {
                                                echo 'Non Active';
                                            }
                                            ?>
                                        </td>
                                        <td> <a href="<?= base_url('karyawan/edit_karyawan/' . $row->id_user) ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i></a>
                                            |
                                            <a onclick="return confirm('Anda ingin menghapus data ?');" href="<?= base_url('karyawan/delete_karyawan/' . $row->id_user) ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>