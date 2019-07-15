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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/profil')?>">Profile</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/berita')?>">News</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/kontak')?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </section>

  <section class="py-1">
    <div class="container">
      <p><h4 style="text-align:left">ALAMAT SEKOLAH :</h1></p>
      <p style="height: 100px;" class="lead">JL PANDUGO BARU V WPS Kec. Rungkut Desa/kel. Penjaringansari Surabaya 60297</p>
      <p><h4 style="text-align:left">EMAIL :</h1></p>
      <p style="height: 100px;" class="lead">penjaringansari2@yahoo.co.id</p>
      <p><h4 style="text-align:left">PHONE :</h1></p>
      <p style="height: 100px;" class="lead">8712119 , Fax</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
