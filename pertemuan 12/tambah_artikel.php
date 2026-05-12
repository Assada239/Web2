<html>
<body>
    <h2>Tambah Artikel</h2>
    <form action="" method="post">
        Judul: <br>
        <input type="text" name="judul" size="40" required /><br><br>
        Isi Artikel: <br>
        <textarea name="isi" rows="6" cols="40" required></textarea><br><br>
        <input type="submit" name="simpan" value="Simpan Artikel" />
    </form>

    <?php
    if(isset($_POST['simpan'])) {
        include "koneksi.php";
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        
        $sql = "INSERT INTO tbl_artikel (judul, isi) VALUES ('$judul', '$isi')";
        mysql_query($sql, $connection);
        
        echo "<meta http-equiv='refresh' content='0;url=tampil_artikel.php'>";
    }
    ?>
</body>
</html>