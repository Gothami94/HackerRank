<?php
    $isLoggedin = false;
    ini_set('session.cookie_httponly',true);

    session_start();
    $adId = null;
    $adName = null;

    if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])) {
        $isLoggedin = true;
        $adName = $_SESSION['adminName'];
        $adId = $_SESSION['adminId'];
    }

?>