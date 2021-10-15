<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?= $title;  ?></h5>
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
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->

                        <!--end::Wizard Nav-->
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <?php echo form_open_multipart('kecamatan/addkecamatan');  ?>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-9">
                                                <!--begin::Wizard Step 1-->
                                                <div class="my-5 step" data-wizard-type="step-content"
                                                    data-wizard-state="current">
                                                    <h5 class="text-dark font-weight-bold mb-10">Tambah Kecamatan
                                                    </h5>
                                                    <!--begin::Group-->

                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row fv-plugins-icon-container has-danger">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Nama
                                                            Kecamatan</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input
                                                                class="form-control form-control-solid form-control-lg"
                                                                type="text" name="nama_kecamatan"
                                                                value="<?= set_value('nama_kecamatan'); ?>">
                                                            <?= form_error('nama_kecamatan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row fv-plugins-icon-container has-danger">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Geojson
                                                            Kecamatan</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input
                                                                class="form-control form-control-solid form-control-lg"
                                                                type="file" name="geojson_kecamatan">
                                                            <?= form_error('geojson_kecamatan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <div class="form-group row fv-plugins-icon-container has-danger">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Warna
                                                            Kecamatan</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input
                                                                class="form-control form-control-solid form-control-lg"
                                                                type="color" name="warna_kecamatan"
                                                                value="<?= set_value('warna_kecamatan'); ?>">
                                                            <?= form_error('warna_kecamatan', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Wizard Step 1-->
                                                <!--begin::Wizard Step 2-->

                                                <!--begin::Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                    <div class="mr-2">
                                                        <button
                                                            class="btn btn-light-primary font-weight-bolder px-9 py-4"
                                                            id="prev-step" type="button"
                                                            data-wizard-type="action-prev">Previous</button>
                                                    </div>
                                                    <div>
                                                        <a href="<?= site_url('kecamatan') ?>"
                                                            class="btn btn-success font-weight-bolder px-9 py-4"
                                                            id="next-step" type=""
                                                            data-wizard-type="action-next">Kembali</a>
                                                        <button class="btn btn-primary font-weight-bolder px-9 py-4"
                                                            id="next-step" type="submit"
                                                            data-wizard-type="action-next">Simpan</button>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Actions-->
                                            </div>
                                        </div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <!-- </form> -->
                                        <?php echo form_close() ?>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">

            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>