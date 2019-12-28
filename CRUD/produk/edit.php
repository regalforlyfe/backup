<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit</h1>
      <form action="update.php?id_produk=<?= $_GET['id_produk']; ?>" method="POST">
        <?php
            include 'koneksi.php';
            $id_produk = $_GET['id_produk'];
            $query = "SELECT id_produk,id_kategori, nama , harga FROM produk WHERE id_produk = '$id_produk'";
            if ($result = mysqli_query($mysqli,$query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $mysqli->query("SELECT nama FROM kategori WHERE id_kategori = $row[id_kategori]");
        ?>
        <div class="form-group">
          <label> Nama Kategori</label>
          <input type="text" name="nama" class="form-control" placeholder="Enter kategori" value="<?=$id->fetch_assoc()['nama']?>">
          <label>Nama Produk</label>
          <input type="text" name="produk" class="form-control" placeholder="Enter Produk" value="<?=$row['nama']?>">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Enter Harga" value="<?=$row['harga']?>">
          <input type="hidden" name="id_kategori" value="<?=$row['id_kategori']?>">

        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        <?php
              }
              //free result set (optional)
              $result->free();
          }
          $mysqli->close();
        ?>
      </form>
    </div>
  </body>
</html>
