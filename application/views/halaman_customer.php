<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <ul class="nav-brand">
      <li class="nav-brand">
        <a scr="<?php echo base_url(); ?>/img/images.png" href=""></a>
      </li>
    </ul>
    <ul class="nav justify-content-end">
      <li class="nav-item p-3">
        <button type="button" class="btn btn-primary">Order</button>
        
      </li>
      <!-- <li class="nav-brand">
        <a class="button" href="<?php echo base_url(); ?>/img/images.png" width="20"></a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
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
          <p >Bagaimana Makanan di Restoku?<br>Lagi menikmati makananmu?<br>Jangan lupa kasih feedback, karena itu sangatlah penting bagi kami<br>bisa menjadi lebih baik</p>
        </div>
      </div>
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
  </body>
</html>