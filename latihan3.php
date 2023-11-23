<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello NILAI</title>
  </head>
  <body>
  <div class="container">
  <h1>RAPORT SMK BAKTI NUSANTARA 666</h1>
  <p>Program aplikasi sederhana untuk menghitung penilaian sekolah kami</p>
  <form action="" method="POST" name="penilaian">
  <div class="from-group mt-5">
  <label for="exampleInputPassword1">Nama:</label>
  <input type="text" class="from-control" id="mapel" name="mapel" Required>
  </div>
  <div class="from-group">
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
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
  <button type="reset" class="btn btn-primary" name="submit">Clear</button>
  </form>
  <hr>
  

<?php
if(isset($_POST['submit'])){
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];
    $nilai_a = $_POST['nilai_a'];
    $nilai_b = $_POST['nilai_b'];
    $nilai_c = $_POST['nilai_c'];
    $total = $nilai_a + $nilai_b + $nilai_c;
    $rata = $total / 3 ;

    if($nilai_a > 90){
        $AGrade = "A";
    }elseif ($nilai_a > 80){
        $AGrade = "B";
    }elseif ($nilai_a > 70){
        $AGrade = "C";
    }elseif ($nilai_a > 60){
        $AGrade = "D";
    }elseif ($nilai_a < 60){
        $AGrade = "E";
    }

    if($nilai_b > 90){
        $BGrade = "A";
    }elseif ($nilai_b > 80){
        $BGrade = "B";
    }elseif ($nilai_b > 70){
        $BGrade = "C";
    }elseif ($nilai_b > 60){
        $BGrade = "D";
    }elseif ($nilai_b < 60){
        $BGrade = "E";
    }

    if($nilai_c > 90){
        $CGrade = "A";
    }elseif ($nilai_c > 80){
        $CGrade = "B";
    }elseif ($nilai_c > 70){
        $CGrade = "C";
    }elseif ($nilai_c > 60){
        $CGrade = "D";
    }elseif ($nilai_c < 60){
        $CGrade = "E";
    }

    $ketA = $nilai_a >=70 ? "Lulus" : "Tidak Lulus";
    $ketB = $nilai_b >=70 ? "Lulus" : "Tidak Lulus";
    $KetC = $nilai_c >=70 ? "Lulus" : "Tidak Lulus";
    $ketAll = $rata >=70 ? "Lulus" : "Tidak Lulus";

    echo "<div class='container'>
    <table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>No</th>
    <th scope='col'>Mapel</th>
    <th scope='col'>Nilai</th>
    <th scope='col'>Grade Produktiv</th>
    <th scope='col'>Keterangan</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Adiktiv</td>
    <td>$nilai_a</td>
    <td>$AGrade</td>
    <td>$ketA</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Produktiv</td>
    <td>$nilai_b</td>
    <td>$BGrade</td>
    <td>$ketB</td>
    </tr>
    <tr>
    <td>3</td>
    <td>Mulok</td>
    <td>$nilai_c</td>
    <td>$CGrade</td>
    <td>$KetC</td>
    </tr>
    </tbody>
    </table>
    </div>

    <div><h4> Nilai Rata - Rata : $rata </h4></div>
    <h4>$ketAll</h4>
    <div></div>
    ";
}
?>
</div>

 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>