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
                        <h3 class="card-title"> Edit Karyawan <?= $user->username ?></h3>
                        <a href="<?= base_url('karyawan') ?>" class="btn btn-warning btn-sm  float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message') ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('karyawan/update_karyawan') ?>" method="POST">
                            <div class="input-group mb-3">
                                <input type="Hidden" name="id_user" value="<?= $user->id_user ?>" class="form-control" placeholder="ID User">
                                <input type="text" name="nik" value="<?= $user->nik ?>" class="form-control" placeholder="NIK">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="username" value="<?= $user->username ?>" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="email" value="<?= $user->email ?>" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select name="jabatan_id" class="form-control">
                                    <OPtion value="">--Pilih Jabatan--</OPtion>
                                    <?php foreach ($jabatan as $key => $row) { ?>
                                        <option value="<?= $row->id_jabatan ?>" <?= $row->id_jabatan == $user->jabatan_id ? "selected" : null ?>>
                                            <?= $row->jabatan ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="divisi_id" class="form-control">
                                    <OPtion value="">--Pilih Divisi--</OPtion>
                                    <?php foreach ($divisi as $key => $row) { ?>
                                        <option value="<?= $row->id_divisi ?>" <?= $row->id_divisi == $user->divisi_id ? "selected" : null ?>>
                                            <?= $row->divisi ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="status_user" class="form-control">
                                    <OPtion value="">Status User</OPtion>
                                    <OPtion value="0" <?= $user->status_user == '0' ? 'selected' : '' ?>>Non Active</OPtion>
                                    <OPtion value="1" <?= $user->status_user == '1' ? 'selected' : '' ?>>Active</OPtion>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="level_user" class="form-control">
                                    <OPtion value="">Level User</OPtion>
                                    <OPtion value="1" <?= $user->level_user == '1' ? 'selected' : '' ?>>Staff</OPtion>
                                    <OPtion value="2" <?= $user->level_user == '2' ? 'selected' : '' ?>>IT</OPtion>
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