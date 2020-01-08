<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url("sipp.css")?>">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-white">
      <a class="navbar-brand">
        <img src="<?php echo base_url(); ?>/img/delete.png" width="20">
      </a>
      <form class="form-inline my-2 my-lg-0">
        <a href=""><button type="button" class="btn btn-primary">Order</button></a> 
        </form>
    </nav>
		<!-- <div class="box bottom"></div> -->
      <hr>
    <center>
      <div class="row p-3">
        <div class="col">
          <!-- <h1>Hello!!</h1><br> -->
          <img src="<?php echo base_url(); ?>/img/download.png" width="200" class="rounded-circle img-thumbnail">
        </div>      
      </div>
      <div class="row">
        <div class="col">
          <br>
          <p ><strong> Bagaimana Makanan di Restoku?</strong><br>Lagi menikmati makananmu?<br>Jangan lupa kasih feedback, karena itu sangatlah penting bagi kami<br>bisa menjadi lebih baik</p>
        </div>
      </div>
      <section class='rating-widget'>
        <div class="rating-heart text-center">         
          <ul id='hearts'> 
            <li class='heart ' data-value='1'>
            <i class='fa fa-heart fa-fw'></i>
            </li>
            <li class='heart ' data-value='2'>
            <i class='fa fa-heart fa-fw'></i>
            </li>                                         
            <li class='heart ' data-value='3'>
            <i class='fa fa-heart fa-fw'></i>
            </li>
            <li class='heart ' data-value='4'>
            <i class='fa fa-heart fa-fw'></i>
            </li>
            <li class='heart ' data-value='5'>
            <i class='fa fa-heart fa-fw'></i>
            </li>
          </ul>
        </div>
        </section>
      <br>
      <form action="<?php echo base_url('index.php/Restoku/bill'); ?>">
        <div class="row p-3 justify-content-center">
          <div class="container col-8">
            <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
            <textarea class="form-control" rows="3" placeholder="Ketik masukan anda.."></textarea>
          </div>
         </div>
         <div class="row">
           <div class="col">
             <button type="submit" class="btn btn-success">Submit</button>
           </div>
         </div>
       </form>

    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url("script.js") ?>"></script>
  </body>
    
</html>
