<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Isi Buku Tamu</h2>
    <form action="simpan_tamu.php" method="post">
        Nama Lengkap: <br>
        <input type="text" name="nama" size="30" required /><br><br>
        
        Email: <br>
        <input type="text" name="email" size="30" required /><br><br>
        
        Pesan: <br>
        <textarea name="pesan" rows="5" cols="35" required></textarea><br><br>
        
        <input type="submit" value="Simpan Buku Tamu" />
    </form>
</body>
</html>