<?php
include('conf/koneksi.php');
$id =  $_SESSION['id_user'];
$sql = "SELECT * FROM user WHERE id_user='$id'";
$query = mysqli_query($koneksi, "$sql")
    or die(mysqli_error($koneksi));

$row = mysqli_fetch_array($query);
?>
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Your Profile, <?= $_SESSION['nama']; ?></h3>
                                    </div>
                                </div>
                                <div class="profile_box_1">
                                    <div class="profile-cover-image">
                                        <img src="<?= 'pages/img-user/' . $row['gambar']; ?>">
                                    </div>
                                    <div class="profile-picture">
                                        <img src="<?= 'pages/img-user/' . $row['gambar']; ?>">
                                    </div>
                                    <div class="profile-content">
                                        <h1>
                                            <?= $_SESSION['nama']; ?>
                                        </h1>
                                        <p>
                                            <?= $_SESSION['level']; ?>
                                        </p>
                                        <div class="socials">
                                            <a href><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Edit</h3>
                                        </div>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" action="pages/edit-profil.php" method="POST">
                                    <div class="white_card_body">
                                        <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                                        <div class="input-group mb-3">
                                            <input type="text" required name="username" value="<?= $row['username']; ?>" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" required value="<?= $row['nama']; ?>" class="form-control" placeholder="nama" name="nama" aria-label="nama" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" required name="email" value="<?= $row['email']; ?>" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="number" required value="<?= $row['no_hp']; ?>" class="form-control" name="no_hp" placeholder="no_hp" aria-label="no_hp" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" required value="<?= $row['password']; ?>" class="form-control" name="password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" required name="gambar" value="<?= $row['gambar']; ?>" class="form-control" placeholder="gambar" aria-label="gambar" aria-describedby="basic-addon1">
                                        </div>
                                        <button type="submit" name="submit" class="btn_1 full_width text-center">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>