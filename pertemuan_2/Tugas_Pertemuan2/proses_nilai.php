<?php 
$Nama = $_POST["Nama"];
$matkul = $_POST["matkul"];
$UTS = $_POST["UTS"];
$UAS = $_POST["UAS"];
$Praktikum = $_POST["Praktikum"];
$grade = ($UTS + $UAS + $Praktikum) / 3;

    echo "Nama: $Nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $UTS <br>";
    echo "Nilai UAS: $UAS <br>";
    echo "Nilai Praktikum: $Praktikum <br>";
    echo "Nilai Rata-rata: " . round ($UTS + $UAS + $Praktikum) / 3;
    echo "<br> Grade: ";
    
        if ($grade >= 90) {
        echo "A";
        } elseif ($grade >= 80) {
        echo "B";
        } elseif ($grade >= 65) {
        echo "C";
        } elseif ($grade >= 50) {
        echo "D";
        } elseif ($grade >= 0) {
        echo "E";
        } elseif ($grade <= 0) {
        echo "Invalid";
        } elseif ($grade >= 100) {
        echo "Invalid";
        }
?>