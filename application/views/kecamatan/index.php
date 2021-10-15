<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Kelola Kecamatan</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <a href="<?= site_url('kecamatan/addkecamatan') ?>" class="btn btn-icon" data-toggle="popover"
                aria-haspopup="true" aria-expanded="false" data-content="Tambah">
                <span class="svg-icon svg-icon-success svg-icon-2x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
            <!-- <button class="btn btn-sm btn-success" data-toggle="tooltip" data-theme="dark" data-placement="left"
                title="Tambah">
                <i class="ki ki-plus icon-sm"></i></button> -->
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
            <div class="card card-custom gutter-b">
                <!--begin::Header-->

                <!-- FLASS DATA -->
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <?php if ($this->session->flashdata('message')) : ?>
                <?php endif; ?>

                <div class="card-header border-0 py-0">
                </div>
                <!--end::Header-->
                <!-- <div class="col-md-3 py-7 ml-5">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Search..." name="dataTable_filter"
                            id="dataTable_filter">
                        <span>
                            <i class="flaticon2-search-1 text-muted"></i>
                        </span>
                    </div>
                </div> -->

                <!--begin::Body-->
                <div class="card-body py-0 col-lg">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless"
                            id="dataTable_filter">
                            <thead>
                                <tr class="text-left">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kecamatan</th>
                                    <th scope="col">Geojson Kecamatan</th>
                                    <th scope="col">Warna Kecamatan</th>
                                    <th style="min-width: 210px">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kecamatan as $kec) : ?>
                                <tr>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            <?= $i; ?> </span>
                                    </td>
                                    <!-- <td class="py-5">
                                        <a href="<?= site_url('pelaporan/detail/') ?><?= $kec['id_pelapor'] ?>"><?= $plp['nama_pelapor'];  ?>
                                        </a>
                                    </td> -->
                                    <td>
                                        <div><?= $kec['nama_kecamatan'];  ?></div>
                                    </td>
                                    <td>
                                        <div><?= $kec['geojson_kecamatan'];  ?></div>
                                    </td>
                                    <td style="background: <?= $kec['warna_kecamatan'];  ?>;">
                                        <!-- <div style="background:  ;"></div> -->
                                    </td>

                                    <td class="py-0 ">
                                        <a href="<?= site_url('kecamatan/editkecamatan/') ?><?= $kec['id_kecamatan'] ?>"
                                            class="btn btn-sm btn-light" data-container="body" data-toggle="popover"
                                            data-placement="top" data-content="edit">
                                            <i class="fas fa-pen-square text-info"></i>
                                        </a>
                                        <a href="<?= site_url('kecamatan/delete/') ?><?= $kec['id_kecamatan'] ?>"
                                            class="btn btn-sm btn-light tombol-hapus" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="delete">
                                            <i class="far fa-trash-alt text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!--end::Svg Icon-->
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- buat pagination -->
                        <div class="d-flex flex-row-fluid">
                            <div class="row pt ml-auto">
                                <div class="col">
                                    <!--Tampilkan pagination-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
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