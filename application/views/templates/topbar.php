 <!--begin::Wrapper-->
 <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
     <!--begin::Header-->
     <div id="kt_header" class="header header-fixed">
         <!--begin::Container-->
         <div class="container-fluid d-flex align-items-stretch justify-content-between">
             <!--begin::Header Menu Wrapper-->
             <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                 <!--begin::Header Menu-->
                 <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                     <!--begin::Header Nav-->
                     <ul class="menu-nav">

                     </ul>
                     <!--end::Header Nav-->
                 </div>
                 <!--end::Header Menu-->
             </div>
             <!--end::Header Menu Wrapper-->
             <!--begin::Topbar-->
             <div class="topbar">
                 <!--begin::User-->
                 <div class="topbar-item">
                     <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                         id="kt_quick_user_toggle">
                         <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                         <span
                             class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= $user['nama']; ?></span>
                         <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                             <!-- <span class="symbol-label font-size-h5 font-weight-bold">S</span> -->
                             <img alt="Pic" src="<?= base_url('') ?>assets/images/<?= $user['image'] ?>" />

                         </span>
                     </div>
                 </div>
                 <!--end::User-->
             </div>
             <!--end::Topbar-->
         </div>
         <!--end::Container-->
     </div>
     <!--end::Header-->