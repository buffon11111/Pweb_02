<?php
if (isset($_GET["submit"])) {
$Nama = $_GET["Nama"];
$matkul = $_GET["matkul"];
$UTS = $_GET["UTS"];
$UAS = $_GET["UAS"];
$Praktikum = $_GET["Praktikum"];

echo "Nama: $Nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $UTS <br>";
echo "Nilai UAS: $UAS <br>";
echo "Nilai Praktikum: $Praktikum";

} else {
    echo "Tidak Ada Data!";
}