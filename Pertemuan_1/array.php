<?php
// array index
$animals = ['Kambing', 'Buaya', 'Banteng Merah'];

// akses array
foreach($animals as $animal){
    echo $animal . '<br>';
}

// array asosiatif
$student = [
    'name' => 'Mochammad Buffon',
    'major' => 'system infomation',
    'age' => 20
];

echo $student['name'];