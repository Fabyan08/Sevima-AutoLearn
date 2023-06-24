<?php
include('../conf/koneksi.php');
if ($_POST) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = md5($_POST['password']);
    $level = "siswa";

    $sql = "INSERT INTO user(id_user,username,nama,email,no_hp,password,level) VALUES('','$username','$nama','$email','$no_hp','$password','$level')";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil Registrasi, Silahkan Login");
        window.location.href="login.php"</script>';
    }
}
