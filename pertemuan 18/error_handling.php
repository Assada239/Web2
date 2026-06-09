<?php
error_reporting(E_ALL);

function bagi($a, $b) {
    if ($b == 0) {
        throw new Exception("Error: angka tidak boleh dibagi dengan nol!");
    }
    return $a / $b;
}

try {
    $angka1 = 10;
    $angka2 = 0;

    echo "Hasil pembagian: " . bagi($angka1, $angka2);
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>