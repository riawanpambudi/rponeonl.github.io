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
                    <div class="card-body">
                        <div class="callout callout-info">
                            <h5>No Tiket : <?= $tiket->no_tiket; ?></h5>
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-ticket-alt"></i> IT HELPDESK
                                        <small class="float-right">Date: <?= $tiket->tgl_daftar; ?></small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong><?= $tiket->username; ?></strong><br>
                                        Devisi : <?= $tiket->divisi; ?><br>
                                        Jabatan : <?= $tiket->jabatan; ?><br>
                                        Email: <?= $tiket->email; ?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Status Tiket</b> : <?php if ($tiket->status_tiket == '0') {
                                                                echo '<span class="badge badge-warning">Waiting...</span>';
                                                            } else if ($tiket->status_tiket == '1') {
                                                                echo '<span class="badge badge-info">Response...</span>';
                                                            } else if ($tiket->status_tiket == '2') {
                                                                echo '<span class="badge badge-success"> Proccess...</span>';
                                                            } else {
                                                                echo '<span class="badge badge-danger"> Solved...</span>';
                                                            } ?>
                                    <br>
                                    <br>
                                    <br>
                                    <b>No Tiket : </b><?= $tiket->no_tiket; ?>
                                    <br>
                                    <b>Selesai :</b>
                                    <?php
                                    if ($tiket->status_tiket == '3') {
                                        echo $tiket->waktu_tanggapan;
                                    } else {
                                        echo "--";
                                    }
                                    ?>

                                </div>
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Keluhan User / Karyawan</label>
                                    <input type="text" value="<?= $tiket->judul_tiket ?>" readonly class="form-control">
                                    <label for="">Description</label>
                                    <textarea rows="6" readonly class="form-control"><?= $tiket->deskripsi ?></textarea>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <label for="">Tanggapan Dept IT</label>
                                    <textarea rows="9" readonly class="form-control"></textarea>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>