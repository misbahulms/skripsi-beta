<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Kelola User</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <!-- <button id-data="<?= $data['id_user']; ?>"
                class="btn btn-secondary btn-hover-secondary btn-sm text-dark-75 font-size-sm tombol-hapus">
                <i class="far fa-trash-alt" style="color: #F64E60"></i>
                Hapus</button> -->
            <a href="<?= base_url('user/adduser') ?>" class="btn btn-success font-weight-bold">
                <i class="fas fa-pen-square"></i>Tambah
            </a>
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
                <!-- ENDFLASH DATA -->

                <!-- Page Search -->
                <!-- <div class="card-header border-0">
                </div> -->
                <div class="col-md-3 py-7 ml-5">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Search..." name="dataTable_filter"
                            id="dataTable_filter">
                        <span>
                            <i class="flaticon2-search-1 text-muted"></i>
                        </span>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body py-3 col-lg">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless"
                            id="dataTable_filter">
                            <thead>
                                <tr class="text-left">
                                    <th scope="col">No</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Hp</th>

                                    <th style="min-width: 210px">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($row as $data) : ?>
                                <tr>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            <?= $i; ?></span>
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>assets/images/<?= $data['image'] ?>" width="30">
                                    </td>
                                    <td class="py-5">
                                        <a href="<?= base_url('user/detailuser/') ?><?= $data['id_user'] ?>">
                                            <?= $data['nama']; ?></a>
                                    </td>
                                    <!-- jabatan -->
                                    <td>
                                        <?= $data['email']; ?></td>
                                    <!-- Hanphone -->
                                    <td>
                                        <?= $data['alamat']; ?>
                                    </td>
                                    <!-- Email -->
                                    <td>
                                        <?= $data['no_hp']; ?>
                                    </td>

                                    <td class="py-0 ">
                                        <a href="<?= site_url('user/edituser/') ?><?= $data['id_user'] ?>"
                                            class="btn btn-success font-weight-bold">
                                            <i class="fas fa-pen-square"></i>Edit
                                        </a>
                                        <a href="<?= site_url('user/delete/') ?><?= $data['id_user'] ?>"
                                            class="btn btn-danger font-weight-bold tombol-hapus">
                                            <i class="fas fa-pen-square"></i>Hapus
                                        </a>
                                    </td>
                                </tr>
                                <!--end::Svg Icon-->
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div>
                    <!--end::Table-->
                    <!-- buat pagination -->
                    <div class="d-flex flex-row-fluid">
                        <div class="row pt-5 ml-auto">
                            <div class="col">
                                <!--Tampilkan pagination-->
                                <div class="pagging text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item active"><span class="page-link">1<span
                                                        class="sr-only">(current)</span></span></li>
                                            <li class="page-item"><span class="page-link"><a
                                                        href="http://sidimas.ladabunpontianak.com/surat_masuk/disposisi/10"
                                                        data-ci-pagination-page="2">2</a></span></li>
                                            <li class="page-item"><span class="page-link"><a
                                                        href="http://sidimas.ladabunpontianak.com/surat_masuk/disposisi/20"
                                                        data-ci-pagination-page="3">3</a></span></li>
                                            <li class="page-item"><span class="page-link"><a
                                                        href="http://sidimas.ladabunpontianak.com/surat_masuk/disposisi/30"
                                                        data-ci-pagination-page="4">4</a></span></li>
                                            <li class="page-item"><span class="page-link"><a
                                                        href="http://sidimas.ladabunpontianak.com/surat_masuk/disposisi/40"
                                                        data-ci-pagination-page="5">5</a></span></li>
                                            <li class="page-item"><span class="page-link"><a
                                                        href="http://sidimas.ladabunpontianak.com/surat_masuk/disposisi/10"
                                                        data-ci-pagination-page="2" rel="next">&gt;</a></span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
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


<!-- script untuk tombol hapus -->