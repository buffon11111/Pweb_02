<?php
require_once '../dbkoneksi.php';
$id = $_GET['iddel'];

$dbh->query("DELETE FROM kartu WHERE id=$id");


header('location:index.php');