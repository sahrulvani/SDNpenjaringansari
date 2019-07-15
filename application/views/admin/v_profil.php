<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('css/full-width-pics.css')?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SDN Penjaringansari II</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/index')?>">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/profil')?>">Profile</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/berita')?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/kontak')?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-5 bg-image-full" style="height: 1100px;">
    <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/KBM.jpg" width="2000px" alt="">
  </header>

  <section class="py-1">
    <div class="container">
      <p><h1 style="text-align:center">Fasilitas SDN Penjaringan II :</h1></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Mushola.jpg">
      <p><h4 style="text-align:center">Musholla</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/perpus.jpg">
      <p><h4 style="text-align:center">Perpustakaan</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Ruang Komputer.jpg">
      <p><h4 style="text-align:center">Ruang Komputer</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Ruang Seni.jpg">
      <p><h4 style="text-align:center">Ruang Seni</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Ruang TU.jpg">
      <p><h4 style="text-align:center">Ruang Tata Usaha</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Ruang Kelas.jpg">
      <p><h4 style="text-align:center">Ruang Kelas</h4></p>
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/Ruang UKS.jpg">
      <p><h4 style="text-align:center">Unit Kesehatan Sekolah</h4></p>
    </div>
  </section>

  <section class="py-5 bg-image-full" style="">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>

  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 SDN Penjaringansari II</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
