<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/main.css">
    <title>Transaksi Display</title>
</head>
<body>
<div style="background-color:#FBFBFB">
    <!-- <div class="navbar"> -->
    <nav class="navbar navbar-dark bg-primary shadow-sm p-2 my-1 rounded mx-1">
      <a class="navbar-brand ml-1">
        <img src="<?php echo base_url(); ?>/img/LogoPutih.png" width="120" height="30">
      </a>
        <form class="form-inline my-2 my-lg-0 mr-1">
          <img  id="notif" src="<?php echo base_url(); ?>/img/motificationa.png" width="25"> 
        </form>
    </nav>
    <!-- </div> -->
 
  <div class="main">

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
      <!-- gambar resto -->
     <div class="mt-2">
            <center>
                <img class="shadow-sm p-2 bg-white rounded " src="<?php echo base_url(); ?>/img/download.png" width="80">
            </center>
     </div>

      <div class="shadow-sm p-3 mb-2 bg-white rounded mt-2 mx-1">
          <input type="hidden" id="id_a" value="<?=$hasi['id']?>">
            <div class="container p-3">
              <table  class="table" >
                <thead id="hasil"></thead>
                <tbody id="hasil2"></tbody>
              </table>
            </div>
      </div>

      <div class="p-3" style="background-color:#E0FFFF">
        <center><p> <br><br>Ads<br><br></p></center>
      </div>
      <!-- akhir main -->
    </div>
 
    <div class="bawah">
    <div class="row my-3">
      <div class="col">
        <center><button type="button" class="btn btn-success">Pesanan Komplit</button></center>
      </div>
    </div>
    
    </div>
    <!-- akhir bawah  -->
  </div>

 
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
      <script src="<?=base_url()?>/js/main.js">
        </script>
</body>
</html>
