<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2>Form Nilai Mahasiswa</h2>
<?php
    $data_matkul =[
        'inggris' => 'Bahasa Inggris',
        'ppkn' => 'PPKN',
        'statistik' => 'Statistik',
        'Komunikasi' => 'Komunikasi',
        'ui/ux' => 'UI/UX',
        'jaring komputer' => 'Jaringan Komputer',
    ]    
?>
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <?php
            foreach ($data_matkul as $key => $value) {
                echo "<option value='$key'>$value</option>";
                }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="text3" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    if (isset($_get['submit'])) {
        $nama = $_get['nama lengkap'];
        $matkul = $_get['select'];
        $uts = $_get['text1'];
        $uas = $_get['text2'];
    }   
?>
</body>
</html>