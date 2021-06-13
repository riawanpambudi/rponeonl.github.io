<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Data Divisi</h3>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message') ?>
        <?= $this->session->flashdata('hapus') ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($divisi as $row) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->divisi ?></td>
                        <td> <a href="<?= base_url('divisi/edit_divisi/' . $row->id_divisi) ?>" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i></a>
                            |
                            <a onclick="return confirm('Anda ingin menghapus data ?');" href="<?= base_url('divisi/delete_divisi/' . $row->id_divisi) ?>" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i></a>
                        </td>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>