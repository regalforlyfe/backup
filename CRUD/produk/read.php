<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Produk</title>
  </head>
  <body>
    <div class="container">
      <h1>Produk <a href="tambah.php" class="btn btn-primary">tambah</a></h1>
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col">ID Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'koneksi.php';
            $query = "SELECT p.id_produk,p.id_kategori,p.nama,p.harga ,k.nama as namakategori FROM produk as p
            INNER JOIN kategori as k
            ON k.id_kategori = p.id_kategori";
            // if ($result = mysqli_query($mysqli2, $query)) {
            if ($result = mysqli_query($mysqli,$query)) {
                // while ($row = mysqli_fetch_assoc($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                  //loop here
          ?>
                  <tr>
                    <th scope="row"><?php echo $row['id_produk']?></th>
                    <td><?=$row['namakategori']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga']?></td>
                    <td width="1"><a href="edit.php?id_produk=<?=$row['id_produk']?>" class="btn btn-success">Edit</a></td>
                    <td width="1"><a href="delete.php?id_produk=<?=$row['id_produk']?>" class="btn btn-danger">Delete</a></td>
                  </tr>
          <?php
                }
                //free result set (optional)
                // mysqli_free_result($result);
                $result->free();
            }
            // mysqli_close($mysqli2);
            $mysqli->close();
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
