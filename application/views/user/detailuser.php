<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Detail User</h5>
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
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">

                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div
                                    class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label"
                                        style="background-image: url(<?= base_url() ?>assets/images/<?= $user['image'] ?>">
                                    </div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href=""
                                        class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"><?= $row['nama'] ?></a>
                                    <!-- <div class="text-muted">Application Developer</div> -->
                                    <div class="mt-2">
                                        <!-- <a href="#"
                                                            class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a> -->
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Role:</span>
                                    <a href="#" class="text-muted text-hover-primary"><?= $row['role'] ?></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Nomor Hp:</span>
                                    <span class="text-muted"><?= $row['no_hp'] ?></span>
                                </div>
                                <!-- <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-weight-bold mr-2">Location:</span>
                                            <span class="text-muted">Melbourne</span>
                                        </div> -->
                            </div>
                            <!--end::Contact-->
                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                <div class="navi-item mb-2">
                                    <a href="/metronic/demo1/custom/apps/profile/profile-1/overview.html"
                                        class="navi-link py-4">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
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
                                        <span class="navi-text font-size-lg">Profile Overview</span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2">
                                    <a href="/metronic/demo1/custom/apps/profile/profile-1/personal-information.html"
                                        class="navi-link py-4 active">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path
                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <path
                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Personal Information</span>
                                    </a>
                                </div>


                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Personal Information
                                </h3>
                                <!-- <span class="text-muted font-weight-bold font-size-sm mt-1">Update your
                                            personal informaiton</span> -->
                            </div>
                            <div class="card-toolbar">
                                <!-- <button type="reset" class="btn btn-success mr-2">Save Changes</button> -->
                                <a href="<?= base_url('user') ?>"
                                    class="btn btn-secondary font-weight-bold mr-2">Kembali</a>

                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <!-- <h5 class="font-weight-bold mb-6">Data Pribadi</h5> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline" id="kt_profile_avatar"
                                            style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/users/blank.png)">
                                            <div class="image-input-wrapper"
                                                style="background-image: url(<?= base_url() ?>assets/images/<?= $user['image'] ?>">
                                            </div>
                                            <!-- <label
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="change" data-toggle="tooltip" title=""
                                                        data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar"
                                                            accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove">
                                                    </label> -->
                                            <!-- <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="cancel" data-toggle="tooltip" title=""
                                                        data-original-title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                        data-action="remove" data-toggle="tooltip" title=""
                                                        data-original-title="Remove avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span> -->
                                        </div>
                                        <!-- <span class="form-text text-muted">Allowed file types: png, jpg,
                                                    jpeg.</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input disabled class="form-control form-control-lg form-control-solid"
                                            type="text" value="<?= $row['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input disabled class="form-control form-control-lg form-control-solid"
                                            type="text" value="<?= $row['alamat'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Role</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input disabled class="form-control form-control-lg form-control-solid"
                                            type="text" value="<?= $row['role'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Is Active</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input disabled class="form-control form-control-lg form-control-solid"
                                            type="text" value="<?= $row['is_active'] ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nomor Hp</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                value="<?= $row['no_hp'] ?>">
                                        </div>
                                        <!-- <span class="form-text text-muted">We'll never share your email
                                                    with anyone else.</span> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email
                                    </label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-at"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                value="<?= $row['email'] ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Personal Information-->
        </div>
        <!--end::Container-->
    </div>


    <!--end::Entry-->
</div>