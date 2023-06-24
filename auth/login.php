<div class="main_content_iner">
  <div class="container-fluid p-0">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="dashboard_header mb_50">
          <div class="row">
            <div class="col-lg-6">
              <div class="dashboard_header_title">
                <h3>Login</h3>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="dashboard_breadcam text-end">
                <p>
                  <a href="index.html">Dashboard</a>
                  <i class="fas fa-caret-right"></i> login
                </p>
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
                <div class="modal-header justify-content-center theme_bg_1">
                  <h5 class="modal-title text_white">Log in</h5>
                </div>
                <div class="modal-body">
                  <form action="proses-login.php" method="POST" autocomplete="off" class="sign-in-form">
                    <div class>
                      <input type="text" required class="form-control" name="nama" placeholder="Nama" />
                    </div>
                    <div class>
                      <input type="password" required class="form-control" name="pasword" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn_1 full_width text-center">Log in</button>
                  </form>
                  <p>
                    Need an account?
                    <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#">
                      Sign Up</a>
                  </p>
                  <div class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>