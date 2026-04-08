<html>
<head>
<title>Latihan 3 PHP</title>
</head>

<body>

<h2>Perhitungan Total Belanja</h2>

<form method="post">

Nama Barang :
<input type="text" name="barang"><br><br>

Harga Barang :
<input type="number" name="harga"><br><br>

Jumlah Barang :
<input type="number" name="jumlah"><br><br>

<input type="submit" name="hitung" value="Hitung">

</form>

<?php

if(isset($_POST['hitung'])){

$barang = $_POST['barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$total = $harga * $jumlah;

echo "<h3>Hasil Perhitungan</h3>";
echo "Nama Barang : $barang <br>";
echo "Harga Barang : $harga <br>";
echo "Jumlah Barang : $jumlah <br>";
echo "Total Bayar : $total";

}

?>

</body>
</html>