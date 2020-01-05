<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>restoku</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand">
        <img src="<?php echo base_url(); ?>/img/Restoku.png" width="150">
      </a>
      <form class="form-inline my-2 my-lg-0">
        <img  id="notif" src="<?php echo base_url(); ?>/img/notif.png" width="20"> 
        </form>
    </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
       
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="badge badge-danger ml-2">4</span>
              <i class="fas fa-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
              <a class="dropdown-item waves-effect waves-light" href="#">Action <span class="badge badge-danger ml-2">4</span></a>
              <a class="dropdown-item waves-effect waves-light" href="#">Another action <span class="badge badge-danger ml-2">1</span></a>
              <a class="dropdown-item waves-effect waves-light" href="#">Something else here <span class="badge badge-danger ml-2">4</span></a>
            </div>
          </li>
        </ul>
      </div>

    <!-- <section> -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container p-3">
        <center>
          <!-- <canvas id="myCanvas"> -->
            <img id="MyCanvas"  src="<?php echo base_url(); ?>/img/download.png" width="100">
          <!-- </canvas> -->
        </center>
      </div>
    </div>
    <input type="hidden" id="id_a" value="<?=$hasi['id']?>">
    <div class="container p-3">
      <table  class="table" >
      <thead id="hasil">
      </thead>
      <tbody id="hasil2">
      
      </tbody>
      </table>
    </div>
    <hr>
    <div class="container p-3 active">
      <center><p>Ads</p></center>
    </div>
      
    <div class="row p-3">
      <div class="col">
        <center>
          <a class="btn btn-success" href="<?php echo base_url('index.php/Transaksi_penjualan/rate'); ?>">Pesanan Komplit</a>
        </center>
      </div>
    </div>
    <!-- </section> -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="<?=base_url('transaksi.js')?>"></script>
    <!-- <script type="text/javascript">
      var canvas = dokument.getElementById('MyCanvas');
      var context = canvas.getContext('2d');

      context.rect(188,40,200,100);
      context.fillstyle = 'aqua';
      context.shadowColor = '#999';
      context.shadowBlur = '5';
      context.shadowOffSetX = '5';
      context.shadowOffSetY = '5';
      context.fill();
    </script> -->
</body>
</html>