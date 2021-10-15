<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Edit Person</h5>
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
                            <h3 class="card-title">Edit Person</h3>

                        </div>
                        <!--begin::Form-->
                        <form class="form" method="post" action="">
                            <input type="hidden" name="nik" value="<?= $person['nik'] ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>NIK:</label>
                                        <input type="text" class="form-control" placeholder="" name="nik"
                                            value="<?= $person['nik'] ?>" readonly>
                                        <?= form_error('nik', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Nama:</label>
                                        <input type="text" class="form-control" name="nama_person"
                                            value="<?= $person['nama_person'] ?>">
                                        <?= form_error('nama_person', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Jenis Kelamin:</label>
                                        <select class="form-control" name="jenis_kelamin"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($jenis_kelamin as $key) : ?>
                                            <?php if ($key == $person['jenis_kelamin']) : ?>
                                            <option value="<?= $key ?>" selected><?= $key  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $key ?>"><?= $key  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Tempat Lahir:</label>
                                        <input type="text" class="form-control" placeholder="" name="tempat_lahir"
                                            value="<?= $person['tempat_lahir'] ?>">
                                        <?= form_error('tempat_lahir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Tanggal Lahir:</label>
                                        <input type="date" class="form-control" name="tanggal_lahir"
                                            value="<?php echo date('Y-m-d', strtotime($person['tanggal_lahir'])); ?>">
                                        <?= form_error('tanggal_lahir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Agama:</label>
                                        <select class="form-control" name="agama"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($agama as $ag) : ?>
                                            <?php if ($ag == $person['agama']) : ?>
                                            <option value="<?= $ag ?>" selected><?= $ag  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $ag ?>"><?= $ag  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('agama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Alamat:</label>
                                        <input type="text" class="form-control" placeholder="" name="alamat"
                                            value="<?= $person['alamat'] ?>">
                                        <?= form_error('alamat', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Umur:</label>
                                        <input type="text" class="form-control" name="umur"
                                            value="<?= $person['umur'] ?>">
                                        <?= form_error('umur', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Nama Orang Tua:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nama_orang_tua" placeholder=""
                                                value="<?= $person['nama_orang_tua'] ?>" />
                                        </div>
                                        <?= form_error('nama_orang_tua', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Pendidikan Terakhir:</label>
                                        <select class="form-control" name="pendidikan_terakhir"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($pendidikan as $pen) : ?>
                                            <?php if ($pen == $person['pendidikan']) : ?>
                                            <option value="<?= $pen ?>" selected><?= $pen  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $pen ?>"><?= $pen  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('pendidikan_terakhir', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Pekerjaan:</label>
                                        <input type="text" class="form-control" name="pekerjaan"
                                            value="<?= $person['pekerjaan'] ?>">
                                        <?= form_error('pekerjaan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Status Perkawinan:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="status_perkawinan"
                                                placeholder="" value="<?= $person['status_perkawinan'] ?>" />
                                        </div>
                                        <?= form_error('status_perkawinan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Status Person:</label>
                                        <select class="form-control" name="status_person"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($status_person as $sta) : ?>
                                            <?php if ($sta == $person['status_person']) : ?>
                                            <option value="<?= $sta ?>" selected><?= $sta  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $sta ?>"><?= $sta  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('status_person', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <span class="form-text text-muted">kategori untuk korban
                                            atau pelaku</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Jumlah Saudara:</label>
                                        <input type="text" class="form-control" name="jumlah_saudara"
                                            value="<?= $person['jumlah_saudara'] ?>">
                                        <?= form_error('jumlah_saudara', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Hubungan Dengan Korban:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="hubungan_dengan_korban"
                                                placeholder="" value="<?= $person['hubungan_dengan_korban'] ?>" />
                                        </div>
                                        <?= form_error('hubungan_dengan_korban', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Desa:</label>
                                        <select class="form-control" name="nama_desa"
                                            id="cform-control form-control-solid form-control-lg">
                                            <?php foreach ($desa as $des) : ?>
                                            <?php if ($des['nama_desa'] == $person['nama_desa']) : ?>
                                            <option value="<?= $des['id_desa'] ?>" selected>
                                                <?= $des['nama_desa']  ?>
                                            </option>
                                            <?php else : ?>
                                            <option value="<?= $des['id_desa'] ?>">
                                                <?= $des['nama_desa']  ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('nama_desa', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-6 text-lg-right">
                                        <a href="<?= site_url('person') ?>" class="btn btn-secondary mr-2">Kembali</a>
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