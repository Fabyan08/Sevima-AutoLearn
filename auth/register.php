<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Register</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Resister</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Register</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="auth/proses-regis.php" method="POST">
                                        <div class>
                                            <input type="text" name="nama" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class>
                                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                                        </div>
                                        <div class>
                                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class>
                                            <input type="number" name="no_hp" class="form-control" placeholder="Enter your HP number">
                                        </div>
                                        <div class>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn_1 full_width text-center"> Sign Up</button>
                                        <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="?page=login">Log in</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>