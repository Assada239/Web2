<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die('Koneksi gagal: ' . mysql_error());
}
mysql_select_db("db_latihan", $con);

$batas = 5; 
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$query_total = mysql_query("SELECT * FROM tbl_bukutamu");
$total_record = mysql_num_rows($query_total);
$total_halaman = ceil($total_record / $batas);

$hasil = mysql_query("SELECT * FROM tbl_bukutamu LIMIT $halaman_awal, $batas");

echo "<h2>Daftar Buku Tamu</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr bgcolor='#e0e0e0'>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>";

$no = $halaman_awal + 1;
while($data = mysql_fetch_array($hasil)) {
    echo "<tr>
            <td>$no</td>
            <td>$data[nama]</td>
            <td>$data[email]</td>
            <td>$data[pesan]</td>
          </tr>";
    $no++;
}
echo "</table><br>";

echo "Halaman: ";
for($x = 1; $x <= $total_halaman; $x++) {
    if ($x == $halaman) {
        echo "<strong>$x</strong> ";
    } else {
        echo "<a href='?halaman=$x'>$x</a> ";
    }
}

echo "<br><br><a href='form_tamu.php'>+ Isi Buku Tamu Lagi</a>";

mysql_close($con);
?>