<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Pengaduan Kasus</h5>
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
                            <h3 class="card-title">Tambah Pengaduan</h3>

                        </div>
                        <!--begin::Form-->
                        <!-- <form class="form" method="post" action="<?= base_url('pengaduan/addpengaduan') ?>"> -->
                        <?php echo form_open_multipart('');  ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>No Registrasi:</label>
                                    <input type="text" class="form-control" placeholder="" name="no_registrasi"
                                        value="<?= set_value('no_registrasi'); ?>">
                                    <?= form_error('no_registrasi', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                </div>
                                <div class="col-lg-4">
                                    <label>Hari/Tanggal:</label>
                                    <input type="date" class="form-control" name="tanggal_pengaduan"
                                        value="<?= set_value('tanggal_pengaduan'); ?>">
                                    <?= form_error('tanggal_pengaduan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Cara Datang:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cara_datang" placeholder=""
                                            value="<?= set_value('cara_datang'); ?>" />
                                    </div>
                                    <?= form_error('cara_datang', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Korban Kekerasan:</label>
                                    <select class="form-control" name="korban_kekerasan"
                                        id="cform-control form-control-solid form-control-lg">
                                        <?php foreach ($korban as $kbn) : ?>
                                        <option value="<?= $kbn ?>"><?= $kbn  ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('korban_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Kategori Kekerasan:</label>
                                    <select class="form-control" name="kategori_kekerasan"
                                        id="cform-control form-control-solid form-control-lg">
                                        <?php foreach ($kekerasan as $key) : ?>
                                        <option value="<?= $key ?>"><?= $key  ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kategori_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Bentuk Kekerasan:</label>
                                    <select class="form-control select2" id="kt_select2_1"
                                        name="id_sub_jenis_kekerasan">
                                        <?php foreach ($sub_kekerasan as $sub) : ?>
                                        <option value="<?= $sub['id_sub_bentuk_kekerasan'] ?>">
                                            <?= $sub['sub_jenis_kekerasan']  ?>, kategori <?= $sub['jenis_kekerasan'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('sub_jenis_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Alamat Kejadian:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="alamat_kejadian" placeholder=""
                                            value="<?= set_value('alamat_kejadian'); ?>" />
                                    </div>
                                    <?= form_error('alamat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <span class="form-text text-muted">Isikan alamat kejadian dengan lengkap dusun,
                                        desa dan kecamatan</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Waktu Kejadian:</label>
                                    <input type="date" class="form-control" name="waktu_kejadian" placeholder="" />
                                    <?= form_error('waktu_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Tempat Kejadian:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tempat_kejadian" placeholder=""
                                            value="<?= set_value('tempat_kejadian'); ?>" />
                                    </div>
                                    <?= form_error('tempat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Desa:</label>
                                    <select class="form-control select2" id="kt_select2_2" name="id_desa">
                                        <?php foreach ($desa as $des) : ?>
                                        <option value="<?= $des['id_desa'] ?>">
                                            <?= $des['nama_desa']  ?>, kecamatan <?= $des['nama_kecamatan'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Hubungan Dengan Korban:</label>
                                    <input type="text" class="form-control" name="hubungan_dengan_korban"
                                        value="<?= set_value('hubungan_dengan_korban'); ?>" placeholder="" />
                                    <?= form_error('hubungan_dengan_korban', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <span class="form-text text-muted">Hubungan dengan korban, Contoh: Teman, Tetangga,
                                        Keluarga, Ayah, Ibu</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Pelapor:</label>
                                    <!-- <input type="text" class="form-control" value="<?= $pelaporan_kasus['nama']  ?>"
                                        disabled />
                                    <input type="hidden" class="form-control" name="nama" placeholder=""
                                        value="<?= $pelaporan_kasus['id_pelapor']  ?>" disabled />
                                    <?= form_error('nama_pelapor', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?> -->
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Alamat Pelapor:</label>
                                    <input type="text" class="form-control" name="alamat_pelapor"
                                        value="<?= set_value('alamat_pelapor'); ?>" placeholder="" />
                                    <?= form_error('alamat_pelapor', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Tahun Pengaduan:</label>
                                    <input type="text" class="form-control" name="tahun_pengaduan"
                                        value="<?= set_value('tahun_pengaduan'); ?>" placeholder="" />
                                    <?= form_error('tahun_pengaduan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Longitude:</label>
                                    <input type="text" class="form-control" name="longitude"
                                        value="<?= set_value('longitude'); ?>" placeholder="" />
                                    <?= form_error('longitude', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Latitude:</label>
                                    <input type="text" class="form-control" name="latitude"
                                        value="<?= set_value('latitude'); ?>" placeholder="" />
                                    <?= form_error('latitude', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Foto Korban:</label>
                                    <input type="file" class="form-control" name="image"
                                        value="<?= set_value('image'); ?>" placeholder="" />
                                    <?= form_error('image', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Kronologis Kejadian:</label>
                                    <textarea type="text" class="form-control" name="kronologis_kejadian"
                                        placeholder=""></textarea>
                                    <?= form_error('kronologis_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6 text-lg-right">
                                    <a href="<?= site_url('pengaduan') ?>" class="btn btn-secondary mr-2">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close() ?>
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