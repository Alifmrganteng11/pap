<?php
//Memulai sesi
session_start();

//Memasukkan fungsi dan menghubungkan database dengan PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

//Laman diset home
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';

//include bagian permintaan laman
include $page . '.php';
?>