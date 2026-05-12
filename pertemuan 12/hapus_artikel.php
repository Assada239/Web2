<?php
include "koneksi.php";
$id = $_GET['id'];

$sql_hapus = "DELETE FROM tbl_artikel WHERE id_artikel='$id'";
mysql_query($sql_hapus, $connection);

header("Location: tampil_artikel.php");
?>