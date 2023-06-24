<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'index':
            include 'pages/dashboard.php';
            break;
        case 'editor':
            include 'pages/editor.php';
            break;
        case 'chat':
            include 'pages/chat.php';
            break;
        case 'faq':
            include 'pages/faq.php';
            break;
        case 'form':
            include 'pages/form.php';
            break;
        case 'group':
            include 'pages/group.php';
            break;
        case 'layout':
            include 'pages/layout.php';
            break;


        case 'login':
            include 'auth/login.php';
            break;
        case 'register':
            include 'auth/register.php';
            break;
    }
} else {
    include "pages/dashboardd.php";
}
