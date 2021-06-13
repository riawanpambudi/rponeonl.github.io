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
                        <h3 class="card-title"> Form Karyawan</h3>
                        <a href="<?= base_url('karyawan') ?>" class="btn btn-warning btn-sm  float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message') ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('karyawan/save_karyawan') ?>" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="nik" class="form-control" placeholder="NIK">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select name="jabatan_id" class="form-control">
                                    <OPtion value="">--Pilih Jabatan--</OPtion>
                                    <?php foreach ($jabatan as $key => $row) { ?>
                                        <option value="<?= $row->id_jabatan ?>"><?= $row->jabatan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="divisi_id" class="form-control">
                                    <OPtion value="">--Pilih Divisi--</OPtion>
                                    <?php foreach ($divisi as $key => $row) { ?>
                                        <option value="<?= $row->id_divisi ?>"><?= $row->divisi ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="submit" class="btn btn-danger btn-sm">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>