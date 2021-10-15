<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?= $title; ?></h5>
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
                            <h3 class="card-title">Tambah Pelaporan</h3>

                        </div>
                        <!--begin::Form-->
                        <!-- <form class="form" method="post" action="<?= base_url('pelaporan/addpelaporan') ?>"> -->
                        <?php echo form_open_multipart('pelaporan/addpelaporan');  ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <input type="hidden" class="form-control" placeholder="" name="id_user"
                                    value="<?= $user['id_user'] ?>">
                                <div class="col-lg-6">
                                    <label>Korban Kekerasan:</label>
                                    <select class="form-control" name="korban_kekerasan"
                                        id="cform-control form-control-solid form-control-lg">
                                        <?php foreach ($korban as $pl) : ?>
                                        <option value="<?= $pl ?>"><?= $pl  ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('korban_kekerasan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                </div>
                                <div class="col-lg-6">
                                    <label>Tempat Kejadian:</label>
                                    <input type="text" class="form-control" name="tempat_kejadian"
                                        value="<?= set_value('tempat_kejadian'); ?>" placeholder="" />
                                    <?= form_error('tempat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Alamat Kejadian:</label>
                                    <input type="text" class="form-control" name="alamat_kejadian"
                                        value="<?= set_value('alamat_kejadian'); ?>" placeholder="" />
                                    <?= form_error('alamat_kejadian', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <span class="form-text text-muted">Isikan alamat kejadian dengan lengkap dusun,
                                        desa dan kecamatan</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Hubungan Dengan Korban:</label>
                                    <input type="text" class="form-control" name="hubungan_dengan_korban"
                                        value="<?= set_value('hubungan_dengan_korban'); ?>" placeholder="" />
                                    <?= form_error('hubungan_dengan_korban', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <span class="form-text text-muted">Hubungan dengan korban, Contoh: Teman, Tetangga,
                                        Keluarga, Ayah, Ibu</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Tanggal Pelaporan:</label>
                                    <input type="date" class="form-control" name="tanggal_pelaporan"
                                        placeholder="09/10/2021" />
                                    <?= form_error('tanggal_pelaporan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-6">
                                    <label>Alamat Pelapor:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="alamat_pelapor"
                                            placeholder="Enter your address"
                                            value="<?= set_value('alamat_pelapor'); ?>" />
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="la la-map-marker"></i></span></div>
                                    </div>
                                    <?= form_error('alamat_pelapor', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your address</span> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Nomor Hp:</label>
                                    <input type="text" class="form-control" name="no_hp"
                                        value="<?= set_value('no_hp'); ?>">
                                    <?= form_error('no_hp', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-6">
                                    <label>Desa Kejadian:</label>
                                    <select class="form-control select2" id="kt_select2_1" name="id_desa">
                                        <?php foreach ($desa as $des) : ?>
                                        <option value="<?= $des['id_desa'] ?>">
                                            <?= $des['nama_desa']  ?>, Kecamatan <?= $des['nama_kecamatan'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Foto Korban:</label>
                                    <input type="file" class="form-control" name="image"
                                        value="<?= set_value('image'); ?>" placeholder="" />
                                    <?= form_error('image', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                    <!-- <span class="form-text text-muted">Please enter your contact number</span> -->
                                </div>
                                <div class="col-lg-6">
                                    <label>Kronologis Kejadian:</label>
                                    <textarea type="text" class="form-control" name="kronologis_kejadian"
                                        placeholder=""><?= set_value('kronologis_kejadian'); ?></textarea>
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
                                    <a href="<?= site_url('pelaporan') ?>" class="btn btn-secondary mr-2">Kembali</a>
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