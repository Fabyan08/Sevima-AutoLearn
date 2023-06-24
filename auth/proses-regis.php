<?php
include('../conf/koneksi.php');
if ($_POST) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = md5($_POST['password']);
    $level = "siswa";
    $gambar = 'user.jpg';

    $sql = "INSERT INTO user(id_user,username,nama,email,no_hp,password,gambar,level) VALUES('','$username','$nama','$email','$no_hp','$password','$gambar','$level')";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil Registrasi, Silahkan Login");
        window.location.href="../index.php?page=login"</script>';
    }
}
