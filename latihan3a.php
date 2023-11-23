<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1>RAPORT SMK BAKTI NUSANTARA 666</h1>
<p>Program aplikasi sederhana untuk menghitung penilaian sekolah kami</p>
</center>
<form action ="" method="Post" name="penilaian">
<div>
  <label for="mapel">Mata Pelajaran:</label>
  <input type="text" class="from-control" id="mapel" name="mapel" Required>
  </div>
  <!-- <div class="from-group">
  <label for="mapel">Kelas:</label>
  <input type="text" class="from-control" id="kelas" name="kelas" Required>
  </div>
  <div class="from-group">
  <label for="mapel">NIlai Adiktif:</label>
  <input type="number" class="from-control" id="nilai_a" name="nilai_a" Required>
  </div>
  <div class="from-group">
  <label for="mapel">Nilai Produktif:</label>
  <input type="number" class="from-control" id="nilai_b" name="nilai_b" Required>
  </div>
  <div class="from-group">
  <label for="mapel">Nilai Mulok:</label>
  <input type="number" class="from-control" id="nilai_c" name="nilai_c" Required>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $mapel = $_POST['mapel'];
    echo $mapel;
  }
  ?>
</body>
</html>