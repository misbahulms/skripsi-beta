<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Detail Pelaporan</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <a href="<?= site_url('pelaporan') ?>" class="btn btn-sm btn-secondary" data-container="body"
                data-toggle="popover" data-placement="left" data-content="Kembali">Kembali
            </a>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                    <path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Data Pelaporan</span>
                                </a>
                            </li>
                            <!--end::Item-->
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <form class="form" id="kt_form">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <!-- <h6 class="text-dark font-weight-bold mb-10">Data Pelapor:
                                                </h6> -->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Foto
                                                Korban</label>
                                            <div class="col-9">
                                                <img src="<?= base_url(); ?>assets/images/<?= $pelaporan['image'] ?>"
                                                    width="90" height="110">
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Tanggal
                                                Pelaporan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text"
                                                    value="<?= tgl_indonesia($pelaporan['tanggal_pelaporan']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nama
                                                Pelapor</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['nama'] ?>">
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Alamat
                                                Pelapor</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['alamat_pelapor'] ?>">
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nomor
                                                Hp</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        value="<?= $pelaporan['no_hp'] ?>">
                                                </div>
                                                <!-- <span class="form-text text-muted">We'll never share your email with
                                                        anyone else.</span> -->
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Status
                                                Laporan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['keterangan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Hubungan
                                                Korban</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['hubungan_dengan_korban'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Korban
                                                Kekerasan</label>
                                            <div class="col-9">
                                                <div class="">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        type="text" value="<?= $pelaporan['korban_kekerasan'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Tempat
                                                Kejadian</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['tempat_kejadian'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Alamat
                                                Kejadian</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pelaporan['alamat_kejadian'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Desa</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text"
                                                    value="<?= $pelaporan['nama_desa'] ?>, Kecamatan <?= $pelaporan['nama_kecamatan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Kronologis
                                                Kejadian</label>
                                            <div class="col-9">
                                                <textarea class="form-control form-control-lg form-control-solid"
                                                    type="text" rows="3"
                                                    value=""><?= $pelaporan['kronologis_kejadian'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Container-->
    </div>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->

        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Entry-->
</div>