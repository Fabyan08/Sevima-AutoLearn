<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
if (isset($_POST['mapel'])) {
    $ch = curl_init();
    $mapel = 'cari jurnal berbahasa indonesia di internet yang akurat berdasarkan mata pelajaran' . $_POST['mapel'];
    echo $_POST['mapel'].', pastinya terbaru';
    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $postdata = array(
        "model" => "text-davinci-003",
        "prompt" => "$mapel",
        "temperature" => 0,
        "max_tokens" => 500,
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
}

?>
<div class="main_content_iner" data-aos="fade-up" data-aos-duration="1000">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Yuk cari referensi untuk Jurnalmu!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <h6 class="card-subtitle mb-2 mb-2">Macam-macam <code>Mapel</code></h6>
                        <form method="POST">
                            <div class=" mb-0">
                                <select name="mapel" class="form-control" id="">
                                    <option value="IPS">IPS</option>
                                    <option value="IPA">IPA</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="acak">Random</option>
                                </select>
                            </div><br>
                            <!-- <h5>Tidak menemukan yang cocok? Ketik di sini:</h5> -->
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                        <!-- <input type="text" name="mapel" placeholder="mapel" style="width: 100px;" class="form-control" name="" id=""><br> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="white_card mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Referensi Jurnalmu</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <h6 class="card-subtitle mb-2">
                            <?php
                            if (isset($result['choices'][0]['text']) == null) {
                            } else {
                                echo '<pre>';
                                echo $result['choices'][0]['text'];
                            }
                            ?></h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>