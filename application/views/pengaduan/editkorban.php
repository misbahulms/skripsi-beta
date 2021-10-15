<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Edit korban</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <!-- bisa ditambah button disini -->
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Edit Korban</h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="">
                            <div class="card-body">
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" placeholder="" name="id_korban"
                                        value="<?= $korban['id_korban'] ?>">
                                    <input type="hidden" class="form-control" placeholder="" name="id_pengaduan"
                                        value="<?= $korban['id_pengaduan'] ?>">
                                    <div class="col-lg-4">
                                        <label>NIK:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nik" placeholder=""
                                                value="<?= $korban['nik']; ?>" />
                                        </div>
                                        <?= form_error('nik', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Nama:</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="<?= $korban['nama']; ?>">
                                        <?= form_error('nama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Tempat Lahir:</label>
                                        <input type="text" class="form-control" placeholder="" name="tempat_lahir"
                                            value="<?= $korban['tempat_lahir']; ?>">
                                        <?= form_error('tempat_lahir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Tanggal Lahir:</label>
                                        <input type="date" class="form-control" name="tanggal_lahir"
                                            value="<?= $korban['tanggal_lahir']; ?>">
                                        <?= form_error('tanggal_lahir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Jenis Kelamin:</label>
                                        <select class="form-control" name="jenis_kelamin"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($jenis_kelamin as $jk) : ?>
                                            <?php if ($jk == $korban['jenis_kelamin']) : ?>
                                            <option value="<?= $jk ?>" selected><?= $jk  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $jk ?>"><?= $jk  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Alamat:</label>
                                        <input type="text" class="form-control" placeholder="" name="alamat"
                                            value="<?= $korban['alamat']; ?>">
                                        <?= form_error('alamat', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Desa:</label>
                                        <select class="form-control select2" id="kt_select2_1" name="id_desa">
                                            <?php foreach ($desa as $des) : ?>
                                            <?php if ($des['id_desa'] == $pengaduan_kasus['id_desa']) : ?>
                                            <option value="<?= $des['id_desa'] ?>" selected><?= $des['nama_desa']  ?>,
                                                Kecamatan <?= $des['nama_kecamatan']  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $des['id_desa'] ?>"><?= $des['nama_desa']  ?>, Kecamatan
                                                <?= $des['nama_kecamatan']  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Agama:</label>
                                        <select class="form-control" name="agama"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($agama as $agm) : ?>
                                            <?php if ($agm == $korban['agama']) : ?>
                                            <option value="<?= $agm ?>" selected><?= $agm  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $agm ?>"><?= $agm  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('agama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Status Perkawinan:</label>
                                        <select class="form-control" name="status_perkawinan"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($perkawinan as $per) : ?>
                                            <?php if ($per == $korban['status_perkawinan']) : ?>
                                            <option value="<?= $per ?>" selected><?= $per  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $per ?>"><?= $per  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('status_perkawinan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Nama Ayah:</label>
                                        <input type="text" class="form-control" name="nama_ayah"
                                            value="<?= $korban['nama_ayah']; ?>">
                                        <?= form_error('nama_ayah', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Nama Ibu:</label>
                                        <input type="text" class="form-control" name="nama_ibu"
                                            value="<?= $korban['nama_ibu']; ?>">
                                        <?= form_error('nama_ibu', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Pendidikan Terakhir:</label>
                                        <select class="form-control" name="pendidikan_terakhir"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($pendidikan as $pen) : ?>
                                            <?php if ($pen == $korban['pendidikan_terakhir']) : ?>
                                            <option value="<?= $pen ?>" selected><?= $pen  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $pen ?>"><?= $pen  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('pendidikan_terakhir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Pekerjaan:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="pekerjaan" placeholder=""
                                                value="<?= $korban['pekerjaan']; ?>" />
                                        </div>
                                        <?= form_error('pekerjaan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Jumlah Saudara:</label>
                                        <input type="text" class="form-control" name="jumlah_saudara"
                                            value="<?= $korban['jumlah_saudara']; ?>">
                                        <?= form_error('jumlah_saudara', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-6 text-lg-right">
                                    <a href="<?= site_url('pengaduan/detail/') ?><?= $korban["id_pengaduan"] ?>"
                                            class="btn btn-secondary mr-2">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>