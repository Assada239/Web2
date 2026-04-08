<html>
<head><title>Tabel Perkalian</title></head>
<body>
<h3>Tabel Perkalian</h3>
=========================<br>
<?php
$n = 12; 

for ($bil = 15; $bil <= 45; $bil += 2) {
    $hasil = $n * $bil;
    echo "$n * $bil = $hasil <br>\n";
}
?>
</body>
</html>