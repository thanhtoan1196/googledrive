<?php
session_start();
error_reporting(0);
    /* connect mysql */
    $conn = mysqli_connect('localhost','root','','payadsco_UPDOWSF') or die('Failed');

    mysqli_set_charset($conn, "utf8");
    
    /* const config */
define('COPYRIGHT', 'ozTrungg');

date_default_timezone_set('Asia/Ho_Chi_Minh');
?>