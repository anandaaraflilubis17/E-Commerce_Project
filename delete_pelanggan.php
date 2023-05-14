<?php
require_once 'dbkoneksi.php';
require_once "header.php";
require_once  "sidebar.php";
$delete = $_GET['iddel'];
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$delete]);

header('location:list_pelanggan.php');