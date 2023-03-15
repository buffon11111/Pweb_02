<?php
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Prodi = $_POST['Prodi'];
$Gender = $_POST['Gender'];
$Skill = $_POST['Skill'];
$Domisili = $_POST['Domisili'];
$Email = $_POST['Email'];

function skor_skill($Skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($Skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    return $result;
}

function kategori_skill($Skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($Skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    
        if ($result >= 100 ) {
            $result = "Sangat Baik";
        } elseif ($result >= 60) {
            $result = "Baik";
        } elseif ($result >= 40) {
            $result = "Cukup";
        } elseif ($result >= 0) {
            $result = "Kurang";
        } else {
            $result = "Tidak Memandai";
        }
    return $result;
}


echo "NIM: $NIM";
echo "<br> Nama: $Nama";
echo "<br> Program Studi: $Prodi";
echo "<br> Jenis Kelamin: $Gender";
echo "<br> Skill Programming: ";
foreach ($Skill as $skil) {
    echo $skil . ", ";
}
echo "<br>Skor Skill : " . skor_skill($Skill);
echo "<br>Kategori Skill: " . kategori_skill($Skill);
echo "<br> Tempat Domisili: $Domisili";
echo "<br> Email: $Email";



?>
