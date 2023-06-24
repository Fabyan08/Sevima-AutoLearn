<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
            // Admin ()
        case 'index':
            include 'pages/dashboard.php';
            break;
        case 'calendar':
            include 'pages/calendar.php';
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
    }
} else {
    include "pages/dashboard.php";
}
