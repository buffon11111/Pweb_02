<?php
$majors = ["Sistem Informasi", "Teknik Informatika", "Bisnis Digital"];
$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Boostrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50, 
];
$domisilis = ["Jakarta", "Depok", "Bogor", "Tangerang", "Bekasi", "Lainnya"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-info">
    
    <div class="container">
        <h2 class="text-center">Form Registrasi IT Club</h2>
        <hr>
        <br>
<form method="POST" action="proses_register.php">
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="NIM" name="NIM" placeholder="Masukan NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="Gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="Gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Prodi" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="Prodi" name="Prodi" class="custom-select">
        <?php foreach($majors as $major): ?>
            <option value="<?php echo $major ?>"><?php echo $major ?></option>
        <?php endforeach ?>    
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Programming</label> 
    <div class="col-8">
        <?php foreach($skills as $key => $value): ?>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="Skill[]" id="<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>"> 
        <label for="<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="Domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="Domisili" name="Domisili" class="custom-select">
      <?php foreach ($domisilis as $domisili): ?>
        <option value="<?=  $domisili ?>"><?=  $domisili ?></option>
        <?php endforeach ?>
      </select>
    </div>
    
  </div>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="Email" name="Email" placeholder="Masukan Email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>