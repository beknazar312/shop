<?php
    $file = './files/products.txt';
    $productInfo = $_POST['name'] . '|' . $_POST['price'] . PHP_EOL;
    
    $fh = fopen($file, 'a');
    fwrite($fh, $productInfo);
    fclose($fh);
?>add
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="card">
            <form action="/shop/admin.php" method="POST">
              <div class="form-group">
                <label for="formGroupExampleInput">Product name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Product price</label>
                <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="Price">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Сохранить</button>
              </div>
            </form>
        </div>   
    </div>
</body>

</html>