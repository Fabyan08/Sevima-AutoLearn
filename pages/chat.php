<div class="main_content_iner">
  <div class="container-fluid p-0">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="dashboard_header mb_50">
          <div class="row">
            <div class="col-lg-6">
              <div class="dashboard_header_title">
                <h3>Chat</h3>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="dashboard_breadcam text-end">
                <p>
                  <a href="index.html">Dashboard</a>
                  <i class="fas fa-caret-right"></i> Chat
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="scroll-bar-wrap ">
        <div class="click-drag-handler scroll-demo ps-container ps-theme-default ps-active-x" data-ps-id="5782b76e-4245-231a-2e6f-d141daeb9f76"> -->

      <div class="col-lg-12">
        <div class="messages_box_area horizontal-scroll" style="width: 1900px;">
          <div class="messages_chat">
            <div class="white_box">
              <div class="message_send_field">
                <form method="post">
                  <input type="text" name="str" required placeholder="Write your message" />
                </form>
                <?php
                if (isset($_POST['str']) == null) {
                } else {
                  $p = mysqli_real_escape_string($koneksi, $_POST['str']);
                  $ps = "INSERT INTO tanya(id_tanya,pesan,tanggal) VALUES('','$p',now())";
                  $qy = mysqli_query($koneksi, $ps);
                }
                ?>
                <button class="btn_1" type="submit">Send</button>
              </div><br>
              <div class="single_message_chat sender_message">
                <div class="message_pre_left">
                  <div class="messges_info">
                    <h4>Anonym</h4>
                    <?php
                    $sql = "SELECT * FROM tanya ORDER BY id_tanya DESC LIMIT 1";
                    $query = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($query);
                    if (isset($data['tanggal']) == null) {
                    } else {
                    ?>
                      <p><?= date('d F Y', strtotime($data['tanggal'])); ?></p>
                    <?php } ?>
                  </div>
                  <div class="message_preview_thumb">
                    <img src="img/client_img.png" alt />
                  </div>
                </div>
                <div class="message_content_view">
                  <?php
                  $sql = "SELECT * FROM tanya ORDER BY id_tanya DESC LIMIT 1";
                  $query = mysqli_query($koneksi, $sql);
                  $data = mysqli_fetch_array($query) ?>
                  <p><?= $data['pesan']; ?></p>
                </div>
              </div>
              <div class="single_message_chat">
                <div class="message_pre_left">
                  <div class="message_preview_thumb">
                    <img src="img/client_img.png" alt />
                  </div>
                  <div class="messges_info">
                    <h4>AI</h4>
                    <?php
                    $sql = "SELECT * FROM tanya ORDER BY id_tanya DESC LIMIT 1";
                    $query = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($query);
                    if (isset($data['tanggal']) == null) {
                    } else {
                    ?>
                      <p><?= date('d F Y', strtotime($data['tanggal'])); ?></p>
                    <?php } ?>
                  </div>
                </div>
                <div class="message_content_view red_border">
                  <p>
                    <?php include('openai.php');
                    if (isset($result['choices'][0]['text']) == null) {
                    } else {
                      echo $result['choices'][0]['text'];
                    }
                    ?>
                  </p>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <!-- <div class="ps-scrollbar-x-rail" style="width: 366px; left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 73px;"></div>
          </div>
          <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
          </div>
        </div> -->
    </div>
  </div>
</div>
</div>