<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
            // Admin ()
        case 'index':
            include 'pages/dashboard.php';
            break;
        case 'karyawan':
            include 'pages/admin/karyawan/karyawan.php';
            break;
    }
} else {
    include "pages/dashboard.php";
}
