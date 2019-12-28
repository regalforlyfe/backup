<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="backend.php" method="POST">
    <div class="form-group">
      <label for="text">Nama:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="nama">
    </div>
    <div class="form-group">
      <label for="text">Kontak:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter Contact" name="kontak">

<div class="form-group">
      <label for="sel1">Jenis Kelamin :</label>
      <select class="form-control"  name="jk">
        <option value="Laki Laki">Laki Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select> 
</div>

Minat : <br>
<div class="checkbox">
  <label><input type= "checkbox" value="Programming" name="pr">Programming</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Networking" name="nt">Networking</label>
</div>
<div class="checkbox disabled">
  <label><input type="checkbox" value="Mulmedia" name="ml">Mulmed</label>
</div>

Kewarganegaraan: <br>

    <input type="radio" name="Kewarganegaraan" value="WNI" checked> WNI<br>
    <input type="radio" name="Kewarganegaraan" value="WNA"> WNA<br> 

<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>
</body>
</html>