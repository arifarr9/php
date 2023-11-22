<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

   <title>TOKO Sembako saya</title>
  </head>
        <div class="container">
        <h3>TOKO arieff </h3>
            <form action="" method="POST" name="penjualan">
  <div class="form-group">
    <label for="nm_brg">Nama Barang</label>
    <input type="text" name ="nm_brg"\ class="form-control" id="nm_brg" placeholder="">
  </div>
  <div class="form-group">
    <label for="h_brg">Harga Barang</label>
    <input type="number" name ="h_brg" class="form-control" id="h_brg" placeholder="">
  </div>
  <div class="form-group">
    <label for="jml_brg">Jumlah Barang</label>
    <input type="number" name ="jml_brg" class="form-control" id="jml_brg" placeholder="">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
       </form>
        </div>

        <?php
  if(isset($_POST['submit'])){
    $nama = $_POST['nm_brg'];
    $harga = $_POST['h_brg'];
    $jumlah = $_POST['jml_brg'];
    $total = $harga*$jumlah;
    $diskon = 0.2*$total;
    $totalSetelahDiskon = $total -$diskon;

    echo "<div class='container'>";
    echo "<h1>Jumlah Yang Harus Dibayarkan:</h1>";
    echo "<h4>Nama Barang: $nama</h4";
    echo "<h4>Harga Barang: $harga</h4>";
    echo "<h4>Jumlah Barang:  $jumlah</h4>";
    echo "<h4>Diskon 20%: Rp.".number_format($diskon)."</h4>";
    echo "<h4>Total Pembayaran Setelah Diskon:Rp.".number_format($totalSetelahDiskon)."</h4>";
    echo "</div>";
  }
?>
  <body>

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