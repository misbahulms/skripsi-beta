<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Kelola Pelaporan</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="mr-3">
                <a href="<?= site_url('pelaporan/addpelaporan') ?>" class="btn btn-sm btn-icon btn-outline-success"
                    data-toggle="popover" aria-haspopup="true" aria-expanded="false" data-content="Tambah">
                    <i class="flaticon-add"></i>
                </a>
            </div>
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
                                    <th scope="col">Nama Pelapor</th>
                                    <th scope="col">Korban Kekerasan</th>
                                    <th scope="col">Tanggal Pelaporan</th>
                                    <th scope="col">Status Laporan</th>
                                    <th scope="col">Diterima / Ditolak/ Diproses</th>
                                    <th style="min-width: 210px">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pelaporan as $plp) : ?>
                                <tr>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            <?= $i; ?> </span>
                                    </td>
                                    <td class="py-5">
                                        <a href="<?= site_url('pelaporan/detail/') ?><?= $plp['id_pelapor'] ?>"><?= $plp['nama'];  ?>
                                        </a>
                                    </td>
                                    <td>
                                        <div><?= $plp['korban_kekerasan'];  ?></div>
                                    </td>
                                    <td>
                                        <div><?= tgl_indonesia($plp['tanggal_pelaporan']); ?></div>
                                    </td>
                                    <td>
                                        <span
                                            class="label label-lg label-light-info label-inline"><?= $plp['keterangan'];  ?></span>

                                    </td>
                                    <td class="px-3 ">
                                        <a href="<?= base_url() ?>pelaporan/updatestatus/<?= $plp['id_pelapor'] ?>/2"
                                            class="btn btn-sm btn-outline-success mr-2" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="diterima">
                                            <i class="flaticon2-notepad"></i>
                                        </a>
                                        <a href="<?= base_url() ?>pelaporan/updatestatus/<?= $plp['id_pelapor'] ?>/3"
                                            class="btn btn-sm btn-outline-danger mr-2" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="ditolak">
                                            <i class="flaticon2-delete"></i>
                                        </a>
                                        <a href="<?= base_url() ?>pelaporan/updatestatus/<?= $plp['id_pelapor'] ?>/1"
                                            class="btn btn-sm btn-outline-primary" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="diproses">
                                            <i class="flaticon2-document"></i>
                                        </a>
                                    </td>

                                    <td class="py-0 ">
                                        <a href="<?= site_url('pelaporan/editpelaporan/') ?><?= $plp['id_pelapor'] ?>"
                                            class="btn btn-sm btn-icon btn-info mr-1" data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="edit">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <a href="<?= site_url('pelaporan/delete/') ?><?= $plp['id_pelapor'] ?>"
                                            class="btn btn-sm btn-icon btn-danger tombol-hapus mr-1"
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="hapus">
                                            <i class="far fa-trash-alt"></i>
                                        </a>

                                        <!-- jika status belum diterima maka tidak bisa melakukan pengaduan -->
                                        <?php if ($plp['id_status'] === '2') : ?>
                                        <a href="<?= site_url('pengaduan/ajukanpengaduan/') ?><?= $plp['id_pelapor'] ?>"
                                            class="btn btn-sm btn-icon btn-primary " data-container="body"
                                            data-toggle="popover" data-placement="top" data-content="ajukan pengaduan">
                                            <i class="far fa-arrow-alt-circle-right"></i>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <!--end::Svg Icon-->
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- buat pagination -->

                    </div>
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


<!-- script untuk tombol hapus -->