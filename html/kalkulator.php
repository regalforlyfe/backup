<!DOCTYPE html>
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
  <h2>Kalkulator</h2>
  <form class="form-inline" action="hitung.php" method="GET">
    <div class="form-group" name="n1">
      <label for="text" ></label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <select class="form-control" >
        <option value="tambah"> + </option>
        <option value="kurang"> - </option>
        <option value="kali"> x </option>
        <option value="bagi"> : </option>
        <option value="modulu"> % </option>
      </select> 
</div>
    <div class="form-group" name="n2">
      <label for="text" ></label>
      <input type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Hitung</button>
  </form>
</div>

</body>

</html>