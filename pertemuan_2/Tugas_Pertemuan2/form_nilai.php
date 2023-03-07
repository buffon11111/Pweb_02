<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <h2>Form Nilai Siswa</h2>
    <hr>
    <div class="container">
        
<form method= "POST" action="proses_nilai.php">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" placeholder="Masukan nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="WEB">Pemrograman Web</option>
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="UTS" name="UTS" placeholder="Masukan nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="UAS" name="UAS" placeholder="Masukan nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Praktikum " class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="Praktikum " name="Praktikum" placeholder="Masukan Nilai Praktikum" type="text" class="form-control">
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
