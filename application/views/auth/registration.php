<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
            style="background-image: url(<?= base_url() ?>assets/media/bg/bg-2.jpg);">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-3">
                    <a href="#">
                        <img src="<?= base_url() ?>assets/images/Logo Sambas.png" class="max-w-250px" alt="" />
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <!-- <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">Sign In To Admin</h3>
                        <p class="opacity-40">Enter your details to login to your account:</p>
                    </div> -->
                    <!-- <form class="form" id="kt_login_signin_form">
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="username" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group text-center mt-10">
                            <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Login</button>
                        </div>
                    </form> -->
                    <!-- <div class="mt-10">
                        <span class="opacity-40 mr-4">Don't have an account yet?</span>
                        <a href="javascript:;" id="buat" class="text-white opacity-30 font-weight-normal">Buat akun</a>
                    </div> -->
                </div>
                <!--end::Login Sign in form-->
                <!--begin::Login Sign up form-->
                <div class="registrasi">
                    <div class="mb-10">
                        <!-- <h3 class="opacity-40 font-weight-normal">Buat Akun</h3> -->
                        <h4 class="opacity-70">Masukan data diri anda</h4>
                    </div>
                    <form class="form text-center" id="kt_login_signup_form" method="post"
                        action="<?= base_url("auth/registration"); ?>">
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>" />
                            <?= form_error('nama', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="Email" name="email" value="<?= set_value('email'); ?>" />
                            <?= form_error('email', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="Nomor Hp" name="no_hp" value="<?= set_value('no_hp'); ?>" />
                            <?= form_error('no_hp', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="Alamat" name="alamat" autocomplete="on"
                                value="<?= set_value('alamat'); ?>" />
                            <?= form_error('alamat', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="password" placeholder="Password" name="password" />
                            <?= form_error('password', '<div class="fv-plugins-message-container"><div class="fv-help-block">', '</div></div>') ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="password" placeholder="Konfirmasi Password" name="cpassword" />
                        </div>
                        <!-- <div class="form-group text-left px-8">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>I Agree the
                                    <a href="#" class="text-white font-weight-bold ml-1">terms and
                                        conditions</a>.</label>
                            </div>
                            <div class="form-text text-muted text-center"></div>
                        </div> -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Buat
                                Akun</button>
                            <a href="<?= base_url() ?>auth"
                                class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Batal</a>
                        </div>
                    </form>
                </div>
                <!--end::Login Sign up form-->
                <!--begin::Login forgot password form-->

                <!--end::Login forgot password form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->