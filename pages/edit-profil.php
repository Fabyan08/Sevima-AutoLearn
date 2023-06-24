<?php
include('../conf/koneksi.php');
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = md5($_POST['password']);
$level = "siswa";


if (isset($_POST['submit'])) {
    $foto = $_FILES['gambar']['name'];
    if ($foto != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'img-user/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $query = "UPDATE user SET username = '$username', nama='$nama',email='$email',no_hp='$no_hp',password='$password', gambar='$nama_gambar_baru',level = '$level'";
            $query .= "WHERE id_user = '$id_user'";
            $result = mysqli_query($koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil diubah.');window.location='../index.php?page=profil';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar hanya boleh JPG atau PNG.');window.location='../index.php?page=profil';</script>";
        }
    } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit

        $query = "UPDATE user SET username = '$username', nama='$nama',email='$email',no_hp='$no_hp',password='$password', gambar=null,level = '$level'";
        $query .= "WHERE id_user = '$id_user'";
        echo $query;

        $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='../index.php?page=profil';</script>";
        }
    }
    echo $query;
}

    // $sql = "UPDATE user SET nama='$nama', sistem_penggajian='$sistem_penggajian',no_handphone='$no_hp', no_rekening='$no_rekening', password= '$level' WHERE id_user='$id_user'";
    // $query = mysqli_query($koneksi, $sql);
    // if ($query) {
    //     echo "<script>alert('Data berhasil diubah.');window.location='../../index.php?page=profil';</script>";
    // } else {
    //     echo "<script>alert('Maaf data Tidak Tersimpan'); window.location.assign('?page=karyawan');</script>";
    // }