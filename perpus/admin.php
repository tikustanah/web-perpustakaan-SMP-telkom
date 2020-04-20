<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dumet School</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="http://localhost/perpus/index2.html"><i class="fa fa-home"></i> Home</a></li>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          <p>
            <div class="card">
  <div class="card-header">
    <h1>insert</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Insert Buku</h5>
    <p class="card-text">Memasukan Buku-Buku Terbaru.</p>
    <a href="insert.php" class="btn btn-primary">Go Insert</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h1>read</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Menampilkan Buku</h5>
    <p class="card-text">Menampilkan semua Buku.</p>
    <a href="perpus/read.php" class="btn btn-primary">Go Read</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h1>delete</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Delete Buku</h5>
    <p class="card-text">Menghapus Buku.</p>
    <a href="perpus/delete.php" class="btn btn-primary">Go Delete</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h1>update</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Update Stock</h5>
    <p class="card-text">Mengupdate Buku.</p>
    <a href="perpus/update.php" class="btn btn-primary">Go Update</a>
  </div>
</div>
          </p>
        </div>
      </section>
    </div>
    
    </body>
</html>