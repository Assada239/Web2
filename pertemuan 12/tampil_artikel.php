<?php
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM tbl_artikel", $connection);
?>

<html>
<body>
    <h2>Daftar Artikel</h2>
    <a href="tambah_artikel.php">+ Tambah Artikel Baru</a><br><br>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#e0e0e0">
            <th>ID</th>
            <th>Judul</th>
            <th>Isi Artikel</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($data = mysql_fetch_array($hasil)) {
            echo "<tr>
                    <td>$data[id_artikel]</td>
                    <td>$data[judul]</td>
                    <td>$data[isi]</td>
                    <td>
                        <a href='edit_artikel.php?id=$data[id_artikel]'>Edit</a> | 
                        <a href='hapus_artikel.php?id=$data[id_artikel]'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>