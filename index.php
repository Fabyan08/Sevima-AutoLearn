<?php include('conf/koneksi.php');
session_start()
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AutoLearn</title>
  <link rel="icon" href="ico.png" type="image/png" />

  <link rel="stylesheet" href="css/bootstrap1.min.css" />

  <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

  <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

  <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

  <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

  <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

  <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

  <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

  <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
  <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

  <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

  <link rel="stylesheet" href="vendors/morris/morris.css" />
  <script src="https://use.fontawesome.com/a34asdfsd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

  <link rel="stylesheet" href="css/metisMenu.css" />

  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- <link rel="stylesheet" href="img/themify-icons/demo-files/demo.css"> -->
  <link rel="stylesheet" href="img/themify-icons/themify-icons.css">
  <!--[if lt IE 8]><!-->
  <!-- <link rel="stylesheet" href="ie7/ie7.css"> -->
  <!--<![endif]-->
</head>

<body class="crm_body_bg">
  <nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
      <a href="index.php"><img src="ico.png" alt /></a>
      <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
      </div>
    </div>
    <ul id="sidebar_menu">
      <li class="mm-active">
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="icon_menu">
            <img src="img/menu-icon/dashboard.svg" alt />
          </div>
          <span>Dashboard</span>
        </a>
        <ul>
          <li><a class="active" href="index.php">Dashboard</a></li>
        </ul>
      </li>
      <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="icon_menu">
            <img src="img/menu-icon/2.svg" alt />
          </div>
          <span>Chat AI</span>
        </a>
        <ul>
          <li><a href="?page=chat">Chat</a></li>
          <li><a href="?page=translate">Translate</a></li>
          <li><a href="?page=jurnal">Jurnal</a></li>
          <!-- <li><a href="?page=editor">editor</a></li>
          <li><a href="?page=faq">FAQ</a></li> -->
        </ul>
      </li>
      <!-- <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
          <div class="icon_menu">
            <img src="img/menu-icon/4.svg" alt />
          </div>
          <span>forms</span>
        </a>
        <ul>
          <li><a href="?page=form">Form</a></li>
          <li><a href="?page=group">Groups</a></li>
          <li><a href="?page=layout">Layouts</a></li>
        </ul>
      </li> -->


    </ul>
  </nav>

  <section class="main_content dashboard_part large_header_bg">
    <div class="container-fluid g-0">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="header_iner d-flex justify-content-between align-items-center">
            <div class="sidebar_icon d-lg-none">
              <i class="ti-menu"></i>
            </div>
            <div class="serach_field-area d-flex align-items-center">
              <div class="search_inner">
                <form action="#">
                  <div class="search_field">
                    <input type="text" placeholder="Search here..." />
                  </div>
                  <button type="submit">
                    <img src="img/icon/icon_search.svg" alt />
                  </button>
                </form>
              </div>
              <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
            </div>
            <div class="header_right d-flex justify-content-between align-items-center">
              <div class="header_notification_warp d-flex align-items-center">

                <li>
                  <a class="CHATBOX_open nav-link-notify" href="#">
                    <img src="img/icon/msg.svg" alt />
                  </a>
                </li>
              </div>
              <div class="profile_info">
                <img src="pages/img-user/user.jpg" alt="#" />
                <div class="profile_info_iner">
                  <div class="profile_author_name">
                    <?php if (isset($_SESSION['nama']) == null) {
                      echo '<p>Anonym</p>';
                      echo '<h5>Anonym</h5>';
                    } else { ?>
                      <p><?= $_SESSION['level']; ?></p>
                      <h5><?= $_SESSION['nama']; ?></h5>
                    <?php } ?>
                  </div>
                  <?php if (isset($_SESSION['nama']) == null) { ?>
                    <div class="profile_info_details">
                      <a href="?page=login">Login</a>
                      <a href="?page=register">Register</a>
                    </div>
                  <?php
                  } else { ?>
                    <div class="profile_info_details">
                      <a href="?page=profil">My Profile </a>
                      <a href="auth/logout.php">Log Out </a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('conf/page.php') ?>

    <div class="footer_part">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer_iner text-center">
              <p>
                <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Sevima - AutoLearn</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
      <div class="MSEESAGE_CHATBOX_CLOSE">
        <svg width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white" />
        </svg>
      </div>
      <h3>Chat With Your AI Mate</h3>
      <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
          <div class="input-group">
            <form method="post">
              <input type="text" name="str" required class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2" />
            </form>
            <?php
            if (isset($_POST['str']) == null) {
            } else {
              $psn = mysqli_real_escape_string($koneksi, $_POST['str']);
              $pesan = "INSERT INTO tanya(id_tanya,pesan,tanggal) VALUES('','$psn',now())";
              $query = mysqli_query($koneksi, $pesan);
            }
            ?>
            <div class="input-group-append">
              <button class="btn" type="button">
                <svg width="22" height="22" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7" />
                </svg>
              </button>
              <button class="btn" type="button">
                <svg width="22" height="22" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7" />
                </svg>

                <input type="file" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="CHAT_POPUP_BODY">
      <?php $sql = "SELECT * FROM tanya ORDER BY id_tanya DESC";
      $query = mysqli_query($koneksi, $sql);
      $data = mysqli_fetch_array($query);
      if (isset($data['tanggal']) == null) {
      } else {
      ?>
        <p class="mesaged_send_date"><?= $data['tanggal']; ?></p>
      <?php } ?>
      <div class="CHATING_SENDER CHATING_RECEIVEr">
        <div class="SEND_SMS_VIEW">
          <?php
          $sql = "SELECT * FROM tanya ORDER BY id_tanya DESC LIMIT 1";
          $query = mysqli_query($koneksi, $sql);
          $data = mysqli_fetch_array($query);
          if (isset($data['pesan']) == null) {
          } else {
          ?>
            <p><?= $data['pesan']; ?></p>
          <?php } ?>
        </div>
        <div class="SMS_thumb">
          <img src="pages/img-user/user.jpg" alt />
        </div>
      </div>
      <div class="CHATING_SENDER">
        <div class="SMS_thumb">
          <img src="pages/img-user/user.jpg" alt />
        </div>
        <div class="SEND_SMS_VIEW">
          <p><?php include('openai.php');
              if (isset($result['choices'][0]['text']) == null) {
              } else {
                echo $result['choices'][0]['text'];
              }
              ?></p>
        </div>
      </div>

    </div>

  </div>

  <div id="back-top" style="display: none">
    <a title="Go to Top" href="#">
      <i class="ti-angle-up"></i>
    </a>
  </div>

  <script src="js/jquery1-3.4.1.min.js"></script>

  <script src="js/popper1.min.js"></script>

  <script src="js/bootstrap1.min.js"></script>

  <script src="js/metisMenu.js"></script>

  <script src="vendors/count_up/jquery.waypoints.min.js"></script>

  <script src="vendors/chartlist/Chart.min.js"></script>

  <script src="vendors/count_up/jquery.counterup.min.js"></script>

  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  <script src="js/chart.min.js"></script>

  <script src="vendors/progressbar/jquery.barfiller.js"></script>

  <script src="vendors/tagsinput/tagsinput.js"></script>

  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/am_chart/amcharts.js"></script>

  <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
  <script src="vendors/scroll/scrollable-custom.js"></script>
  <script src="vendors/chart_am/core.js"></script>
  <script src="vendors/chart_am/charts.js"></script>
  <script src="vendors/chart_am/animated.js"></script>
  <script src="vendors/chart_am/kelly.js"></script>
  <script src="vendors/chart_am/chart-custom.js"></script>

  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 3000,
      once: true
    });
  </script>
</body>

</html>