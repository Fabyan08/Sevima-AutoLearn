<?php
// session_start();

include('../conf/koneksi.php');

$nama = $_POST['nama'];
$password = md5($_POST['password']);

$sql = "SELECT * from user where nama='$nama' and password='$password'";

$login = mysqli_query($koneksi, "$sql");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    while ($row = mysqli_fetch_assoc($login)) {
        session_start();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['nama'] = $row['nama'];
        $level = $row['level'];

        // echo '<script>window.location.href="../index.php"</script>';
    }
?>
<?php
} else {
    echo '<script>alert("Masukan Username dan Password dengan Benar.");
    window.location.href="login.php"</script>';
}
?>