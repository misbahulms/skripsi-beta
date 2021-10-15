<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Kelola Pengaduan Kasus</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <!-- <a href="<?= site_url('pengaduan/addpengaduan') ?>" class="btn btn-sm btn-icon btn-outline-success"
                data-toggle="popover" aria-haspopup="true" aria-expanded="false" data-content="Tambah">
                <i class="flaticon-add"></i>
            </a> -->
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
                <!-- <div class="card-header border-0 py-5">
                </div> -->
                <!--end::Header-->
                <div class="col-md-3 py-7 ml-5">
                    <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Search..." name="dataTable_filter"
                            id="dataTable_filter">
                        <span>
                            <i class="flaticon2-search-1 text-muted"></i>
                        </span>
                    </div>
                </div>

                <!--begin::Body-->
                <div class="card-body py-0 col-lg">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless"
                            id="dataTable_filter">
                            <thead>
                                <tr class="text-left">
                                    <th scope="col">No</th>
                                    <th scope="col">No Registrasi</th>
                                    <th scope="col">Hari/Tanggal</th>
                                    <th scope="col">Cara Datang</th>
                                    <th scope="col">Korban Kekerasan</th>
                                    <th scope="col">Kategori Kekerasan</th>
                                    <th scope="col">Desa Kejadian</th>
                                    <th style="min-width: 200px" class="px-10">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pengaduan_kasus as $kasus) : ?>
                                <tr>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            <?= $i; ?> </span>
                                    </td>
                                    <td class="py-5">
                                        <a href="<?= site_url('pengaduan/detail/') ?><?= $kasus['id_pengaduan'] ?>"><?= $kasus['no_registrasi'];  ?>
                                        </a>
                                    </td>
                                    <td>
                                        <div><?= tgl_indonesia($kasus['tanggal_pengaduan']); ?></div>
                                    </td>
                                    <td>
                                        <div><?= $kasus['cara_datang'];  ?></div>
                                    </td>
                                    <td>
                                        <div><?= $kasus['korban_kekerasan'];  ?></div>
                                    </td>
                                    <td>
                                        <div><?= $kasus['kategori_kekerasan'];  ?></div>
                                    </td>
                                    <td>
                                        <div><?= $kasus['nama_desa'];  ?>, kecamatan <?= $kasus['nama_kecamatan'];  ?>
                                        </div>
                                    </td>
                                    <td class="px-10">
                                        <a href="<?= site_url('pengaduan/editpengaduan/') ?><?= $kasus['id_pengaduan'] ?>"
                                            class="btn btn-sm btn-icon btn-info mr-1" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="edit">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <a href="<?= site_url('pengaduan/delete/') ?><?= $kasus['id_pengaduan'] ?>"
                                            class="btn btn-sm btn-icon btn-danger tombol-hapus mr-1"
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="hapus">
                                            <i class="far fa-trash-alt"></i>
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