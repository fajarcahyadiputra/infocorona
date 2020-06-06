<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/user/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
  <!-- CSS Sendiri -->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/user/css/style.css">

  
  <!-- ICON -->
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/user/img/logo.png">
    <title>Informasi Corona - Selamat Datang</title>
   

  </head>

  <body>

<!-- header -->
<header>
  <!--Menu-->
  
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top nav-s">
      <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://coronainfo.langkatkab.go.id/assets/media/logos/langkat.png" alt="Responsive image" height="42px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>" style="margin-right: 22px; text-transform: uppercase;">Beranda<span class="sr-only">(current)</span></a>
          </li>
       
        </ul>
        
      </div>
    </nav>

    </div>
  </div>
      
</header>

<!-- Awal Jumbotron -->
<section class="jumbotron-bg">
  <div class="jumbotron warna-bg text-white">
    <div class="container">
      <h1 class="display-3"><b>Berita / Artikel Terkini,</b></h1>
      <h3>Info Corona merupakan situs yang menyediakan berbagai Informasi Corona terupdate</h3>
      <hr>
      <h5>Kita Berjuang Melawan Corona !</h5>
    </div>  
  </div>
</section>
<!-- Akhir Jumbotron -->

<!--detail berita-->
<div class="container">
  <div class="row">

    <div class="col-md-8 mb-4">
      <h2 class="card-title" style="padding:10px;"><?=$berita->judul?></h2>
      <p class="card-text" style="padding-left:10px; font-size: 20px;"><small class="text-muted"><?=$berita->dibuat_tanggal?></small></p>
      <div class="card mb-3">
        
        <img src="<?=base_content($berita->gambar)?>" class="card-img-top" alt="gambar" class="card-img-top" alt="gambar" height="500px" width="700px">
      <div class="card-body">
        <p class="card-text" style="text-align: justify;">
          <?=$berita->content?>
        </p>
      </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
       
      <div class="card">
      <div class="card-body">  
        <h5 class="card-title mb-4">Berita/Artikel Terkini Lainnya</h5>  

    <div class="list-group">
    <?php foreach ($allBerita as $news) { ?>
      <a href="<?=base_url('welcome/detail_berita/'.$news->slug)?>" class="list-group-item list-group-item-action active">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?=$news->judul?></h5>
        
    </div>
      <p class="mb-1"><?= substr($news->content, 0 , 150) ?></p>

    </a>
    <?php } ?>
    </div>

      </div>
      </div>
    </div>
    
  </div>
  
</div>
<!--akhir detail berita -->



<!-- Footer -->
<footer>

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white py-3" style="background: linear-gradient(to right, rgba(29,95,156,1) 0%, rgba(9,77,150,1) 100%); margin-top: 50px;">© 2020 
    <a href="https://mdbootstrap.com/" class="text-white" target="_blank">INFO CORONA</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




    <script src="<?=base_url()?>assets/user/js/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/user/js/popper.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  </body>
</html>