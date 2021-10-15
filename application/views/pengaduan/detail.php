<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Detail Pengaduan</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <a href="<?= site_url('pengaduan') ?>" class="btn btn-sm btn-secondary mr-2" data-container="body"
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
                                    <span class="nav-text font-size-lg">Pengaduan Kasus</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Data Korban</span>
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
                                    <span class="nav-icon">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="nav-text font-size-lg">Data Pelaku</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <!--end::Item-->
                            <!--begin::Item-->

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
                                    <div class="col-xl-12">
                                        <label class="col-3"></label>
                                        <div class="col-9">
                                            <h6 class="text-dark font-weight-bold mb-10">Foto Korban:
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="col-xl-4 pl-40">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url(<?= base_url(); ?>assets/images/<?= $pengaduan_kasus['image'] ?>)">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto korban">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="profile_avatar_remove" />

                                                </label>
                                                <span class="form-text text-muted">Foto saat penjangkauan</span>
                                                <!-- <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span> -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="column">
                                        <div class="col-xl-4 ">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto korban">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="profile_avatar_remove" />
                                                </label>
                                                <span class="form-text text-muted">Foto saat penjangkauan</span>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="col-xl-4 ">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto korban">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="profile_avatar_remove" />
                                                </label>
                                                <span class="form-text text-muted">Foto saat penjangkauan</span>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <div class="py-5 pl-35">
                                    <a href="<?= site_url('pengaduan/addkorban/') ?><?= $laporan_kasus['id_pengaduan'] ?>"
                                        class="btn btn-primary btn-sm px-4 gap-3">Tambah foto
                                        korban</a>
                                </div> -->

                                <div class="row">
                                    <!-- <div class="col-xl-2"></div> -->
                                    <div class="col-xl-6 my-5">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">Data Pengaduan:
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nomor
                                                Registrasi</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['no_registrasi'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Tanggal
                                                Pengaduan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['tanggal_pengaduan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Cara
                                                Datang</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['cara_datang'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nama
                                                Pelapor</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['nama'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Kategori
                                                Kekerasan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['kategori_kekerasan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Bentuk
                                                Kekerasan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['jenis_kekerasan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Sub Bentuk
                                                Kekerasan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['sub_jenis_kekerasan'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9 mb-15">
                                                <!-- <h6 class="text-dark font-weight-bold mb-10">Data Pengaduan:
                                                </h6> -->
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->

                                        <div class="form-group row my-3">
                                            <label class="col-form-label col-3 text-lg-right text-left">Waktu
                                                Kejadian</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text"
                                                    value="<?= tgl_indonesia($pengaduan_kasus['waktu_kejadian']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Tempat
                                                Kejadian</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['tempat_kejadian'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Tahun
                                                Pengaduan</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['tahun_pengaduan'] ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label
                                                class="col-form-label col-3 text-lg-right text-left">Longitude</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['longitude'] ?>">
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Latitude</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" value="<?= $pengaduan_kasus['latitude'] ?>">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Kronologis
                                                Kejadian</label>
                                            <div class="col-9">
                                                <textarea class="form-control form-control-lg form-control-solid"
                                                    type="text" rows="3"
                                                    value=""><?= $pengaduan_kasus['kronologis_kejadian'] ?></textarea>
                                            </div>
                                        </div>

                                        <!--end::Group-->
                                        <!--begin::Group-->

                                        <!--end::Group-->
                                        <!--begin::Group-->

                                        <!--end::Group-->

                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-0" id="kt_user_edit_tab_2" role="tabpanel">
                                <?php if (empty($korban)) : ?>
                                <div class="px-4 py-5 my-5 text-center">
                                    <img class="d-block mx-auto mb-4"
                                        src="<?= base_url() ?>assets/media/svg/avatars/011-boy-5.svg" alt="" width="72"
                                        height="57">
                                    <div class="col-lg-12 mx-auto">
                                        <p class="lead mb-4">Data Korban belum ada silahkan isi data korban
                                            untuk melengkapi data pengaduan</p>
                                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                            <a href="<?= site_url('pengaduan/addkorban/') ?><?= $laporan_kasus['id_pengaduan'] ?>"
                                                class="btn btn-primary btn-sm px-4 gap-3">Tambah data
                                                korban</a>
                                        </div>
                                    </div>
                                </div>
                                <?php else : ?>
                                <div class="py-5 px-10">
                                    <a href="<?= site_url('pengaduan/addkorban/') ?><?= $laporan_kasus['id_pengaduan'] ?>"
                                        class="btn btn-primary btn-sm px-4 gap-3">Tambah data
                                        korban</a>
                                </div>
                                <div class="card-body py-0 col-lg-12">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-head-custom table-head-bg table-vertical-center table-borderless"
                                            id="dataTable_filter">
                                            <thead>
                                                <tr class="text-left">
                                                    <th scope="col">No</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">Nama</th>
                                                    <!-- <th scope="col">Tempat Lahir</th>
                                                    <th scope="col">Tanggal Lahir</th> -->
                                                    <!-- <th scope="col">Umur</th> -->
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <!-- <th scope="col">Alamat</th> -->
                                                    <th scope="col">Desa</th>
                                                    <!-- <th scope="col">Kecamatan</th> -->
                                                    <th scope="col">Agama</th>
                                                    <th scope="col">Status Perkawinan</th>
                                                    <th scope="col">Pekerjaan</th>
                                                    <!-- <th scope="col">Nama Ayah</th>
                                                    <th scope="col">Nama Ibu</th> -->
                                                    <th scope="col">Pendidikan Terakhir</th>
                                                    <!-- <th scope="col">Jumlah Saudara</th> -->
                                                    <th style="min-width: 100px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($korban as $kbn) : ?>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                            <?= $i; ?> </span>
                                                    </td>
                                                    <!-- <td class="py-5">
                                                                   <a
                                                                       href="<?= site_url('person/detail/') ?><?= $pers['nik'] ?>"><?= $pers['nik'];  ?>
                                                                   </a>
                                                               </td> -->
                                                    <td>
                                                        <div><?= $kbn['nik'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $kbn['nama'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $kbn['tempat_lahir'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $kbn['tanggal_lahir'];  ?></div>
                                                    </td> -->
                                                    <!-- <td>
                                                        <div><?= $kbn[''];  ?></div>
                                                    </td> -->
                                                    <td>
                                                        <div><?= $kbn['jenis_kelamin'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $kbn['alamat'];  ?></div>
                                                    </td> -->
                                                    <td>
                                                        <div><?= $kbn['nama_desa'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $kbn['nama_kecamatan'];  ?></div>
                                                    </td> -->
                                                    <td>
                                                        <div><?= $kbn['agama'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $kbn['status_perkawinan'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $kbn['pekerjaan'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $kbn['nama_ayah'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $kbn['nama_ibu'];  ?></div>
                                                    </td> -->
                                                    <td>
                                                        <div><?= $kbn['pendidikan_terakhir'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $kbn['jumlah_saudara'];  ?></div>
                                                    </td> -->

                                                    <td class="py-0 ">
                                                        <a href="<?= site_url('pengaduan/editkorban/') ?><?= $kbn['id_korban'] ?>"
                                                            class="btn btn-sm btn-icon btn-info mr-1"
                                                            data-container="body" data-toggle="popover"
                                                            data-placement="top" data-content="edit">
                                                            <i class="fas fa-pen-square"></i>
                                                        </a>
                                                        <a href="<?= site_url('pengaduan/deletekorban/') ?><?= $kbn['id_korban'] ?>"
                                                            class="btn btn-sm btn-icon btn-danger tombol-hapus"
                                                            data-container="body" data-toggle="popover"
                                                            data-placement="top" data-content="hapus">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!--end::Svg Icon-->
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                        <!-- buat pagination -->
                                        <!-- <div class="d-flex flex-row-fluid">
                                                       <div class="row pt ml-auto">
                                                           <div class="col">
                                                               <?= $pagination;  ?>
                                                           </div>
                                                       </div>
                                                   </div> -->
                                    </div>

                                    <!-- penutup dari jika korban sudah ada maka view data korban belum ada disembunyikan -->
                                    <!--end::Table-->
                                </div>
                                <?php endif; ?>

                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-0" id="kt_user_edit_tab_3" role="tabpanel">
                                <?php if (empty($pelaku)) : ?>
                                <div class="px-4 py-5 my-5 text-center">
                                    <img class="d-block mx-auto mb-4"
                                        src="<?= base_url() ?>assets/media/svg/avatars/001-boy.svg" alt="" width="72"
                                        height="57">
                                    <!-- <h1 class="display-5 fw-bold">Centered hero</h1> -->
                                    <div class="col-lg-12 mx-auto">
                                        <p class="lead mb-4">Data Pelaku belum ada silahkan isi data pelaku
                                            untuk melengkapi data pengaduan</p>
                                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                            <a href="<?= site_url('pengaduan/addpelaku/') ?><?= $laporan_kasus['id_pengaduan'] ?>"
                                                class="btn btn-primary btn-sm px-4 gap-3">Tambah data
                                                pelaku</a>
                                        </div>
                                    </div>
                                </div>
                                <?php else : ?>
                                <div class="py-5 px-10">
                                    <a href="<?= site_url('pengaduan/addpelaku/') ?><?= $laporan_kasus['id_pengaduan'] ?>"
                                        class="btn btn-primary btn-sm px-4 gap-3">Tambah data
                                        pelaku</a>
                                </div>
                                <div class="card-body py-0 col-lg-12">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-head-custom table-head-bg table-vertical-center table-borderless"
                                            id="dataTable_filter">
                                            <thead>
                                                <tr class="text-left">
                                                    <th scope="col">No</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">Nama</th>
                                                    <!-- <th scope="col">Tempat Lahir</th>
                                                    <th scope="col">Tanggal Lahir</th> -->
                                                    <th scope="col">Umur</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <!-- <th scope="col">Alamat</th> -->
                                                    <th scope="col">Desa</th>
                                                    <th scope="col">Kecamatan</th>
                                                    <th scope="col">Agama</th>
                                                    <!-- <th scope="col">Status Perkawinan</th>
                                                    <th scope="col">Pekerjaan</th> -->
                                                    <!-- <th scope="col">Nama Ayah</th>
                                                        <th scope="col">Nama Ibu</th> -->
                                                    <th scope="col">Pendidikan Terakhir</th>
                                                    <!-- <th scope="col">Jumlah Saudara</th> -->
                                                    <th style="min-width: 100px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($pelaku as $plk) : ?>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                            <?= $i; ?> </span>
                                                    </td>
                                                    <!-- <td class="py-5">
                                                                    <a
                                                                        href="<?= site_url('person/detail/') ?><?= $pers['nik'] ?>"><?= $pers['nik'];  ?>
                                                                    </a>
                                                                </td> -->
                                                    <td>
                                                        <div><?= $plk['nik'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $plk['nama'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                            <div><?= $plk['tempat_lahir'];  ?></div>
                                                        </td>
                                                        <td>
                                                            <div><?= $plk['tanggal_lahir'];  ?></div>
                                                        </td> -->
                                                    <td>
                                                        <div><?= hitung_umur($plk['tanggal_lahir']);  ?></div>
                                                    </td>
                                                    <td>
                                                    <?php if  (hitung_umur($plk['tanggal_lahir']) < 18) :  ?>
                                                        <div><?= "ABH(Anak Berhadapan Hukum)" ?></div>
                                                        <?php elseif(hitung_umur($plk['tanggal_lahir']) > 18) : ?>
                                                        <div><?= "Dewasa" ?></div>  
                                                    <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div><?= $plk['jenis_kelamin'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                            <div><?= $plk['alamat'];  ?></div>
                                                        </td> -->
                                                    <td>
                                                        <div><?= $plk['nama_desa'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $plk['nama_kecamatan'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $plk['agama'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                        <div><?= $plk['status_perkawinan'];  ?></div>
                                                    </td>
                                                    <td>
                                                        <div><?= $plk['pekerjaan'];  ?></div>
                                                    </td> -->
                                                    <!-- <td>
                                                            <div><?= $plk['nama_ayah'];  ?></div>
                                                        </td>
                                                        <td>
                                                            <div><?= $plk['nama_ibu'];  ?></div>
                                                        </td> -->
                                                    <td>
                                                        <div><?= $plk['pendidikan_terakhir'];  ?></div>
                                                    </td>
                                                    <!-- <td>
                                                            <div><?= $plk['jumlah_saudara'];  ?></div>
                                                        </td> -->

                                                    <td class="px-0 ">
                                                        <a href="<?= site_url('pengaduan/editpelaku/') ?><?= $plk['id_pelaku'] ?>"
                                                            class="btn btn-sm btn-icon btn-info" data-container="body"
                                                            data-toggle="popover" data-placement="top"
                                                            data-content="edit">
                                                            <i class="fas fa-pen-square"></i>
                                                        </a>
                                                        <a href="<?= site_url('pengaduan/deletepelaku/') ?><?= $plk['id_pelaku'] ?>"
                                                            class="btn btn-sm btn-icon btn-danger tombol-hapus"
                                                            data-container="body" data-toggle="popover"
                                                            data-placement="top" data-content="hapus">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!--end::Svg Icon-->
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                        <!-- buat pagination -->
                                        <!-- <div class="d-flex flex-row-fluid">
                                                        <div class="row pt ml-auto">
                                                            <div class="col">
                                                                <?= $pagination;  ?>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                    </div>

                                    <!-- penutup dari jika korban sudah ada maka view data korban belum ada disembunyikan -->
                                    <!--end::Table-->
                                </div>
                                <?php endif; ?>

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