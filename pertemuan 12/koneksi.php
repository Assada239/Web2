<?php
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "artikel_db"; 

$connection = mysql_connect($dbhost,$dbuser,$dbpass); 
if(!$connection) 
{
    echo "Tidak dapat terhubung dengan database"; 
    exit; 
}

mysql_query("CREATE DATABASE IF NOT EXISTS $dbname", $connection);

$pilih_db = mysql_select_db($dbname); 
if(!$pilih_db) 
{
    echo "Tidak dapat memilih database"; 
    exit; 
}

$sql_tabel = "CREATE TABLE IF NOT EXISTS tbl_artikel (
    id_artikel INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id_artikel),
    judul VARCHAR(100),
    isi TEXT
)";
mysql_query($sql_tabel, $connection);
?>