<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
if (isset($_POST['string'])) {
  $ch = curl_init();
  $string = $_POST['string'] . ', ubah dalam bahasa Indonesia dengan benar';
  curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  $postdata = array(
    "model" => "text-davinci-003",
    "prompt" => "$string",
    "temperature" => 0,
    "max_tokens" => 150,
    "top_p" => 1.0,
    "frequency_penalty" => 0.0,
    "presence_penalty" => 0.0,
    "stop" => ["\"\"\""]
  );

  $postdata = json_encode($postdata);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

  $headers = array();
  $headers[] = 'Content-Type: application/json';
  $headers[] = 'Authorization: Bearer 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';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
  $result = json_decode($result, true);
  // echo '<pre>';
}

?>
<div class="main_content_iner" data-aos="fade-up" data-aos-duration="1000">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="dashboard_header mb_50">
          <div class="row">
            <div class="col-lg-6">
              <div class="dashboard_header_title">
                <h3>Translation AI</h3>
                <h6>Terjemahan kata dari semua bahasa!</h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="dashboard_breadcam text-end">
                <p>
                  <a href="index.php">Dashboard</a>
                  <i class="fas fa-caret-right"></i> Editor
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12"><br>
        <form method="POST">
          <textarea name="string" id="" cols="30" rows="10" class="form-control" placeholder="lorem ipsum dolor sit amet"></textarea>
          <button class="btn btn-primary" type="submit">Translate</button><br><br>
        </form>
      </div>
      <div class="col-lg-12">
        <div class="box_body">
          <div class="scroll-bar-wrap ">
            <div class="visible-scroll always-visible scroll-demo ps-container ps-theme-default ps-active-x ps-active-y">
              <div class="horrizontal_width" style="width: 1800px;">
                <div class="card_box box_shadow position-relative mb_30">
                  <div class="white_box_tittle ">
                    <div class="main-title2 ">
                      <h4 class="mb-2 nowrap">Translate:</h4>
                      <h5 class="mb-2 nowrap"><?php
                                              if (isset($result['choices'][0]['text']) == null) {
                                              } else {
                                                echo $result['choices'][0]['text'];
                                              }
                                              ?></h5>
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
</div>
</div>