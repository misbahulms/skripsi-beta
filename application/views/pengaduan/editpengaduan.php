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
                            <h3 class="card-title">Edit Pengaduan</h3>
                        </div>
                        <!--begin::Form-->

                        <?php echo form_open_multipart('');  ?>
                        <input type="hidden" name="id_pengaduan" value="<?= $pengaduan_kasus['id_pengaduan'] ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>No Registrasi:</label>
                                    <input type="text" class="form-control" placeholder="" name="no_registrasi"
                                        value="<?= $pengaduan_kasus['no_registrasi'] ?>">
                                    <?= form_error('no_registrasi', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                </div>
                                <div class="col-lg-4">
                                    <label>Hari/Tanggal:</label>
                                    <input type="date" class="form-control" name="tanggal_pengaduan"
                                        value="<?= $pengaduan_kasus['tanggal_pengaduan'] ?>">
                                    <?= form_error('tanggal_pengaduan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Cara Datang:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cara_datang" placeholder=""
                                            value="<?= $pengaduan_kasus['cara_datang'] ?>" />
                                    </div>
                                    <?= form_error('cara_datang', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Korban Kekerasan:</label>
                                    <input type="text" class="form-control" name="korban_kekerasan"
                                        value="<?= $pengaduan_kasus['korban_kekerasan'] ?>">
                                    <?= form_error('korban_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Kategori Kekerasan:</label>
                                    <select class="form-control" name="kategori_kekerasan"
                                        id="cform-control form-control-solid form-control-lg">
                                        <?php foreach ($kekerasan as $key) : ?>
                                        <?php if ($key == $pengaduan_kasus['kategori_kekerasan']) : ?>
                                        <option value="<?= $key ?>" selected><?= $key  ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $key ?>"><?= $key  ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kategori_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Bentuk Kekerasan:</label>
                                    <select class="form-control select2" id="kt_select2_1"
                                        name="id_sub_bentuk_kekerasan">
                                        <?php foreach ($sub_kekerasan as $sub) : ?>
                                        <?php if ($sub['id_sub_bentuk_kekerasan'] == $pengaduan_kasus['id_sub_bentuk_kekerasan']) : ?>
                                        <option value="<?= $sub['id_sub_bentuk_kekerasan'] ?>" selected>
                                            <?= $sub['sub_jenis_kekerasan']  ?>,
                                            Kategori <?= $sub['jenis_kekerasan']  ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $sub['id_sub_bentuk_kekerasan'] ?>">
                                            <?= $sub['sub_jenis_kekerasan']  ?>, Kategori
                                            <?= $sub['jenis_kekerasan']  ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Alamat Kejadian:</label>
                                    <input type="text" class="form-control" name="alamat_kejadian"
                                        value="<?= $pengaduan_kasus['alamat_kejadian'] ?>">
                                    <?= form_error('alamat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Waktu Kejadian:</label>
                                    <input type="text" class="form-control" name="waktu_kejadian"
                                        value="<?= date($pengaduan_kasus['waktu_kejadian']) ?>">
                                    <?= form_error('waktu_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Tempat Kejadian:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tempat_kejadian" placeholder=""
                                            value="<?= $pengaduan_kasus['tempat_kejadian'] ?>" />
                                    </div>
                                    <?= form_error('tempat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Hubungan Dengan Korban:</label>
                                    <input type="text" class="form-control" name="hubungan_dengan_korban"
                                        value="<?= $pengaduan_kasus['hubungan_dengan_korban'] ?>" placeholder="" />
                                    <?= form_error('hubungan_dengan_korban', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Tahun Pengaduan:</label>
                                    <input type="text" class="form-control" name="tahun_pengaduan"
                                        value="<?= $pengaduan_kasus['tahun_pengaduan'] ?>" placeholder="" />
                                    <?= form_error('tahun_pengaduan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Desa Kejadian:</label>
                                    <!-- <input type="text" class="form-control" name="id_desa" placeholder=""
                                        value="<?= $desa['nama_desa']  ?>" /> -->
                                    <select class="form-control select2" id="kt_select2_2" name="id_desa">
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
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Pelapor:</label>
                                    <input type="text" class="form-control" placeholder="" name="nama"
                                        value="<?= $pengaduan_kasus['nama'] ?>" disabled>
                                    <?= form_error('nama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Alamat Pelapor:</label>
                                    <input type="text" class="form-control" placeholder="" name="alamat_pelapor"
                                        value="<?= $pengaduan_kasus['alamat_pelapor'] ?>">
                                    <?= form_error('alamat_pelapor', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Longitude:</label>
                                    <input type="text" class="form-control" name="longitude"
                                        value="<?= $pengaduan_kasus['longitude'] ?>" placeholder="" />
                                    <?= form_error('longitude', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Latitude:</label>
                                    <input type="text" class="form-control" name="latitude"
                                        value="<?= $pengaduan_kasus['latitude'] ?>" placeholder="" />
                                    <?= form_error('latitude', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Kronologis Kejadian:</label>
                                    <textarea type="text" class="form-control" name="kronologis_kejadian"
                                        placeholder=""><?= $pengaduan_kasus['kronologis_kejadian'] ?></textarea>
                                    <?= form_error('kronologis_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                </div>
                                <div class="col-lg-4">
                                    <label>Foto Korban:</label>
                                    <div class="col-lg-12">
                                        <img src="<?= base_url(); ?>assets/images/<?= $pengaduan_kasus['image'] ?>"
                                            width="90" height="110" class="mb-3">
                                        <input type="file" class="form-control" name="image"
                                            value="<?= $pengaduan_kasus['image'] ?>" placeholder="" />
                                        <?= form_error('image', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                        <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                    </div>
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