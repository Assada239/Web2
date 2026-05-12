<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die('Koneksi gagal: ' . mysql_error());
}

mysql_query("CREATE DATABASE IF NOT EXISTS db_latihan", $con);

mysql_select_db("db_latihan", $con);

$sql_tabel = "CREATE TABLE IF NOT EXISTS tbl_bukutamu (
    id_tamu INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id_tamu),
    nama VARCHAR(50),
    email VARCHAR(50),
    pesan TEXT
)";
mysql_query($sql_tabel, $con);

$sql_insert = "INSERT INTO tbl_bukutamu (nama, email, pesan) 
               VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[pesan]')";

if (!mysql_query($sql_insert, $con)) {
    die('Error: ' . mysql_error());
}

echo "Data buku tamu berhasil disimpan!<br><br>";
echo "<a href='tampil_tamu.php'>Lihat Daftar Buku Tamu</a>";

mysql_close($con);
?>