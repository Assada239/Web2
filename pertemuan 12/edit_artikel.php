<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM tbl_artikel WHERE id_artikel='$id'", $connection);
$data = mysql_fetch_array($query);
?>

<html>
<body>
    <h2>Edit Artikel</h2>
    <form action="" method="post">
        Judul: <br>
        <input type="text" name="judul" size="40" value="<?php echo $data['judul']; ?>" required /><br><br>
        Isi Artikel: <br>
        <textarea name="isi" rows="6" cols="40" required><?php echo $data['isi']; ?></textarea><br><br>
        <input type="submit" name="update" value="Update Artikel" />
    </form>

    <?php
    if(isset($_POST['update'])) {
        $judul_baru = $_POST['judul'];
        $isi_baru = $_POST['isi'];
        
        $sql_update = "UPDATE tbl_artikel SET judul='$judul_baru', isi='$isi_baru' WHERE id_artikel='$id'";
        mysql_query($sql_update, $connection);
        
        echo "<meta http-equiv='refresh' content='0;url=tampil_artikel.php'>";
    }
    ?>
</body>
</html>